<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Brandcategory extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/brands/Brandcategory_model');

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
        $data=$this->Brandcategory_model->insertData($input,$user);
        if($data==1)
            $this->response('Category information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Category already present!', REST_Controller::HTTP_OK);
    } 

    public function update_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Brandcategory_model->updateData($input,$user);
        $this->response('Cuisine information updated.', REST_Controller::HTTP_OK);
       
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
    public function brandcategoryfetch_post(){
        $input = $this->input->post();
        $data['results']=$this->Brandcategory_model->getdata('',1);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function remove_post()
    {
        $input = $this->input->post();
        $data=$this->Brandcategory_model->deleteData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}
?>