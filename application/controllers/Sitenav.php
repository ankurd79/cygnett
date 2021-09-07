<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sitenav extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Global';
    	$this->load->model('Common_model');
    	$this->load->model('api/navigations/Sitenav_model');
    	$this->load->model('api/regions/Region_model');
    	
    	
    }

    public function overview(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(2,'');
		
		$bannerimg=navigationbanners(2);
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/overview',$data);
		$this->load->view('site/footer');
	}
	
	public function hotellist(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(4,'');
		
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url']);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/hotel-list',$data);
		$this->load->view('site/footer');
	}

	public function aboutcygnett(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(3,'');
		$bannerimg=navigationbanners(3);

    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/aboutcygnett',$data);
		$this->load->view('site/footer');
	}

	public function heritage(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(10,'');
		
		$bannerimg=navigationbanners(10);
		
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/heritage',$data);
		$this->load->view('site/footer');
	}

	public function leadership(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(11,'');
		
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'md'=>mdprofile(),'mgmtteam'=>mgmtteam(),'region'=>$this->Region_model->getdata('',1),'indiateam'=>indiateam(),'canonical'=>base_url().$arr[0]['url']);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/leadership',$data);
		$this->load->view('site/footer');
	}
	
	public function teamdetails(){

		$identifer=$this->uri->segment(2);
		
		$arr=getteamdetailbyidentifier($identifer);

		if(empty($arr)){
        	//header("Location:".base_url()."team.php");
        	show_404();
        }
        
        if(($arr['0']['is_active']==0)){
        	//header("Location:".base_url()."team.php");
        	show_404();
        }

        $canonicalurl=base_url().'team/'.trim($arr['0']['url']);
        if(strcmp($canonicalurl,getAddress())!=0){
			//header("Location:".base_url()."team.php");
			show_404();

		}
		
    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		//$arr=$this->Sitenav_model->getdata(12,'');

		
		
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'profiledetails'=>getteamdetailbyidentifier($identifer),'canonical'=>$canonicalurl);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/member',$data);
		$this->load->view('site/footer');
	}

	public function signature(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(12,'');
		
		$bannerimg=navigationbanners(12);

    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/signature',$data);
		$this->load->view('site/footer');
	}

	public function visionmission(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(13,'');
		
		$bannerimg=navigationbanners(13);
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/visionmission',$data);
		$this->load->view('site/footer');
	}

	public function corevalues(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(14,'');
		
		$bannerimg=navigationbanners(14);
		
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/corevalues',$data);
		$this->load->view('site/footer');
	}

	public function safety(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(15,'');
		
		$bannerimg=navigationbanners(15);
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/safety',$data);
		$this->load->view('site/footer');
	}
	
	public function career(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(26,'');
		
		$bannerimg=navigationbanners(26);
		
		#print_r($bannerimg);
		
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'joblist'=>array_merge(joblistperdate(),joblistaspersts()),'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/career',$data);
		$this->load->view('site/footer');
	}
	
	public function covid(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(20,'');
		
		$bannerimg=navigationbanners(20);
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/covid-19',$data);
		$this->load->view('site/footer');
	}
	
	public function newupcominghotels(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(22,'');
		
		$bannerimg=navigationbanners(22);

		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/new-upcoming-hotels.php',$data);
		$this->load->view('site/footer');
	}
	
	public function adcookiepolicy(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(29,'');
		
		$bannerimg=navigationbanners(29);
		
		//print_r($arr);
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
    	
    	
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/ad-cookie-policy',$data);
		$this->load->view('site/footer');
	}
	
	public function digitalcopyright(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(30,'');
		
		$bannerimg=navigationbanners(30);
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/digital-copyright-act',$data);
		$this->load->view('site/footer');
	}
	
	public function legalnotice(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(31,'');
		
		$bannerimg=navigationbanners(31);

		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/legal-notice',$data);
		$this->load->view('site/footer');
	}
	
	public function privacypolicy(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(32,'');
		
		$bannerimg=navigationbanners(31);

    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/privacy-policy',$data);
		$this->load->view('site/footer');
	}
	
	public function terms(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(33,'');
		$bannerimg=navigationbanners(33);
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/terms-conditions',$data);
		$this->load->view('site/footer');
	}
	
	public function siteusage(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(34,'');
		
		$bannerimg=navigationbanners(34);

    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/site-usage-agreement',$data);
		$this->load->view('site/footer');
	}
	
	public function faq(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(38,'');
		
		$bannerimg=navigationbanners(38);

    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/faq',$data);
		$this->load->view('site/footer');
	}
	
	public function corpenquiry(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(35,'');
		
		$bannerimg=navigationbanners(35);
		
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/corporate-enquiry',$data);
		$this->load->view('site/footer');
	}
	
	public function guestreview(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(36,'');
		
		$bannerimg=navigationbanners(36);

    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/guest-review',$data);
		$this->load->view('site/footer');
	}
	
	public function contactus(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(37,'');
		
		$bannerimg=navigationbanners(37);

    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/contact-us',$data);
		$this->load->view('site/footer');
	}
	
	public function sitemap(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(39,'');
		
		
    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url']);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/sitemap',$data);
		$this->load->view('site/footer');
	}
	
	public function ourtech(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$arr=$this->Sitenav_model->getdata(28,'');
		
		$bannerimg=navigationbanners(28);

    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'details'=>$arr[0],'canonical'=>base_url().$arr[0]['url'],'bannerimg'=>$bannerimg);
		$this->load->view('site/header',$data);
		$this->load->view('site/navpages/our-technologies',$data);
		$this->load->view('site/footer');
	}
	
	
	
	
}