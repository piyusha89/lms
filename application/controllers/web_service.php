<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Piyush Agarwal
 * Description: Make a wish webservice
 */
 class Web_service extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    public function index(){
//        http://localhost:8000/party_pundits/webservice/?model=login_model&function=validate&json={%22username%22:%22piyush1%22,%22password%22:%22123%22}
            $model_name = $_GET['model'];
            $function_name = $_GET['function'];
            $json = $_GET['json'];
            $this->load->model($model_name);
            $json = json_decode($json,true);
            //echo print_r($json,true);die();
            $data = $this->$model_name->$function_name($json);
            print_r($data);die();
            header('Content-type: application/json');
            //echo print_r($data,true);
            echo json_encode(array("result" => $data));
    }


 }