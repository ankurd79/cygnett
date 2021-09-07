<?php

class Cygnetture_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(signature_dishes,$data['dish_title'],'dish_title');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            
             

             if($_FILES["image"]['name']<>''){
                  $fileforupload=$_FILES["image"]['name'];
                  $uploadedfile=uploadcustomImg($fileforupload,folder_cygnetture,"image");
                  //$imgArr=array('logo_image'=>$uploadedfile);
                  //$finalArray=array_merge($ins_arr_1,$imgArr);           
              }else{
                  //$finalArray=$ins_arr_1;
                  $uploadedfile='';
              }


            $finalArray=array('dish_title'=>htmlentities($data['dish_title']),
             'dish_image'=>$uploadedfile,
             'dish_description'=>htmlentities($data['dish_description']),
             'cuisine_id'=>$data['cuisine'], 
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

            $this->db->insert(signature_dishes,$finalArray);
            $lastinsertedId = $this->db->insert_id();

        

       

        



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $updateid=base64_decode($data['dish_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
             
               
              $finalArray=array('dish_title'=>htmlentities($data['dish_title']),
             'dish_description'=>htmlentities($data['dish_description']), 
             'cuisine_id'=>$data['cuisine'], 
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

              if($_FILES["image"]['name']<>''){

                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_cygnetture,"image");
                $imgArr=array('dish_image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);
               
            }

              $this->db->where('id',$updateid);     
              $this->db->update(signature_dishes,$finalArray);
        

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
            $this->db->order_by('dish_title','ASC');
        }
        
        $this->db->from(signature_dishes);
        
      
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
                $this->db->delete(signature_dishes);
                
                
                
                $msg=1;
                return $msg;
    }

    
     public function getrestaurantdishes($id,$site=''){
        $this->db->select('*');
        $this->db->where('id', $id); 

        if($site=='1'){
            $this->db->where('is_active',1); 
        }

        $this->db->order_by('dish_title','ASC');
        $this->db->from(signature_dishes);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    } 
    

    









}











