<?php

class Job_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->model('Common_model');
           

  }
 
 public function insertData($data,$user){
        //print_r($data);
        //exit;
        $chkVal=$this->Common_model->chkDuplicateDataOccurence(jobposts,$data['job_title'],'job_title');
        if($chkVal==1){
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
            
            //print_r($data);
            //exit;

            $finalArray=array('job_title'=>htmlentities($data['job_title']),'job_location'=>htmlentities($data['job_location']),
                'job_qualification'=>htmlentities($data['job_qualification']),
                'no_positions'=>$data['no_positions'],
                'job_description'=>htmlentities($data['job_description']),
                'job_ex_frm'=>htmlentities($data['job_ex_frm']),
                'job_ex_to'=>htmlentities($data['job_ex_to']),
                'to_mail'=>htmlentities($data['to_mail']),
                'added_on'=> date_stamp(),'added_by' => $user,'is_active'=>$pshow);

            if($_FILES["document"]['name']<>''){
                $fileforupload=$_FILES["document"]['name'];
                $uploadedfile=uploadcustomDocs($fileforupload,folder_jobs."/hr_docs","document");
                $docArr=array('document'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$docArr);           
            }

            if(isset($data['cc_mail'])){
                $ccmailArr=array('cc_mail'=>$data['cc_mail']);
                $finalArray=array_merge($finalArray,$ccmailArr);   
            }

            if(!empty($data['valid_from'])){

                $tempfrom=$data['valid_from'];
                $tempfrom=explode("/",$tempfrom);
                $finalvalidfrom=$tempfrom[2].'-'.$tempfrom[0].'-'.$tempfrom[1];

                $validfrmArr=array('job_validity_frm'=>$finalvalidfrom);
                $finalArray=array_merge($finalArray,$validfrmArr);   
            }

            if(!empty($data['valid_to'])){
                
                $tempto=$data['valid_to'];
                $tempto=explode("/",$tempto);
                $finalvalidto=$tempto[2].'-'.$tempto[0].'-'.$tempto[1];

                $validtoArr=array('job_validity_to'=>$finalvalidto);
                $finalArray=array_merge($finalArray,$validtoArr);   
            }

            $this->db->insert(jobposts,$finalArray);
            $lastinsertedId = $this->db->insert_id();


        $msg=1;
        }else{
            $msg=0;
        }
    return $msg;
}


public function updateData($data,$user){
            $updateid=base64_decode($data['job_id']);
            if( empty($data["is_active"]) ) {
                  $pshow=0;
            }else{
                  $pshow=1;
            }
           
           
               $finalArray=array('job_title'=>htmlentities($data['job_title']),'job_location'=>htmlentities($data['job_location']),
                'job_qualification'=>htmlentities($data['job_qualification']),
                'no_positions'=>$data['no_positions'],
                'job_description'=>htmlentities($data['job_description']),
                'job_ex_frm'=>htmlentities($data['job_ex_frm']),
                'job_ex_to'=>htmlentities($data['job_ex_to']),
                'to_mail'=>htmlentities($data['to_mail']),
                'updated_on'=> date_stamp(),'updated_by' => $user,'is_active'=>$pshow);

            if($_FILES["document"]['name']<>''){
                $fileforupload=$_FILES["document"]['name'];
                $uploadedfile=uploadcustomDocs($fileforupload,folder_jobs."/hr_docs","document");
                $docArr=array('document'=>$uploadedfile);
                $finalArray=array_merge($finalArray,$docArr);           
            }

            if(isset($data['cc_mail'])){
                $ccmailArr=array('cc_mail'=>$data['cc_mail']);
                $finalArray=array_merge($finalArray,$ccmailArr);   
            }

            if(!empty($data['valid_from'])){

                $tempfrom=$data['valid_from'];
                $tempfrom=explode("/",$tempfrom);
                $finalvalidfrom=$tempfrom[2].'-'.$tempfrom[0].'-'.$tempfrom[1];

                $validfrmArr=array('job_validity_frm'=>$finalvalidfrom);
                $finalArray=array_merge($finalArray,$validfrmArr);   
            }

            if(!empty($data['valid_to'])){
                
                $tempto=$data['valid_to'];
                $tempto=explode("/",$tempto);
                $finalvalidto=$tempto[2].'-'.$tempto[0].'-'.$tempto[1];

                $validtoArr=array('job_validity_to'=>$finalvalidto);
                $finalArray=array_merge($finalArray,$validtoArr);   
            }


            
              $this->db->where('id',$updateid);     
              $this->db->update(jobposts,$finalArray);
        
        

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
        
        $this->db->from(jobposts);
        
      
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
                $this->db->delete(jobposts);
                
                $this->db->where('job_id', $data['id']);
                $this->db->delete('cyg_job_posts_application_tracker');
                
                $msg=1;
                return $msg;
    }

    
    public function getuniquedatesofappreceiving($jobid){
        $this->db->select('distinct DATE(`date_received`) AS RECD_DATE');
        $this->db->from('cyg_job_posts_application_tracker');
        $this->db->where('job_id', $jobid);
        $this->db->order_by('RECD_DATE', 'DESC');
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 

    }   
    

    









}











