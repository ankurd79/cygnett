<?php

class Sitenav_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
     $srvAddr=$_SERVER['SERVER_ADDR'];
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(site_navigation,$data['menu_name'],'menu_name');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            

            if (!empty($data['top_navigation'])){
              $tpnav=$data['top_navigation'];
           }else{
              $tpnav='';
           } 

            $finalArray=array('menu_name'=>$data['menu_name'],
              'parent_id'=>$data['parent_id'],'url'=>$data['url'],
              'meta_title'=>$data['meta_title'],
              'meta_description'=>$data['meta_description'],
              'meta_keywords'=>$data['meta_keywords'],
              'dropdown_text'=>$data['dropdown_text'],
              'page_text'=>$data['page_text'],
              'top_navigation'=>$tpnav,
              'priority'=>$data['priority'],
              'roll_options'=>$data['roll_options'],
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);
              $this->db->insert(site_navigation,$finalArray);
              $lastinsertedId = $this->db->insert_id();


             //**** //

              //$this->db->where('id',$updateid);     
              //$this->db->update(site_navigation,$finalArray);


              /*******insert in roll over table**********/

              $title = isset($data['title']) ? $data['title'] : "" ;
              #$lastinsertedId=1;

              foreach($title as $key=>$value){
                  if(strlen($title[$key])>0){

                    $image= $_FILES['image']['name'];

                    if(isset($image[$key])){
                      //$uploadedfile=time()."_".$image[$key];
                      $uploadedfile=$image[$key];
                      if($srvAddr=='::1'){
                            $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_nav_ro.'/'.$uploadedfile;
                      }else{
                          $path=upath.'/images/'.folder_nav_ro.'/'.$uploadedfile;
                      }
                      move_uploaded_file($_FILES["image"]['tmp_name'][$key],$path);
                    }else{
                      $uploadedfile='';
                    }

                    
                    
                    $arrInsert=array('image'=>$uploadedfile,'title'=>$title[$key],'description'=>$data['description'][$key],'is_active'=>1,'added_on'=> date_stamp(),'added_by' => $user,'navigation_id'=>$lastinsertedId);
                      $this->db->insert(nav_roll_over,$arrInsert);
                    }
              }





              /*******insert in roll over table**********/
              
              /****insert in banner table****/


              $bannerimage= $_FILES['banner_image']['name'];
              $mobile_banner_image= $_FILES['mobile_banner_image']['name'];

          foreach($bannerimage as $key=>$value){
              if(strlen($bannerimage[$key])>0){
                                $uploadedfile=time()."_".$value;
                                if($srvAddr=='::1'){
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_nav_banners.'/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/brands/banners/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_nav_banners.'/'.$uploadedfile;
                                }
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$key],$path);
                                
                                 $finalArray=array('banner_image'=>$uploadedfile,'navigation_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                 

                                if(strlen($mobile_banner_image[$key])>0){  
                                    $mobilefile=time()."_".$mobile_banner_image[$key];
                                    if($srvAddr=='::1'){
                                      $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_nav_banners.'/'.$mobilefile;
                                    }else{
                                      //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/brands/banners/'.$mobilefile;
                                      $mobpath=upath.'/images/'.folder_nav_banners.'/'.$mobilefile;
                                    }
                                    move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 

                                    $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                    $finalArray=array_merge($finalArray,$mobileimgArr);
                                } 

                                $this->db->insert(nav_banners,$finalArray);  
                          }

          }





              /****insert in banner table****/




        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $srvAddr=$_SERVER['SERVER_ADDR'];
            $updateid=base64_decode($data['nav_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           if (!empty($data['top_navigation'])){
              $tpnav=$data['top_navigation'];
           }else{
              $tpnav='';
           }

           if (!empty($data['roll_options'])){
              $rollop=$data['roll_options'];
           }else{
              $rollop='';
           }

           
               $finalArray=array('menu_name'=>$data['menu_name'],
              'parent_id'=>$data['parent_id'],'url'=>$data['url'],
              'meta_title'=>$data['meta_title'],
              'meta_description'=>$data['meta_description'],
              'meta_keywords'=>$data['meta_keywords'],
              'dropdown_text'=>$data['dropdown_text'],
              'page_text'=>$data['page_text'],
              'top_navigation'=>$tpnav,
              'priority'=>$data['priority'],
              'roll_options'=>$rollop,
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            
              $this->db->where('id',$updateid);     
              $this->db->update(site_navigation,$finalArray);

              /**********send data to places table*******/
        $title = isset($data['title']) ? $data['title'] : "" ;

          //$finalupplaceArray=array();
          if($title) { 
            foreach($title as $key=>$value){

                if(strlen($title[$key])>0){
                  
                  if(isset($data['rollover_id'][$key])){
                    //echo 'greet';

                    $titleArr=array('title'=>$data['title'][$key],' description'=>$data['description'][$key],'updated_on'=> date_stamp(),'updated_by' => $user);
                       
                      

                     if($_FILES["image"]['name'][$key]<>''){

                        $uploadedfile1=time()."_".$_FILES["image"]['name'][$key];
                        if($srvAddr=='::1'){
                          $path1=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_nav_ro.'/'.$uploadedfile1;
                        }else{
                            $path1=upath.'/images/'.folder_nav_ro.'/'.$uploadedfile1;
                        }
                        move_uploaded_file($_FILES["image"]['tmp_name'][$key],$path1);
                        $imgplaceArr=array('image'=>$uploadedfile1);
                        $titleArr=array_merge($titleArr,$imgplaceArr);
                 
                      }  

                      //print_r($finalupplaceArray);

                      $this->db->where('id',$data['rollover_id'][$key]);
                      $this->db->update(nav_roll_over,$titleArr);
                     
                  }else{
                     



                     $arrfinalInsert=array('title'=>$data['title'][$key],'description'=>$data['description'][$key],'navigation_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);


                      if($_FILES["image"]['name'][$key]<>''){

                        $placeimge=time()."_".$_FILES["image"]['name'][$key];
                        if($srvAddr=='::1'){
                              $pathplaceimg=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_nav_ro.'/'.$placeimge;
                        }else{
                            $pathplaceimg=upath.'/images/'.folder_nav_ro.'/'.$placeimge;
                        }
                        move_uploaded_file($_FILES["image"]['tmp_name'][$key],$pathplaceimg);
                        $imgArr2=array('image'=>$placeimge);
                        $arrfinalInsert=array_merge($arrfinalInsert,$imgArr2);
                 
                      }

                      $this->db->insert(nav_roll_over,$arrfinalInsert);
                  }
            }
          }
        }

        /**********send data to roll0ver table*******/
        
        /********send data to banner table*******/

        $bannerimage= $_FILES['banner_image']['name'];
        $mobile_banner_image= $_FILES['mobile_banner_image']['name'];

          foreach($bannerimage as $key=>$value){
              
                                $uploadedfile=time()."_".$value;
                                if($srvAddr=='::1'){
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_nav_banners.'/'.$uploadedfile;
                                }else{
                                  $path=upath.'/images/'.folder_nav_banners.'/'.$uploadedfile;
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
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_nav_banners.'/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/brands/banners/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_nav_banners.'/'.$mobilefile;
                                            }

                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $upArray=array_merge($upArray,$mobileimgArr);
                                            #echo 'yelp';
                                      }

                                       $this->db->where('id',$data['banner_id'][$key]); 
                                       $this->db->update(nav_banners,$upArray);
                                    
                                }else{
                                      
                                      if(strlen($bannerimage[$key])>0){
                                        $finalArray=array('banner_image'=>$uploadedfile,'navigation_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);

                                        $this->db->insert(nav_banners,$finalArray);
                                        $lastinsertedId = $this->db->insert_id();
                                      }

                                      if(strlen($mobile_banner_image[$key])>0){  
                                            $mobilefile=time()."_".$mobile_banner_image[$key];
                                            if($srvAddr=='::1'){
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_nav_banners.'/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/brands/banners/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_nav_banners.'/'.$mobilefile;
                                            }
                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $finalArray=array_merge($finalArray,$mobileimgArr);
                                            $this->db->where('id',$lastinsertedId);
                                            $this->db->update(nav_banners,$finalArray);
                                      } 
                                      
                                      
                                  
                                }
                         // }

          }

        
        /********send data to banner table*******/
        
        

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
            $this->db->order_by('menu_name','ASC');
        }
        
        $this->db->from(site_navigation);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }

    public function getrolloverdatap($id='',$site=''){
        $this->db->select('*');
        
        if($id>0){
          $this->db->where('navigation_id', $id); 
          $this->db->where('is_active',1);
          $this->db->order_by('id','ASC');
        }
        if($site=='1'){
            $this->db->where('is_active',1);
            $this->db->order_by('id','ASC');
        }
        
        $this->db->from(nav_roll_over);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }

    public function getrolloverdata($id='',$site=''){
        $this->db->select('*');
        
        if($id>0){
          $this->db->where('navigation_id', $id); 
          //$this->db->where('is_active',1);
          $this->db->order_by('id','ASC');
        }
        if($site=='1'){
            $this->db->where('is_active',1);
            $this->db->order_by('id','ASC');
        }
        
        $this->db->from(nav_roll_over);
        
      
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
                $this->db->delete(site_navigation);

                $this->db->where('parent_id', $data['id']);
                $this->db->delete(site_navigation);

                $this->db->where('navigation_id', $data['id']);
                $this->db->delete(nav_roll_over);
                
                $msg=1;
                return $msg;
    }

    public function fetchparentmenu(){
       $this->db->select('*');
       //$this->db->where('is_active',1);
       $this->db->where('parent_id',0);
       ////$this->db->where('priority >',0);
       //$this->db->where('top_navigation',1);
       $this->db->order_by('priority','ASC');
       $this->db->from(site_navigation);

      if($query=$this->db->get()){
          return $query->result_array();
      }else{
        return false;
      } 
    }
      
    public function fetchparentmenuheader(){
       $this->db->select('*');
       //$this->db->where('is_active',1);
       $this->db->where('parent_id',0);
       $this->db->where('priority >',0);
       $this->db->where('top_navigation',1);
       $this->db->order_by('priority','ASC');
       $this->db->from(site_navigation);

      if($query=$this->db->get()){
          return $query->result_array();
      }else{
        return false;
      } 
    }

    public function fetchparentmenufooter(){
       $this->db->select('*');
       //$this->db->where('is_active',1);
       $this->db->where('parent_id',0);
       $this->db->where('priority >',0);
       $this->db->where('top_navigation',2);
       $this->db->where('is_active',1);
       $this->db->order_by('priority','ASC');
       $this->db->from(site_navigation);

      if($query=$this->db->get()){
          return $query->result_array();
      }else{
        return false;
      } 
    }

    public function fetchsubmenu($parentid){
       $this->db->select('*');
       //$this->db->where('is_active',1);
       $this->db->where('parent_id',$parentid);
       $this->db->where('priority >',0);
       $this->db->order_by('priority','ASC');
       $this->db->from(site_navigation);

      if($query=$this->db->get()){
          return $query->result_array();
      }else{
        return false;
      } 
    }
    

    public function getbanners($id,$site=''){
        $this->db->select('*');
        $this->db->where('navigation_id', $id); 

        if($site=='1'){
            $this->db->where('is_active',1); 
        }

        $this->db->order_by('id','ASC');
        $this->db->from(nav_banners);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    }







}











