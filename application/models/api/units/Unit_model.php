<?php

class Unit_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(units,$data['hotel_name'],'hotel_name');
        if($chkVal==1){
            /*
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            */
            $pshow=0;

            if( empty($data["coming_soon"]) ) {
                  $coming_soon=0;
            }else{
                  $coming_soon=1;
            }



            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_units,"image");
                //$imgArr=array('logo_image'=>$uploadedfile);
                //$finalArray=array_merge($ins_arr_1,$imgArr);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile='';
            }

            if($_FILES["limage"]['name']<>''){
                $fileforupload2=$_FILES["limage"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_units,"limage");
                //$imgArr=array('logo_image'=>$uploadedfile);
                //$finalArray=array_merge($ins_arr_1,$imgArr);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile2='';
            }
            
            



            $strhtltypes=implode(",",$data['hotel_type']);
            $finalArray=array('hotel_name'=>$data['hotel_name'],'tag_line'=>$data['tag_line'],
              'brand'=>$data['brand'],'state'=>$data['state'],'country'=>$data['country'],
              'hotel_type'=>$strhtltypes,
              'latitude'=>$data['latitude'],'longitude'=>$data['longitude'],
              'location'=>$data['location'],'video_url'=>$data['video_url'],
              'ta_widget'=>htmlentities($data['ta_widget']),
              'google_map'=>htmlentities($data['google_map']),
              'hotel_schema'=>htmlentities($data['hotel_schema']),
              'booking_widget'=>htmlentities($data['booking_widget']),
              'check_in'=>$data['check_in'],'check_out'=>$data['check_out'],
              'chkout_am_pm'=>$data['chkout_am_pm'],'chkin_am_pm'=>$data['chkin_am_pm'],
              'coming_soon'=>$coming_soon,
              'address_line_1'=>htmlentities($data['address_line_1']),
              'address_line_2'=>htmlentities($data['address_line_2']),
              'description'=>htmlentities($data['description']),  
              'pincode'=>$data['pincode'],
              'image'=>$uploadedfile,'list_image'=>$uploadedfile2,
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

                  //print_r($finalArray); 
              $this->db->insert(units,$finalArray);
              $lastinsertedId = $this->db->insert_id();

              /*******send data to email table**********/

                $emaildata= $data['email'];
                if($emaildata){
                       foreach($emaildata as $emlarr){
                          if($emaildata){
                              $arremail=array('email'=>$emlarr,'hotel_id'=>$lastinsertedId);
                              $this->db->insert(hotel_mails,$arremail);
                          }
                    }
                }

              /*******send data to email table**********/


              /*******send data to phone table**********/

              $mobiledata= $data['mobile'];
                if($mobiledata){
                       foreach($mobiledata as $mobilearr){
                          if($mobiledata){
                              $arrmob=array('mobile'=>$mobilearr,'hotel_id'=>$lastinsertedId);
                              $this->db->insert(hotel_phones,$arrmob);
                          }
                    }
                }

              /*******send data to phone table**********/

              /*******send data to other policy table**********/
              $othpolicy= $data['policy'];
              if($othpolicy){
                foreach($othpolicy as $othpolicyarr){
                          if($othpolicy){
                              $p=array('policy_text'=>$othpolicyarr,'hotel_id'=>$lastinsertedId);
                              $this->db->insert(other_policies,$p);
                          }
                    }
              }

              /*******send data to other policy table**********/

              /*******send data to social media table**********/
              $socialchannel = isset($data['soc_channel']) ? $data['soc_channel'] : "" ;
              #$lastinsertedId=1;

              foreach($socialchannel as $key=>$value){
                  if(strlen($socialchannel[$key])>0){
                      if($value>0){
                          $socialinsert=array('hotel_id'=>$lastinsertedId,'social_id'=>$value,'social_url'=>$data['social_url'][$key]);
                          $this->db->insert(hotel_social_media,$socialinsert);
                        }
                    }
              }

              /*******send data to social media table**********/


              /*******send data to nearby table**********/

              $nearby = isset($data['nearby_area']) ? $data['nearby_area'] : "" ;
              foreach($nearby as $key=>$value){
                if(strlen($nearby[$key])>0){
                  $nearbyInsert=array('hotel_id'=>$lastinsertedId,'nearby_area'=>$value,'image_icon'=>$data['image_icon'][$key],'nearby_detail'=>$data['nearby_detail'][$key],'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                    $this->db->insert(hotel_nearby,$nearbyInsert);
                  }
              }

              /*******send data to nearby table**********/

              /*******send data to facilities table**********/
              $facility_id= isset($data['facility_id']) ? $data['facility_id'] : "" ;
              if (!empty($data['facility_id'])){
                  foreach($facility_id as $f){
                     if(strlen($f)>0){
                          $facilityinsert=array('hotel_id'=>$lastinsertedId,'facility_id'=>$f,'added_on'=> date_stamp(),'added_by' => $user);
                          $this->db->insert(hotel_facility,$facilityinsert);
                      }
    
                  }
              }




              /*******send data to facilities table**********/

        



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $srvAddr=$_SERVER['SERVER_ADDR'];
            $updateid=base64_decode($data['unit_id']);
            /*
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            */
            $pshow=0;

            if( empty($data["coming_soon"]) ) {
                  $coming_soon=0;
            }else{
                  $coming_soon=1;
            }
           
           

              $strhtltypes=implode(",",$data['hotel_type']);
              $finalArray=array('hotel_name'=>$data['hotel_name'],'tag_line'=>$data['tag_line'],
              'brand'=>$data['brand'],'state'=>$data['state'],'country'=>$data['country'],
              'hotel_type'=>$strhtltypes,
              'latitude'=>$data['latitude'],'longitude'=>$data['longitude'],
              'location'=>$data['location'],'video_url'=>$data['video_url'],
              'ta_widget'=>htmlentities($data['ta_widget']),
              'google_map'=>htmlentities($data['google_map']),
              'hotel_schema'=>htmlentities($data['hotel_schema']),
              'booking_widget'=>htmlentities($data['booking_widget']),
              'what3words'=>htmlentities($data['what3words']),
              'check_in'=>$data['check_in'],'check_out'=>$data['check_out'],
              'chkout_am_pm'=>$data['chkout_am_pm'],'chkin_am_pm'=>$data['chkin_am_pm'],
              'coming_soon'=>$coming_soon,
              'address_line_1'=>htmlentities($data['address_line_1']),
              'address_line_2'=>htmlentities($data['address_line_2']),
              'description'=>htmlentities($data['description']),  
              'pincode'=>$data['pincode'],
              'updated_on'=> date_stamp(),'updated_by' => $user);

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_units,"image");
                $imgArr=array('image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);           
            }

            if($_FILES["limage"]['name']<>''){
                $fileforupload2=$_FILES["limage"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload,folder_units,"limage");
                $imgArr2=array('list_image'=>$uploadedfile2);
                $finalArray=array_merge($finalArray,$imgArr2);           
            }
            
            if($coming_soon==0){
              $seqarray=array('sequence'=>0);
              $finalArray=array_merge($finalArray,$seqarray);
            }

              $this->db->where('id',$updateid);     
              $this->db->update(units,$finalArray);

              /*******send data to email table**********/

                $email = isset($data['email']) ? $data['email'] : "" ;
                  foreach($email as $key=>$value){
                      if(strlen($email[$key])>0){
                        
                        if(isset($data['email_id'][$key])){
                            $arremailUpdate=array('email'=>$value);
                            $this->db->where('id',$data['email_id'][$key]);
                            $this->db->update(hotel_mails,$arremailUpdate);
                        }else{
                            $arremailInsert=array('hotel_id'=>$updateid,'email'=>$value);
                            $this->db->insert(hotel_mails,$arremailInsert);
                        }
                  }
                }

              /*******send data to email table**********/
        
              /*******send data to phone table**********/

              $mobile = isset($data['mobile']) ? $data['mobile'] : "" ;
                  foreach($mobile as $key=>$value){
                      if(strlen($mobile[$key])>0){
                        
                        if(isset($data['phone_id'][$key])){
                            $arrphoneUpdate=array('mobile'=>$value);
                            $this->db->where('id',$data['phone_id'][$key]);
                            $this->db->update(hotel_phones,$arrphoneUpdate);
                        }else{
                            $arrphoneInsert=array('hotel_id'=>$updateid,'mobile'=>$value);
                            $this->db->insert(hotel_phones,$arrphoneInsert);
                        }
                  }
                }

              /*******send data to phone table**********/

        
              /*******send data to near by table**********/

                $nearby_area = isset($data['nearby_area']) ? $data['nearby_area'] : "" ;


                foreach($nearby_area as $key=>$value){
                    if(strlen($nearby_area[$key])>0){
                      
                      if(isset($data['nearby_id'][$key])){
                          $arrnearbyUpdate=array('nearby_area'=>$value,'nearby_detail'=>$data['nearby_detail'][$key],'image_icon'=>$data['image_icon'][$key],'updated_on'=> date_stamp(),'updated_by' => $user);
                          $this->db->where('id',$data['nearby_id'][$key]);
                          $this->db->update(hotel_nearby,$arrnearbyUpdate);
                      }else{
                          $arrnearbyInsert=array('hotel_id'=>$updateid,'nearby_area'=>$value,'nearby_detail'=>$data['nearby_detail'][$key],
                            'image_icon'=>$data['image_icon'][$key],'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                          $this->db->insert(hotel_nearby,$arrnearbyInsert);
                      }
                }
              }

              /*******send data to near by table**********/


              /*******send data to social media table**********/

              $soc_channel = isset($data['soc_channel']) ? $data['soc_channel'] : "" ;

               foreach($soc_channel as $key=>$value){
                  if(strlen($soc_channel[$key])>0){
                      if($value>0){
                        if(isset($data['sm_id'][$key])){
                            $arrsocialUpdate=array('social_id'=>$value,'social_url'=>$data['social_url'][$key]);
                            $this->db->where('id',$data['sm_id'][$key]);
                            $this->db->update(hotel_social_media,$arrsocialUpdate);
                        }else{
                            $arrsocialInsert=array('hotel_id'=>$updateid,'social_id'=>$value,'social_url'=>$data['social_url'][$key]);
                            $this->db->insert(hotel_social_media,$arrsocialInsert);
                        }
                    }


                  }

               }

              /*******send data to social media table**********/


              /*******send data to other policy table**********/

              $policy = isset($data['policy']) ? $data['policy'] : "" ;

              foreach($policy as $key=>$value){
                  if(strlen($policy[$key])>0){

                      if(isset($data['other_pol_id'][$key])){
                            $arrpolicyUpdate=array('policy_text'=>$value);
                            $this->db->where('id',$data['other_pol_id'][$key]);
                            $this->db->update(other_policies,$arrpolicyUpdate);
                        }else{
                            $arrpolicyInsert=array('hotel_id'=>$updateid,'policy_text'=>$value);
                            $this->db->insert(other_policies,$arrpolicyInsert);
                        }


                  }

               }
              /*******send data to other policy table**********/

              /*******send data to facility table**********/
              if (!empty($data['facility_id'])){
                  $this->db->where('hotel_id', $updateid);
                  $this->db->delete(hotel_facility);
    
                  $facility_id= isset($data['facility_id']) ? $data['facility_id'] : "" ;
                  foreach($facility_id as $f){
                      $facilityinsert=array('hotel_id'=>$updateid,'facility_id'=>$f,'added_on'=> date_stamp(),'added_by' => $user);
                        $this->db->insert(hotel_facility,$facilityinsert);
    
                  }
              }
              /*******send data to facility table**********/
                
              /******Guest REview Data*****/
              

                $review_by = isset($data['review_by']) ? $data['review_by'] : "" ;

          //$finalupplaceArray=array();
          foreach($review_by as $key=>$value){

              if(strlen($review_by[$key])>0){
                
                if(isset($data['review_id'][$key])){
                  //echo 'greet';

                  $finalupplaceArray=array('review_by'=>$review_by[$key],'review_date'=>$data['review_date'][$key],'review_text'=>$data['guest_review'][$key],'updated_on'=> date_stamp(),'updated_by' => $user,'hotel_id'=>$updateid);
                     
                    

                   if($_FILES["rev_img"]['name'][$key]<>''){

                      $uploadedfile1=time()."_".$_FILES["rev_img"]['name'][$key];
                      if($srvAddr=='::1'){
                        $path1=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/unit_guest_reviews/'.$uploadedfile1;
                      }else{
                        //$path1=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_location.'/places/'.$uploadedfile1;
                        $path1=upath.'/images/unit_guest_reviews/'.$uploadedfile1;
                      }
                      move_uploaded_file($_FILES["rev_img"]['tmp_name'][$key],$path1);
                      $imgrevArr=array('image'=>$uploadedfile1);
                      $finalupplaceArray=array_merge($finalupplaceArray,$imgrevArr);
               
                    }  

                    //print_r($finalupplaceArray);

                    $this->db->where('id',$data['review_id'][$key]);
                    $this->db->update(unit_guest_review,$finalupplaceArray);
                   
                }else{
                   



                   $arrguestrevfinal=array('review_by'=>$review_by[$key],'review_date'=>$data['review_date'][$key],'review_text'=>$data['guest_review'][$key],'added_on'=> date_stamp(),'added_by' => $user,'hotel_id'=>$updateid);


                    if($_FILES["rev_img"]['name'][$key]<>''){

                      $revimg=time()."_".$_FILES["rev_img"]['name'][$key];
                      if($srvAddr=='::1'){
                        $pathrevimg=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/unit_guest_reviews/'.$revimg;
                      }else{
                        
                        $pathrevimg=upath.'/images/unit_guest_reviews/'.$revimg;
                      }
                      
                      move_uploaded_file($_FILES["rev_img"]['tmp_name'][$key],$pathrevimg);
                      $imgArr2=array('image'=>$revimg);
                      $arrguestrevfinal=array_merge($arrguestrevfinal,$imgArr2);
               
                    }

                    $this->db->insert(unit_guest_review,$arrguestrevfinal);
                }
          }
        }




              /******Guest REview Data*****/    


        $msg=1;
        
    return $msg;
}


    public function getData($id='',$site='',$coming=''){
      $this->db->select('u.*,s.name, l.location, l.id as loc_id, c.nicename'); 
      $this->db->from(units. ' u');
      $this->db->join(state .' s', 's.id = u.state'); 
      $this->db->join(location .' l', 'l.id = u.location');
      $this->db->join(country .' c', 'l.country = c.id'); 

      if($id>0){
          $this->db->where('u.id', $id); 
      }

      if($site=='1'){
            $this->db->where('u.is_active',1);
      }

      if($coming=='1'){
            $this->db->order_by('u.sequence','ASC');
            $this->db->where('u.coming_soon',1);
            $this->db->where('u.sequence >',0);
      }

      $this->db->order_by('u.hotel_name','ASC'); 

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
                $this->db->delete(units);

                $msg=1;
                return $msg;
    }

    
    public function getunitPhones($unitid){
      $this->db->select('*');
      $this->db->where('hotel_id', $unitid); 
      $this->db->order_by('id','ASC');
      $this->db->from(hotel_phones);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
                
    }  

    public function getunitEmails($unitid){
      $this->db->select('*');
      $this->db->where('hotel_id', $unitid); 
      $this->db->order_by('id','ASC');
      $this->db->from(hotel_mails);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
                
    }
    

    public function getunitotherPolicies($unitid){

      $this->db->select('*');
      $this->db->where('hotel_id', $unitid); 
      $this->db->order_by('id','ASC');
      $this->db->from(other_policies);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
                
    }

    

    public function getunitsocialMedia($unitid){
      $this->db->select('*');
      $this->db->where('hotel_id', $unitid); 
      $this->db->order_by('id','ASC');
      $this->db->from(hotel_social_media);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }

    public function getunitnearby($unitid){

      $this->db->select('*');
      $this->db->where('hotel_id', $unitid); 
      $this->db->order_by('id','ASC');
      $this->db->from(hotel_nearby);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
      
      
    }

    public function getunitFacilities($unitid){
      $this->db->select('*');
      $this->db->where('hotel_id', $unitid); 
      $this->db->order_by('id','ASC');
      $this->db->from(hotel_facility);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
                
    } 


    public function getunitFacilitiesf($unitid){
      

      $this->db->select('f.*'); 
      $this->db->from(hotel_facilities. ' f');
      $this->db->join(hotel_facility .' hf', 'hf.facility_id = f.id');
      $this->db->where('hf.hotel_id', $unitid); 
      $this->db->order_by('f.facility','ASC'); 
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
                
    } 

    //removals

    public function deleteEmailData($data){
      $this->db->where('id', $data['id']);
      $this->db->delete(hotel_mails);

      $msg=1;
      return $msg;
    }

    public function deleteMobileData($data){
      $this->db->where('id', $data['id']);
      $this->db->delete(hotel_phones);

      $msg=1;
      return $msg;
    }

    public function deleteSocialData($data){
      $this->db->where('id', $data['id']);
      $this->db->delete(hotel_social_media);

      $msg=1;
      return $msg;
    }

    public function deleteNearbyData($data){

      $this->db->where('id', $data['id']);
      $this->db->delete(hotel_nearby);

      $msg=1;
      return $msg;

    }
    
    //room specfic operations
    public function getroomsofunit($unitid='',$roomid=''){
      
      if($unitid>0){
         /* 
        $this->db->select('r.*,b.bed_type'); 
        $this->db->from(rooms. ' r');
        $this->db->join(bed_type .' b', 'b.id = r.bed_type');
        $this->db->where('hotel_id', $unitid);
        $this->db->order_by('room_price','ASC');
        */
        $this->db->select('r.*,b.bed_type,rt.room_type'); 
        $this->db->from(rooms. ' r');
        $this->db->join(room_type .' rt', 'rt.id = r.room_name');
        $this->db->join(bed_type .' b', 'b.id = r.bed_type');
        $this->db->where('hotel_id', $unitid);
        $this->db->where('rt.is_active', 1);
        //$this->db->where('r.is_active', 1);
        $this->db->order_by('room_price','ASC');
        
        
      }elseif($roomid>0){
         /* 
        $this->db->select('*');
        $this->db->from(rooms);
        $this->db->where('id', $roomid);
        */
        
        $this->db->select('r.*,rt.room_type'); 
        $this->db->from(rooms. ' r');
        $this->db->join(room_type .' rt', 'rt.id = r.room_name');
        $this->db->where('rt.is_active', 1);
        //$this->db->where('r.is_active', 1);
        $this->db->where('r.id', $roomid);
      }
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      }

    }


    public function getroomamenity($roomid){
       //$this->db->select('*');
       //$this->db->where('room_id', $roomid); 
       //$this->db->from(room_inclusions);

        $this->db->select('ra.*,ri.*'); 
        $this->db->from(room_amenities. ' ra');
        $this->db->join(room_inclusions .' ri', 'ri.inclusion_id = ra.id');
        $this->db->where('room_id', $roomid);
        $this->db->order_by('ra.room_amenity','ASC');
       

       if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      }
    }


    public function getroomimages($roomid){
      $this->db->select('*');
       $this->db->where('room_id', $roomid); 
       $this->db->from(room_images);
       if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      }
    }

    public function insertroomData($data,$user){
        $srvAddr=$_SERVER['SERVER_ADDR'];
        $unit_id=base64_decode($data['hotel_id']);
       if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
        }

        if( empty($data["is_base"]) ) {
                  $is_base=0;
            }else{
                  $is_base=1;
        }

              $finalArray=array('room_name'=>htmlentities($data['room_name']),
              'room_description '=>htmlentities($data['room_description']),
              'hotel_id'=>$unit_id,
              'room_price'=>$data['room_price'],'min_occupancy'=>$data['min_occupancy'],
              'max_occupancy'=>$data['max_occupancy'],'area'=>$data['area'],
              'area_unit'=>$data['area_unit'],'bed_type'=>$data['bed_type'],
              'be_url'=>htmlentities($data['be_url']),'is_base'=>$is_base,
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

                  //print_r($finalArray); 
              $this->db->insert(rooms,$finalArray);
              $lastinsertedId = $this->db->insert_id();

              if($is_base==1){
                $upArr=array('is_base'=>'0');
                $this->db->where('id<>',$lastinsertedId);
                $this->db->where('hotel_id',$unit_id); 
                $this->db->update(rooms,$upArr);

                /****setting price in unit table, if room is of base category****/
                $this->updatebaserateinUnit($data);
                /****setting price in unit table, if room is of base category****/

              }

              

              /***add room images***/  

              $bannerimage= $_FILES['image']['name'];
              $optionKeys  = $bannerimage;
              if($bannerimage){
                     foreach($bannerimage as $id=>$key){
                              if(strlen($optionKeys[$id])>0){
                                      $uploadedfile=time()."_".$optionKeys[$id];
                                      if($srvAddr=='::1'){
                                        $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_room_images.'/'.$uploadedfile;
                                      }else{
                                        //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_room_images.'/'.$uploadedfile;
                                        $path=upath.'/images/'.folder_room_images.'/'.$uploadedfile;
                                      }
                                      move_uploaded_file($_FILES["image"]['tmp_name'][$id],$path);
                                      $arrbannerInsert=array('image'=>$uploadedfile,'room_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                      $this->db->insert(room_images,$arrbannerInsert);
                              }
                          }
              }



               /***add room images***/

               //*******send data to hotel room inclusions****/ 

               $inclusion_id= isset($data['inclusion_id']) ? $data['inclusion_id'] : "" ;
               if($inclusion_id){
                foreach($inclusion_id as $f){
                    $inclusioninsert=array('hotel_id'=>$unit_id,'room_id'=>$lastinsertedId,'inclusion_id'=>$f,'added_on'=> date_stamp(),'added_by' => $user);
                      $this->db->insert(room_inclusions,$inclusioninsert);

                }
              }


               //*******send data to hotel room inclusions****/ 




              return  $msg=1;



    }

    public function updatebaserateinUnit($data){
      $srvAddr=$_SERVER['SERVER_ADDR'];
      $array = array('rate'=>$data['room_price']);
      $this->db->where('id',base64_decode($data['hotel_id']));     
      $this->db->update(units,$array);
    }




    public function updateroomData($data,$user){
      $update_id=base64_decode($data['room_id']);
      $unit_id=base64_decode($data['hotel_id']);
       if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
        }

        if( empty($data["is_base"]) ) {
                  $is_base=0;
            }else{
                  $is_base=1;
        }

            $finalArray=array('room_name'=>htmlentities($data['room_name']),
              'room_description '=>htmlentities($data['room_description']),
              'room_price'=>$data['room_price'],'min_occupancy'=>$data['min_occupancy'],
              'max_occupancy'=>$data['max_occupancy'],'area'=>$data['area'],
              'area_unit'=>$data['area_unit'],'bed_type'=>$data['bed_type'],
              'be_url'=>htmlentities($data['be_url']),'is_base'=>$is_base,
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);
              $this->db->where('id',$update_id);     
              $this->db->update(rooms,$finalArray);

              /****room inclusions***/
              $this->db->where('room_id', $update_id);
              $this->db->delete(room_inclusions);

              if($is_base==1){
                $upArr=array('is_base'=>'0');
                $this->db->where('id<>',$update_id); 
                $this->db->where('hotel_id',$unit_id); 
                $this->db->update(rooms,$upArr);
                /****setting price in unit table, if room is of base category****/
                $this->updatebaserateinUnit($data);
                /****setting price in unit table, if room is of base category****/
              }

              $inclusion_id= isset($data['inclusion_id']) ? $data['inclusion_id'] : "" ;
              if($inclusion_id){
                foreach($inclusion_id as $f){
                    $inclusioninsert=array('hotel_id'=>$unit_id,'room_id'=>$update_id,'inclusion_id'=>$f,'added_on'=> date_stamp(),'added_by' => $user);
                      $this->db->insert(room_inclusions,$inclusioninsert);

                }
              }
              /****room inclusions***/

              /********room images*******/


                  $bannerimage= $_FILES['image']['name'];
                  $optionKeys  = $bannerimage;
                  //print_r($optionKeys);
                  if($bannerimage){
                         foreach($bannerimage as $id=>$key){
                                  if(strlen($optionKeys[$id])>0){

                                          $uploadedfile=time()."_".$optionKeys[$id];
                                          
                                          if($srvAddr=='::1'){
                                            $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_room_images.'/'.$uploadedfile;
                                            move_uploaded_file($_FILES["image"]['tmp_name'][$id],$path);
                                          }else{
                                            //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_room_images.'/'.$uploadedfile;
                                            $path=upath.'/images/'.folder_room_images.'/'.$uploadedfile;
                                            move_uploaded_file($_FILES["image"]['tmp_name'][$id],$path);
                                          }
                                          
                                          if(isset($data['room_image_id'][$id])){
                                           $arrbannerUpdate=array('image'=>$uploadedfile,'updated_on'=> date_stamp(),'updated_by' => $user);
                                              $this->db->where('id',$data['room_image_id'][$id]);
                                              $this->db->update(room_images,$arrbannerUpdate);
                                              #echo 'hello';
                                          }else{
                                            $arrbannerInsert=array('image'=>$uploadedfile,'room_id'=>$update_id,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                              $this->db->insert(room_images,$arrbannerInsert);
                                              #echo 'post';
                                          }
                                         
                                  }
                              }
                  }



              /********room images*******/
    }

    public function deleteroomlData($data){
        $this->db->where('id', $data['id']);
        $this->db->delete(rooms);

        $this->delroomimages($data);
        $this->delroominclusions($data);

        $msg=1;
        return $msg;
    }

    public function delroomimages($data,$type=''){
      if($type==1){
        $this->db->where('id', $data['id']);
      }else{
        $this->db->where('room_id', $data['id']);
      }
      $this->db->delete(room_images);
    }

    public function delroominclusions($data){
      $this->db->where('room_id', $data['id']);
      $this->db->delete(room_inclusions);

    }


    /**banquet specifc operations**/

    public function getbanquetsofunit($unitid='',$bid=''){
      

      $this->db->select('hm.*,e.meeting_unit'); 
      $this->db->from(hotel_meeting_events. ' hm');
      $this->db->join(meetingevents .' e', 'e.id = hm.meeting_event_id'); 
      if($bid>0){
          $this->db->where('hm.id', $bid); 
      }
      if($unitid>0){
          $this->db->where('hm.hotel_id', $unitid); 
          //$this->db->order_by('e.meeting_unit','ASC');
          $this->db->where('hm.is_active','1'); 
          $this->db->order_by('hm.area','DESC'); 
      }

      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      }

    }


    public function insertbanquetData($data,$user){
        $srvAddr=$_SERVER['SERVER_ADDR'];
        $unit_id=base64_decode($data['hotel_id']);
       if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
        }

        

              $finalArray=array('meeting_event_id'=>$data['meeting_event_id'],
              'description '=>htmlentities($data['description']),
              'hotel_id'=>$unit_id,
              'max_occupancy'=>$data['max_occupancy'],'area'=>$data['area'],
              'area_unit'=>$data['area_unit'],'theatre'=>$data['theatre'],
              'cluster'=>$data['cluster'],'ushape'=>$data['ushape'],'informal'=>$data['informal'],
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

                  //print_r($finalArray); 
              $this->db->insert(hotel_meeting_events,$finalArray);
              $lastinsertedId = $this->db->insert_id();

              
              

              /***add banquet images***/  

              $bannerimage= $_FILES['image']['name'];
              $optionKeys  = $bannerimage;
              if($bannerimage){
                     foreach($bannerimage as $id=>$key){
                              if(strlen($optionKeys[$id])>0){
                                      $uploadedfile=time()."_".$optionKeys[$id];
                                      
                                      if($srvAddr=='::1'){
                                        $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_banquet_images.'/'.$uploadedfile;
                                      }else{
                                        //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_banquet_images.'/'.$uploadedfile;
                                        $path=upath.'/images/'.folder_banquet_images.'/'.$uploadedfile;
                                      }
                                      
                                      move_uploaded_file($_FILES["image"]['tmp_name'][$id],$path);
                                      $arrbannerInsert=array('image'=>$uploadedfile,'hotel_id'=>$unit_id,'meeting_event_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                      $this->db->insert(hotel_meeting_events_images,$arrbannerInsert);
                              }
                          }
              }



               /***add banquet images***/

               




              return  $msg=1;



    }

    public function deletebanquetData($data){
        $this->db->where('id', $data['id']);
        $this->db->delete(hotel_meeting_events);
        $this->delbanquetimages($data,'');
        $msg=1;
        return $msg;
    }

    public function delbanquetimages($data,$type=''){
      if($type==1){
        $this->db->where('id', $data['id']);
      }else{
        $this->db->where('meeting_event_id ', $data['id']);
      }
      $this->db->delete(hotel_meeting_events_images);
    }


    public function getbanquetimages($banquetid){
      $this->db->select('*');
       $this->db->where('meeting_event_id', $banquetid); 
       $this->db->from(hotel_meeting_events_images);
       if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      }
    }

    public function updatebanquetData($data,$user){
        $updateid=base64_decode($data['banquet_id']);
        $hotel_id=base64_decode($data['hotel_id']);
       if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
        }

        

              $finalArray=array('meeting_event_id'=>$data['meeting_event_id'],
              'description '=>htmlentities($data['description']),
              'max_occupancy'=>$data['max_occupancy'],'area'=>$data['area'],
              'area_unit'=>$data['area_unit'],'theatre'=>$data['theatre'],
              'cluster'=>$data['cluster'],'ushape'=>$data['ushape'],'informal'=>$data['informal'],
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

                  //print_r($finalArray); 
              $this->db->where('id',$updateid);
              $this->db->update(hotel_meeting_events,$finalArray);


              
              

              /***add banquet images***/  

                  $bannerimage= $_FILES['image']['name'];
                  $optionKeys  = $bannerimage;
                  //print_r($optionKeys);
                  if($bannerimage){
                         foreach($bannerimage as $id=>$key){
                                  if(strlen($optionKeys[$id])>0){

                                          $uploadedfile=time()."_".$optionKeys[$id];
                                          
                                          if($srvAddr=='::1'){
                                            $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_banquet_images.'/'.$uploadedfile;
                                            move_uploaded_file($_FILES["image"]['tmp_name'][$id],$path);
                                          }else{
                                             //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_banquet_images.'/'.$uploadedfile;
                                             $path=upath.'/images/'.folder_banquet_images.'/'.$uploadedfile;
                                            move_uploaded_file($_FILES["image"]['tmp_name'][$id],$path);
                                          }
                                          
                                          if(isset($data['b_image_id'][$id])){
                                           $arrbannerUpdate=array('image'=>$uploadedfile,'updated_on'=> date_stamp(),'updated_by' => $user);
                                              $this->db->where('id',$data['b_image_id'][$id]);
                                              $this->db->update(hotel_meeting_events_images,$arrbannerUpdate);
                                              #echo 'hello';
                                          }else{
                                            $arrbannerInsert=array('image'=>$uploadedfile,'hotel_id'=>$hotel_id,'meeting_event_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                              $this->db->insert(hotel_meeting_events_images,$arrbannerInsert);
                                              #echo 'post';
                                          }
                                         
                                  }
                              }
                  }




               /***add banquet images***/

               




              return  $msg=1;



    }

    /**banquet specifc operations**/

    /**restaurant specific**/

    public function getrestaurantsofunit($unitid='',$rid=''){
      

      $this->db->select('hr.*,r.name'); 
      $this->db->from(hotel_restaurant. ' hr');
      $this->db->join(restaurants .' r', 'r.id = hr.restaurant_id'); 
      if($rid>0){
          $this->db->where('hr.id', $rid); 
      }
      if($unitid>0){
          $this->db->where('hr.hotel_id', $unitid); 
          $this->db->order_by('r.name','ASC'); 
      }

      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      }

    }

    public function getrestaurantimages($restaurantid){
      $this->db->select('*');
       $this->db->where('restaurant_id', $restaurantid); 
       $this->db->from(hotel_restaurant_images);
       if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      }
    }

    public function getrestaurantmobile($restaurantid){
      $this->db->select('*');
       $this->db->where('restaurant_id', $restaurantid); 
       $this->db->from(hotel_restaurant_contact);
       if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      }
    }
    public function insertrestaurantData($data,$user){
        $srvAddr=$_SERVER['SERVER_ADDR'];
        $unit_id=base64_decode($data['hotel_id']);
        if( empty($data["is_active"]) ) {
              $pshow=0;
        }else{
              $pshow=1;
        }

        

              $finalArray=array('restaurant_id'=>$data['restaurant_id'],
              'description '=>htmlentities($data['description']),
              'hotel_id'=>$unit_id,
              'open_time'=>$data['open_time'],'open_am_pm'=>$data['open_am_pm'],
              'close_time'=>$data['close_time'],'close_am_pm'=>$data['close_am_pm'],
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);
              $this->db->insert(hotel_restaurant,$finalArray);
              $lastinsertedId = $this->db->insert_id();

              
              

              /***add restaurant images***/  
              $bannerimage= $_FILES['image']['name'];
              $optionKeys  = $bannerimage;
              if($bannerimage){
                     foreach($bannerimage as $id=>$key){
                              if(strlen($optionKeys[$id])>0){
                                      $uploadedfile=time()."_".$optionKeys[$id];
                                      if($srvAddr=='::1'){
                                        $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_restaurant_images.'/'.$uploadedfile;
                                      }else{
                                        //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_restaurant_images.'/'.$uploadedfile;
                                        $path=upath.'/images/'.folder_restaurant_images.'/'.$uploadedfile;
                                      }
                                      move_uploaded_file($_FILES["image"]['tmp_name'][$id],$path);
                                      $arrbannerInsert=array('image'=>$uploadedfile,'hotel_id'=>$unit_id,'restaurant_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                      $this->db->insert(hotel_restaurant_images,$arrbannerInsert);
                              }
                          }
              }

               /***add restaurant images***/

               /***add mobile for restaurant**/

               $mobiledata= $data['mobile'];
                if($mobiledata){
                       foreach($mobiledata as $mobilearr){
                          if($mobiledata){
                              $arrmob=array('mobile'=>$mobilearr,'restaurant_id'=>$lastinsertedId);
                              $this->db->insert(hotel_restaurant_contact,$arrmob);
                          }
                    }
                }

               /***add mobile for restaurant**/




              return  $msg=1;



    }

    public function updaterestaurantData($data,$user){
        $srvAddr=$_SERVER['SERVER_ADDR'];
        $unit_id=base64_decode($data['hotel_id']);
        $res_id=base64_decode($data['res_id']);
        if( empty($data["is_active"]) ) {
              $pshow=0;
        }else{
              $pshow=1;
        }

        

              $finalArray=array('restaurant_id'=>$data['restaurant_id'],
              'description '=>htmlentities($data['description']),
              'hotel_id'=>$unit_id,
              'open_time'=>$data['open_time'],'open_am_pm'=>$data['open_am_pm'],
              'close_time'=>$data['close_time'],'close_am_pm'=>$data['close_am_pm'],
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);
              $this->db->where('id',$res_id);
              $this->db->update(hotel_restaurant,$finalArray);
              

              
              

              /***add restaurant images***/  
              
                $bannerimage= $_FILES['image']['name'];
                  $optionKeys  = $bannerimage;
                  //print_r($optionKeys);
                  if($bannerimage){
                         foreach($bannerimage as $id=>$key){
                                  if(strlen($optionKeys[$id])>0){

                                          $uploadedfile=time()."_".$optionKeys[$id];
                                          
                                          if($srvAddr=='::1'){
                                            $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_restaurant_images.'/'.$uploadedfile;
                                          }else{
                                            //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_restaurant_images.'/'.$uploadedfile;
                                            $path=upath.'/images/'.folder_restaurant_images.'/'.$uploadedfile;
                                          }
                                          
                                          move_uploaded_file($_FILES["image"]['tmp_name'][$id],$path);
                                          
                                          if(isset($data['res_image_id'][$id])){
                                           $arrbannerUpdate=array('image'=>$uploadedfile,'updated_on'=> date_stamp(),'updated_by' => $user);
                                              $this->db->where('id',$data['res_image_id'][$id]);
                                              $this->db->update(hotel_restaurant_images,$arrbannerUpdate);
                                              #echo 'hello';
                                          }else{
                                            $arrbannerInsert=array('image'=>$uploadedfile,'hotel_id'=>$unit_id,'restaurant_id'=>$res_id,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                              $this->db->insert(hotel_restaurant_images,$arrbannerInsert);
                                              #echo 'post';
                                          }
                                         
                                  }
                              }
                  }

               /***add restaurant images***/

               /***add mobile for restaurant**/
               $mobile = isset($data['mobile']) ? $data['mobile'] : "" ;
                  foreach($mobile as $key=>$value){
                      if(strlen($mobile[$key])>0){
                        
                        if(isset($data['mobile_id'][$key])){
                            $arrphoneUpdate=array('mobile'=>$value);
                            $this->db->where('id',$data['mobile_id'][$key]);
                            $this->db->update(hotel_restaurant_contact,$arrphoneUpdate);
                        }else{
                            $arrphoneInsert=array('restaurant_id'=>$res_id,'mobile'=>$value);
                            $this->db->insert(hotel_restaurant_contact,$arrphoneInsert);
                        }
                  }
                }
               

               /***add mobile for restaurant**/




              return  $msg=1;



    }

    public function delrestaurantimages($data,$type=''){
      if($type==1){
        $this->db->where('id', $data['id']);
      }else{
        $this->db->where('restaurant_id ', $data['id']);
      }
      $this->db->delete(hotel_restaurant_images);
    }

    public function delrestaurantmobiles($data,$type=''){
      if($type==1){
        $this->db->where('id', $data['id']);
      }else{
        $this->db->where('restaurant_id ', $data['id']);
      }
      $this->db->delete(hotel_restaurant_contact);
    }

    public function deleterestaurantData($data){
        $this->db->where('id', $data['id']);
        $this->db->delete(hotel_restaurant);
        $this->delrestaurantmobiles($data,'');
        $this->delrestaurantimages($data,'');
        $msg=1;
        return $msg;
    }

    /**restaurant specific**/


    /***gallery specific**/

      public function getgalleryofunit($unitid='',$gid=''){
        $this->db->select('*'); 
        $this->db->from(hotel_gallery);
        if($gid>0){
            $this->db->where('id', $gid); 
        }
        if($unitid>0){
            $this->db->where('hotel_id', $unitid); 
            //$this->db->where('sequence >','0');
            $this->db->order_by('sequence','ASC'); 
        }

      
        if($query=$this->db->get()){
          //echo $this->db->last_query();
            //return $query->row_array();
            return $query->result_array();
        }else{
          return false;
        }

    }

    public function insertphotoData($data,$user){
            $srvAddr=$_SERVER['SERVER_ADDR'];
            $text = isset($data['text']) ? $data['text'] : "" ;
            $unit_id=base64_decode($data['hotel_id']);
            #$lastinsertedId=1;

              foreach($text as $key=>$value){
                  if(strlen($text[$key])>0){
                    $image= $_FILES['image']['name'];
                    if(isset($image[$key])){
                      //$uploadedfile=time()."_".$image[$key];
                      $uploadedfile=$image[$key];
                      if($srvAddr=='::1'){
                        $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_gallery_photos.'/'.$uploadedfile;
                      }else{
                        //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_gallery_photos.'/'.$uploadedfile;
                        $path=upath.'/images/'.folder_gallery_photos.'/'.$uploadedfile;
                      }
                      move_uploaded_file($_FILES["image"]['tmp_name'][$key],$path);
                    }else{
                      $uploadedfile='';
                    }

                    
                    $arrInsert=array('image'=>$uploadedfile,'hotel_id'=>$unit_id,'text'=>$text[$key],'sequence'=>$data['sequence'][$key],'is_active'=>1,'added_on'=> date_stamp(),'added_by' => $user);
                      $this->db->insert(hotel_gallery,$arrInsert);
                    }
              }


        $msg=1;    
   
        return $msg;

    }

    public function updategalleryData($data,$user){
          $srvAddr=$_SERVER['SERVER_ADDR'];
          $text = isset($data['text']) ? $data['text'] : "" ;
       

              foreach($text as $key=>$value){
                  if(strlen($text[$key])>0){

                    $image= $_FILES['image']['name'];

                    if($image[$key]){
                      
                      $uploadedfile=$image[$key];
                      
                      if($srvAddr=='::1'){
                        $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_gallery_photos.'/'.$uploadedfile;
                      }else{
                        //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_gallery_photos.'/'.$uploadedfile;
                        $path=upath.'/images/'.folder_gallery_photos.'/'.$uploadedfile;
                      }
                      move_uploaded_file($_FILES["image"]['tmp_name'][$key],$path);

                      $arrupdate=array('image'=>$uploadedfile,'text'=>$text[$key],'sequence'=>$data['sequence'][$key],'updated_on'=> date_stamp(),'updated_by' => $user);

                    }else{
                      $arrupdate=array('text'=>$text[$key],'sequence'=>$data['sequence'][$key],'updated_on'=> date_stamp(),'updated_by' => $user);

                    }

                    
                    
                    
                      $this->db->where('id',$data['photo_id'][$key]);
                      $this->db->update(hotel_gallery,$arrupdate);

                    }
              }

              return $msg=1;  

    }

    public function deletegalleryphotoData($data){
        $this->db->where('id', $data['id']);
        $this->db->delete(hotel_gallery);
        
        $msg=1;
        return $msg;
    }



    /***gallery specific**/


    /**unit status management**/

    public function updatehotelandassociatedSTS($data,$user){
      if($data['value']==0){
        $val=1;
      }else{
        $val=0;
      }
      
      $arr=array('is_active' => $val,'updated_on'=>date_stamp(),'updated_by' => $user);
      $this->db->where('id', $data['id']);
      $this->db->update(units, $arr);

      $this->db->where('hotel_id', $data['id']);
      $this->db->update(hotel_gallery, $arr);

      $this->db->where('hotel_id', $data['id']);
      $this->db->update(hotel_meeting_events, $arr);

      $this->db->where('hotel_id', $data['id']);
      $this->db->update(hotel_meeting_events_images, $arr);

      $this->db->where('hotel_id', $data['id']);
      $this->db->update(hotel_restaurant, $arr);

      $this->db->where('hotel_id', $data['id']);
      $this->db->update(hotel_restaurant_images, $arr);

      $this->db->where('hotel_id', $data['id']);
      $this->db->update(rooms, $arr);

      $this->db->where('hotel_id', $data['id']);
      $this->db->update(room_images, $arr);

      
    }



    /**unit status management**/


    /**unit meta info**/

    public function getmetadataofUnit($unitid){
        $this->db->select('*'); 
        $this->db->from(hotel_navigation_meta);
        $this->db->where('hotel_id', $unitid); 
        

      
        if($query=$this->db->get()){
          //echo $this->db->last_query();
            //return $query->row_array();
            return $query->result_array();
        }else{
          return false;
        }
    }


















    



    public function updateunitmetainfo($data,$user){
        $metatitle = isset($data['meta_title']) ? $data['meta_title'] : "" ;
        $unit_id=base64_decode($data['hotel_id']);


              foreach($metatitle as $key=>$value){
                  if(strlen($metatitle[$key])>0){
                    
                    if(isset($data['record_id'][$key])){
                        $arrpointerUpdate=array('meta_title'=>$value,'meta_description'=>$data['meta_description'][$key],'meta_keywords'=>$data['meta_keywords'][$key],'updated_on'=> date_stamp(),'updated_by' => $user);
                        $this->db->where('page_category_id',$data['navigation_id'][$key]);
                        $this->db->where('id',$data['record_id'][$key]);
                        $this->db->update(hotel_navigation_meta,$arrpointerUpdate);
                    }else{
                        $arrpointerInsert=array('meta_title'=>$value,'meta_description'=>$data['meta_description'][$key],'meta_keywords'=>$data['meta_keywords'][$key],'page_category_id'=>$data['navigation_id'][$key],
                          'hotel_id'=>$unit_id,
                          'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                        $this->db->insert(hotel_navigation_meta,$arrpointerInsert);
                    }
              }
            }
        }


    /**unit meta info**/

      /**unit page banners***/
      public function updateunitbanners($data,$user){

              //print_r($data);
              //exit;
              $srvAddr=$_SERVER['SERVER_ADDR'];  
              $unit_id=base64_decode($data['hotel_id']);
              $page_category_id=base64_decode($data['page_category_id']);
              $finalArray=array();
                
              $bannerimage= $_FILES['banner_image']['name'];
              $mobile_banner_image= $_FILES['mobile_banner_image']['name'];

              foreach($bannerimage as $key=>$value){
                                
                                $uploadedfile=time()."_".$value;
                                if($srvAddr=='::1'){
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_unit_page_images.'/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_unit_page_images.'/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_unit_page_images.'/'.$uploadedfile;
                                }
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$key],$path);
                                
                                if(isset($data['banner_id'][$key])){

                                  $upArray=array('updated_on'=> date_stamp(),'updated_by' => $user);

                                  if(strlen($bannerimage[$key])>0){   
                                      $imgArr=array('banner_image'=>$uploadedfile);
                                      $upArray=array_merge($upArray,$imgArr);
                                   }

                                      if(strlen($mobile_banner_image[$key])>0){  
                                            $mobilefile=time()."_".$mobile_banner_image[$key];
                                            
                                            if($srvAddr=='::1'){
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_unit_page_images.'/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_unit_page_images.'/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_unit_page_images.'/'.$mobilefile;
                                              
                                            }
                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $upArray=array_merge($upArray,$mobileimgArr);
                                            #echo 'yelp';
                                      }

                                       $this->db->where('id',$data['banner_id'][$key]); 
                                       $this->db->update(hotel_page_category_banners,$upArray);
                                    
                                }else{
                                      
                                      if(strlen($bannerimage[$key])>0){

                                        //echo base64_decode($data['page_category_id'][$key]);
                                        
                                        $finalArray=array('banner_image'=>$uploadedfile,'hotel_id'=>$unit_id,'page_category_id'=>$page_category_id,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);

                                        $this->db->insert(hotel_page_category_banners,$finalArray);
                                        $lastinsertedId = $this->db->insert_id();
                                        //echo 'helloo';
                                      }

                                      if(strlen($mobile_banner_image[$key])>0){  
                                            $mobilefile=time()."_".$mobile_banner_image[$key];
                                            if($srvAddr=='::1'){
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_unit_page_images.'/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_unit_page_images.'/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_unit_page_images.'/'.$mobilefile;
                                            }
                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $finalArray=array_merge($finalArray,$mobileimgArr);
                                            $this->db->where('id',$lastinsertedId);
                                            $this->db->update(hotel_page_category_banners,$finalArray);
                                      } 
                                      
                                      
                                  
                                }
                         // }

          }

    }
      /***unit page banners***/

      /**offer specific**/

      public function getofferofunit($unitid='',$oid=''){
        /*
        $this->db->select('*'); 
        $this->db->from(hotel_offers);
        if($oid>0){
            $this->db->where('id', $oid); 
        }
        if($unitid>0){
            $this->db->where('hotel_id', $unitid); 
            $this->db->order_by('id','DESC'); 
        }
        */

      $this->db->select('ho.*,o.offer_name'); 
      $this->db->from(offers. ' o');
      $this->db->join(hotel_offers .' ho', 'o.id = ho.master_offer_id'); 
      

      if($unitid>0){
          $this->db->where('ho.hotel_id', $unitid); 
          $this->db->order_by('o.offer_name', 'ASC'); 
      }

      if($oid>0){
            $this->db->where('ho.id',$oid);
      }

      
        
        if($query=$this->db->get()){
          //echo $this->db->last_query();
            //return $query->row_array();
            return $query->result_array();
        }else{
          return false;
        }

    }



      /**offer specific**/

        public function insertofferData($data,$user){
          $srvAddr=$_SERVER['SERVER_ADDR'];

          $unit_id=base64_decode($data['hotel_id']);
          //$chkVal=$this->Common_model->chkDuplicateDataOccurence(hotel_offers,$data['offer_title'],'offer_title');
            //if($chkVal==1){
            
              if( empty($data["is_active"]) ) {
                    $pshow=0;
              }else{
                    $pshow=1;
              }


              //--04/30/2021
              $tempfrom=$data['valid_from'];
              $tempfrom=explode("/",$tempfrom);
              $finalvalidfrom=$tempfrom[2].'-'.$tempfrom[0].'-'.$tempfrom[1];
              

              $tempto=$data['valid_to'];
              $tempto=explode("/",$tempto);
              $finalvalidto=$tempto[2].'-'.$tempto[0].'-'.$tempto[1];

              if($_FILES["image"]['name']<>''){
                  $fileforupload=$_FILES["image"]['name'];
                  $uploadedfile=uploadcustomImg($fileforupload,folder_unit_offers,"image");
                  //$imgArr=array('logo_image'=>$uploadedfile);
                  //$finalArray=array_merge($ins_arr_1,$imgArr);           
              }else{
                  //$finalArray=$ins_arr_1;
                  $uploadedfile='';
              }

        
              $finalArray=array('master_offer_id'=>$data['master_offer_id'],
              'offer_title'=>htmlentities($data['offer_title']),
              'offer_description'=>htmlentities($data['offer_description']),
              'short_intro'=>htmlentities($data['short_intro']),
              'hotel_id'=>$unit_id,'image'=>$uploadedfile,
              'room_id'=>$data['room_id'],
              'nights'=>$data['nights'],'days'=>$data['days'],
              'valid_from'=>$finalvalidfrom,'valid_to'=>$finalvalidto,
              'be_url'=>htmlentities($data['be_url']),'cost'=>$data['cost'],
              'meta_title'=>$data['meta_title'],'meta_description'=>$data['meta_description'],
              'meta_keywords'=>$data['meta_keywords'],
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);
              $this->db->insert(hotel_offers,$finalArray);
              $lastinsertedId = $this->db->insert_id();

              /*****banner upload****/
              $bannerimage= $_FILES['banner_image']['name'];
              $mobile_banner_image= $_FILES['mobile_banner_image']['name'];

              foreach($bannerimage as $key=>$value){
                  if(strlen($bannerimage[$key])>0){
                                    $uploadedfile=time()."_".$value;
                                    if($srvAddr=='::1'){
                                      $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_unit_offers.'/banners/'.$uploadedfile;
                                    }else{
                                      //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_unit_offers.'/banners/'.$uploadedfile;
                                      $path=upath.'/images/'.folder_unit_offers.'/banners/'.$uploadedfile;
                                    }
                                    move_uploaded_file($_FILES["banner_image"]['tmp_name'][$key],$path);
                                    
                                     $finalArray=array('banner_image'=>$uploadedfile,'hotel_id'=>$unit_id,'offer_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                     

                                    if(strlen($mobile_banner_image[$key])>0){  
                                        $mobilefile=time()."_".$mobile_banner_image[$key];
                                        if($srvAddr=='::1'){
                                          $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_unit_offers.'/banners/'.$mobilefile;
                                        }else{
                                          //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_unit_offers.'/banners/'.$mobilefile;
                                          $mobpath=upath.'/images/'.folder_unit_offers.'/banners/'.$mobilefile;
                                        }
                                        move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 

                                        $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                        $finalArray=array_merge($finalArray,$mobileimgArr);
                                    } 

                                    $this->db->insert(unit_offers_banners,$finalArray);  
                              }

              }
              /*****banner upload****/
              $msg=1;
            //}else{
            //  $msg=0;
            //}

            return $msg;
        }


        public function updateofferData($data,$user){
          $srvAddr=$_SERVER['SERVER_ADDR'];

          $updateid=base64_decode($data['offer_id']);
          $unit_id=base64_decode($data['hotel_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }

              $tempfrom=$data['valid_from'];
              $tempfrom=explode("/",$tempfrom);
              $finalvalidfrom=$tempfrom[2].'-'.$tempfrom[0].'-'.$tempfrom[1];
              

              $tempto=$data['valid_to'];
              $tempto=explode("/",$tempto);
              $finalvalidto=$tempto[2].'-'.$tempto[0].'-'.$tempto[1];
              //exit;

            //uploadcustomImg($check,"brands");
            $finalArray=array('master_offer_id'=>$data['master_offer_id'],
              'offer_title'=>htmlentities($data['offer_title']),
              'offer_description'=>htmlentities($data['offer_description']),
              'short_intro'=>htmlentities($data['short_intro']),
               'nights'=>$data['nights'],'days'=>$data['days'],
              'valid_from'=>$finalvalidfrom,'valid_to'=>$finalvalidto,
              'be_url'=>htmlentities($data['be_url']),'cost'=>$data['cost'],
              'meta_title'=>$data['meta_title'],'meta_description'=>$data['meta_description'],
              'meta_keywords'=>$data['meta_keywords'],'room_id'=>$data['room_id'],
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            if($_FILES["image"]['name']<>''){

                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_unit_offers,"image");
                $imgArr=array('image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);
               
            }

            $this->db->where('id',$updateid);     
            $this->db->update(hotel_offers,$finalArray);

            /**banners**/

              $bannerimage= $_FILES['banner_image']['name'];
              $mobile_banner_image= $_FILES['mobile_banner_image']['name'];

                  foreach($bannerimage as $key=>$value){
              
                                $uploadedfile=time()."_".$value;
                                if($srvAddr=='::1'){
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_unit_offers.'/banners/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_unit_offers.'/banners/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_unit_offers.'/banners/'.$uploadedfile;
                                }
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$key],$path);
                                
                                if(isset($data['banner_id'][$key])){

                                  $upArray=array('updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>1);

                                  if(strlen($bannerimage[$key])>0){   
                                      $imgArr=array('banner_image'=>$uploadedfile);
                                      $upArray=array_merge($upArray,$imgArr);
                                   }

                                      if(strlen($mobile_banner_image[$key])>0){  
                                            $mobilefile=time()."_".$mobile_banner_image[$key];
                                            if($srvAddr=='::1'){
                                                $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_unit_offers.'/banners/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_unit_offers.'/banners/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_unit_offers.'/banners/'.$mobilefile;
                                            }
                                            
                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $upArray=array_merge($upArray,$mobileimgArr);
                                            #echo 'yelp';
                                      }

                                       $this->db->where('id',$data['banner_id'][$key]); 
                                       $this->db->update(unit_offers_banners,$upArray);
                                    
                                }else{
                                      
                                      if(strlen($bannerimage[$key])>0){
                                        $finalArray=array('banner_image'=>$uploadedfile,'hotel_id'=>$unit_id,'offer_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);

                                        $this->db->insert(unit_offers_banners,$finalArray);
                                        $lastinsertedId = $this->db->insert_id();
                                      }

                                      if(strlen($mobile_banner_image[$key])>0){  
                                            $mobilefile=time()."_".$mobile_banner_image[$key];
                                            if($srvAddr=='::1'){
                                                $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_unit_offers.'/banners/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_unit_offers.'/banners/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_unit_offers.'/banners/'.$mobilefile;
                                            }

                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $finalArray=array_merge($finalArray,$mobileimgArr);
                                            $this->db->where('id',$lastinsertedId);
                                            $this->db->update(unit_offers_banners,$finalArray);
                                      } 
                                      
                                      
                                  
                                }


                }     

            /**banners**/

        }

        public function deleteofferData($data){
          $this->db->where('id', $data['id']);
          $this->db->delete(hotel_offers);
          $this->deleteofferimages($data,'');
          $msg=1;
          return $msg;
        }

        public function deleteofferimages($data,$type=''){
          if($type==1){
            $this->db->where('id', $data['id']);
          }else{
            $this->db->where('hotel_id ', $data['id']);
          }
          $this->db->delete(unit_offers_banners);
        }

        public function getunitofferimages($offerid){
          $this->db->select('*');
           $this->db->where('offer_id', $offerid); 
           $this->db->from(unit_offers_banners);
           if($query=$this->db->get()){
            //echo $this->db->last_query();
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          }
      }

      /**offer specific**/
      
      public function getunitguestreviews($unitid){
      $this->db->select('*');
      $this->db->where('hotel_id', $unitid); 
      $this->db->order_by('id','DESC');
      $this->db->from(unit_guest_review);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
                
    }
    
    public function getunitmap($unitid){
          $this->db->select('google_map');
           $this->db->where('id', $unitid); 
           $this->db->from(units);
           if($query=$this->db->get()){
            //echo $this->db->last_query();
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          }
      }
      
      
      public function insertdiningquerydata($postdata){
          //03-09-2021
          //2021-09-03
          
          $date=explode("-",$postdata['bookdate']);
          //print_r($date);
          //$finalbookdate=$date[2].'-'.$date[1].'-'.$date[0];
          
          $insArr=array('hotel_id'=>$postdata['htlid'],'restaurant_id'=>$postdata['resid'],'first_name'=>$postdata['fname'],'last_name'=>$postdata['lname'],'mobile'=>$postdata['mobile'],'email'=>$postdata['email'],'total_guests'=>$postdata['guests'],
              'reservation_date'=>$postdata['bookdate'],'instructions'=>$postdata['msg'],'received_datetime'=>date_stamp()
          );
          $this->db->insert(dining_enquiry,$insArr);
      }
      
      public function insertmeetingeventsquerydata(){
          #
      }

}











