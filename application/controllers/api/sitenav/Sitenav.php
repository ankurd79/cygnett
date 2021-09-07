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
       //$this->load->model('api/brands/Brand_model');

    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */

    public function sendguestreview_post(){
        $input = $this->input->post();
        #print_r($input);
        $mailtemplate='guest_review';
        $subject='Guest Review Mail';
        $to=guest_review_mail;
        $additionalinfo=array('name'=>'Guest Review');
        $ret=sendmail($input,$mailtemplate,$subject,$to,'','',$additionalinfo);
        if($ret==1){
            $this->response('1', REST_Controller::HTTP_OK);
            insertguestreviewdata($input);
            //return '1';
        }else{
            $this->response('0', REST_Controller::HTTP_OK);
            //return '0';
        }
    }

	public function sendcorpquery_post(){
        $input = $this->input->post();
        #print_r($input);
        $mailtemplate='corp_enquiry';
        $subject='Corporate Enquiry has been received from the corporate site.';
        $to=corp_enquiry_mail;
        $additionalinfo=array('name'=>'Cygnett Corporate');
        $ret=sendmail($input,$mailtemplate,$subject,$to,'','',$additionalinfo);
        if($ret==1){
            $this->response('1', REST_Controller::HTTP_OK);
            //echo '1';
        }else{
            $this->response('0', REST_Controller::HTTP_OK);
            //echo '0';
        }
    }
    
    public function sendcontactfrmmail_post(){
        $input = $this->input->post();
        #print_r($input);
        $mailtemplate='contact_frm';
        $subject='Query From Contact Us Page';
        $to=contact_enquiry_mail;
        $additionalinfo=array('name'=>'Cygnett Corporate');
        $ret=sendmail($input,$mailtemplate,$subject,$to,'','',$additionalinfo);
        if($ret==1){
            $this->response('1', REST_Controller::HTTP_OK);
            //echo '1';
        }else{
            $this->response('0', REST_Controller::HTTP_OK);
            //echo '0';
        }
    }
}
?>