<?php

class Offer_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $srvAddr=$_SERVER['SERVER_ADDR'];
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(offers,$data['offer_name'],'offer_name');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            //uploadcustomImg($check,"brands");

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_offers,"image");
                //$imgArr=array('logo_image'=>$uploadedfile);
                //$finalArray=array_merge($ins_arr_1,$imgArr);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile='';
            }
            
            




            $finalArray=array('offer_name'=>$data['offer_name'],
              'description'=>htmlentities($data['description']),
              'short_intro'=>htmlentities($data['short_intro']),
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'offer_image'=>$uploadedfile,
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

            
            

            //print_r($finalArray); 
        $this->db->insert(offers,$finalArray);
        $lastinsertedId = $this->db->insert_id();

        /********send data to banner table*******/
        /*
        $bannerimage= $_FILES['banner_image']['name'];
        $optionKeys  = $bannerimage;
        if($bannerimage){
               foreach($bannerimage as $id=>$key){
                        if(strlen($optionKeys[$id])>0){
                                $uploadedfile=time()."_".$optionKeys[$id];
                                $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_offers.'/banners/'.$uploadedfile;
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$id],$path);
                                $arrbannerInsert=array('banner_image'=>$uploadedfile,'offer_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                $this->db->insert(offer_banners,$arrbannerInsert);
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
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_offers.'/banners/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_offers.'/banners/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_offers.'/banners/'.$uploadedfile;
                                }
                                move_uploaded_file($_FILES["banner_image"]['tmp_name'][$key],$path);
                                
                                 $finalArray=array('banner_image'=>$uploadedfile,'offer_id'=>$lastinsertedId,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                                 

                                if(strlen($mobile_banner_image[$key])>0){  
                                    $mobilefile=time()."_".$mobile_banner_image[$key];
                                    if($srvAddr=='::1'){
                                      $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_offers.'/banners/'.$mobilefile;
                                    }else{
                                      //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_offers.'/banners/'.$mobilefile;
                                      $mobpath=upath.'/images/'.folder_offers.'/banners/'.$mobilefile;
                                    }
                                    move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 

                                    $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                    $finalArray=array_merge($finalArray,$mobileimgArr);
                                } 

                                $this->db->insert(offer_banners,$finalArray);  
                          }

          }

        /********send data to banner table*******/

       

        



        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $srvAddr=$_SERVER['SERVER_ADDR'];
            $updateid=base64_decode($data['offer_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           
               $finalArray=array('offer_name'=>$data['offer_name'],
              'description'=>htmlentities($data['description']),
              'short_intro'=>htmlentities($data['short_intro']),
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_offers,"image");
                $imgArr=array('offer_image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);           
            }
            
            

              $this->db->where('id',$updateid);     
              $this->db->update(offers,$finalArray);
        
        

        /********send data to banner table*******/
       
          $bannerimage= $_FILES['banner_image']['name'];
          $mobile_banner_image= $_FILES['mobile_banner_image']['name'];

          foreach($bannerimage as $key=>$value){
              
                                $uploadedfile=time()."_".$value;
                                if($srvAddr=='::1'){
                                  $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_offers.'/banners/'.$uploadedfile;
                                }else{
                                  //$path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_offers.'/banners/'.$uploadedfile;
                                  $path=upath.'/images/'.folder_offers.'/banners/'.$uploadedfile;
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
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_offers.'/banners/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_offers.'/banners/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_offers.'/banners/'.$mobilefile;
                                            }
                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $upArray=array_merge($upArray,$mobileimgArr);
                                            #echo 'yelp';
                                      }

                                       $this->db->where('id',$data['banner_id'][$key]); 
                                       $this->db->update(offer_banners,$upArray);
                                    
                                }else{
                                      
                                      if(strlen($bannerimage[$key])>0){
                                        $finalArray=array('banner_image'=>$uploadedfile,'offer_id'=>$updateid,'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);

                                        $this->db->insert(offer_banners,$finalArray);
                                        $lastinsertedId = $this->db->insert_id();
                                      }

                                      if(strlen($mobile_banner_image[$key])>0){  
                                            $mobilefile=time()."_".$mobile_banner_image[$key];
                                            if($srvAddr=='::1'){
                                              $mobpath=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.folder_offers.'/banners/'.$mobilefile;
                                            }else{
                                              //$mobpath=$_SERVER['DOCUMENT_ROOT'] . '/images/'.folder_offers.'/banners/'.$mobilefile;
                                              $mobpath=upath.'/images/'.folder_offers.'/banners/'.$mobilefile;
                                            }
                                            move_uploaded_file($_FILES["mobile_banner_image"]['tmp_name'][$key],$mobpath); 
                                            $mobileimgArr=array('mobile_banner_image'=>$mobilefile);
                                            $finalArray=array_merge($finalArray,$mobileimgArr);
                                            $this->db->where('id',$lastinsertedId);
                                            $this->db->update(offer_banners,$finalArray);
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
            $this->db->order_by('offer_name','ASC');
        }
        
        $this->db->from(offers);
        
      
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
                $this->db->delete(offers);
                
                $this->db->where('offer_id', $data['id']);
                $this->db->delete(offer_banners);


                
                
                $msg=1;
                return $msg;
    }

    
      
    public function getbanners($id,$site=''){
        $this->db->select('*');
        $this->db->where('offer_id', $id); 

        if($site=='1'){
            $this->db->where('offer_id', $id);
            $this->db->where('is_active',1); 
        }

        $this->db->order_by('id','ASC');
        $this->db->from(offer_banners);
        
      
      if($query=$this->db->get()){
        $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
    }

    









}











