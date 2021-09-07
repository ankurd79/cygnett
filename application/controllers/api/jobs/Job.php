<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Job extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/job/Job_model');
       $this->load->model('models/Common_model');

    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function add_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Job_model->insertData($input,$user);
        if($data==1)
            $this->response('Job added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Job already present!', REST_Controller::HTTP_OK);
    } 

    public function update_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Job_model->updateData($input,$user);
        $this->response('Job updated.', REST_Controller::HTTP_OK);
       
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    

    public function remove_post()
    {
        $input = $this->input->post();
        $data=$this->Job_model->deleteData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function fetch_post()
    {
        $input = $this->input->post();
        if($input)
            $data['results']=$this->Job_model->getdata($input['0'],'');
        else
            $data['results']=$this->Job_model->getdata('',1);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function sendapp_post()
    {
        $input = $this->input->post();
        //print_r($input);
        $r=$this->Common_model->chkFileTypeToBeUploaded($input,$_FILES['uploaded_file'],1);

        if($r==1){
            $this->response('1', REST_Controller::HTTP_OK);
        }elseif($r==2){
            $this->response('2', REST_Controller::HTTP_OK);
        }else{
            $this->response('3', REST_Controller::HTTP_OK);
        }

        
    } 
    	
}
?>