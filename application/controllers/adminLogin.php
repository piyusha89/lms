<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Piyush Agarwal
 * Project:Learning Management 
 * Description: Login controller class
 */
class AdminLogin extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('adminLoginModel');
        //$this->load->helper('url');
    }
    
    public function index($msg = NULL)
    {
        // Load our view to be displayed
        // to the user
        $this->load->view('admin/templates/login_header');
        $this->load->view('admin/login/login_view');
        $this->load->view('admin/templates/footer');
    }
    
    public function process()
    {
        // Validate the user can login
        $result = $this->adminLoginModel->validate($_POST);
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            //$msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->session->set_flashdata('login_msg',"<font color = 'red'> &nbsp;Invalid Username and/or Password.</font><br/>");
            redirect('admin_login');
        }else{
            // If user did validate, 
            // Send them to members area
            redirect('admin');
        }        
    }

}
?>