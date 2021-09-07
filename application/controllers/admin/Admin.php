<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    	function __construct() {
    	parent::__construct();
        $this->load->model('Common_model');
        $this->load->model('api/locations/Location_model');
    	//$this->load->helper('form');
    	//$this->load->helper('url');
    	//$this->load->helper('site_helper');
    }
    
    public function exit(){
    	//$this->session->sess_destroy('logged_in_admin');
        $this->session->unset_userdata('logged_in_admin');
    	//session_destroy();
    	header("Location: admin-login");
    }
	
    public function updatestatus(){
        $input = $this->input->post();
         $user=$this->session->userdata('uid');
        //print_r($input);
        $this->Common_model->updatestatus($input,$user);
        
    }
	
	
	public function callcityofstate(){
        //if($this->session->userdata('uid')) {
            $data = $this->input->post();
            if(isset($data['state_id']))
                $state_id=$data['state_id'];
            //$country_id=$data['country_id'];
            $data=$this->Common_model->getcity($state_id);
            
            $str='';
            if (isset($data)) {
                foreach ($data as $key => $list) {
                    if($list['state_id']==$state_id)
                        $selected="selected='selected'";
                    else
                        $selected="";
                    
                    $str.="<option value='". $list['id'] . "' $selected>" . $list['city'] . "</option>";
                }
                echo $str;      
            }else{
                echo $str='';
            }
        //}     
    }
    
    public function calllocationofstate(){
        //if($this->session->userdata('uid')) {
            $data = $this->input->post();
            //print_r($data);
            if(isset($data['state_id']))
                $state_id=$data['state_id'];
            //$country_id=$data['country_id'];
            $data=$this->Location_model->getlocationbystate($state_id);
            //print_r($data);
            
            $str='';
            if (isset($data)) {
                foreach ($data as $key => $list) {
                    if($list['state']==$state_id)
                        $selected="selected='selected'";
                    else
                        $selected="";
                    
                    $str.="<option value='". $list['id'] . "' $selected>" . $list['location'] . "</option>";
                }
                echo $str;      
            }else{
                echo $str='';
            }
        //}     
    }


    public function calllocationofcountry(){
        //if($this->session->userdata('uid')) {
            $data = $this->input->post();
            //print_r($data);
            if(isset($data['country_id']))
                $country_id=$data['country_id'];
            if(isset($data['state_id'])) {   
                $locid=$data['state_id']; 
            }else{
                $locid='';    
            }   
            //$country_id=$data['country_id'];
            $data=$this->Location_model->getlocationbystate($country_id);
            //print_r($data);
            
            $str='';
            if (isset($data)) {
                foreach ($data as $key => $list) {    
                    if($list['id']==$locid){
                        $selected="selected='selected'";
                    }else{
                        $selected="";
                    }
                    $str.="<option value='". $list['id'] . "' $selected>" . $list['location'] . "</option>";
                }
                echo $str;      
            }else{
                echo $str='';
            }
        //}     
    }
    
    
    
    
    
    
        

}