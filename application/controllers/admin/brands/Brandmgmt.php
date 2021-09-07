<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Brandmgmt extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	//$this->load->helper('form');
    	//$this->load->helper('url');
    	//$this->load->helper('site_helper');
    	$this->load->model('api/brands/Brand_model');
    	$this->load->model('api/brands/Brandcategory_model');
    }
    
    public function index(){
    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
    	$data=array("main_title"=>'Manage Brands','sub_title'=>'Add Brands','brandlist'=>$this->Brand_model->getBrandData('',1),'catlist'=>$this->Brandcategory_model->getData('',1));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/brands/brands_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$brandId=base64_decode($this->uri->segment(3));
        $pdata=$this->Brand_model->getBrandData($brandId,'');
        $banner=$this->Brand_model->getbrandbanners($brandId,'');
        $keypointers=$this->Brand_model->getbrandkeypointers($brandId,'');
        $carouselimages=$this->Brand_model->getcarouselimages($brandId,'');

    	$data=array("main_title"=>'Manage Brands','sub_title'=>'Edit Brands','results'=>$pdata, 'banners'=>$banner, 'keypointers'=>$keypointers,'brandlist'=>$this->Brand_model->getBrandData('',1),'catlist'=>$this->Brandcategory_model->getData('',1),'carouselimages'=>$carouselimages);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/brands/brands_edit',$data);
		$this->load->view('admin/footer');
	}
	
	
	
	public function homepage(){
    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
    	$data=array("main_title"=>'Set Brands on Homepage','sub_title'=>'Add Brands','brandlist'=>$this->Brand_model->getBrandData('',1),'catlist'=>$this->Brandcategory_model->getData('',1));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/brands/brands_hp',$data);
		$this->load->view('admin/footer');
	}
    
    
    
    
    
    
    
        

}