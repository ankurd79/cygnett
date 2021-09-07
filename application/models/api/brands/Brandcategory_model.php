<?php

class Brandcategory_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(brandcat,$data['category'],'category');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            



            $finalArray=array('category'=>$data['category'],'text'=>htmlentities($data['text']),'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

            $this->db->insert(brandcat,$finalArray);
            $lastinsertedId = $this->db->insert_id();


        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $updateid=base64_decode($data['brand_catid']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           
               $finalArray=array('category'=>$data['category'],
                'text'=>htmlentities($data['text']),
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            
              $this->db->where('id',$updateid);     
              $this->db->update(brandcat,$finalArray);

              //if($pshow==0){
                $brndstsArr=array('is_active'=>$pshow);
                $this->db->where('brand_category',$updateid);     
                $this->db->update(brands,$brndstsArr);
              //}
        
        

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
            $this->db->order_by('id','ASC');
        }
        
        $this->db->from(brandcat);
        
      
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
                $this->db->delete(brandcat);

                $this->db->where('brand_category', $data['id']);
                $this->db->delete(brands);
                
                $msg=1;
                return $msg;
    }

    
      
    

    









}











