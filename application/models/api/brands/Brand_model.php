<?php
class Brand_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           
  }
 
 public function insertBrandData($data,$user){
        $srvAddr=$_SERVER['SERVER_ADDR'];
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(brands,$data['brand_name'],'brand_name');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_brand,"image");          
            }else{
                $uploadedfile='';
            }
            
            if($_FILES["image2"]['name']<>''){
                $fileforupload2=$_FILES["image2"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_brand,"image2");       
            }else{
                $uploadedfile2='';
            }

            if($_FILES["listimg"]['name']<>''){
                $fileforupload3=$_FILES["listimg"]['name'];
                $uploadedfile3=uploadcustomImg($fileforupload3,folder_brand.'/listimages',"listimg");       
            }else{
                $uploadedfile3='';
            }

            if($_FILES["infographic"]['name']<>''){
                $fileforupload4=$_FILES["infographic"]['name'];
                $uploadedfile4=uploadcustomImg($fileforupload4,folder_brand.'/infographics',"infographic");       
            }else{
                $uploadedfile4='';
            }

            if($_FILES["pdf"]['name']<>''){
                $fileforupload5=$_FILES["pdf"]['name'];
                $uploadedfile5=uploadcustomImg($fileforupload5,folder_brand.'/pdf',"pdf");       
            }else{
                $uploadedfile5='';
            }
            
            if($_FILES["home_image"]['name']<>''){
                $fileforupload6=$_FILES["home_image"]['name'];
                $uploadedfile6=uploadcustomImg($fileforupload6,folder_brand.'/home',"home_image");       
            }else{
                $uploadedfile6='';
            }

            $finalArray=array('parent_id'=>$data['parent_id'],'brand_name'=>$data['brand_name'],
              'brand_tagline'=>$data['brand_tagline'],'brand_category'=>$data['brand_category'],
              'brand_styling'=>$data['brand_styling'],'description'=>htmlentities($data['description']),
              'short_intro'=>htmlentities($data['short_intro']),
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'foot_note'=>htmlentities($data['foot_note']),
              'brand_video'=>htmlentities($data['brand_video']),
              'logo_image'=>$uploadedfile,
              'secondary_logo'=>$uploadedfile2,
              'listimg'=>$uploadedfile3,
              'infographic'=>$uploadedfile4,
              'pdf'=>$uploadedfile5,'home_image'=>$uploadedfile6,'home_intro'=>htmlentities($data['home_intro']),
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);


            $this->db->insert(brands,$finalArray);
            $lastinsertedId = $this->db->insert_id();

        /********send data to banner table*******/
        /*  
        $bannerimage= $_FILES['banner_image']['name'];
        $optionKeys  = $bannerimage;
        if($bannerimage){
               foreach($bannerimage as $id=>$key){
                        if(strlen($optionKeys[$id])>0){
                                $uploadedfile=time()."_".$optionKeys[$id];
                                $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/brands/banners/'.$uploadedfile;
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$id],$path);
                                $arrbannerInsert=array('banner_image'=>$uploadedfile,'brand_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                $this->db->insert(banners,$arrbannerInsert);
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
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/brands/banners/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/brands/banners/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_brand.'/banners/'.$uploadedfile;
                                }
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$key],$path);
                                
                                 $finalArray=array('banner_image'=>$uploadedfile,'brand_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                 

                                if(strlen($mobile_banner_image[$key])>0){  
                                    $mobilefile=time()."_".$mobile_banner_image[$key];
                                    if($srvAddr=='::1'){
                                      $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/brands/banners/'.$mobilefile;
                                    }else{
                                      //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/brands/banners/'.$mobilefile;
                                      $mobpath=upath.'/images/'.folder_brand.'/banners/'.$mobilefile;
                                    }
                                    move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 

                                    $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                    $finalArray=array_merge($finalArray,$mobileimgArr);
                                } 

                                $this->db->insert(banners,$finalArray);  
                          }

          }



        /********send data to banner table*******/

        /**********send data to pointers table*******/
        $label = isset($data['label']) ? $data['label'] : "" ;
        #$lastinsertedId=1;

          foreach($label as $key=>$value){
              if(strlen($label[$key])>0){
                $arrpointerInsert=array('brand_id'=>$lastinsertedId,'label'=>$value,'value'=>$data['value'][$key],'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                  $this->db->insert(key_pointers,$arrpointerInsert);
                }
          }
  

        /**********send data to pointers table*******/

        /**********send data to brand carousel table*************/
        $text = isset($data['img_label']) ? $data['img_label'] : "" ;
        foreach($text as $key=>$value){
                  if(strlen($text[$key])>0){
                    $image= $_FILES['carousel_images']['name'];
                    if(isset($image[$key])){
                      //$uploadedfile=time()."_".$image[$key];
                      $uploadedfile=$image[$key];
                      if($srvAddr=='::1'){
                        $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_brand.'/'.folder_brand_carousel.'/'.$uploadedfile;
                      }else{
                        //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_gallery_photos.'/'.$uploadedfile;
                        $path=upath.'/images/'.folder_brand.'/'.folder_brand_carousel.'/'.$uploadedfile;
                      }
                      move_uploaded_file($_FILES["carousel_images"]['tmp_name'][$key],$path);
                    }else{
                      $uploadedfile='';
                    }

                    
                    $arrInsert=array('image'=>$uploadedfile,'brand_id'=>$lastinsertedId,'text'=>$text[$key],'sequence'=>$data['sequence'][$key],'is_active'=>1,'added_on'=> date_stamp(),'added_by' => $user);
                      $this->db->insert(carousel_imaages,$arrInsert);
                    }
              }









        /**********send data to brand carousel table*************/



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}

public function updateBrandData($data,$user){
            $srvAddr=$_SERVER['SERVER_ADDR'];
            $updateid=base64_decode($data['brand_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            //uploadcustomImg($check,"brands");
            $finalArray=array('parent_id'=>$data['parent_id'],'brand_name'=>$data['brand_name'],
              'brand_tagline'=>$data['brand_tagline'],'brand_category'=>$data['brand_category'],
              'brand_styling'=>$data['brand_styling'],'description'=>htmlentities($data['description']),
              'short_intro'=>htmlentities($data['short_intro']),
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'brand_video'=>htmlentities($data['brand_video']),
              'foot_note'=>htmlentities($data['foot_note']),'home_intro'=>htmlentities($data['home_intro']),
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            if($_FILES["image"]['name']<>''){

                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_brand,"image");
                $imgArr=array('logo_image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);
               
            }

            if($_FILES["image2"]['name']<>''){
                $fileforupload2=$_FILES["image2"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_brand,"image2");
                $imgArr2=array('secondary_logo'=>$uploadedfile2);
                $finalArray=array_merge($finalArray,$imgArr2);           
            }

            if($_FILES["listimg"]['name']<>''){
                $fileforupload3=$_FILES["listimg"]['name'];
                $uploadedfile3=uploadcustomImg($fileforupload3,folder_brand.'/listimages',"listimg");
                $imgArr3=array('listimg'=>$uploadedfile3);
                $finalArray=array_merge($finalArray,$imgArr3);       
            }

            if($_FILES["infographic"]['name']<>''){
                $fileforupload4=$_FILES["infographic"]['name'];
                $uploadedfile4=uploadcustomImg($fileforupload4,folder_brand.'/infographics',"infographic"); 
                $imgArr4=array('infographic'=>$uploadedfile4);
                $finalArray=array_merge($finalArray,$imgArr4);      
            }

            if($_FILES["pdf"]['name']<>''){
                $fileforupload5=$_FILES["pdf"]['name'];
                $uploadedfile5=uploadcustomImg($fileforupload5,folder_brand.'/pdf',"pdf"); 
                $imgArr5=array('pdf'=>$uploadedfile5);
                $finalArray=array_merge($finalArray,$imgArr5);      
            }
            
            if($_FILES["home_image"]['name']<>''){
                $fileforupload6=$_FILES["home_image"]['name'];
                $uploadedfile6=uploadcustomImg($fileforupload6,folder_brand.'/home',"home_image"); 
                $imgArr6=array('home_image'=>$uploadedfile6);
                $finalArray=array_merge($finalArray,$imgArr6);      
            }

        $this->db->where('id',$updateid);     
        $this->db->update(brands,$finalArray);
        
        

        /********send data to banner table*******/
       /*
        $bannerimage= $_FILES['banner_image']['name'];
        $optionKeys  = $bannerimage;
        //print_r($optionKeys);
        if($bannerimage){
               foreach($bannerimage as $id=>$key){
                        if(strlen($optionKeys[$id])>0){

                                $uploadedfile=time()."_".$optionKeys[$id];
                                $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/brands/banners/'.$uploadedfile;
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$id],$path);
                                
                                if(isset($data['banner_id'][$id])){
                                 $arrbannerUpdate=array('banner_image'=>$uploadedfile,'updated_on'=> date_stamp(),'updated_by' => $user);
                                    $this->db->where('id',$data['brand_id'][$id]);
                                    $this->db->update(banners,$arrbannerUpdate);
                                }else{
                                  $arrbannerInsert=array('banner_image'=>$uploadedfile,'brand_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                    $this->db->insert(banners,$arrbannerInsert);
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
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/brands/banners/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/brands/banners/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_brand.'/banners/'.$uploadedfile;
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
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/brands/banners/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/brands/banners/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_brand.'/banners/'.$mobilefile;
                                            }

                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $upArray=array_merge($upArray,$mobileimgArr);
                                            #echo 'yelp';
                                      }

                                       $this->db->where('id',$data['banner_id'][$key]); 
                                       $this->db->update(banners,$upArray);
                                    
                                }else{
                                      
                                      if(strlen($bannerimage[$key])>0){
                                        $finalArray=array('banner_image'=>$uploadedfile,'brand_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);

                                        $this->db->insert(banners,$finalArray);
                                        $lastinsertedId = $this->db->insert_id();
                                      }

                                      if(strlen($mobile_banner_image[$key])>0){  
                                            $mobilefile=time()."_".$mobile_banner_image[$key];
                                            if($srvAddr=='::1'){
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/brands/banners/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/brands/banners/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_brand.'/banners/'.$mobilefile;
                                            }
                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $finalArray=array_merge($finalArray,$mobileimgArr);
                                            $this->db->where('id',$lastinsertedId);
                                            $this->db->update(banners,$finalArray);
                                      } 
                                      
                                      
                                  
                                }
                         // }

          }

        /********send data to banner table*******/

        /**********send data to pointers table*******/
        $label = isset($data['label']) ? $data['label'] : "" ;


          foreach($label as $key=>$value){
              if(strlen($label[$key])>0){
                
                if(isset($data['pointer_id'][$key])){
                    $arrpointerUpdate=array('label'=>$value,'value'=>$data['value'][$key],'updated_on'=> date_stamp(),'updated_by' => $user);
                    $this->db->where('id',$data['pointer_id'][$key]);
                    $this->db->update(key_pointers,$arrpointerUpdate);
                }else{
                    $arrpointerInsert=array('brand_id'=>$updateid,'label'=>$value,'value'=>$data['value'][$key],'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                    $this->db->insert(key_pointers,$arrpointerInsert);
                }
          }
        }

        /**********send data to pointers table*******/

        /******send data to carousel table*************/

        $text = isset($data['img_label']) ? $data['img_label'] : "" ;
        foreach($text as $key=>$value){
                  if(strlen($text[$key])>0){
                    $carouimage= $_FILES['carousel_images']['name'];
                    

                    if(isset($data['data_id'][$key])){
                      $arrup=array('text'=>$text[$key],'sequence'=>$data['sequence'][$key],'updated_on'=> date_stamp(),'updated_by' => $user);
                        

                        if(strlen($carouimage[$key])>0){  
                              $carouselimage=time()."_".$carouimage[$key];
                              if($srvAddr=='::1'){
                                  $imgpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/brands/brand_carousel/'.$carouselimage;
                              }else{
                                  $imgpath=upath.'/images/'.folder_brand.'/brand_carousel/'.$carouselimage;
                              }
                              move_uploaded_file($_FILES["carousel_images"]['tmp_name'][$key],$imgpath); 
                              $carimgArr=array('image'=>$carouselimage);
                              $arrup=array_merge($arrup,$carimgArr);
                              
                          }   

                          $this->db->where('id',$data['data_id'][$key]);
                          $this->db->update(carousel_imaages,$arrup);  

                      }else{
                        $arrdataInsert=array('brand_id'=>$updateid,'text'=>$text[$key],'sequence'=>$data['sequence'][$key],'is_active'=>1,'added_on'=> date_stamp(),'added_by' => $user);
                        

                          if(strlen($carouimage[$key])>0){  
                              $carouselimage=time()."_".$carouimage[$key];
                              if($srvAddr=='::1'){
                                  $imgpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/brands/brand_carousel/'.$carouselimage;
                              }else{
                                  $imgpath=upath.'/images/'.folder_brand.'/brand_carousel/'.$carouselimage;
                              }
                              move_uploaded_file($_FILES["carousel_images"]['tmp_name'][$key],$imgpath); 
                              $carimgArr=array('image'=>$carouselimage);
                              $arrdataInsert=array_merge($arrdataInsert,$carimgArr);
                              
                          } 

                          $this->db->insert(carousel_imaages,$arrdataInsert);  



                    }
              }
            }




        /******send data to carousel table*************/



        $msg=1;
        
    return $msg;
}


 
 public function getBrandData($id='',$site='',$cat=''){
        $this->db->select('*');
        
        if($id>0){
          $this->db->where('id', $id); 
        }
        if($site=='1'){
            $this->db->where('is_active',1);
            $this->db->order_by('brand_name','ASC');
        }
        if($cat>0){
            $this->db->where('is_active',1);
            $this->db->where('brand_category',$cat);
            $this->db->order_by('brand_name','ASC');
        }
        
        $this->db->from(brands);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }
 
 
    
    public function deletebrandData($data){

                $this->db->where('id', $data['id']);
                $this->db->delete(brands);
                
                $this->db->where('brand_id', $data['id']);
                $this->db->delete(banners);
                
                $this->db->where('brand_id', $data['id']);
                $this->db->delete(key_pointers);
                
                $this->db->where('brand_id', $data['id']);
                $this->db->delete(carousel_imaages);
                
                $msg=1;
                return $msg;
    }
    
    public function deleteBannerData($data){

                $this->db->where('id', $data['id']);
                $this->db->delete(banners);
                
                $msg=1;
                return $msg;
    }
    
    public function deleteCarouselData($data){

                $this->db->where('id', $data['id']);
                $this->db->delete(carousel_imaages);
                
                $msg=1;
                return $msg;
    }

    
      
    public function getbrandbanners($id,$site=''){
        $this->db->select('*');
        $this->db->where('brand_id', $id); 

        if($site=='1'){
            $this->db->where('is_active',1); 
        }

        $this->db->order_by('id','ASC');
        $this->db->from(banners);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    }

    public function getbrandkeypointers($id,$site=''){
        $this->db->select('*');
        $this->db->where('brand_id', $id); 

        if($site=='1'){
            $this->db->where('is_active',1); 
        }

        $this->db->order_by('id','ASC');
        $this->db->from(key_pointers);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    }

    public function getcarouselimages($id,$site=''){
        $this->db->select('*');
        $this->db->where('brand_id', $id); 

        if($site=='1'){
            $this->db->where('is_active',1); 
        }

        $this->db->order_by('id','ASC');
        $this->db->from(carousel_imaages);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    }



    public function getcarouselimagesforsite($id){
        $this->db->select('*');
        $this->db->where('brand_id', $id);
        $this->db->where('sequence >', '0'); 
        $this->db->order_by('sequence','ASC');
        $this->db->from(carousel_imaages);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    }

    public function updatebrandsequence($data,$user){
      $sequence = isset($data['sequence']) ? $data['sequence'] : "" ;
        foreach($sequence as $key=>$value){
            $arrupdate=array('sequence'=>$data['sequence'][$key]);
            $this->db->where('id',$data['id'][$key]);
            $this->db->update(brands,$arrupdate);            
        }

        $msg=1;
        return $msg;

      }

      public function getbrandforhome(){
        $this->db->select('*');
        $this->db->where('is_active',1);
        $this->db->where('sequence >',0);
        $this->db->order_by('sequence','ASC');
        $this->db->from(brands);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }




}











