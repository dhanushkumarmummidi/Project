<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class Category extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('category_model');
    }
    public function index_get($id=0) {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        if($id==0){
            $categories= $this->category_model->get_categories();
        }
        else{
            $categories = $this->category_model->get_category($id);
        }
        //check if the user data exists
        if(!empty($categories)){
            //set the response and exit
         
             $this->response($categories);
        }else{
            //set the response and exit
            $res=array(
                'status' => FALSE,
                'message' => 'No user were found.'
            );
            $this->response($res);
        }
    }
  
}