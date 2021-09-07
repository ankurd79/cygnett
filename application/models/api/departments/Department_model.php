<?php

class Department_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(department,$data['deptt_name'],'deptt_name');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            



            $finalArray=array('deptt_name'=>$data['deptt_name'],'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

        $this->db->insert(department,$finalArray);
        $lastinsertedId = $this->db->insert_id();

        

       

        



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $updateid=base64_decode($data['department_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           
               $finalArray=array('deptt_name'=>$data['deptt_name'],
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            
              $this->db->where('id',$updateid);     
              $this->db->update(department,$finalArray);
        
        

        

        

        



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
            $this->db->order_by('deptt_name','ASC');
        }
        
        $this->db->from(department);
        
      
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
                $this->db->delete(department);
                
                $this->db->where('department_id', $data['id']);
                $this->db->delete(team);


                
                
                $msg=1;
                return $msg;
    }

    
      
    

    









}











