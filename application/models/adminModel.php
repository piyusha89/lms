<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Piyush Agarwal
 * Project:Party Pundits
 * Description: User model class
 */
class AdminModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminLoginModel');
    }

    public function changePassword($password_details)
    {
        $user['username'] = $this->session->userdata('username');
        $user['password'] = $password_details['old_password'];        

        if($this->AdminLoginModel->validate($user))
        {
            //change the user password
            $data = array(
               'password' => $password_details['new_password']
            );

            $this->db->where('id', $this->session->userdata('login_id'));
            $this->db->update('student', $data);
            return true;

        }
        else
        {
            return false;
        }

    }

    public function createQuestion($question)
    {
        /*echo print_r($_POST,true);
        die('model');*/
        $data = $question;
        return $this->db->insert('question', $data);
    }
    
    public function addExam($exam)
    {
        /*echo print_r($exam,true);
        die('model');*/
        $data = $exam;
        return $this->db->insert('exam', $data);

    }
    
    public function getSubject($courseId)
    {
        /*echo print_r($courseId,true);
        die('model');*/

        $this->db->where('courseId', $courseId);
        $query = $this->db->get('subject');
        return $query->result_array();
    }

    public function getCourse()
    {
        /*echo print_r($courseId,true);
        die('model');*/

        //$this->db->where('courseId', $courseId);
        $query = $this->db->get('course');
        return $query->result_array();
    }
}
?>