<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Piyush Agarwal
 * Project:Learning Management 
 * Description: Student controller class
 * This is only viewable to those members that are logged in
 */
 class Student extends CI_Controller
 {
    function __construct()
    {
        parent::__construct();
        /*$this->load->helper('form');
        $this->load->helper('url');*/
        //$this->load->model('studentModel');
        $this->check_isvalidated();
    }

    private function check_isvalidated()
    {
        if(! $this->session->userdata('validated'))
        {
           redirect('login');
        }
    }
    
    public function updateDetails()
    {
        //if POST is empty load the change password page
        if(empty($_POST))
        {
            $_SESSION = $this->session->all_userdata();
            echo '<pre>' . print_r($_SESSION,true);
            die('controller');
            $data['student'] = $this->adminModel->getDetails();
            echo '<pre>' . print_r($data,true);
            die('controller');
            $this->load->view('templates/header');
            $this->load->view('student/updateDetails');
            $this->load->view('templates/footer');
        }
        else
        {
            if($this->user_model->change_password($_POST))
            {
                $this->session->set_flashdata('change_password_msg',"<div style='border:1px solid #69D200; background-color:#E9FFDF; padding:2px;'>Your Password has been changed!</div>");
                redirect('change_password');
            }
            else{
                $this->session->set_flashdata('change_password_msg',"<div style='border:1px solid #E6532E; background-color:#FEDEE3; padding:2px;'> You are entering a wrong Password.</div>");
                redirect('change_password');
            }
        }
    }
    
 }