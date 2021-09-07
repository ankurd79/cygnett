<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teammgmt extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Teams';
    	$this->load->model('api/'.strtolower($this->module).'/Team_model');
    	$this->load->model('api/departments/Department_model');
    	$this->load->model('api/designations/Designation_model');
    	$this->load->model('api/regions/Region_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Add '.$this->module.'','jsfile'=>strtolower($this->module),'salutation'=>getSalutation(),'deptt'=>$this->Department_model->getdata(), 'desig'=>$this->Designation_model->getdata(),'country'=>getcountry(),'region'=>$this->Region_model->getdata('',1));
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
        $pdata=$this->Team_model->getData($locId,'');
    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Edit '.$this->module.'','results'=>$pdata, 'jsfile'=>strtolower($this->module),'salutation'=>getSalutation(),'deptt'=>$this->Department_model->getdata(), 'desig'=>$this->Designation_model->getdata(),'highlights'=>$this->Team_model->gethighlightsofamember($locId),'country'=>getcountry(),'region'=>$this->Region_model->getdata('',1));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$data['results']=$this->Team_model->getdata('',0);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_data_table',$data);
	}
	
	public function regionteamsetting(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage '.$this->module.' Sequence','sub_title'=>'Update Sequence','jsfile'=>strtolower($this->module),'salutation'=>getSalutation(),'deptt'=>$this->Department_model->getdata(), 'desig'=>$this->Designation_model->getdata(),'country'=>getcountry(),'region'=>$this->Region_model->getdata('',1));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/region_team',$data);
		$this->load->view('admin/footer');
	}
    
    
    public function regionlist($pid=''){
		
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$pid=$this->uri->segment(5);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
		   //its a post
			$pdata = $this->input->post();
			$pid = $pdata['parent_id']; 
		}
			//exit;
		$data['results']=getregionteamlist($pid);
		
		$this->load->view('admin/'.strtolower($this->module).'/region_team_list',$data);
	}
	
    
    
    
    
    
    
    
        

}