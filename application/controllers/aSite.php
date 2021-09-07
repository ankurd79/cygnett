<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Global';
    	$this->load->model('api/global/Global_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function index(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));
		
    	$data=array("title"=>'Home','keywords'=>'','description'=>'','homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results']);
		$this->load->view('site/header',$data);
		$this->load->view('site/index',$data);
		$this->load->view('site/footer');
	}

	public function siteoffers(){

		$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

    	$data=array("title"=>'Cygnett Hotels & Resorts - Hotel Special Offers, Hotels Discounts, Deals','keywords'=>'Cygnett Hotels & Resorts, Hotels in India, Best Hotels in India, Hotel Services in India, Best Hotel Hospitality India, Business Hotels in India, Family Hotels in India, Online Hotel Booking Website, Hotel Booking Website','description'=>'Take Your Pick From A Wide Range Of Discounts And Packages','brandlist'=>$brandarr['results']);
		$this->load->view('site/header',$data);
		$this->load->view('site/offers/site_offers',$data);
		$this->load->view('site/footer');
	}

	public function siteofferdetails(){

		
    	$offerId=base64_decode($this->uri->segment(4));
    	
        if(!(is_numeric($offerId))){
        	header("Location:".base_url()."");
        }
		$apiurl=base_url().'api/offers/offer/offerfetch';
		$bannerapi=base_url().'api/offers/offer/offerbannersfetch';
		$arr=(getapicurlconnect($apiurl,$offerId));
		$bannerarr=(getapicurlconnect($bannerapi,$offerId));



		if($offerId<>$arr['results']['0']['id']){
        	header("Location:".base_url()."");
        }
		$canonicalurl=urlgenerator('offers',$arr['results']['0']['offer_name'],$arr['results']['0']['id']);

		if(strcmp($canonicalurl,getAddress())!=0){
			exit;

		}
		$metatitle=$arr['results']['0']['meta_title'];
		$metadescription=$arr['results']['0']['meta_description'];
		$metakeywords=$arr['results']['0']['meta_keywords'];
		
		$aapiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($aapiurl));


    	$data=array("title"=>$metatitle,'keywords'=>$metakeywords,'description'=>$metadescription,'offerdetails'=>$arr,'bannerdetails'=>$bannerarr,'canonicalurl'=>$canonicalurl,'brandlist'=>$brandarr['results']);
		$this->load->view('site/header',$data);
		$this->load->view('site/offers/offer_details',$data);
		$this->load->view('site/footer');
	}

	public function sitebranddetails(){

		
    	$brandId=base64_decode($this->uri->segment(4));
    	
        if(!(is_numeric($brandId))){
        	header("Location:".base_url()."");
        }
		$apiurl=base_url().'api/brands/brand/brandfetch';
		$bannerapi=base_url().'api/brands/brand/brandsbannerfetch';
		$arr=(getapicurlconnect($apiurl,$brandId));
		$bannerarr=(getapicurlconnect($bannerapi,$brandId));



		if($brandId<>$arr['results']['0']['id']){
        	header("Location:".base_url()."");
        }
		$canonicalurl=urlgenerator('brands',$arr['results']['0']['brand_name'],$arr['results']['0']['id']);

		if(strcmp($canonicalurl,getAddress())!=0){
			exit;

		}
		$metatitle=$arr['results']['0']['meta_title'];
		$metadescription=$arr['results']['0']['meta_description'];
		$metakeywords=$arr['results']['0']['meta_keywords'];

		$aapiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($aapiurl));

		$pointerapi=base_url().'api/brands/brand/brandspointersfetch';
		$pointersarr=(getapicurlconnect($pointerapi,$brandId));
		



    	$data=array("title"=>$metatitle,'keywords'=>$metakeywords,'description'=>$metadescription,'details'=>$arr,'bannerdetails'=>$bannerarr,'canonicalurl'=>$canonicalurl,'brandlist'=>$brandarr['results'],'pointers'=>$pointersarr);
		$this->load->view('site/header',$data);
		$this->load->view('site/brands/brand_details',$data);
		$this->load->view('site/footer');
	}

	
	
	
}