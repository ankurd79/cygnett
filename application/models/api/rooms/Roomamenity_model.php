<?php

class Roomamenity_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
            $srvAddr=$_SERVER['SERVER_ADDR'];
            $room_amenity = isset($data['room_amenity']) ? $data['room_amenity'] : "" ;
            #$lastinsertedId=1;

              foreach($room_amenity as $key=>$value){
                  if(strlen($room_amenity[$key])>0){
                    /*  
                    $image= $_FILES['image']['name'];

                    if(isset($image[$key])){
                      //$uploadedfile=time()."_".$image[$key];
                      $uploadedfile=$image[$key];
                      if($srvAddr=='::1'){
                            $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_room_amenities.'/'.$uploadedfile;
                      }else{
                          $path=upath.'/images/'.folder_room_amenities.'/'.$uploadedfile;
                      }
                      move_uploaded_file($_FILES["image"]['tmp_name'][$key],$path);
                    }else{
                      $uploadedfile='';
                    }
                    */

                    
                    
                    $arrInsert=array('image_icon'=>$data['image_icon'][$key],'room_amenity'=>$room_amenity[$key],'is_active'=>1,'added_on'=> date_stamp(),'added_by' => $user);
                      $this->db->insert(room_amenities,$arrInsert);
                    }
              }


        $msg=1;    
   
    return $msg;
}


public function updateData($data,$user){
            $srvAddr=$_SERVER['SERVER_ADDR'];
            $room_amenity = isset($data['room_amenityy']) ? $data['room_amenityy'] : "" ;
            #$lastinsertedId=1;

              foreach($room_amenity as $key=>$value){
                  if(strlen($room_amenity[$key])>0){

                    $arrupdate=array('image_icon'=>$data['image_icon'][$key],'room_amenity'=>$room_amenity[$key],'updated_on'=> date_stamp(),'updated_by' => $user);

                      $this->db->where('id',$data['amenity_id'][$key]);
                      $this->db->update(room_amenities,$arrupdate);

                    }
              }
            

         
        
        

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
            $this->db->order_by('room_amenity','ASC');
        }
        
        $this->db->from(room_amenities);
        
      
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
                $this->db->delete(room_amenities);
                
                $msg=1;
                return $msg;
    }

    
    
    

    









}











