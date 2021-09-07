<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Offer extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/offers/Offer_model');

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
        $data=$this->Offer_model->insertData($input,$user);
        if($data==1)
            $this->response('Offer information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Offer already present!', REST_Controller::HTTP_OK);
    } 

    public function update_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Offer_model->updateData($input,$user);
        $this->response('Offer information updated.', REST_Controller::HTTP_OK);
       
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
        $data=$this->Offer_model->deleteData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function offerfetch11_get()
    {
        $type=1;
        $data['results']=$this->Offer_model->getdata('',$type);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function offerfetch_post()
    {
        $input = $this->input->post();
        if($input)
            $data['results']=$this->Offer_model->getdata($input['0'],'');
        else
            $data['results']=$this->Offer_model->getdata('',1);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    

    public function offerbannersfetch_post(){
        $input = $this->input->post();
        $data['results']=$this->Offer_model->getbanners($input['0'],'');
        $this->response($data, REST_Controller::HTTP_OK);
    }
    	
}
?>