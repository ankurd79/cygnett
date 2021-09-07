<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Unitmgmt extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Units';
    	$this->load->model('api/'.strtolower($this->module).'/Unit_model');
    	$this->load->model('api/brands/Brand_model');
    	$this->load->model('api/hotels/Hotelcat_model');
    	$this->load->model('api/bedtypes/Bedtype_model');
    	$this->load->model('api/rooms/Roomamenity_model');
    	$this->load->model('api/rooms/Room_model');
    	$this->load->model('api/meetingevents/Meetingevents_model');
    	$this->load->model('api/restaurants/Restaurant_model');
    	$this->load->model('api/navigations/Hotelnav_model');
    	$this->load->model('api/offers/Offer_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}

    	$data=array("main_title"=>'Manage Unit','sub_title'=>'Add Unit','jsfile'=>strtolower($this->module).'','brands'=>$this->Brand_model->getbranddata(),'states'=>$this->Common_model->getstate(),'socialchannels'=>getsocial(),'getparentfacility'=>getparentfacility(),'hoteltype'=>$this->Hotelcat_model->getdata('',0),'country'=>getcountry());
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_add',$data);
		$this->load->view('admin/footer');
	}

	public function edit(){

		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
        
		$locId=base64_decode($this->uri->segment(3));
        $pdata=$this->Unit_model->getData($locId,'');
    	$data=array("main_title"=>'Manage Unit','sub_title'=>'Edit Unit','results'=>$pdata, 'jsfile'=>strtolower($this->module).'','brands'=>$this->Brand_model->getbranddata(),'states'=>$this->Common_model->getstate(),'socialchannels'=>getsocial(),'getparentfacility'=>getparentfacility(),'getparentfacility'=>getparentfacility(),'socialmedia'=>$this->Unit_model->getunitsocialMedia($locId),'nearbydata'=>$this->Unit_model->getunitnearby($locId),'phones'=>$this->Unit_model->getunitPhones($locId),'emails'=>$this->Unit_model->getunitEmails($locId),'othpolicy'=>$this->Unit_model->getunitotherPolicies($locId),'facilities'=>$this->Unit_model->getunitFacilities($locId),'hoteltype'=>$this->Hotelcat_model->getdata('',0),'country'=>getcountry(),'guestreviewlist'=>$this->Unit_model->getunitguestreviews($locId));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_edit',$data);
		$this->load->view('admin/footer');
	}
	
	public function list(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_data_table',$data);
		$this->load->view('admin/footer');
	}
	
	/**room specific**/
	public function unitroomlist(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage ','sub_title'=>'Edit ','roomlistcount'=>$this->Unit_model->getroomsofunit($locId),'hoteldata'=>$pdata);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_room_list',$data);
		$this->load->view('admin/footer');
	}
	

	public function unitroomadd(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage Room','sub_title'=>'Add Room','roomlistcount'=>$this->Unit_model->getroomsofunit($locId),'hoteldata'=>$pdata,'areainunits'=>getareaunits(),'bedtypes'=>$this->Bedtype_model->getdata(),'jsfile'=>strtolower($this->module).'_room','roomaminities'=>$this->Roomamenity_model->getData('',0),'roommasterlist'=>$this->Room_model->getdata('',0));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_room_add',$data);
		$this->load->view('admin/footer');
	}

	public function unitroomedit(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$roomId=base64_decode($this->uri->segment(4));
		$pdata=$this->Unit_model->getData($locId,'');
		$roomdata=$this->Unit_model->getroomsofunit('',$roomId);

		$data=array("main_title"=>'Manage Room','sub_title'=>'Edit Room','hoteldata'=>$pdata,'areainunits'=>getareaunits(),'bedtypes'=>$this->Bedtype_model->getdata(),'jsfile'=>strtolower($this->module).'_room','roomaminities'=>$this->Roomamenity_model->getData('',0),'roomdata'=>$roomdata,'roomamenities'=>$this->Unit_model->getroomamenity($roomId),'roomimages'=>$this->Unit_model->getroomimages($roomId),'roommasterlist'=>$this->Room_model->getdata('',0));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_room_edit',$data);
		$this->load->view('admin/footer');
	}
	
    /**room specific**/
    
    
    /**banquet specific**/

    public function unitbanquetlist(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage ','sub_title'=>'Edit ','banquetlistcount'=>$this->Unit_model->getbanquetsofunit($locId),'hoteldata'=>$pdata);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_banquet_list',$data);
		$this->load->view('admin/footer');
	}

	public function unitbanquetadd(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage Banquets','sub_title'=>'Add Banquet','hoteldata'=>$pdata,'areainunits'=>getareaunits(),'banquetlist'=>$this->Meetingevents_model->getData('',0),'jsfile'=>strtolower($this->module).'_banquet');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_banquet_add',$data);
		$this->load->view('admin/footer');
	}

	public function unitbanquetedit(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');
		$banquetId=base64_decode($this->uri->segment(4));
		$banquetdata=$this->Unit_model->getbanquetsofunit('',$banquetId);

		$data=array("main_title"=>'Manage Banquets','sub_title'=>'Edit Banquet','hoteldata'=>$pdata,'areainunits'=>getareaunits(),'banquetlist'=>$this->Meetingevents_model->getData('',0),'jsfile'=>strtolower($this->module).'_banquet','banquetdata'=>$banquetdata,'banquetimages'=>$this->Unit_model->getbanquetimages($banquetId));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_banquet_edit',$data);
		$this->load->view('admin/footer');
	}
    
    /**banquet specific**/
    
    /***restaurant spcific***/


    public function unitrestaurantlist(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage ','sub_title'=>'Edit ','restaurantlist'=>$this->Unit_model->getrestaurantsofunit($locId),'hoteldata'=>$pdata);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_restaurant_list',$data);
		$this->load->view('admin/footer');
	}

	public function unitrestaurantadd(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage Restaurant','sub_title'=>'Add Restaurant','hoteldata'=>$pdata,'restaurantlist'=>$this->Restaurant_model->getrestaurantData('',0),'jsfile'=>strtolower($this->module).'_restaurant');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_restaurant_add',$data);
		$this->load->view('admin/footer');
	}

	public function unitrestaurantedit(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');
		$restaurantId=base64_decode($this->uri->segment(4));
		$restaurantdata=$this->Unit_model->getrestaurantsofunit('',$restaurantId);

		$data=array("main_title"=>'Manage Restaurant','sub_title'=>'Edit Restaurant','hoteldata'=>$pdata,'jsfile'=>strtolower($this->module).'_restaurant','restaurantlist'=>$this->Restaurant_model->getrestaurantData('',0),'restaurantdata'=>$restaurantdata,'restaurantimages'=>$this->Unit_model->getrestaurantimages($restaurantId),'getrestaurantmobile'=>$this->Unit_model->getrestaurantmobile($restaurantId));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_restaurant_edit',$data);
		$this->load->view('admin/footer');
	}

    /***restaurant spcific***/    

    /***gallery specific****/

    public function unitgallerylist(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage ','sub_title'=>'Edit ','gallerylist'=>$this->Unit_model->getgalleryofunit($locId),'hoteldata'=>$pdata,'jsfile'=>strtolower($this->module).'_gallery');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_gallery_list',$data);
		$this->load->view('admin/footer');
	}

	public function unitgalleryadd(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage Gallery','sub_title'=>'Add Gallery Photos','hoteldata'=>$pdata,'jsfile'=>strtolower($this->module).'_gallery');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_gallery_add',$data);
		$this->load->view('admin/footer');
	}


    /***gallery specific****/

    /***meta information***/

    public function unitmetainformation(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage ','sub_title'=>'Meta Information ','hotelnavigation'=>$this->Hotelnav_model->getdata('',0),'hoteldata'=>$pdata);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_meta',$data);
		$this->load->view('admin/footer');
	}

    /***meta information***/

    /***page banners***/
    	public function unitpagebanners(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage ','sub_title'=>'Unit Page Banners ','hotelnavigation'=>$this->Hotelnav_model->getdata('',0),'hoteldata'=>$pdata);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_page_banners',$data);
		$this->load->view('admin/footer');
	}

	public function pagebannerlist($pid=''){
		
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$pid=$this->uri->segment(5);
		} elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
		   //its a post
			$pdata = $this->input->post();
			$pid = explode ("-", $pdata['parent_id']); 
		}

		$data['homebannerlist']=getbannersofunitpages($pid['0'],$pid['1']);
		$data['page_category_id']=$pid['0'];
		$data['hotel_id']=$pid['1'];
		//print_r($data['results']);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_banner_list',$data);
	}
    /***page banners***/

    /***offers***/
    	public function unitoffers(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage ','sub_title'=>'Offers ','offerlist'=>$this->Unit_model->getofferofunit($locId),'hoteldata'=>$pdata);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_offer_list',$data);
		$this->load->view('admin/footer');
	}

	public function unitofferadd(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');

		$data=array("main_title"=>'Manage Offers','sub_title'=>'Add Offer','hoteldata'=>$pdata,'offerlist'=>$this->Offer_model->getData('',0),'jsfile'=>strtolower($this->module).'_offers','roomlist'=>$this->Unit_model->getroomsofunit($locId));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_offer_add',$data);
		$this->load->view('admin/footer');
	}

	public function unitofferedit(){
		if(!$this->session->userdata('uid')){
			header("Location: ".base_url()."admin-login");
		}
		$data['results']=$this->Unit_model->getdata('',0);
		$locId=base64_decode($this->uri->segment(3));
		$pdata=$this->Unit_model->getData($locId,'');
		$offerId=base64_decode($this->uri->segment(4));
		$offerdata=$this->Unit_model->getofferofunit('',$offerId);

		$data=array("main_title"=>'Manage Offer','sub_title'=>'Edit Offer','hoteldata'=>$pdata,'jsfile'=>strtolower($this->module).'_offers','offerlist'=>$this->Offer_model->getData('',0),'unitofferdata'=>$offerdata,'unitofferbanners'=>$this->Unit_model->getunitofferimages($offerId),'roomlist'=>$this->Unit_model->getroomsofunit($locId));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/'.strtolower($this->module).'/'.strtolower($this->module).'_offer_edit',$data);
		$this->load->view('admin/footer');
	}


    public function unitmapfetch(){
       
     $input = $this->input->post();   
     $data['results']=$this->Unit_model->getunitmap($input['id']);
     print_r(html_entity_decode($data['results'][0]['google_map']));
     
   } 


















    /***offers***/

}