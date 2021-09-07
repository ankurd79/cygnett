<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Businessdev extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Global';
    	$this->load->model('api/global/Global_model');
    	$this->load->model('api/cuisines/Cuisine_model');
    	$this->load->model('Common_model');
    	$this->load->model('api/navigations/Sitenav_model');
    	$this->load->model('api/regions/Region_model');
    	
    	
    }

    public function index(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$canonical=base_url().'business-development';

		
    	$data=array("title"=>'Hotels Management Company in India | Luxury and Budget Resorts & Hotels Franchise Brand | Hotel Consultant in India – Cygnett Hotels & Resorts Partner Program
','keywords'=>'','description'=>'Top Hotel & resorts franchise brand in India - Cygnett Hotels & Resorts. In building hotels from the ground up or converting existing hotels, we invite you to join this revolution. Contact us now!
','homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'canonical'=>$canonical);
		$this->load->view('site/header',$data);
		$this->load->view('site/bd/business-dev',$data);
		$this->load->view('site/footer');
	}

	public function bond(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$canonical=base_url().'why-bond-with-cygnett';

		
    	$data=array("title"=>'Bonding With Cygnett | Cygnett Hotels & Resorts 
','keywords'=>'','description'=>'More reasons To bond with cygnett because cygnett Is the one stop hospitality Solutions
','homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'canonical'=>$canonical);
		$this->load->view('site/header',$data);
		$this->load->view('site/bd/bond',$data);
		$this->load->view('site/footer');
	}

	public function brands(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$canonical=base_url().'our-brands';

		
    	$data=array("title"=>'Luxury Business and Leisure Hotels & Resorts in India - The Cygnett Hotels & Resorts
','keywords'=>'','description'=>'The Cygnett Hotels & Resorts is an upscale, premium business & leisure hotels & resorts in India. It offers luxury services & accommodation. Book online now!
','homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'canonical'=>$canonical);
		$this->load->view('site/header',$data);
		$this->load->view('site/bd/brands',$data);
		$this->load->view('site/footer');
	}

	public function businessmodel(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$canonical=base_url().'business-model';

		
    	$data=array("title"=>'Managed Hotels, Franchised Hotels & Leased hotels at Dynamic Business Model
','keywords'=>'','description'=>'From building design to operating model to service levels, every element of Cygnett Hotels has been vigorous to deliver the best experience to the guests & the maximum return to investors. 
','homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'canonical'=>$canonical);
		$this->load->view('site/header',$data);
		$this->load->view('site/bd/bmodel',$data);
		$this->load->view('site/footer');
	}

	public function team(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$regionArr=$this->Region_model->getdata('',1);
		
		$canonical=base_url().'our-team';

    	$data=array("title"=>'Home','keywords'=>'','description'=>'','homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'regionlist'=>$regionArr,'canonical'=>$canonical);
		$this->load->view('site/header',$data);
		$this->load->view('site/bd/team',$data);
		$this->load->view('site/footer');
	}

	public function projecttech(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$canonical=base_url().'projects-and-tech-support';

		
    	$data=array("title"=>'Technical Support and Pre-opening Services - Cygnett Hotels & Resorts
','keywords'=>'','description'=>'Cygnett provides comprehensive technical assistance for all its projects, whether you are building a new hotel, renovating, or converting an existing asset. We ensure that our final product delivers a superior customer experience while maintaining operational efficiencies.
','homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'canonical'=>$canonical);
		$this->load->view('site/header',$data);
		$this->load->view('site/bd/project',$data);
		$this->load->view('site/footer');
	}
	
	public function regionteam(){
		$region=str_replace("-"," ",$this->uri->segment(2));
		$regionrr=getreionidbyname($region);
		
		
		if($regionrr){
		    $regionrr[0]['id'];
		}else{
		    show_404();
		}
		
		
		$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$canonical=base_url().'business-development-team/'.strtolower($region).'';
		
		if(strcmp($canonical,getAddress())!=0){
			show_404();

		}
		
		if($regionrr[0]['is_active']==0){
        	show_404();
        }

		$data=array("title"=>$regionrr[0]['meta_title'],'keywords'=>'','description'=>$regionrr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'region'=>$regionrr,'teamlist'=>getbdteamregionwise($regionrr[0]['id']),'canonical'=>$canonical);

		$this->load->view('site/header',$data);
		$this->load->view('site/bd/team-details',$data);
		$this->load->view('site/footer');
	}
	

	
	
}