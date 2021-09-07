<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Brand extends REST_Controller {
    
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



	public function brandById_get()
	{
        
        $brandId=base64_decode($this->uri->segment(6));
        $data=$this->Brand_model->getBrandData($brandId,'');
        $this->response($data, REST_Controller::HTTP_OK);

	}

    public function brandAll_get()
    {
        $flag=base64_decode($this->uri->segment(6));
        $data=$this->Brand_model->getBrandData('',$flag);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function brandAllAdmin_get()
    {
        $flag=base64_decode($this->uri->segment(6));
        $data['results']=$this->Brand_model->getBrandData('',$flag);
        $this->load->view('admin/brands/brands_data_table',$data);
    }
    
    /*
    public function r_get($id = 0, $m='')
    {
        if(!empty($id)){
            $data = $this->db->get_where(brands, ['id' => $id])->row_array();
        }else{
            //$data = $this->db->get(brands)->result();

            $this->db->select('*');
            $this->db->from(brands);
            //$this->db->where('is_active',1);
            $this->db->order_by('brand_name','ASC');
      
      
           if($query=$this->db->get()){
                //echo $this->db->last_query();
              //return $query->row_array();
              $data['results']=$query->result_array();
            }else{
                return false;
            } 

        }

        //print_r($data);
        //$this->load->view('admin/brands/brands_data_table',$data);
        if($m==1){     
            $this->response($data, REST_Controller::HTTP_OK);
        }else{
            $this->load->view('admin/brands/brands_data_table',$data);
        }

    }
    */




    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Brand_model->insertBrandData($input,$user);
        if($data==1)
            $this->response('Brand information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Brand already present!', REST_Controller::HTTP_OK);
    } 

    public function update_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Brand_model->updateBrandData($input,$user);
        $this->response('Brand information updated.', REST_Controller::HTTP_OK);
       
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('cyg_brands', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function brandremove_post()
    {
        $input = $this->input->post();
        $data=$this->Brand_model->deletebrandData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function brandfetch_post()
    {
        
        $input = $this->input->post();  
        if($input){
            $data['results']=$this->Brand_model->getBrandData($input['0'],'');
        }else{
            $data['results']=$this->Brand_model->getBrandData('',1);
        }
        $this->response($data, REST_Controller::HTTP_OK);
        
        

    }

    public function brandsbannerfetch_post(){
        $input = $this->input->post();
        $data['results']=$this->Brand_model->getbrandbanners($input['0'],'');
        $this->response($data, REST_Controller::HTTP_OK);
    }

    

    public function brandspointersfetch_post(){
        $input = $this->input->post();
        $data['results']=$this->Brand_model->getbrandkeypointers($input['0'],'');
        $this->response($data, REST_Controller::HTTP_OK);
    }
    
    public function brandsbycategoryfetch_post(){
        $input = $this->input->post();
        $data['results']=$this->Brand_model->getBrandData('','',$input['0']);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function brandcarouselimages_post(){
        $input = $this->input->post();
        $data['results']=$this->Brand_model->getcarouselimagesforsite($input['0'],'');
        $this->response($data, REST_Controller::HTTP_OK);
    }
    
    public function sendbprequest_post(){
        $input = $this->input->post();
        #print_r($input);
        $mailtemplate='brand_pillar_request';
        $subject='Factsheet request for '.$input['brand'].' has been received from the corporate site.';
        $to=brand_pillar_mail;
        $additionalinfo=array('name'=>'Cygnett Brands');
        $ret=sendmail($input,$mailtemplate,$subject,$to,'','',$additionalinfo);
        if($ret==1){
            $this->response('1', REST_Controller::HTTP_OK);
        }else{
            $this->response('0', REST_Controller::HTTP_OK);
        }
    }
    
    public function brandfetchhome_post()
    {
        
        $data['results']=$this->Brand_model->getbrandforhome();
        $this->response($data, REST_Controller::HTTP_OK);

    }
    
    public function updatebrandsequence_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Brand_model->updatebrandsequence($input,$user);
        $this->response('Sequence updated.', REST_Controller::HTTP_OK);
       
    }
    
    public function brandbannerremove_post()
    {
        $input = $this->input->post();
        $data=$this->Global_model->deleteBannerData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    
    public function carouselremove_post()
    {
        $input = $this->input->post();
        $data=$this->Global_model->deleteCarouselData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    
    
    	
}
?>