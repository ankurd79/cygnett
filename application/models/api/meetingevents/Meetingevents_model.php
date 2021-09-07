<?php

class Meetingevents_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(meetingevents,$data['meeting_unit'],'meeting_unit');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            



            $finalArray=array('meeting_unit'=>$data['meeting_unit'],'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

        $this->db->insert(meetingevents,$finalArray);
        $lastinsertedId = $this->db->insert_id();

        

       

        



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $updateid=base64_decode($data['meetingevent_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           
               $finalArray=array('meeting_unit'=>$data['meeting_unit'],
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            
              $this->db->where('id',$updateid);     
              $this->db->update(meetingevents,$finalArray);
        
        

        

        

        



        $msg=1;
        
    return $msg;
}


    public function getdata($id='',$site=''){
        $this->db->select('*');
        
        if($id>0){
          $this->db->where('id', $id); 
        }
        if($site=='1'){
            $this->db->where('is_active',1);
            $this->db->order_by('meeting_unit','ASC');
        }
        
        $this->db->from(meetingevents);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }

    public function deleteData($data){

                $this->db->where('id', $data['id']);
                $this->db->delete(meetingevents);
                
                


                
                
                $msg=1;
                return $msg;
    }

    
      
    

    









}











