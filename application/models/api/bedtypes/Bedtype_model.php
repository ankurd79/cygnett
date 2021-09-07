<?php

class Bedtype_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(bed_type,$data['bed_type'],'bed_type');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            



            $finalArray=array('bed_type'=>$data['bed_type'],'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

            $this->db->insert(bed_type,$finalArray);
            $lastinsertedId = $this->db->insert_id();


        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $updateid=base64_decode($data['bed_type_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           
               $finalArray=array('bed_type'=>$data['bed_type'],
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            
              $this->db->where('id',$updateid);     
              $this->db->update(bed_type,$finalArray);
        
        

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
            $this->db->order_by('bed_type','ASC');
        }
        
        $this->db->from(bed_type);
        
      
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
                $this->db->delete(bed_type);
                
                $msg=1;
                return $msg;
    }

    
      
    

    









}











