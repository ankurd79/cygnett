<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jobpost extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	$this->module='Job';
    	$this->load->model('api/'.strtolower($this->module).'/Job_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage '.$this->module.' Posts','sub_title'=>'Add '.$this->module.' Posts','jsfile'=>strtolower($this->module));
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
        $pdata=$this->Job_model->getData($locId,'');
    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Edit '.$this->module.'','results'=>$pdata, 'jsfile'=>strtolower($this->module));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$data['results']=$this->Job_model->getdata('',0);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_data_table',$data);
	}
	
	public function applicationlist(){
        
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

		$locId=base64_decode($this->uri->segment(3));
        $pdata=$this->Job_model->getuniquedatesofappreceiving($locId);
        $pjobdata=$this->Job_model->getData($locId,'');
    	$data=array("main_title"=>'Manage '.$this->module.'','sub_title'=>'Received Applications','results'=>$pdata,'jd'=>$pjobdata, 'jobid'=>$locId,'jsfile'=>strtolower($this->module));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_applist',$data);
		$this->load->view('admin/footer');
	}
	
    
    
    public function candidatehiringupdateStatus(){
        if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
        print_r($this->input->post());
        $r=$this->input->post();
        if($r['level']==1){
            $level='contacted';
            $actiondate='contact_date';
        }elseif($r['level']==2){
            $level='interviewed';
            $actiondate='interview_date';
        }elseif($r['level']==3){
            $level='hired';
            $actiondate='hire_date';
        }
        
        if($r['value']=='0'){
            $sts='1';
        }elseif($r['value']=='1'){
            $sts='0';
        }
        
        
        $data = array($level => $sts,'date_update' =>date_stamp(),$actiondate=>date_stamp());
        $this->db->where('id', $r['id']);
        $this->db->update('cyg_job_posts_application_tracker',$data);
        
        
        if(($r['level']==1)&&($r['value']=='1')){
            $data = array($level => $sts,'date_update' =>date_stamp(),'interviewed'=>0,'hired'=>0,'hire_date'=>NULL,'interview_date'=>NULL,'contact_date'=>NULL);
            $this->db->where('id', $r['id']);
            $this->db->update('cyg_job_posts_application_tracker',$data);
        }
        
        if(($r['level']==2)&&($r['value']=='1')){
            $data = array($level => $sts,'date_update' =>date_stamp(),'hired'=>0,'hire_date'=>NULL);
            $this->db->where('id', $r['id']);
            $this->db->update('cyg_job_posts_application_tracker',$data);
        }
        
    }
    
    
    public function applicationremove(){
        if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
        $r=$this->input->post();
        $this->db->where('id', $r['id']);
        $this->db->delete('cyg_job_posts_application_tracker');

    }
    
   
    
    
    
        

}