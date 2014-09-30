<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Piyush Agarwal
 * Project:Party Pundits
 * Description: User model class
 */
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function change_password($password_details)
    {
        $user['username'] = $this->session->userdata('username');
        $user['password'] = $password_details['old_password'];        

        if($this->login_model->validate($user))
        {
            //change the user password
            $data = array(
               'password' => $password_details['new_password']
            );

            $this->db->where('id', $this->session->userdata('login_id'));
            $this->db->update('login', $data);
            return true;

        }
        else
        {
            return false;
        }

    }
    

}
?>