<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Offermgmt extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	$this->module='Offers';
    	$this->load->model('api/'.strtolower($this->module).'/Offer_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Add '.$this->module.'','jsfile'=>$this->module);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
        
        $statelist=$this->Common_model->getstate();
		$locId=base64_decode($this->uri->segment(3));
        $pdata=$this->Offer_model->getData($locId,'');
        $banner=$this->Offer_model->getbanners($locId,'');
    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Edit '.$this->module.'','results'=>$pdata, 'banners'=>$banner,'jsfile'=>''.$this->module.'');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		
		$data['results']=$this->Offer_model->getdata('',0);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}