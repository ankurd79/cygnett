<?php

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
class Common_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           //$this->load->database();
		   //$this->load->library('image_lib');
		   //$this->load->library("phpmailer_library");
           
  }
 
 


 
 
 
 
    public function chkDuplicateDataOccurence($table,$chkData,$field){
    	$this->db->where($field, $chkData);
    	$query = $this->db->get($table);
    	$num = $query->num_rows();
    	
    	if($num >0){
    		$rtVal=0;
    	}else{
    		$rtVal=1;
    	}
    	
    	return $rtVal;
    }
 
 
public function getHash($data){
  
    $table=admin;   
      
     $query = $this->db->query("select password from ".$table." where email='".$data."'");
     $row = $query->row();
     if (isset($row)){
         
         return $row->password;
     }
 }
 
public function login_admin($email,$pass){
    $this->db->select('*');
    $this->db->from(admin);
    $this->db->where('email',$email);
    $this->db->where('password',$pass);
    $this->db->where('is_active',1);
   
    if($query=$this->db->get())
    {
      return $query->row_array();
    }
    else{
    return false;
    }
  
}
    
      
public function updatestatus($data,$user){
  if($data['value']==0){
    $val=1;
  }else{
    $val=0;
  }
  $arr=array('is_active' => $val,'updated_on'=>date_stamp(),'updated_by' => $user);
  $this->db->where('id', $data['id']);
  $this->db->update($data['table'], $arr);
  
  if($val==0){
    if($data['table']=='cyg_team'){
        $parr=array('sequence'=>0);
        $this->db->where('member_id', $data['id']);
        $this->db->update(rtms, $parr);
    }
  }
      
}


public function getstate(){
        $this->db->select('*');
        $this->db->order_by('name','ASC');
        $this->db->from(state);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
      
}

public function getcity($stateid=''){
  
        $this->db->select('*');
        
        if($stateid>0){
          $this->db->where('state_id', $stateid); 
        }
        $this->db->order_by('city','ASC');
        $this->db->from(city);
        
      
      if($query=$this->db->get()){
        //echo $this->db->last_query();
          //return $query->row_array();
          return $query->result_array();
      }else{
        return false;
      } 
      
}


public function chkFileTypeToBeUploaded($input,$data,$type){

      //print_r($data);
      //exit;

        if(isset($_FILES['uploaded_file'])) {
            $errors     = array();
            $maxsize    = 3000000;
            $acceptable = array('application/pdf','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/msword', 'text/plain');

        if(($_FILES['uploaded_file']['size'] >= $maxsize) || ($_FILES["uploaded_file"]["size"] == 0)) {
            $errors[] = 'File too large. File must be less than 3 MB.';
            $str=1;
        }

        if((!in_array($_FILES['uploaded_file']['type'], $acceptable)) ) {
            $errors[] = 'Invalid file type. Only PDF, DOC OR TXT are accepted.';
            $str=2;
        }
        
        

        if(count($errors) === 0) {
                
                $uploadedfile=time()."_".$_FILES["uploaded_file"]['name'];
                $uploadedfile=str_replace(array("'", "\"", "&quot;", " ","(",")","#","~",'`'), "_", $uploadedfile);
                $path=$_SERVER['DOCUMENT_ROOT'] . '/jobs/resumes/'.$uploadedfile;
                move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$path);
                $str=$uploadedfile;
                if($type==1){
                  $recArr=$this->Job_model->getdata($input['jobid'],'');
                  //print_r($recArr);
                  $mailtemplate='job_application';
                  $subject=''.$input['fname'].' has applied for the post of '.html_entity_decode($recArr['0']['job_title']).'';
                  $to=$recArr['0']['to_mail'];
                  $cc=$recArr['0']['cc_mail'];
                  $file=$str;
                  $additionalinfo=array('extrainfo'=>$recArr['0']['job_title'],'name'=>'Cygnett Careers');
                  
                }
                sendmail($input,$mailtemplate,$subject,$to,$cc,$file,$additionalinfo);
                
                /***insert in tracker**********/
                  $candidatedata = array(
                        'job_id' => $input['jobid'],
                        'candidate_name' => $input['fname'],
                        'mobile'=> $input['mobile'],
                        'email' => $input['email'],
                        'resume'=> $file,'date_received'=>date_stamp()
                  );

                  $this->db->insert('cyg_job_posts_application_tracker', $candidatedata);
                  /***insert in tracker**********/
        } 
            
            return $str;
            
        }
        
    }








}











