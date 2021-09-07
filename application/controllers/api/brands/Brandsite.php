<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
     
class Brandsite extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/brands/Brand_model');

    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where(brands, ['id' => $id])->row_array();
        }else{
            //$data = $this->db->get(brands)->result();

            $this->db->select('*');
            $this->db->from(brands);
            $this->db->where('is_active',1);
            $this->db->order_by('brand_name','ASC');
      
      
           if($query=$this->db->get()){
                echo $this->db->last_query();
              //return $query->row_array();
              $data=$query->result_array();
            }else{
                return false;
            } 

        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    
    	
}
?>