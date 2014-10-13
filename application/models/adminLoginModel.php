<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Piyush Agarwal
 * Project:Party Pundits
 * Description: Login model class
 */
class adminLoginModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate($user){
        // grab user input
        $username = $this->security->xss_clean($user['username']);
        $password = $this->security->xss_clean($user['password']);
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('student');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'username' => $row->username,
                    //'roll' => $row->roll,
                    'login_id' => $row->id,
                    /*'fname' => $row->fname,
                    'lname' => $row->lname,*/
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }

    public function signup($user)
    {
        $data = array(
           'username' => $user['username'] ,
           'password' => $user['password'] 
           );

        return $this->db->insert('student', $data);
        //die(print_r($check,true)); 
    }

    public function forgot_password($user_email)
    {

        // Prep the query
        $this->db->where('email', $user_email['email']);
        // Run the query
        $query = $this->db->get('student');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $r = $query->result();
            $user=$r[0];
            //die(print_r($user,true));
            $this->resetpassword($user);
            return true;
        }
        else
        {
            return false;
        }
    }

     private function resetpassword($user)
    {
        //email configratiob set into system\libraries\email file
        date_default_timezone_set('GMT');
        $this->load->helper('string');
        $password= random_string('alnum', 16);
        $this->db->where('id', $user->id);
        $this->db->update('student',array('password' => $password));
        
        $this->load->library('email');
        $this->email->from('piyush.agarwal89@gmail.com', 'Piyush Agarwal');
        $this->email->to($user->email);   
        $this->email->subject('Password reset');
        $this->email->message('You have requested the new password, Here is you new password:'. $password);  
        //$this->email->send();

        if (!$this->email->send())
            show_error($this->email->print_debugger());
        else{
            echo "<pre>";
            echo 'Your e-mail has been sent!'; 
        }
    }

}
?>