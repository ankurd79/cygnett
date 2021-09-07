<?php

class Location_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertlocationData($data,$user){
        //print_r($data);
        //exit;
        $srvAddr=$_SERVER['SERVER_ADDR'];
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(location,$data['city'],'location');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            if( empty($data["is_popular"]) ) {
                  $popular=0;
            }else{
                  $popular=1;
            }
            //uploadcustomImg($check,"brands");

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_location,"image");
                //$imgArr=array('logo_image'=>$uploadedfile);
                //$finalArray=array_merge($ins_arr_1,$imgArr);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile='';
            }

            if($_FILES["limage"]['name']<>''){
                $fileforupload2=$_FILES["limage"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_location,"limage");
                //$imgArr=array('logo_image'=>$uploadedfile);
                //$finalArray=array_merge($ins_arr_1,$imgArr);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile2='';
            }
            
            




            $finalArray=array('country'=>$data['country'],'location'=>$data['city'],
              'latitude'=>$data['latitude'],'longitude'=>$data['longitude'],
              'description'=>htmlentities($data['description']),
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'image'=>$uploadedfile,'list_image'=>$uploadedfile2,
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow,'is_popular'=>$popular);

            
            

            //print_r($finalArray); 
        $this->db->insert(location,$finalArray);
        $lastinsertedId = $this->db->insert_id();

        /********send data to banner table*******/

        $bannerimage= $_FILES['banner_image']['name'];
        $optionKeys  = $bannerimage;
        if($bannerimage){
               foreach($bannerimage as $id=>$key){
                        if(strlen($optionKeys[$id])>0){
                                $uploadedfile=time()."_".$optionKeys[$id];
                                if($srvAddr=='::1'){
                                    $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_location.'/banners/'.$uploadedfile;
                                }else{
                                   //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_location.'/banners/'.$uploadedfile;
                                   $path=upath.'/images/'.folder_location.'/banners/'.$uploadedfile;
                                }
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$id],$path);
                                $arrbannerInsert=array('banner_image'=>$uploadedfile,'location_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                $this->db->insert(location_images,$arrbannerInsert);
                        }
                    }
        }

        /********send data to banner table*******/

        /********send data to places of visit table********/

        $place_image= $_FILES['place_image']['name'];
        $pKeys  = $place_image;
        if($place_image){
               foreach($place_image as $k=>$v){
                        if(strlen($pKeys[$k])>0){
                                $uploadedfile1=time()."_".$pKeys[$k];
                                
                                if($srvAddr=='::1'){
                                    $path1=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_location.'/places/'.$uploadedfile1;
                                }else{
                                  //$path1=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_location.'/places/'.$uploadedfile1;
                                  $path1=upath.'/images/'.folder_location.'/places/'.$uploadedfile1;
                                }
                                
                                move_uploaded_file($_FILES["place_image"]['tmp_name'][$k],$path1);
                                $arrplacesInsert=array('place_image'=>$uploadedfile1,'place_name'=>$data['place_name'][$k],'place_details'=>$data['place_details'][$k],'location_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                $this->db->insert(location_visit,$arrplacesInsert);
                        }
                    }
        }




        /********send data to places of visit table********/

        



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updatelocationData($data,$user){
            $srvAddr=$_SERVER['SERVER_ADDR'];
            $updateid=base64_decode($data['location_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           if( empty($data["is_popular"]) ) {
                  $popular=0;
            }else{
                  $popular=1;
            }
               $finalArray=array('country'=>$data['country'],'location'=>$data['city'],
                'latitude'=>$data['latitude'],'longitude'=>$data['longitude'],
              'description'=>htmlentities($data['description']),
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow,'is_popular'=>$popular);

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_location,"image");
                $imgArr=array('image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);           
            }

            if($_FILES["limage"]['name']<>''){
                $fileforupload2=$_FILES["limage"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_location,"limage");
                $imgArr2=array('list_image'=>$uploadedfile2);
                $finalArray=array_merge($finalArray,$imgArr2);           
            }
            
            

              $this->db->where('id',$updateid);     
              $this->db->update(location,$finalArray);
        
        

        /********send data to banner table*******/
       
        $bannerimage= $_FILES['banner_image']['name'];
        $optionKeys  = $bannerimage;
        //print_r($optionKeys);
        if($bannerimage){
               foreach($bannerimage as $id=>$key){
                        if(strlen($optionKeys[$id])>0){

                                $uploadedfile=time()."_".$optionKeys[$id];
                                if($srvAddr=='::1'){
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_location.'/banners/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_location.'/banners/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_location.'/banners/'.$uploadedfile;
                                }
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$id],$path);
                                
                                if(isset($data['banner_id'][$id])){
                                 $arrbannerUpdate=array('banner_image'=>$uploadedfile,'updated_on'=> date_stamp(),'updated_by' => $user);
                                    $this->db->where('id',$data['banner_id'][$id]);
                                    $this->db->update(location_images,$arrbannerUpdate);
                                    #echo 'hello';
                                }else{
                                  $arrbannerInsert=array('banner_image'=>$uploadedfile,'location_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                    $this->db->insert(location_images,$arrbannerInsert);
                                    #echo 'post';
                                }
                               
                        }
                    }
        }

        /********send data to banner table*******/

        /**********send data to places table*******/
        $place_name = isset($data['place_name']) ? $data['place_name'] : "" ;

          //$finalupplaceArray=array();
          foreach($place_name as $key=>$value){

              if(strlen($place_name[$key])>0){
                
                if(isset($data['place_id'][$key])){
                  //echo 'greet';

                  $finalupplaceArray=array('place_name'=>$place_name[$key],'place_details'=>$data['place_details'][$key],'updated_on'=> date_stamp(),'updated_by' => $user);
                     
                    

                   if($_FILES["place_image"]['name'][$key]<>''){

                      $uploadedfile1=time()."_".$_FILES["place_image"]['name'][$key];
                      if($srvAddr=='::1'){
                        $path1=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_location.'/places/'.$uploadedfile1;
                      }else{
                        //$path1=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_location.'/places/'.$uploadedfile1;
                        $path1=upath.'/images/'.folder_location.'/places/'.$uploadedfile1;
                      }
                      move_uploaded_file($_FILES["place_image"]['tmp_name'][$key],$path1);
                      $imgplaceArr=array('place_image'=>$uploadedfile1);
                      $finalupplaceArray=array_merge($finalupplaceArray,$imgplaceArr);
               
                    }  

                    //print_r($finalupplaceArray);

                    $this->db->where('id',$data['place_id'][$key]);
                    $this->db->update(location_visit,$finalupplaceArray);
                   
                }else{
                   



                   $arrplacesfinalInsert=array('place_name'=>$place_name[$key],'place_details'=>$data['place_details'][$key],'location_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);


                    if($_FILES["place_image"]['name'][$key]<>''){

                      $placeimge=time()."_".$_FILES["place_image"]['name'][$key];
                      if($srvAddr=='::1'){
                        $pathplaceimg=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_location.'/places/'.$placeimge;
                      }else{
                        //$pathplaceimg=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_location.'/places/'.$placeimge;
                        $pathplaceimg=upath.'/images/'.folder_location.'/places/'.$placeimge;
                      }
                      
                      move_uploaded_file($_FILES["place_image"]['tmp_name'][$key],$pathplaceimg);
                      $imgArr2=array('place_image'=>$placeimge);
                      $arrplacesfinalInsert=array_merge($arrplacesfinalInsert,$imgArr2);
               
                    }

                    $this->db->insert(location_visit,$arrplacesfinalInsert);
                }
          }
        }

        /**********send data to places table*******/

        



        $msg=1;
        
    return $msg;
}


    public function getlocationdata($id='',$site=''){
        /*
        $this->db->select('*');
        
        if($id>0){
          $this->db->where('id', $id); 
        }
        if($site=='1'){
            $this->db->where('is_active',1);
            $this->db->order_by('location','ASC');
        }
        
        $this->db->from(location);
        */

          $this->db->select('l.*,ctry.nicename'); 
          $this->db->from(location. ' l');
          $this->db->join(country .' ctry', 'ctry.id = l.country'); 
      
      
      if($id>0){
          $this->db->where('l.id', $id); 
      }

      if($site=='1'){
            $this->db->where('l.is_active',1);
      }

      $this->db->order_by('l.location','ASC');
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }


    public function getlocationbystate($country_id){
        $this->db->select('*');
        $this->db->where('is_active',1);
        $this->db->where('country',$country_id);
        $this->db->order_by('location','ASC');
        $this->db->from(location);
        
      
      if($query=$this->db->get()){
        //$this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }

    public function deletelocationData($data){

                $this->db->where('id', $data['id']);
                $this->db->delete(location);
                
                $this->db->where('location_id', $data['id']);
                $this->db->delete(location_images);

                $this->db->where('location_id', $data['id']);
                $this->db->delete(location_visit);
                
                
                $msg=1;
                return $msg;
    }
    
    
    public function deletebannerData($data){

                $this->db->where('id', $data['id']);
                $this->db->delete(location_images);
                $msg=1;
                return $msg;
    }
    
    public function deleteplacesData($data){
                $this->db->where('id', $data['id']);
                $this->db->delete(location_visit);
                $msg=1;
                return $msg;
    }

    public function getsequencedlocation(){
          $this->db->select('l.*,ctry.nicename'); 
          $this->db->from(location. ' l');
          $this->db->join(country .' ctry', 'ctry.id = l.country'); 
          $this->db->order_by('l.sequence','ASC');
          $this->db->where('l.is_active',1);
          $this->db->where('l.sequence >',0);
          if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }
    
      
    public function getlocationbanners($id,$site=''){
        $this->db->select('*');
        $this->db->where('location_id', $id); 

        if($site=='1'){
            $this->db->where('is_active',1); 
        }

        $this->db->order_by('id','ASC');
        $this->db->from(location_images);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    }

    public function getplacesofvisit($id,$site=''){
        
        $this->db->select('*');
        $this->db->where('location_id', $id); 

        if($site=='1'){
            $this->db->where('is_active',1); 
        }

        $this->db->order_by('id','ASC');
        $this->db->from(location_visit);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    }









}











