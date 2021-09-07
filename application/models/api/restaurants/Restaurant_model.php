<?php

class Restaurant_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertRestaurantData($data,$user){
        $srvAddr=$_SERVER['SERVER_ADDR'];
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(restaurants,$data['name'],'name');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            //uploadcustomImg($check,"brands");
            $strcuisines=implode(",",$data['cuisine_type']);
            if($data['cygnetture_dishes']>0)
                $strcygdishes=implode(",",$data['cygnetture_dishes']);
            else
              $strcygdishes='';

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_restaurant,"image");
                //$imgArr=array('logo_image'=>$uploadedfile);
                //$finalArray=array_merge($ins_arr_1,$imgArr);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile='';
            }
            
            if($_FILES["image2"]['name']<>''){
                $fileforupload2=$_FILES["image2"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_restaurant,"image2");
                //$imgArr2=array('secondary_logo'=>$uploadedfile2);
                //$finalArray=array_merge($ins_arr_1,$imgArr2);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile2='';
            }




            $finalArray=array('name'=>$data['name'],'tag_line'=>$data['tag_line'],
              'styling'=>$data['styling'],'description'=>htmlentities($data['description']),
              'cuisine'=>$strcuisines,
              'cygnetture_dishes'=>$strcygdishes,
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'video'=>htmlentities($data['video']),
              'logo_image'=>$uploadedfile,
              'secondary_logo'=>$uploadedfile2,
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

            
            

            //print_r($finalArray); 
        $this->db->insert(restaurants,$finalArray);
        $lastinsertedId = $this->db->insert_id();

        /********send data to banner table*******/
        /*  
        $bannerimage= $_FILES['banner_image']['name'];
        $optionKeys  = $bannerimage;
        if($bannerimage){
               foreach($bannerimage as $id=>$key){
                        if(strlen($optionKeys[$id])>0){
                                $uploadedfile=time()."_".$optionKeys[$id];
                                $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_restaurant.'/banners/'.$uploadedfile;
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$id],$path);
                                $arrbannerInsert=array('banner_image'=>$uploadedfile,'restaurant_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                $this->db->insert(res_images,$arrbannerInsert);
                        }
                    }
        }
        */

        $bannerimage= $_FILES['banner_image']['name'];
        $mobile_banner_image= $_FILES['mobile_banner_image']['name'];

          foreach($bannerimage as $key=>$value){
              if(strlen($bannerimage[$key])>0){
                                $uploadedfile=time()."_".$value;
                                if($srvAddr=='::1'){
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_restaurant.'/banners/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_restaurant.'/banners/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_restaurant.'/banners/'.$uploadedfile;
                                }
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$key],$path);
                                
                                 $finalArray=array('banner_image'=>$uploadedfile,'restaurant_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                 

                                if(strlen($mobile_banner_image[$key])>0){  
                                    $mobilefile=time()."_".$mobile_banner_image[$key];
                                    if($srvAddr=='::1'){
                                      $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_restaurant.'/banners/'.$mobilefile;
                                    }else{
                                      //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_restaurant.'/banners/'.$mobilefile;
                                      $mobpath=upath.'/images/'.folder_restaurant.'/banners/'.$mobilefile;
                                    }
                                    move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 

                                    $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                    $finalArray=array_merge($finalArray,$mobileimgArr);
                                } 

                                $this->db->insert(res_images,$finalArray);  
                          }

          }

        /********send data to banner table*******/

        



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateRestaurantData($data,$user){
            $srvAddr=$_SERVER['SERVER_ADDR'];
            $updateid=base64_decode($data['restaurant_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           /*
           if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_restaurant,"image");
                //$imgArr=array('logo_image'=>$uploadedfile);
                //$finalArray=array_merge($ins_arr_1,$imgArr);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile='';
            }
            
            if($_FILES["image2"]['name']<>''){
                $fileforupload2=$_FILES["image2"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_restaurant,"image2");
                //$imgArr2=array('secondary_logo'=>$uploadedfile2);
                //$finalArray=array_merge($ins_arr_1,$imgArr2);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile2='';
            }
            */

             //print_r($data['cuisine_type']);
             $strcuisines=implode(",",$data['cuisine_type']);
             //exit;
             if($data['cygnetture_dishes']>0)
                $strcygdishes=implode(",",$data['cygnetture_dishes']);
            else
              $strcygdishes='';


              $finalArray=array('name'=>$data['name'],'tag_line'=>$data['tag_line'],
                'cuisine'=>$strcuisines,
                'cygnetture_dishes'=>$strcygdishes,
              'styling'=>$data['styling'],'description'=>htmlentities($data['description']),
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'video'=>htmlentities($data['video']),
              //'logo_image'=>$uploadedfile,
              //'secondary_logo'=>$uploadedfile2,
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_restaurant,"image");
                $imgArr=array('logo_image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);           
            }
            
            if($_FILES["image2"]['name']<>''){
                $fileforupload2=$_FILES["image2"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_restaurant,"image2");
                $imgArr2=array('secondary_logo'=>$uploadedfile2);
                $finalArray=array_merge($finalArray,$imgArr2);           
            }

              $this->db->where('id',$updateid);     
              $this->db->update(restaurants,$finalArray);
        
        

        /********send data to banner table*******/
       /*
        $bannerimage= $_FILES['banner_image']['name'];
        $optionKeys  = $bannerimage;
        //print_r($optionKeys);
        if($bannerimage){
               foreach($bannerimage as $id=>$key){
                        if(strlen($optionKeys[$id])>0){

                                $uploadedfile=time()."_".$optionKeys[$id];
                                $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_restaurant.'/banners/'.$uploadedfile;
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$id],$path);
                                
                                if(isset($data['banner_id'][$id])){
                                 $arrbannerUpdate=array('banner_image'=>$uploadedfile,'updated_on'=> date_stamp(),'updated_by' => $user);
                                    $this->db->where('id',$data['banner_id'][$id]);
                                    $this->db->update(res_images,$arrbannerUpdate);
                                    #echo 'hello';
                                }else{
                                  $arrbannerInsert=array('banner_image'=>$uploadedfile,'restaurant_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                    $this->db->insert(res_images,$arrbannerInsert);
                                    #echo 'post';
                                }
                               
                        }
                    }
        }
        */

        $bannerimage= $_FILES['banner_image']['name'];
          $mobile_banner_image= $_FILES['mobile_banner_image']['name'];

          foreach($bannerimage as $key=>$value){
              
                                $uploadedfile=time()."_".$value;
                                if($srvAddr=='::1'){
                                    $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_restaurant.'/banners/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_restaurant.'/banners/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_restaurant.'/banners/'.$uploadedfile;
                                }
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$key],$path);
                                
                                if(isset($data['banner_id'][$key])){

                                  //$upArray=array('updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>1);
                                  $upArray=array('updated_on'=> date_stamp(),'updated_by' => $user);

                                  if(strlen($bannerimage[$key])>0){   
                                      $imgArr=array('banner_image'=>$uploadedfile);
                                      $upArray=array_merge($upArray,$imgArr);
                                   }

                                      if(strlen($mobile_banner_image[$key])>0){  
                                            $mobilefile=time()."_".$mobile_banner_image[$key];
                                            if($srvAddr=='::1'){
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_restaurant.'/banners/'.$mobilefile;
                                            }else{
                                                //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_restaurant.'/banners/'.$mobilefile;
                                                $mobpath=upath.'/images/'.folder_restaurant.'/banners/'.$mobilefile;
                                            }
                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $upArray=array_merge($upArray,$mobileimgArr);
                                            #echo 'yelp';
                                      }

                                       $this->db->where('id',$data['banner_id'][$key]); 
                                       $this->db->update(res_images,$upArray);
                                    
                                }else{
                                      
                                      if(strlen($bannerimage[$key])>0){
                                        $finalArray=array('banner_image'=>$uploadedfile,'restaurant_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);

                                        $this->db->insert(res_images,$finalArray);
                                        $lastinsertedId = $this->db->insert_id();
                                      }

                                      if(strlen($mobile_banner_image[$key])>0){  
                                            $mobilefile=time()."_".$mobile_banner_image[$key];
                                            if($srvAddr=='::1'){
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_restaurant.'/banners/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_restaurant.'/banners/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_restaurant.'/banners/'.$mobilefile;
                                            }
                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $finalArray=array_merge($finalArray,$mobileimgArr);
                                            $this->db->where('id',$lastinsertedId);
                                            $this->db->update(res_images,$finalArray);
                                      } 
                                      
                                      
                                  
                                }
                         // }

          }

        /********send data to banner table*******/

        



        $msg=1;
        
    return $msg;
}


    public function getrestaurantData($id='',$site=''){
        $this->db->select('*');
        
        if($id>0){
          $this->db->where('id', $id); 
        }
        if($site=='1'){
            $this->db->where('is_active',1);
            $this->db->order_by('name','ASC');
        }
        
        $this->db->from(restaurants);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }

    public function deleterestaurantData($data){

                $this->db->where('id', $data['id']);
                $this->db->delete(restaurants);
                
                $this->db->where('restaurant_id', $data['id']);
                $this->db->delete(res_images);
                
                
                $msg=1;
                return $msg;
    }

    public function deletebannerData($data){

                $this->db->where('id', $data['id']);
                $this->db->delete(res_images);
                
                $msg=1;
                return $msg;
    }
      
    public function getrestaurantbanners($id,$site=''){
        $this->db->select('*');
        $this->db->where('restaurant_id', $id); 

        if($site=='1'){
            $this->db->where('is_active',1); 
        }

        $this->db->order_by('id','ASC');
        $this->db->from(res_images);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    }









}











