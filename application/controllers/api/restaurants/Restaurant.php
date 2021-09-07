<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Restaurant extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/restaurants/Restaurant_model');
       $this->load->model('api/cygnetture/Cygnetture_model');

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
        $data=$this->Restaurant_model->insertRestaurantData($input,$user);
        if($data==1)
            $this->response('Restaurant information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Restaurant already present!', REST_Controller::HTTP_OK);
    } 

    public function update_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Restaurant_model->updateRestaurantData($input,$user);
        $this->response('Restaurant information updated.', REST_Controller::HTTP_OK);
       
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
        $data=$this->Restaurant_model->deleterestaurantData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function restaurantfetch_post()
    {
        $input = $this->input->post();
        if($input)
            $data['results']=$this->Restaurant_model->getrestaurantData($input['0'],'');
        else
            $data['results']=$this->Restaurant_model->getrestaurantData('',1);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function restaurantbannersfetch_post(){
        $input = $this->input->post();
        $data['results']=$this->Restaurant_model->getrestaurantbanners($input['0'],'');
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function restaurantcygnetturedishesfetch_post(){
        $input = $this->input->post();
        $data['results']=$this->Cygnetture_model->getrestaurantdishes($input['0'],'');
        $this->response($data, REST_Controller::HTTP_OK);
    }
    
    public function removebanner_post()
    {
        $input = $this->input->post();
        $data=$this->Restaurant_model->deletebannerData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}
?>