<?php

class Region_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(regions,$data['region'],'region');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            



            $finalArray=array('region'=>htmlentities($data['region']),'short_name'=>htmlentities($data['short_name']),
              'url'=>htmlentities($data['url']),
              'meta_title'=>htmlentities($data['meta_title']),'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'added_on'=> date_stamp(),'added_by' => $user,
              'is_active'=>$pshow);

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_regions,"image");
                $imgArr=array('image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);           
            }

            $this->db->insert(regions,$finalArray);
            $lastinsertedId = $this->db->insert_id();


        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $updateid=base64_decode($data['region_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           
               $finalArray=array('region'=>htmlentities($data['region']),'short_name'=>htmlentities($data['short_name']),
              'url'=>htmlentities($data['url']),
              'meta_title'=>htmlentities($data['meta_title']),'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'updated_on'=> date_stamp(),'updated_by' => $user,
              'is_active'=>$pshow);

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_regions,"image");
                $imgArr=array('image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);           
            }

            
              $this->db->where('id',$updateid);     
              $this->db->update(regions,$finalArray);
        
        

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
            $this->db->order_by('region','ASC');
        }
        
        $this->db->from(regions);
        
      
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
                $this->db->delete(regions);
                
                $msg=1;
                return $msg;
    }

    
      
    

    









}











