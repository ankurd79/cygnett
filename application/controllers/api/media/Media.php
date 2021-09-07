<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Media extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/media/Media_model');

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
    public function newsadd_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Media_model->insertData($input,$user);
        if($data==1)
            $this->response('Media News added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Media News already present!', REST_Controller::HTTP_OK);
    } 

    public function newsupdate_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Media_model->updateData($input,$user);
        $this->response('Media news information updated.', REST_Controller::HTTP_OK);
       
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
        $data=$this->Media_model->deleteData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function mediafetch_get()
    {
        $type=1;
        $data['results']=$this->Media_model->getdata('',$type);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    	
}
?>