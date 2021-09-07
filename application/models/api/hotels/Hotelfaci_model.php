<?php

class Hotelfaci_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        
            $facility = isset($data['facility']) ? $data['facility'] : "" ;
            #$lastinsertedId=1;

              foreach($facility as $key=>$value){
                  if(strlen($facility[$key])>0){

                    if(!empty($data["is_active"][$key]) ) {
                      $pshow=1;
                    }else{
                      $pshow=0;
                    }

                    
                    $arrInsert=array('parent_id'=>$data['parent_id'],'facility'=>$facility[$key],'is_active'=>1,'added_on'=> date_stamp(),'added_by' => $user);
                      $this->db->insert(hotel_facilities,$arrInsert);
                    }
              }


        $msg=1;
        
    return $msg;
}


public function updateData($data,$user){
            $facility = isset($data['facility']) ? $data['facility'] : "" ;
           
              foreach($facility as $key=>$value){
                 $finalArray=array('facility'=>$data['facility'][$key],
                'updated_on'=> date_stamp(),'updated_by' => $user);

            
                $this->db->where('id',$data['facility_id'][$key]);     
                $this->db->update(hotel_facilities,$finalArray);
              }
        
        

        $msg=1;
        
    return $msg;
}


    public function getdata($parent_id){
        $this->db->select('*');
        $this->db->where('parent_id',$parent_id);
        $this->db->order_by('facility','ASC');
        $this->db->from(hotel_facilities);
        
      
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
                $this->db->delete(hotel_facilities);
                
                $msg=1;
                return $msg;
    }

    
      
    

    









}











