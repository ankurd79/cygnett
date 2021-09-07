<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Sitenav extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/navigations/Sitenav_model');

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
        $data=$this->Sitenav_model->insertData($input,$user);
        if($data==1)
            $this->response('Site navigation added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Site navigation already present!', REST_Controller::HTTP_OK);
    } 

    public function update_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Sitenav_model->updateData($input,$user);
        $this->response('Site navigation information updated.', REST_Controller::HTTP_OK);
       
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
        $data=$this->Sitenav_model->deleteData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function navheaderfetch_post()
    {
        $input = $this->input->post();
        $data=$this->Sitenav_model->fetchparentmenuheader();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function fetchfooternav_post()
    {
        //$input = $this->input->post();
        $data=$this->Sitenav_model->fetchparentmenufooter();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function fetchsubmneu_post()
    {
        $input = $this->input->post();
        $data=$this->Sitenav_model->fetchsubmenu($input['0']);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function fetchrolloverdata_post()
    {
        $input = $this->input->post();
        $data=$this->Sitenav_model->getrolloverdatap($input['0'],'');
        $this->response($data, REST_Controller::HTTP_OK);
    }
    	
}
?>