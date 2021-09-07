<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hotelnavmgmt extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Navigations';
    	$this->load->model('api/'.strtolower($this->module).'/Hotelnav_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){
    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage Hotel '.$this->module.'','sub_title'=>'Add '.$this->module.'','jsfile'=>strtolower($this->module).'_hotel');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_hotel_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
        
		$locId=base64_decode($this->uri->segment(3));
        $pdata=$this->Hotelnav_model->getData($locId,'');
    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Edit '.$this->module.'','results'=>$pdata, 'jsfile'=>strtolower($this->module).'_hotel');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_hotel_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$data['results']=$this->Hotelnav_model->getdata('',0);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_hotel_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}