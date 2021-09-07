<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dishmgmt extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	$this->module='Cygnetture';
    	$this->load->model('api/'.strtolower($this->module).'/Cygnetture_model');
    	$this->load->model('api/cuisines/Cuisine_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage '.$this->module.' Dishes','sub_title'=>'Add '.$this->module.' Dish','jsfile'=>strtolower($this->module),'cuisinelist'=>$this->Cuisine_model->getdata('',1));
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
        $pdata=$this->Cygnetture_model->getData($locId,'');
    	$data=array("main_title"=>'Manage '.$this->module.' Dihses','sub_title'=>'Edit '.$this->module.' Dish','results'=>$pdata, 'jsfile'=>strtolower($this->module),'cuisinelist'=>$this->Cuisine_model->getdata('',1));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$data['results']=$this->Cygnetture_model->getdata('',0);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}