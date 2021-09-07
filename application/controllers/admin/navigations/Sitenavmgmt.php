<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sitenavmgmt extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Navigations';
    	$this->load->model('api/'.strtolower($this->module).'/Sitenav_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage Site '.$this->module.'','sub_title'=>'Add '.$this->module.'','jsfile'=>strtolower($this->module).'_site', 'sitenavigArr'=>$this->Sitenav_model->getdata('',''));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_site_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){
        if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$locId=base64_decode($this->uri->segment(3));
        $pdata=$this->Sitenav_model->getData($locId,'');
        $banner=$this->Sitenav_model->getbanners($locId,'');

    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Edit '.$this->module.'','results'=>$pdata, 'jsfile'=>strtolower($this->module).'_site','sitenavigArr'=>$this->Sitenav_model->getdata('',''),'rolloverArr'=>$this->Sitenav_model->getrolloverdata($locId,''),'banners'=>$banner);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_site_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Sitenav_model->getdata('',0);
		$data['pnav']=$this->Sitenav_model->fetchparentmenu();
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_site_data_table',$data);
	}
	
	
	
    
    
    
    
    
    
    
        

}