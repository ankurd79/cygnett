<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hotelfacimgmt extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Hotels';
    	$this->load->model('api/'.strtolower($this->module).'/Hotelfaci_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage Hotel Facilities','sub_title'=>'Add Hotel Facilities','jsfile'=>strtolower($this->module).'_facility','parentfacilities'=>getparentfacility());
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_faci_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
        
		$locId=base64_decode($this->uri->segment(3));
        $pdata=$this->Hotelfaci_model->getData($locId,'');
    	$data=array("main_title"=>'Manage Hotel Facilities','sub_title'=>'Edit Hotel Facilities','results'=>$pdata, 'jsfile'=>strtolower($this->module).'_facility','parentfacilities'=>getparentfacility());
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_faci_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list($pid=''){
		
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$pid=$this->uri->segment(5);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
		   //its a post
			$pdata = $this->input->post();
			$pid=$pdata['parent_id'];
		}



		//print_r($pdata);
		$data['results']=$this->Hotelfaci_model->getdata($pid);
		//print_r($data['results']);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_faci_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}