<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Roomamenitymgmt extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Rooms';
    	$this->load->model('api/'.strtolower($this->module).'/Roomamenity_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage Room Amenities','sub_title'=>'Add Room amenities','jsfile'=>strtolower($this->module).'_amenity');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_amenity_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
        
		$locId=base64_decode($this->uri->segment(3));
        $pdata=$this->Hotelcat_model->getData($locId,'');
    	$data=array("main_title"=>'Manage Hotel Categories','sub_title'=>'Edit Hotel Categories','results'=>$pdata, 'jsfile'=>strtolower($this->module).'_category');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_cat_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$data['results']=$this->Roomamenity_model->getdata('',0);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_amenity_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}