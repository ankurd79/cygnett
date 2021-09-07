<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Global';
    	$this->load->model('api/global/Global_model');
    	$this->load->model('api/cuisines/Cuisine_model');
    	$this->load->model('Common_model');
    	$this->load->model('api/navigations/Sitenav_model');
    	
    }

    public function index(){
        /*
        $devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
        if($devicetye=='desktop'){
            $this->output->cache(15);
        }
        */
        //$this->output->cache(15);
    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$metaarr=$this->Sitenav_model->getdata(40,'');

		
    	$data=array("title"=>$metaarr[0]['meta_title'],'keywords'=>$metaarr[0]['meta_keywords'],'description'=>$metaarr[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'canonical'=>base_url());
		$this->load->view('site/header',$data);
		$this->load->view('site/index',$data);
		$this->load->view('site/footer');
		$this->output->delete_cache();
		
	}
	
	public function locationlanding(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));
		
		$url=base_url().'api/locations/location/locationfetch';
        $arr=fetchapidata($url);

        $headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$arr1=$this->Sitenav_model->getdata(21,'');
		
    	$data=array("title"=>$arr1[0]['meta_title'],'keywords'=>$arr1[0]['meta_keywords'],'description'=>$arr1[0]['meta_description'],'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'locationlist'=>$arr['results'],'headernavigation'=>$navarr,'canonical'=>base_url().$arr1[0]['url']);
		$this->load->view('site/header',$data);
		$this->load->view('site/location/locations',$data);
		$this->load->view('site/footer');
	}
	
	public function medialanding(){

    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));
		
		$url=base_url().'api/media/media/mediafetch';
        $arr=fetchapidata($url);

        $headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$arr1=$this->Sitenav_model->getdata(25,'');
		
    	$data=array("title"=>$arr1[0]['meta_title'],'keywords'=>$arr1[0]['meta_keywords'],'description'=>$arr1[0]['meta_description'],'homepagebanners'=>gethomepagebanners(1),'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'medialist'=>$arr['results'],'headernavigation'=>$navarr,'canonical'=>base_url().$arr1[0]['url']);
		$this->load->view('site/header',$data);
		$this->load->view('site/media/media-news',$data);
		$this->load->view('site/footer');
	}

	public function siteoffers(){

		$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$arr=$this->Sitenav_model->getdata(7,'');

    	$data=array("title"=>$arr[0]['meta_title'],'keywords'=>$arr[0]['meta_keywords'],'description'=>$arr[0]['meta_description'],'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'canonical'=>base_url().$arr[0]['url']);
		$this->load->view('site/header',$data);
		$this->load->view('site/offers/site_offers',$data);
		$this->load->view('site/footer');
	}

	public function siteofferdetails(){

		
    	$offerId=base64_decode($this->uri->segment(4));
    	
        if(!(is_numeric($offerId))){
        	show_404();
        }
		$apiurl=base_url().'api/offers/offer/offerfetch';
		$bannerapi=base_url().'api/offers/offer/offerbannersfetch';
		$arr=(getapicurlconnect($apiurl,$offerId));
		$bannerarr=(getapicurlconnect($bannerapi,$offerId));



		if($offerId<>$arr['results']['0']['id']){
        	show_404();
        }
        
        if($arr['results']['0']['is_active']==0){
        	show_404();
        }
        
		$canonicalurl=urlgenerator('offers',$arr['results']['0']['offer_name'],$arr['results']['0']['id']);

		if(strcmp($canonicalurl,getAddress())!=0){
			show_404();

		}
		$metatitle=$arr['results']['0']['meta_title'];
		$metadescription=$arr['results']['0']['meta_description'];
		$metakeywords=$arr['results']['0']['meta_keywords'];
		
		$aapiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($aapiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));


    	$data=array("title"=>$metatitle,'keywords'=>$metakeywords,'description'=>$metadescription,'offerdetails'=>$arr,'bannerdetails'=>$bannerarr,'canonicalurl'=>$canonicalurl,'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'unitlist'=>getofferwiseunits($offerId),'canonical'=>$canonicalurl);
		$this->load->view('site/header',$data);
		$this->load->view('site/offers/offer_details',$data);
		$this->load->view('site/footer');
	}

	public function sitebranddetails(){

		
    	$brandId=base64_decode($this->uri->segment(4));
    	
        if(!(is_numeric($brandId))){
        	show_404();
        }
		$apiurl=base_url().'api/brands/brand/brandfetch';
		$bannerapi=base_url().'api/brands/brand/brandsbannerfetch';
		$arr=(getapicurlconnect($apiurl,$brandId));
		$bannerarr=(getapicurlconnect($bannerapi,$brandId));



		if($brandId<>$arr['results']['0']['id']){
        	show_404();
        }
        
        
        if($arr['results']['0']['is_active']==0){
        	show_404();
        }
        
		$canonicalurl=urlgenerator('brands',$arr['results']['0']['brand_name'],$arr['results']['0']['id']);

		if(strcmp($canonicalurl,getAddress())!=0){
			show_404();

		}
		$metatitle=$arr['results']['0']['meta_title'];
		$metadescription=$arr['results']['0']['meta_description'];
		$metakeywords=$arr['results']['0']['meta_keywords'];

		$aapiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($aapiurl));

		$pointerapi=base_url().'api/brands/brand/brandspointersfetch';
		$pointersarr=(getapicurlconnect($pointerapi,$brandId));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
		$carouselapi=base_url().'api/brands/brand/brandcarouselimages';
		$carouselarr=(getapicurlconnect($carouselapi,$brandId));



    	$data=array("title"=>$metatitle,'keywords'=>$metakeywords,'description'=>$metadescription,'details'=>$arr,'bannerdetails'=>$bannerarr,'canonicalurl'=>$canonicalurl,'brandlist'=>$brandarr['results'],'pointers'=>$pointersarr,'restaurantlist'=>$resarr['results'],'headernavigation'=>$navarr,'carousellist'=>$carouselarr['results'],'canonical'=>$canonicalurl);
		$this->load->view('site/header',$data);
		$this->load->view('site/brands/brand_details',$data);
		$this->load->view('site/footer');
	}


	public function sitediningdetails(){

		
    	$diningId=base64_decode($this->uri->segment(4));
    	
        if(!(is_numeric($diningId))){
        	show_404();
        }
		$apiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$bannerapi=base_url().'api/restaurants/restaurant/restaurantbannersfetch';
		$arr=(getapicurlconnect($apiurl,$diningId));
		$bannerarr=(getapicurlconnect($bannerapi,$diningId));



		if($diningId<>$arr['results']['0']['id']){
        	show_404();
        }
        
        
        if($arr['results']['0']['is_active']==0){
        	show_404();
        }
        
		$canonicalurl=urlgenerator('dining',$arr['results']['0']['name'],$arr['results']['0']['id']);

		if(strcmp($canonicalurl,getAddress())!=0){
			show_404();

		}
		$metatitle=$arr['results']['0']['meta_title'];
		$metadescription=$arr['results']['0']['meta_description'];
		$metakeywords=$arr['results']['0']['meta_keywords'];

		$aapiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($aapiurl));

		

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		
		$select=explode(",",$arr['results'][0]['cuisine']);
		$string='';	
		foreach($select as $s){
			$carr=$this->Cuisine_model->getdata($s,'');	
			$cuisinename=$carr[0]['cuisine_name'];

			$string .= ", $cuisinename";
		}	

		$string = substr($string, 1);

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

    	$data=array("title"=>$metatitle,'keywords'=>$metakeywords,'description'=>$metadescription,'details'=>$arr,'bannerdetails'=>$bannerarr,'canonicalurl'=>$canonicalurl,'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'availablecuisines'=>$string,'headernavigation'=>$navarr,'hotellst'=>getrestaurantwiseunits($diningId),'canonical'=>$canonicalurl);
		$this->load->view('site/header',$data);
		$this->load->view('site/dining/dining_details',$data);
		$this->load->view('site/footer');
	}


	
    /*
	public function sitelocationdetails(){

		
    	$locId=base64_decode($this->uri->segment(5));
    	//exit;
    	
        if(!(is_numeric($locId))){
        	show_404();
        }
		$apiurl=base_url().'api/locations/location/restaurantfetchdetail';
		$bannerapi=base_url().'api/locations/location/locationbannersfetch';
		$placesapi=base_url().'api/locations/location/locationplacesfetch';
		$arr=(getapicurlconnect($apiurl,$locId));
		$bannerarr=(getapicurlconnect($bannerapi,$locId));
		$placesarr=(getapicurlconnect($placesapi,$locId));
		//print_r($placesarr);

		$ctryArr=getcountrydetail($arr['results']['0']['country']);
		

		if($locId<>$arr['results']['0']['id']){
        	show_404();
        }
        
        
        if($arr['results']['0']['is_active']==0){
        	show_404();
        }
        
		$canonicalurl=urlgenerator('location',$ctryArr[0]['name'].'/'.$arr['results']['0']['location'],$arr['results']['0']['id']);
		
		if(strcmp($canonicalurl,getAddress())!=0){
			show_404();

		}
		
		$metatitle=$arr['results']['0']['meta_title'];
		$metadescription=$arr['results']['0']['meta_description'];
		$metakeywords=$arr['results']['0']['meta_keywords'];

		
		$aapiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($aapiurl));
		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));
		
		
		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));	


    	$data=array("title"=>$metatitle,'keywords'=>$metakeywords,'description'=>$metadescription,'details'=>$arr,'bannerdetails'=>$bannerarr,'canonicalurl'=>$canonicalurl,'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'places'=>$placesarr['results'],'headernavigation'=>$navarr,'locunitsarr'=>getlocationwiseunits($locId),'canonical'=>$canonicalurl,'locunitselectarr'=>getlocationwiseElectunits($locId));
		$this->load->view('site/header',$data);
		$this->load->view('site/location/location-details',$data);
		$this->load->view('site/footer');
	}
	*/
	
	public function sitelocationdetails(){

		$m=fetchlocationidaspercurl($this->uri->segment(1));
		if($m)
			$locId=$m[0]['id'];
		else
			show_404();
        
        
		$apiurl=base_url().'api/locations/location/restaurantfetchdetail';
		$bannerapi=base_url().'api/locations/location/locationbannersfetch';
		$placesapi=base_url().'api/locations/location/locationplacesfetch';
		$arr=(getapicurlconnect($apiurl,$locId));

		//print_r($arr);

		$bannerarr=(getapicurlconnect($bannerapi,$locId));
		$placesarr=(getapicurlconnect($placesapi,$locId));
		//print_r($placesarr);

		$ctryArr=getcountrydetail($arr['results']['0']['country']);

		//print_r($ctryArr);exit;
		
		
		if($locId<>$arr['results']['0']['id']){
        	show_404();
        }elseif($arr['results']['0']['is_active']==0){
        	show_404();
        }
        
        $canonicalurl=urlothers($arr['results'][0]['custom_url']);
		
		if(strcmp($canonicalurl,getAddress())!=0){
			show_404();
		}
		
		
		$metatitle=$arr['results']['0']['meta_title'];
		$metadescription=$arr['results']['0']['meta_description'];
		$metakeywords=$arr['results']['0']['meta_keywords'];

		/****/
		$aapiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($aapiurl));
		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));
		/****/
		
		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));	


    	$data=array("title"=>$metatitle,'keywords'=>$metakeywords,'description'=>$metadescription,'details'=>$arr,'bannerdetails'=>$bannerarr,'canonicalurl'=>$canonicalurl,'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'places'=>$placesarr['results'],'headernavigation'=>$navarr,'locunitsarr'=>getlocationwiseunits($locId),'locunitselectarr'=>getlocationwiseElectunits($locId),'canonical'=>$canonicalurl);
		$this->load->view('site/header',$data);
		$this->load->view('site/location/location-details',$data);
		$this->load->view('site/footer');
	}
	
	public function brands(){
        
        $arr=$this->Sitenav_model->getdata(5,'');
		
    	

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));	

		$brandacatapi=base_url().'api/brands/brandcategory/brandcategoryfetch';
		$brandcatarr=(getapicurlconnect($brandacatapi));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		//print_r($brandcatarr);	

    	$data=array("title"=>$arr['0']['meta_title'],'keywords'=>$arr['0']['meta_keywords'],'description'=>$arr['0']['meta_description'],'headernavigation'=>$navarr,'brandcatlist'=>$brandcatarr['results'],'restaurantlist'=>$resarr['results'],'canonical'=>base_url().$arr[0]['url']);
		$this->load->view('site/header',$data);
		$this->load->view('site/brands/brands',$data);
		$this->load->view('site/footer');
	}
	
	
}