<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Piyush Agarwal
 * Project:Party Pundits
 * Description: Student model class
 */
class StudentModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function updateDetails($data)
    {    
        $data = array(
            'password' => $password_details['new_password']
        );

        $this->db->where('id', $this->session->userdata('login_id'));
        $this->db->update('student', $data);
        return true;
    }

    public studentModel()
    {
        $this->db->where('id', $_SESSION['']);
        $query = $this->db->get('student');
        return $query->result_array();
    }
}
?>