<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mediamgmt extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	$this->module='Media';
    	$this->load->model('api/'.strtolower($this->module).'/Media_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage '.$this->module.' Coverage','sub_title'=>'Add '.$this->module.' News','jsfile'=>strtolower($this->module));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){
        
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$locId=base64_decode($this->uri->segment(3));
        $pdata=$this->Media_model->getData($locId,'');
    	$data=array("main_title"=>'Manage '.$this->module.' Coverage','sub_title'=>'Edit '.$this->module.' News','results'=>$pdata, 'jsfile'=>strtolower($this->module));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$data['results']=$this->Media_model->getdata('',0);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}