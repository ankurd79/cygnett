<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Unit extends CI_Controller {

    function __construct() {
    	parent::__construct();
    	$this->module='Global';
    	$this->load->model('api/global/Global_model');
    	$this->load->model('api/units/Unit_model');
    	$this->load->model('api/navigations/Hotelnav_model');
    	$this->load->model('Common_model');
    	
    	
    }

    public function pages(){
        #$this->output->cache(15);
    	$apiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($apiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		//$htlname=str_replace("-"," ",$htlname=($this->uri->segment(1)));
		$htlname=$this->uri->segment(1);
		$p=fetchunitid($htlname);	
		$unitId=$p['0']['id'];	

		$nav=($this->uri->segment(2));

		$nav=str_replace("unit-","",$nav);
		if($nav=='meetings-and-events'){
			$finalnav=str_replace("-"," ",$nav);	
		}else{
			$finalnav=$nav;
		}	
		
		$m=fetchhotelnavid($finalnav);
		$navid=$m['0']['id'];	

		//exit;
		
		if(!(is_numeric($navid))||!(is_numeric($unitId))){
        	    //header("Location:".base_url()."our-hotels");
        	    show_404();
        }
        
		$metaArr=$this->Unit_model->getmetadataofUnit($unitId);
		
		
		//print_r($metaArr);

		//print_r($metaArr);
		if($metaArr){
			foreach($metaArr as $meta){
				if($navid==$meta['page_category_id']){
					$metadescription=$meta['meta_description'];
					$metatitle=$meta['meta_title'];
					$metakeywords=$meta['meta_keywords'];
				}
			}
		}else{
			$metadescription='Description...';
			$metatitle='Title';
			$metakeywords='keywords';
		}
		//exit;
			
		$unitoverviewapi=base_url().'api/units/unit/unitinfofetch';
		$overviewarr=(getapicurlconnect($unitoverviewapi,$unitId));
		
		
		if($unitId<>$overviewarr['results']['0']['id']){
        	//header("Location:".base_url()."our-hotels");
        	show_404();
        }elseif($overviewarr['results']['0']['is_active']==0){
        	//header("Location:".base_url()."our-hotels");
        	show_404();
        }elseif($overviewarr['results']['0']['is_hidden']==1){
        	$nocrawl=1;
        }else{
            $nocrawl=0;
        }
        

		if($navid==1){

			$unitotherpolicyapi=base_url().'api/units/unit/unitotherpolicyfetch';
			$othpolicyarr=(getapicurlconnect($unitotherpolicyapi,$unitId));

			$unitsocialmediaapi=base_url().'api/units/unit/unitsocialmediafetch';
			$socialarr=(getapicurlconnect($unitsocialmediaapi,$unitId));
			

			$unitphoneapi=base_url().'api/units/unit/unitphonefetch';
			$phonearr=(getapicurlconnect($unitphoneapi,$unitId));

			$unitemailapi=base_url().'api/units/unit/unitemailfetch';
			$mailarr=(getapicurlconnect($unitemailapi,$unitId));

			$unitnearbyapi=base_url().'api/units/unit/unitnearbyfetch';
			$nearbyarr=(getapicurlconnect($unitnearbyapi,$unitId));

			$unitfacilityapi=base_url().'api/units/unit/unitfacilityfetch';
			$facilityarr=(getapicurlconnect($unitfacilityapi,$unitId));
			
            $canonicalurl=urlgeneratorunitnav($overviewarr['results']['0']['custom_url'].'/unit-overview');
            #exit;
            
            if(strcmp($canonicalurl,getAddress())!=0){
			//exit;
			    show_404();

		    }
		    
			
			
			
			$parray=array('otherpolicies'=>$othpolicyarr['results'],'social'=>$socialarr['results'],'phonelist'=>$phonearr['results'],'maillist'=>$mailarr['results'],'nearbylist'=>$nearbyarr['results'],'facilitylist'=>$facilityarr['results'],'canonical'=>$canonicalurl,'guestreviewArr'=>$this->Unit_model->getunitguestreviews($unitId),'nocrawl'=>$nocrawl);
			
		}elseif($navid==3){

			$unitroomlistapi=base_url().'api/units/unit/unitroomlistfetch';
			$roomlistarr=(getapicurlconnect($unitroomlistapi,$unitId));
			
			
			$canonicalurl=urlgeneratorunitnav($overviewarr['results']['0']['custom_url'].'/unit-accomodation');
            if(strcmp($canonicalurl,getAddress())!=0){
			//exit;
			    show_404();

		    }
		    
		    
		    $parray=array('roomlist'=>$roomlistarr['results'],'canonical'=>$canonicalurl);

			//print_r($parray);
		}elseif($navid==6){

			$apiurl=base_url().'api/units/unit/unitgalleryfetch';
			$gallarr=(getapicurlconnect($apiurl,$unitId));
			
			$canonicalurl=urlgeneratorunitnav($overviewarr['results']['0']['custom_url'].'/unit-gallery');
            
            if(strcmp($canonicalurl,getAddress())!=0){
			//exit;
			    show_404();

		    }
		    
			
			$parray=array('gallerylist'=>$gallarr['results'],'canonical'=>$canonicalurl);
		}elseif($navid==4){
			$apiurl=base_url().'api/units/unit/unitbanquetmeetingfetch';
			$arr=(getapicurlconnect($apiurl,$unitId));
			
			$canonicalurl=urlgeneratorunitnav($overviewarr['results']['0']['custom_url'].'/unit-meetings-and-events');
            
            if(strcmp($canonicalurl,getAddress())!=0){
			//exit;
			    show_404();

		    }
		    
			
			$parray=array('banquestlist'=>$arr['results'],'canonical'=>$canonicalurl);
		}elseif($navid==5){
			$apiurl=base_url().'api/units/unit/unitrestaurantfetch';
			$arr=(getapicurlconnect($apiurl,$unitId));
			
			$canonicalurl=urlgeneratorunitnav($overviewarr['results']['0']['custom_url'].'/unit-dining');
            
            if(strcmp($canonicalurl,getAddress())!=0){
			//exit;
			    show_404();

		    }
		    
			
			$parray=array('dininglist'=>$arr['results'],'canonical'=>$canonicalurl);
		}elseif($navid==7){
			$apiurl=base_url().'api/units/unit/unitofferfetch';
			$arr=(getapicurlconnect($apiurl,$unitId));
			
			
			$canonicalurl=urlgeneratorunitnav($overviewarr['results']['0']['custom_url'].'/unit-offers');
            
            if(strcmp($canonicalurl,getAddress())!=0){
			//exit;
			    show_404();

		    }
			
			$parray=array('offerlist'=>$arr['results'],'canonical'=>$canonicalurl);
		}

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));
		
    	$common=array("title"=>$metatitle,'keywords'=>$metakeywords,'description'=>$metadescription,'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'navid'=>$navid,'hotelnavigation'=>$this->Hotelnav_model->getdata('',0),'unitinfo'=>$overviewarr['results']['0'],'headernavigation'=>$navarr);

    	$data=array_merge($common,$parray);
		$this->load->view('site/header',$data);
		$this->load->view('site/unit/unitpage',$data);
		$this->load->view('site/footer');
	}
	
	public function hotelofferdetails(){

		$offerId=base64_decode($this->uri->segment(7));
    	
        if(!(is_numeric($offerId))){
        	show_404();
        }
        $apiurl=base_url().'api/units/unit/unitofferfetchsingle';
        $arr=(getapicurlconnect($apiurl,$offerId));
        
        #print_r($arr);

        $apiurlimgs=base_url().'api/units/unit/unitofferimgfetch';
        $imgsarr=(getapicurlconnect($apiurlimgs,$offerId));


        $unitoverviewapi=base_url().'api/units/unit/unitinfofetch';
		$htlarr=(getapicurlconnect($unitoverviewapi,$arr['results']['0']['hotel_id']));
		
		#print_r($htlarr);

        
        if($offerId<>$arr['results']['0']['id']){
        	show_404();
        }
        
        if($arr['results']['0']['is_active']==0){
        	show_404();
        }
        
        if($arr['results']['0']['offer_title']){
            $finaloffername=$arr['results']['0']['offer_title'];
        }else{
            $finaloffername=$arr['results']['0']['offer_name'];
        }
        
        $canonicalurl=urlgenerator('individual-offer/'.formattext($htlarr['results']['0']['nicename']).'/'.formattext($htlarr['results']['0']['location']).'/'.formattext($htlarr['results']['0']['hotel_name']).'',formattext($finaloffername),$arr['results']['0']['id']);
		
		if(strcmp($canonicalurl,getAddress())!=0){
			//exit;
			show_404();

		}
		
		
		$unitoverviewapi=base_url().'api/units/unit/unitinfofetch';
		$overviewarr=(getapicurlconnect($unitoverviewapi,$arr['results']['0']['hotel_id']));



		$metatitle=$arr['results']['0']['meta_title'];
		$metadescription=$arr['results']['0']['meta_description'];
		$metakeywords=$arr['results']['0']['meta_keywords'];

		$aapiurl=base_url().'api/brands/brand/brandfetch';
		$brandarr=(getapicurlconnect($aapiurl));

		$resapiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
		$resarr=(getapicurlconnect($resapiurl));

		$headernavapi=base_url().'api/navigations/sitenav/navheaderfetch';
		$navarr=(getapicurlconnect($headernavapi));

		$data=array("title"=>$metatitle,'keywords'=>$metakeywords,'description'=>$metadescription,'offerdetails'=>$arr['results'],'bannerdetails'=>'','canonicalurl'=>$canonicalurl,'brandlist'=>$brandarr['results'],'restaurantlist'=>$resarr['results'],'hotel'=>$overviewarr['results'][0],'bannerlist'=>$imgsarr['results'],'headernavigation'=>$navarr,'canonical'=>$canonicalurl);

		$this->load->view('site/header',$data);
		$this->load->view('site/unit/hotel-offer-details',$data);
		$this->load->view('site/footer');

	}
	
	
	
}