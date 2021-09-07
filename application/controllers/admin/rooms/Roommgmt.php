<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Roommgmt extends CI_Controller {

    	function __construct() {
    	parent::__construct();
    	$this->load->model('api/rooms/Room_model');
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage Rooms','sub_title'=>'Add Rooms','jsfile'=>'rooms');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/rooms/room_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
        
		$rid=base64_decode($this->uri->segment(3));
		$pdata=$this->Room_model->getData($rid,'');
    	$data=array("main_title"=>'Manage Rooms','sub_title'=>'Edit Rooms','results'=>$pdata,'jsfile'=>'rooms');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/rooms/room_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Room_model->getdata('',0);
		$this->load->view('admin/rooms/room_data_table',$data);
	}
	
	
	
    public function portroomdata(){
        $this->db->select('distinct(`room_name`)');
        $this->db->from(rooms);
        //$this->db->get();
        if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          $p=$query->result_array();
          
          #print_r($p);
          
          foreach($p as $m){
              //echo $m['room_name'];
              
              if($m['room_name']=='Deluxe room'){
                  $val=1;
              }elseif($m['room_name']=='Superior Room'){
                  $val=2;
              }elseif($m['room_name']=='Club Room'){
                  $val=3;
              }elseif($m['room_name']=='Suite Room'){
                  $val=4;
              }elseif($m['room_name']=='Junior Suite'){
                  $val=5;
              }elseif($m['room_name']=='Royal Suite'){
                  $val=6;
              }elseif($m['room_name']=='Family Suite'){
                  $val=7;
              }elseif($m['room_name']=='Family Room'){
                  $val=8;
              }elseif($m['room_name']=='Suite'){
                  $val=4;
              }elseif($m['room_name']=='Executive Suite'){
                  $val=9;
              }elseif($m['room_name']=='Royal Family Suite'){
                  $val=10;
              }elseif($m['room_name']=='Royal Suite Duplex'){
                  $val=11;
              }elseif($m['room_name']=='Superior Rooms'){
                  $val=2;
              }elseif($m['room_name']=='Club Rooms'){
                  $val=3;
              }elseif($m['room_name']=='Club Rooms'){
                  $val=3;
              }elseif($m['room_name']=='Standard Room'){
                  $val=12;
              }elseif($m['room_name']=='Luxury Suite Room'){
                  $val=13;
              }elseif($m['room_name']=='Premium Suite Room'){
                  $val=14;
              }
              
              
              $finalArray=array('room_name_1'=>$val);
              $this->db->where('room_name',$m['room_name']);     
              #$this->db->update(rooms,$finalArray);
              
              
              
          }
          
      }else{
        return false;
      } 
      
      
    }
    
    
    
    
    
    
        

}