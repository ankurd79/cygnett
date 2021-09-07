<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Meetingevents extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Meetingevents';
    	$this->load->model('api/'.strtolower($this->module).'/Meetingevents_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage Meeting & Event Categories','sub_title'=>'Add Meeting & Event Categories','jsfile'=>strtolower($this->module).'_category');
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
        $pdata=$this->Meetingevents_model->getData($locId,'');
    	$data=array("main_title"=>'Manage Meeting & Event Categories','sub_title'=>'Edit Meeting & Event Categories','results'=>$pdata, 'jsfile'=>strtolower($this->module).'_category');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		
		$data['results']=$this->Meetingevents_model->getdata('',0);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}