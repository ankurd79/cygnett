<?php

class Media_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(media,$data['news_title'],'news_title');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            
             $tempdate=$data['date_of_publishing'];
             $tempdate=explode("/",$tempdate);
             $tempdate=$tempdate[2].'-'.$tempdate[0].'-'.$tempdate[1];

             if($_FILES["image"]['name']<>''){
                  $fileforupload=$_FILES["image"]['name'];
                  $uploadedfile=uploadcustomImg($fileforupload,folder_media,"image");
                  //$imgArr=array('logo_image'=>$uploadedfile);
                  //$finalArray=array_merge($ins_arr_1,$imgArr);           
              }else{
                  //$finalArray=$ins_arr_1;
                  $uploadedfile='';
              }


            $finalArray=array('news_title'=>htmlentities($data['news_title']),
             'url'=>$data['url'], 'source'=>htmlentities($data['source']), 
             'date_of_publishing'=>$tempdate, 'image'=>$uploadedfile,
             'intro_text'=>htmlentities($data['intro_text']), 
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

            $this->db->insert(media,$finalArray);
            $lastinsertedId = $this->db->insert_id();

        

       

        



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $updateid=base64_decode($data['news_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
             $tempdate=$data['date_of_publishing'];
             $tempdate=explode("/",$tempdate);
             $tempdate=$tempdate[2].'-'.$tempdate[0].'-'.$tempdate[1];
               
              $finalArray=array('news_title'=>htmlentities($data['news_title']),
             'url'=>$data['url'], 'source'=>htmlentities($data['source']), 
             'date_of_publishing'=>$tempdate,
             'intro_text'=>htmlentities($data['intro_text']), 
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

              if($_FILES["image"]['name']<>''){

                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_media,"image");
                $imgArr=array('image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);
               
            }

              $this->db->where('id',$updateid);     
              $this->db->update(media,$finalArray);
        

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
            $this->db->order_by('date_of_publishing','DESC');
        }
        
        $this->db->from(media);
        
      
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
                $this->db->delete(media);
                
                
                
                $msg=1;
                return $msg;
    }

    
      
    

    









}











