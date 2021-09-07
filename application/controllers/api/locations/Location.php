<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Location extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/locations/Location_model');

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
        $data=$this->Location_model->insertlocationData($input,$user);
        if($data==1)
            $this->response('Location information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Location already present!', REST_Controller::HTTP_OK);
    } 

    public function update_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Location_model->updatelocationData($input,$user);
        $this->response('Location information updated.', REST_Controller::HTTP_OK);
       
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
        $data=$this->Location_model->deletelocationData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    
    public function removebanner_post()
    {
        $input = $this->input->post();
        $data=$this->Location_model->deletebannerData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    
    public function removeplaces_post()
    {
        $input = $this->input->post();
        $data=$this->Location_model->deleteplacesData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function locationfetch_get()
    {
        $type=1;
        $data['results']=$this->Location_model->getlocationdata('',$type);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    
    public function locationfetch1_get()
    {
        
        $data['results']=$this->Location_model->getsequencedlocation();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function restaurantfetchdetail_post()
    {
        $input = $this->input->post();
        if($input){
            $data['results']=$this->Location_model->getlocationdata($input['0'],'');
        }
        
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function locationbannersfetch_post(){
        $input = $this->input->post();
        $data['results']=$this->Location_model->getlocationbanners($input['0'],'');
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function locationplacesfetch_post(){
        $input = $this->input->post();
        $data['results']=$this->Location_model->getplacesofvisit($input['0'],'1');
        $this->response($data, REST_Controller::HTTP_OK);
    }
    
    public function updatesequence_post(){
        $input = $this->input->post();
        $finaldata=explode("_",$input['id']);

        if (is_numeric($finaldata[1])) {

            $finalArray=array('sequence'=>$finaldata[1],
            'updated_on'=> date_stamp());
              $this->db->where('id',$finaldata[0]);     
              $this->db->update(location,$finalArray);

            $this->response('1', REST_Controller::HTTP_OK);
        }else{
            $this->response('0', REST_Controller::HTTP_OK);
        }






    }

    //getlocationdata
    	
}
?>