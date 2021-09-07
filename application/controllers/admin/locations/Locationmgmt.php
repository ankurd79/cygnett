<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Locationmgmt extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	$this->module='Locations';
    	$this->load->model('api/'.strtolower($this->module).'/Location_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$statelist=$this->Common_model->getstate();
    	
    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Add '.$this->module.'','jsfile'=>$this->module,'statelist'=>$statelist,'countrylist'=>getcountry());
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
        $pdata=$this->Location_model->getlocationData($locId,'');
        $banner=$this->Location_model->getlocationbanners($locId,'');
        $places=$this->Location_model->getplacesofvisit($locId,'');
    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Edit '.$this->module.'','results'=>$pdata, 'banners'=>$banner,'jsfile'=>''.$this->module.'', 'places'=>$places, 'statelist'=>$statelist,'countrylist'=>getcountry());
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		
		$data['results']=$this->Location_model->getlocationdata('',0);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}