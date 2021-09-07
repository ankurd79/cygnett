<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Restaurantmgmt extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	$this->load->model('api/restaurants/Restaurant_model');
    	$this->load->model('api/cuisines/Cuisine_model');
    	$this->load->model('api/cygnetture/Cygnetture_model');
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage Restaurants','sub_title'=>'Add Restaurants','jsfile'=>'restaurants','cuisinetype'=>$this->Cuisine_model->getdata(),'cygenturedishes'=>$this->Cygnetture_model->getdata('',1));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/restaurants/restaurants_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
        
		$restaurantId=base64_decode($this->uri->segment(3));
        $pdata=$this->Restaurant_model->getrestaurantData($restaurantId,'');
        $banner=$this->Restaurant_model->getrestaurantbanners($restaurantId,'');
    	$data=array("main_title"=>'Manage Restaurants','sub_title'=>'Edit Restaurants','results'=>$pdata, 'banners'=>$banner,'jsfile'=>'restaurants','cuisinetype'=>$this->Cuisine_model->getdata(),'cygenturedishes'=>$this->Cygnetture_model->getdata('',1));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/restaurants/restaurants_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Restaurant_model->getrestaurantData('',0);
		$this->load->view('admin/restaurants/restaurants_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}