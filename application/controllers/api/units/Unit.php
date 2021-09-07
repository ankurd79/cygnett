<?php
   
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

     
class Unit extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('api/units/Unit_model');

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
        $data=$this->Unit_model->insertData($input,$user);
        if($data==1)
            $this->response('Unit information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Unit already present!', REST_Controller::HTTP_OK);
    } 

    public function update_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->updateData($input,$user);
        $this->response('Unit information updated.', REST_Controller::HTTP_OK);
       
    }


    public function updatehotelandassociatedSTS_post(){
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->updatehotelandassociatedSTS($input,$user);
        $this->response('Unit information updated.', REST_Controller::HTTP_OK);
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
        $data=$this->Unit_model->deleteData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }


    public function removeemail_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->deleteEmailData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function removemobile_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->deleteMobileData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function removesocial_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->deleteSocialData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function removenearby_post(){
        $input = $this->input->post();
        $data=$this->Unit_model->deleteNearbyData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }


    public function getunitsocialMedia_get(){
      //  
    }


    public function rooms_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->insertroomData($input,$user);
        if($data==1)
            $this->response('Room information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Room already present!', REST_Controller::HTTP_OK);
    }

    public function roomupdate_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->updateroomData($input,$user);
        $this->response('Room information updated.', REST_Controller::HTTP_OK);
       
    }


    public function deleteroom_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->deleteroomlData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }    


    public function deleteroomimg_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->delroomimages($input,$type='1');
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    /*** banquets**/
    public function banquets_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->insertbanquetData($input,$user);
        if($data==1)
            $this->response('Banquet information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Banquet already present!', REST_Controller::HTTP_OK);
    }

    public function banquetupdate_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->updatebanquetData($input,$user);
        $this->response('Banquet information updated.', REST_Controller::HTTP_OK);
       
    }

    public function deletebanquet_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->deletebanquetData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function removebanquetimage_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->delbanquetimages($input,1);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
     /*** banquets**/

     /*** restaurant specific**/
    public function restaurants_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->insertrestaurantData($input,$user);
        if($data==1)
            $this->response('Restaurant information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Restaurant already present!', REST_Controller::HTTP_OK);
    }

    public function restaurantupdate_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->updaterestaurantData($input,$user);
        $this->response('Restaurant information updated.', REST_Controller::HTTP_OK);
       
    }

    public function removerestaurantimage_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->delrestaurantimages($input,1);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function removerestaurantmobile_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->delrestaurantmobiles($input,1);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function deleterestaurant_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->deleterestaurantData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }



    /*** restaurant specific**/

    /**gallery specific**/

    public function photos_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->insertphotoData($input,$user);
        if($data==1){
            $this->response('Gallery photo information added.', REST_Controller::HTTP_CREATED);

        }
        
    }

    public function photoupdate_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->updategalleryData($input,$user);
        $this->response('Gallery information updated.', REST_Controller::HTTP_OK);
       
    }

    public function deletegalleryphoto_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->deletegalleryphotoData($input);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    /**gallery specific**/

    /***meta info specific***/

    public function updateunitmetainfo_post(){
        $input = $this->input->post();
        //print_r($input);
        //exit;
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->updateunitmetainfo($input,$user);
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }

    /***meta info specific***/

    /**banner specific***/

    public function updateunitbanners_post(){
        $input = $this->input->post();
        //print_r($input);
        //exit;
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->updateunitbanners($input,$user);
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }


    /**banner specific***/

    /**offer specific**/

    public function offer_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->insertofferData($input,$user);
        if($data==1)
            $this->response('Offer information added.', REST_Controller::HTTP_CREATED);
        else
            $this->response('Offer already present!', REST_Controller::HTTP_OK);
    }

    public function offerupdate_post()
    {
        $input = $this->input->post();
        $user=$this->session->userdata('uid');
        $data=$this->Unit_model->updateofferData($input,$user);
        $this->response('Offer information updated.', REST_Controller::HTTP_CREATED);
    }


    public function deleteunitoffer_post()
    {
        $input = $this->input->post();
        $data=$this->Unit_model->deleteofferData($input,1);
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    /**offer specific**/



    public function unitsfetch_get()
    {
        $type=1;
        $data['results']=$this->Unit_model->getData('','',$type);
        $this->response($data, REST_Controller::HTTP_OK);
    }    



   public function unitinfofetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getData($input['0'],'','');
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitotherpolicyfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getunitotherPolicies($input['0'],'','');
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitsocialmediafetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getunitsocialMedia($input['0'],'','');
     $this->response($data, REST_Controller::HTTP_OK);
   }    

   public function unitphonefetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getunitPhones($input['0'],'','');
     $this->response($data, REST_Controller::HTTP_OK);
   } 

   public function unitemailfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getunitEmails($input['0'],'','');
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitnearbyfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getunitnearby($input['0'],'','');
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitfacilityfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getunitFacilitiesf($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   } 
   

   public function unitroomlistfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getroomsofunit($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitroomimgfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getroomimages($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitroomamenitiesfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getroomamenity($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitgalleryfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getgalleryofunit($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitbanquetmeetingfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getbanquetsofunit($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitbanquetimagesfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getbanquetimages($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitrestaurantfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getrestaurantsofunit($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function diningimagesfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getrestaurantimages($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }


   public function diningcontactfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getrestaurantmobile($input['0'],'','');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitofferfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getofferofunit($input['0'],'');
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitofferfetchsingle_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getofferofunit('',$input['0']);
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   }

   public function unitofferimgfetch_post(){
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getunitofferimages($input['0']);
     //print_r($data['results']);
     $this->response($data, REST_Controller::HTTP_OK);
   } 
   
   

   
   public function senddiningquery_post(){
        $input = $this->input->post();
        $mailtemplate='dining_query';
        if($input['type']==1){
            $subjtxt='Dinining';
        }elseif($input['type']==2){
            $subjtxt='Meeting & Events';
        }
        $subject=''.$subjtxt.' related query received :  '.$input['rest_name'].' , '.$input['htl_name'].'';
        $to=central_reservation_mail;
        if($input['type']==1){
            $additionalinfo=array('name'=>'Cygnett Dining');
            $modelfunction='insertdiningquerydata';
        }elseif($input['type']==2){
            $additionalinfo=array('name'=>'Cygnett Meetings');
            $modelfunction='insertmeetingeventsquerydata';
        }
        $ret=sendmail($input,$mailtemplate,$subject,$to,'','',$additionalinfo);
        $this->Unit_model->$modelfunction($input);
        if($ret==1){
            $this->response('1', REST_Controller::HTTP_OK);
        }else{
            $this->response('0', REST_Controller::HTTP_OK);
        }
   }
    
     
    public function updatesequence_post(){
        $input = $this->input->post();
        $finaldata=explode("_",$input['id']);

        if (is_numeric($finaldata[1])) {

            $finalArray=array('sequence'=>$finaldata[1],
            'updated_on'=> date_stamp());
              $this->db->where('id',$finaldata[0]);     
              $this->db->update(units,$finalArray);

            $this->response('1', REST_Controller::HTTP_OK);
        }else{
            $this->response('0', REST_Controller::HTTP_OK);
        }






    } 







    	
}
?>