<?php

class Team_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(team,$data['email'],'email');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            
            if(empty($data["is_mgmt"]) ) {
                  $is_mgmt=0;
            }else{
                  $is_mgmt=1;
            }
            
            if(empty($data["is_advisory"]) ) {
                  $is_advisory=0;
            }else{
                  $is_advisory=1;
            }

            /*
            if(empty($data["is_intl"]) ) {
                  $is_intl=0;
            }else{
                  $is_intl=1;
            } 
            */ 


            if($_FILES["image"]['name']<>''){
                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_team,"image");
                //$imgArr=array('logo_image'=>$uploadedfile);
                //$finalArray=array_merge($ins_arr_1,$imgArr);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile='';
            }
            
            if($_FILES["mobile_image"]['name']<>''){
                $fileforupload2=$_FILES["mobile_image"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_team,"mobile_image");
                //$imgArr2=array('secondary_logo'=>$uploadedfile2);
                //$finalArray=array_merge($ins_arr_1,$imgArr2);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile2='';
            }

            if($_FILES["bd_image"]['name']<>''){
                $fileforupload3=$_FILES["bd_image"]['name'];
                $uploadedfile3=uploadcustomImg($fileforupload3,folder_team,"bd_image");
                //$imgArr2=array('secondary_logo'=>$uploadedfile2);
                //$finalArray=array_merge($ins_arr_1,$imgArr2);           
            }else{
                //$finalArray=$ins_arr_1;
                $uploadedfile3='';
            }   



            //$regions=implode(",",$data['region_id']);
            if (!empty($data['region_id']))
                $regions=implode(",",$data['region_id']);
            else
              $regions='';  


            $finalArray=array('first_name'=>$data['first_name'],'middle_name'=>$data['middle_name'],
              'last_name'=>$data['last_name'],'job_title'=>$data['job_title'],'url'=>$data['url'],
              'salutation'=>$data['salutation'],'department_id'=>$data['department_id'],
              'designation_id'=>$data['designation_id'],
              'country'=>$data['country_id'],'region'=>$regions,
              'profile'=>htmlentities($data['profile']),
              'meta_title'=>htmlentities($data['meta_title']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'email'=>$data['email'],'mobile'=>$data['mobile'],
              'position'=>$data['position'],
              'image'=>$uploadedfile,
              'mobile_image'=>$uploadedfile2,'bd_image'=>$uploadedfile3,
              'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow, 'is_mgmt'=>$is_mgmt,'is_advisory'=>$is_advisory);

            $this->db->insert(team,$finalArray);
            $lastinsertedId = $this->db->insert_id();
            //sequencing
            if (!empty($data['position'])){
                if($is_mgmt==1){
                    $this->db->set('position', 'position+1', FALSE);        
                    $this->db->where('is_mgmt',1);
                    $this->db->where('position >=',$data['position']); 
                    $this->db->where('id <>',$lastinsertedId);     
                    $this->db->update(team);  
                          
                }elseif($is_advisory==1){
                    $this->db->set('position', 'position+1', FALSE);        
                    $this->db->where('is_advisory',1);
                    $this->db->where('position >=',$data['position']); 
                    $this->db->where('id <>',$lastinsertedId);     
                    $this->db->update(team); 
                }else{
                    $this->db->set('position', 'position+1', FALSE);        
                    $this->db->where('is_mgmt',0);
                    $this->db->where('is_advisory',0);
                    $this->db->where('position >=',$data['position']); 
                    $this->db->where('id <>',$lastinsertedId);     
                    $this->db->update(team);  
                }

                

            }
            //sequencing

            /**********send data to pointers table*******/
            $highlights = isset($data['highlights']) ? $data['highlights'] : "" ;
            #$lastinsertedId=1;

              foreach($highlights as $key=>$value){
                  if(strlen($highlights[$key])>0){
                    $arrInsert=array('member_id'=>$lastinsertedId,'highlights'=>$highlights[$key],'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                      $this->db->insert(highlights,$arrInsert);
                    }
              }
  

            /**********send data to pointers table*******/

            if (!empty($data['region_id'])){
                $region=$data['region_id'];
                foreach($region as $r){
                      $ins=array('region_id'=>$r,'member_id'=>$lastinsertedId);
                      $this->db->insert(rtms,$ins);
                }
          }


        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $updateid=base64_decode($data['member_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }

            if(empty($data["is_mgmt"]) ) {
                  $is_mgmt=0;
            }else{
                  $is_mgmt=1;
            }
            
            if(empty($data["is_advisory"]) ) {
                  $is_advisory=0;
            }else{
                  $is_advisory=1;
            }

            /*  
            if(empty($data["is_intl"]) ) {
                  $is_intl=0;
            }else{
                  $is_intl=1;
            }
            */
           

              //$regions=implode(",",$data['region_id']);
            if (!empty($data['region_id']))
                $regions=implode(",",$data['region_id']);
            else
              $regions='';
           
              $finalArray=array('first_name'=>$data['first_name'],'middle_name'=>$data['middle_name'],
              'last_name'=>$data['last_name'],'job_title'=>$data['job_title'],'url'=>$data['url'],
              'salutation'=>$data['salutation'],'department_id'=>$data['department_id'],
              'designation_id'=>$data['designation_id'],
              'country'=>$data['country_id'],'region'=>$regions,
              'meta_title'=>htmlentities($data['meta_title']),
              'profile'=>htmlentities($data['profile']),
              'meta_description'=>htmlentities($data['meta_description']),
              'meta_keywords'=>htmlentities($data['meta_keywords']),
              'email'=>$data['email'],'mobile'=>$data['mobile'],
              'position'=>$data['position'],
              'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow,'is_mgmt'=>$is_mgmt,'is_advisory'=>$is_advisory);
              #sequencing
              if (!empty($data['position'])){
                            $query = $this->db->query("select position from ".team." where id='".$updateid."'");
                            $res = $query->row_array();
                            $currentpos=$res['position'];
                            if($is_mgmt==1){
                                if(($currentpos<$data['position'])&&($currentpos>0)){
                                    #echo 'blaah blaah';
                                    $this->db->set('position', $currentpos , FALSE);        
                                    $this->db->where('is_mgmt',1);
                                    $this->db->where('position =',$data['position']); 
                                    $this->db->where('id <>',$updateid);     
                                    $this->db->update(team); 
                                }elseif($currentpos>$data['position']){
                                    
                                    $q = $this->db->query("select max(position) AS MAX_POS from ".team." where is_mgmt='1'");
                                    $r = $q->row_array();
                                    $mxpos=$r['MAX_POS'];
                                    $this->db->set('position', 'position+1', FALSE);        
                                    $this->db->where('is_mgmt',1);
                                    $this->db->where('position >=',$data['position']);
                                    $this->db->where('position <',$mxpos); 
                                    $this->db->where('id <>',$updateid);     
                                    $this->db->update(team);
                                }else{
                                    $this->db->set('position', 'position+1', FALSE);        
                                    $this->db->where('is_mgmt',1);
                                    $this->db->where('position >=',$data['position']); 
                                    $this->db->where('id <>',$updateid);     
                                    $this->db->update(team);
                                }
                            }elseif($is_advisory==1){
                                if(($currentpos<$data['position'])&&($currentpos>0)){
                                    #echo 'blaah blaah';
                                    $this->db->set('position', $currentpos , FALSE);        
                                    $this->db->where('is_advisory',1);
                                    $this->db->where('position =',$data['position']); 
                                    $this->db->where('id <>',$updateid);     
                                    $this->db->update(team); 
                                }elseif($currentpos>$data['position']){
                                    $q = $this->db->query("select max(position) AS MAX_POS from ".team." where is_advisory='1'");
                                    $r = $q->row_array();
                                    $mxpos=$r['MAX_POS'];
                                    $this->db->set('position', 'position+1', FALSE);        
                                    $this->db->where('is_advisory',1);
                                    $this->db->where('position >=',$data['position']);
                                    $this->db->where('position <',$mxpos);  
                                    $this->db->where('id <>',$updateid);     
                                    $this->db->update(team);
                                }else{
                                    $this->db->set('position', 'position+1', FALSE);        
                                    $this->db->where('is_advisory',1);
                                    $this->db->where('position >=',$data['position']); 
                                    $this->db->where('id <>',$updateid);     
                                    $this->db->update(team);
                                }
                            }else{
                                if(($currentpos<$data['position'])&&($currentpos>0)){
                                    #echo 'blaah blaah';
                                    $this->db->set('position', $currentpos , FALSE);        
                                    $this->db->where('is_mgmt',0);
                                    $this->db->where('is_advisory',0);
                                    $this->db->where('position =',$data['position']); 
                                    $this->db->where('id <>',$updateid);     
                                    $this->db->update(team); 
                                }elseif($currentpos>$data['position']){
                                    $q = $this->db->query("select max(position) AS MAX_POS from ".team." where is_mgmt='0'");
                                    $r = $q->row_array();
                                    $mxpos=$r['MAX_POS'];
                                    $this->db->set('position', 'position+1', FALSE);        
                                    $this->db->where('is_mgmt',0);
                                    $this->db->where('is_advisory',0);
                                    $this->db->where('position >=',$data['position']);
                                    $this->db->where('position <',$mxpos);  
                                    $this->db->where('id <>',$updateid);     
                                    $this->db->update(team);
                                }else{
                                    $this->db->set('position', 'position+1', FALSE);        
                                    $this->db->where('is_mgmt',0);
                                    $this->db->where('is_advisory',0);
                                    $this->db->where('position >=',$data['position']); 
                                    $this->db->where('id <>',$updateid);     
                                    $this->db->update(team);
                                }
                                
                            }
                        }
                 #sequencing        

            if($_FILES["image"]['name']<>''){

                $fileforupload=$_FILES["image"]['name'];
                $uploadedfile=uploadcustomImg($fileforupload,folder_team,"image");
                $imgArr=array('image'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$imgArr);
               
            }

            if($_FILES["mobile_image"]['name']<>''){
                $fileforupload2=$_FILES["mobile_image"]['name'];
                $uploadedfile2=uploadcustomImg($fileforupload2,folder_team,"mobile_image");
                $imgArr2=array('mobile_image'=>$uploadedfile2);
                $finalArray=array_merge($finalArray,$imgArr2);           
            }

            if($_FILES["bd_image"]['name']<>''){
                $fileforupload3=$_FILES["bd_image"]['name'];
                $uploadedfile3=uploadcustomImg($fileforupload3,folder_team,"bd_image");
                $imgArr3=array('bd_image'=>$uploadedfile3);
                $finalArray=array_merge($finalArray,$imgArr3);           
            }            
              $this->db->where('id',$updateid);     
              $this->db->update(team,$finalArray);

              /**********send data to highlights table*******/
                $highlights = isset($data['highlights']) ? $data['highlights'] : "" ;


                foreach($highlights as $key=>$value){
                    if(strlen($highlights[$key])>0){
                      
                      if(isset($data['highlight_id'][$key])){
                          $arrhighUpdate=array('highlights'=>$data['highlights'][$key],'updated_on'=> date_stamp(),'updated_by' => $user);
                          $this->db->where('id',$data['highlight_id'][$key]);
                          $this->db->update(highlights,$arrhighUpdate);
                      }else{
                          $arrhighInsert=array('member_id'=>$updateid,'highlights'=>$data['highlights'][$key],'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>1);
                          $this->db->insert(highlights,$arrhighInsert);
                      }
                }
              }

          /**********send data to highlights table*******/

          if (!empty($data['region_id'])){
                $region=$data['region_id'];
                foreach($region as $r){
                      
                        $query = $this->db->query("select id from cyg_region_team_member_sequence where member_id='".$updateid."' and region_id='".$r."'");  
                          $result=$query->num_rows();

                        if($result==0){    
                            $ins=array('region_id'=>$r,'member_id'=>$updateid);
                            $this->db->insert(rtms,$ins);
                        }

                        #delete
                        if($result>0){    
                            $this->db->where('member_id', $updateid);
                            $this->db->where('region_id <>', $r);
                            $this->db->delete(rtms);
                        }
                        
                }
          }
        
        

        $msg=1;
        
    return $msg;
}


    public function getdatas($id='',$site=''){
        $this->db->select('*');
        
        if($id>0){
          $this->db->where('id', $id); 
        }
        if($site=='1'){
            $this->db->where('is_active',1);
            $this->db->order_by('first_name','ASC');
        }
        
        $this->db->from(team);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }

    public function getdata($id='',$site=''){

      $this->db->select('t.*,dept.deptt_name, desig.designation'); 
      $this->db->from(team. ' t');
      $this->db->join(department .' dept', 'dept.id = t.department_id'); 
      $this->db->join(designation .' desig', 'desig.id = t.designation_id'); 
      
      if($id>0){
          $this->db->where('t.id', $id); 
      }

      if($site=='1'){
            $this->db->where('t.is_active',1);
      }

      $this->db->order_by('t.first_name','ASC'); 

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
                $this->db->delete(team);

                $this->db->where('member_id', $data['id']);
                $this->db->delete(highlights);
                
                $this->db->where('member_id', $data['id']);
                $this->db->delete(rmts);
                
                $msg=1;
                return $msg;
    }

    
    public function gethighlightsofamember($id){
        $this->db->select('*');
        $this->db->where('member_id',$id);
        $this->db->order_by('id','ASC');
        $this->db->from(highlights);
        
      
        if($query=$this->db->get()){
          //echo $this->db->last_query();
            //return $query->row_array();
            return $query->result_array();
        }else{
          return false;
        } 
    }  
    

    
    public function updateteamsequence($data,$user){
      $sequence = isset($data['sequence']) ? $data['sequence'] : "" ;
        foreach($sequence as $key=>$value){
            $arrupdate=array('sequence'=>$data['sequence'][$key]);
            $this->db->where('id',$data['id'][$key]);
            $this->db->update(rtms,$arrupdate);            
        }

        $msg=1;
        return $msg;

}




}






