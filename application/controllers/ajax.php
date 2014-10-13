<?php

class Ajax extends CI_Controller {

	function __construct()
	{
        parent::__construct();
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


    public function getSubject($courseId)
    {
        $data = $this->adminModel->getSubject($courseId);
        /*echo print_r($data,true);
        die('model');*/
        //$data = $
        foreach ($data as $row) 
        {
            echo '<option value="'.$row['id'].'">' . $row['name'] . '</option>';
        }        
    }


}