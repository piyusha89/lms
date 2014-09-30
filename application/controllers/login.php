<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Piyush Agarwal
 * Project:Party Pundits
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        //$this->load->helper('url');
    }
    
    public function index($msg = NULL)
    {
        // Load our view to be displayed
        // to the user
        $this->load->view('templates/login_header');
        $this->load->view('login/login_view');
        $this->load->view('templates/footer');
    }
    
    public function process()
    {
        // Validate the user can login
        $result = $this->login_model->validate($_POST);
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            //$msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->session->set_flashdata('login_msg',"<font color = 'red'> &nbsp;Invalid Username and/or Password.</font><br/>");
            redirect('login');
        }else{
            // If user did validate, 
            // Send them to members area
            redirect('home');
        }        
    }

    public function signup()
    {
         //if POST is empty load the change password page
        if(empty($_POST))
        {
            $this->load->view('templates/login_header');
            $this->load->view('login/signup');
            $this->load->view('templates/footer');
        }
        else
        {
            //die(print_r($_POST,true));
            if($this->login_model->signup($_POST))
            {
                $this->session->set_flashdata('signup_msg',"<div style='border:1px solid #69D200; background-color:#E9FFDF; padding:2px;'>Your Account is Created Sucessfully!</div>");
                redirect('signup');
            }
            else{
                $this->session->set_flashdata('signup_msg',"<div style='border:1px solid #E6532E; background-color:#FEDEE3; padding:2px;'> Your Account is not Created.</div>");
                redirect('signup');
            }
        }
    }

    public function forgot_password()
    {
         //if POST is empty load the change password page
        if(empty($_POST))
        {
            $this->load->view('templates/login_header');
            $this->load->view('login/forgot_password');
            $this->load->view('templates/footer');
        }
        else
        {
            //die(print_r($_POST,true));
            if($this->login_model->forgot_password($_POST))
            {
                $info= "Password has been reset and has been sent to email id: ". $_POST['email'];
                $this->session->set_flashdata('forgot_msg',"<div style='border:1px solid #69D200; background-color:#E9FFDF; padding:2px;'>".$info."</div>");
                redirect('forgot_password');
            }
            else
            {
                $error= "The email id you entered not found on our database.";
                $this->session->set_flashdata('forgot_msg',"<div style='border:1px solid #E6532E; background-color:#FEDEE3; padding:2px;'>" . $error . "</div>");
                redirect('forgot_password');
            }
        }   
    }

}
?>