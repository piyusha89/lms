<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Piyush Agarwal
 * Project:Learning Management 
 * Description: Admin controller class
 * This is only viewable to those members that are logged in
 */
 class AdminHome extends CI_Controller
 {
    function __construct()
    {
        parent::__construct();
        /*$this->load->helper('form');
        $this->load->helper('url');*/
        $this->load->model('adminModel');
        $this->checkIsValidated();
    }

    private function checkIsValidated()
    {

        if(! $this->session->userdata('validated'))
        {
           redirect('admin_login');
        }
    }
    
    public function index()
    {
        // If the user is validated, then this function will run
        
        $this->load->view('admin/templates/header');
        $this->load->view('admin/user/home');
        $this->load->view('admin/templates/footer');
    }
    
    public function doLogout()
    {
        $this->session->sess_destroy();
        redirect('admin_login');
    }

    public function changePassword()
    {
        //if POST is empty load the change password page
        if(empty($_POST))
        {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/user/changePassword');
            $this->load->view('admin/templates/footer');
        }
        else
        {
            if($this->adminModel->changePassword($_POST))
            {
                $this->session->set_flashdata('change_password_msg',"<div style='border:1px solid #69D200; background-color:#E9FFDF; padding:2px;'>Your Password has been changed!</div>");
                redirect('admin_change_password');
            }
            else{
                $this->session->set_flashdata('change_password_msg',"<div style='border:1px solid #E6532E; background-color:#FEDEE3; padding:2px;'> You are entering a wrong Password.</div>");
                redirect('admin_change_password');
            }
        }
    }

    public function createQuestion()
    {   
        /*echo print_r($_POST,true);
        die('controller');*/
        
        //if POST is empty load the change password page
        if(empty($_POST))
        {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/home/createQuestion');
            $this->load->view('admin/templates/footer');
        }
        else
        {
            if($this->adminModel->createQuestion($_POST))
            {
                $this->session->set_flashdata('creaeQueMsg',"<div style='border:1px solid #69D200; background-color:#E9FFDF; padding:2px;'>Question Added. Enter new question</div>");
                redirect('create_question');
            }
            else{
                $this->session->set_flashdata('creaeQueMsg',"<div style='border:1px solid #E6532E; background-color:#FEDEE3; padding:2px;'> Question not add.</div>");
                redirect('create_question');
            }
        }
    }

    public function addExam()
    {   
        
        
        //if POST is empty load the change password page
        if(empty($_POST))
        {
            $data['courses'] = $this->adminModel->getCourse();
            /*echo '<pre>' . print_r($data,true);
            die('controller');*/
            $this->load->view('admin/templates/header');
            $this->load->view('admin/home/addExam',$data);
            $this->load->view('admin/templates/footer');
        }
        else
        {
            if($this->adminModel->addExam($_POST))
            {
                $this->session->set_flashdata('addExamMsg',"<div style='border:1px solid #69D200; background-color:#E9FFDF; padding:2px;'>Exam Added. Add new Exam</div>");
                redirect('add_exam');
            }
            else{
                $this->session->set_flashdata('addExamMsg',"<div style='border:1px solid #E6532E; background-color:#FEDEE3; padding:2px;'> Exam not added.</div>");
                redirect('add_exam');
            }
        }
    }
    
 }
 ?>