<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Brandcategory extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	//$this->load->helper('form');
    	//$this->load->helper('url');
    	//$this->load->helper('site_helper');
    	$this->load->model('api/brands/Brandcategory_model');
    }
    
    public function index(){
    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
    	$data=array("main_title"=>'Manage Brand Category','sub_title'=>'Add Category','jsfile'=>'brandcat');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/brands/brand_category_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$catId=base64_decode($this->uri->segment(3));
        $pdata=$this->Brandcategory_model->getData($catId,'');
        
    	$data=array("main_title"=>'Manage Brand Category','sub_title'=>'Edit Category','jsfile'=>'brandcat','results'=>$pdata);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/brands/brand_category_edit',$data);
		$this->load->view('admin/footer');
	}
	
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$data['results']=$this->Brandcategory_model->getdata('',0);
		$this->load->view('admin/brands/brand_category_data_table',$data);
	}
	
    
    
    
    
    
    
    
        

}