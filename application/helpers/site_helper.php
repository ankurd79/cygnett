<?php //if (!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('date_stamp')){
	function date_stamp(){
	$t=date('Y-m-d H:i:s');
	return $t;
	}
}


if(!function_exists('current_time')){
	function current_time(){
    $t=date('H:i:s');
	return $t;
	}
}

if(!function_exists('currentDay')){
	function currentDay(){
	    $t=date('m/d/Y');
		return $t;
	}
}


if(!function_exists('userGreetings')){
	function userGreetings(){
	    $Hour = date('G');
	    if ( $Hour >= 5 && $Hour <= 11 ) {
	        $msg="Good Morning";
	    } else if ( $Hour >= 12 && $Hour <= 16 ) {
	        $msg="Good Afternoon";
	    } else if ( $Hour >= 17 || $Hour <= 4 ) {
	        $msg="Good Evening";
	    }
	    
	    return $msg;
	}
}

if(!function_exists('formatDateTime')){
	function formatDateTime($date,$od=''){
		if($od==1)
		    $formattedDate=date("d-M, Y", strtotime($date));
		 else
		    $formattedDate=date("d-M,Y h:i:s A", strtotime($date));
		   
		return $formattedDate;
	}
}

if(!function_exists('findTimeDiff')){
	function findTimeDiff($date1,$currDateTime){
	    $seconds = strtotime($currDateTime) - strtotime($date1);
	    $days    = floor($seconds / 86400);
	    return $hours   = floor(($seconds - ($days * 86400)) / 3600);
	}
}

if(!function_exists('formatText')){
	function formatText($data){
	    $data=strtolower($data);
	    $data=str_replace(" ","-",$data);
	    //$data=str_replace("/","-",$data);
	    $data=str_replace("*","-",$data);
	    $data=str_replace("#","-",$data);
	    $data=str_replace("!","-",$data);
	    $data=str_replace("~","-",$data);
	    $data=str_replace("'","-",$data);
	    $data=str_replace("&","-",$data);
	    $data=str_replace("&","-",$data);
	    $data=str_replace("(","-",$data);
	    $data=str_replace(")","-",$data);
	    $data=str_replace("%","-",$data);
	    $data=str_replace(",","-",$data);
	    return strtolower($data);
	    
	}
}

if(!function_exists('generateRandomString')){
	function generateRandomString(){
		 $string = "";
		 $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		 $len=8;
		 for($i=0;$i<$len;$i++)
		  $string.=substr($chars,rand(0,strlen($chars)),1);
		return $string;
	 }
}

if(!function_exists('generateOtp')){
	function generateOtp(){
	    return rand (1000 , 9999);
	}
}

if(!function_exists('encrypt')){
	function encrypt($data){
		 //$data=md5($data);
		 $data=password_hash($data, PASSWORD_DEFAULT);
		 return $data;
	 }
}
 
 if(!function_exists('siteConfig')){
	 function siteConfig(){
	     $siteArr=array("site_name"=>'cygnetthotels.com',"phone"=>'+91 124 4262555',"email"=>' centralreservations@cygnetthotels.com', "url"=>'https://www.cygnetthotels.com','addressline'=>'Vipul Business Park Unit No 519, 5th Floor, Sector 48,','city'=>'Gurgaon','country'=>'India','pincode'=>'122004','state'=>'Haryana','mobile'=>'8595450450','mobile2'=>'8595192192');
	     return $siteArr; 
	 }
}

if(!function_exists('sitesocialconfig')){
	    function sitesocialconfig() {
	            $parray=array("Facebook"=>'https://www.facebook.com/cygnetthotels/~fab fa-facebook-square',"Twitter"=>'https://twitter.com/cygnetthotels~fab fa-twitter-square',"Instagram"=>'https://www.instagram.com/cygnett_hotels/~fab fa-instagram',"LinkedIn"=>'https://www.linkedin.com/company/cygnett-hotels-&-resorts/?originalSubdomain=in~fab fa-linkedin', "YouTube"=>'YouTube');
	            return $parray;
	    }
 }

if(!function_exists('uploadcustomImg')){
	function uploadcustomImg($uploadedfile,$folder,$inputname){
	    $srvAddr=$_SERVER['SERVER_ADDR'];
	    $uploadedfile=time()."_".$uploadedfile;
	    if($srvAddr=='::1'){
	        $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/images/'.$folder.'/'.$uploadedfile;
	    }else{
	        $path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.$folder.'/'.$uploadedfile;
	    }
	    move_uploaded_file($_FILES["$inputname"]['tmp_name'],$path);
	    return $uploadedfile;
	}
}

if(!function_exists('uploadcustomDocs')){
	function uploadcustomDocs($uploadedfile,$folder,$inputname){
	    $srvAddr=$_SERVER['SERVER_ADDR'];
	    $uploadedfile=time()."_".$uploadedfile;
	    if($srvAddr=='::1'){
	        $path=$_SERVER['DOCUMENT_ROOT'] . '/cygnett/'.$folder.'/'.$uploadedfile;
	    }else{
	        $path=$_SERVER['DOCUMENT_ROOT'] . '/'.$folder.'/'.$uploadedfile;
	    }
	    move_uploaded_file($_FILES["$inputname"]['tmp_name'],$path);
	    return $uploadedfile;
	}
}

if(!function_exists('contentFormat')){
	function contentFormat($content){
        $content=str_replace(" ","-",$content);
        $content=str_replace("!","-",$content);
        $content=str_replace("@","-",$content);
        $content=str_replace("^","-",$content);
        $content=str_replace("(","-",$content);
        $content=str_replace(")","-",$content);
        $content=str_replace("%","-",$content);
        $content=str_replace("#","-",$content);
        $content=str_replace("*","-",$content);
        $content=strtolower($content);
        return $content;
    }
 }
 
 if(!function_exists('getAddress')){
	    function getAddress() {
	            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';
				$full_url = $protocol."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				return $full_url;
	    }
 }  


 if(!function_exists('getSalutation')){
	    function getSalutation() {
	            $parray=array("Mr."=>'Mr.',"Mrs."=>'Mrs.',"Ms."=>'Ms.',"Dr."=>'Dr.');
	            return $parray;
	    }
 }

 if(!function_exists('getparentfacility')){
	    function getparentfacility() {
	            $parray=array("1"=>'Transfers',"2"=>'Food & Drinks',"3"=>'Safety & Security',"4"=>'Media & Technology', "5"=>'OUTDOOR ACTIVITIES AND SPORTS', '6'=>'COMMON AREA', '7'=>'BASIC FACILITIES', '8'=>'GENERAL SERVICE','9'=>'FAMILY AND KIDS','10'=>'HEALTH AND WELLNESS','11'=>'BEAUTY AND SPA','12'=>'BUSINESS CENTER AND CONFERENCES');
	            return $parray;
	    }
 }

 if(!function_exists('getsocial')){
	    function getsocial() {
	            $parray=array("1"=>'Facebook',"2"=>'Twitter',"3"=>'Instagram',"4"=>'LinkedIn', "5"=>'YouTube');
	            return $parray;
	    }
 }

 if(!function_exists('getareaunits')){
	    function getareaunits() {
	            $parray=array("1"=>'Square Mt.',"2"=>'Square Ft.');
	            return $parray;
	    }
 }

 if(!function_exists('hotelnavigation')){
	    function hotelnavigation() {
	            $parray=array("1"=>'Overview',"2"=>'Accomodation','3'=>'Offers','4'=>'Dining','5'=>'Meeting & Events','6'=>'Gallery');
	            return $parray;
	    }
 }

 if(!function_exists('getchildfacilites')){

 	function getchildfacilites($parentid){

 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(hotel_facilities);
        $CI->db->where('parent_id',$parentid);
        $CI->db->where('is_active','1');
        $CI->db->order_by('facility','ASC');
		$query = $CI->db->get();
        return $query->result_array();


 	}



 }

 if(!function_exists('getroomrepresantationimage')){

 	function getroomrepresantationimage($roomid){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(room_images);
        $CI->db->where('room_id',$roomid);
        //$CI->db->where('is_active','1');
        $CI->db->order_by('id','DESC');
        $CI->db->limit(1);
		$query = $CI->db->get();
		//echo $CI->db->last_query();
        return $query->row_array();
 	}

 }

 if(!function_exists('getbanquetrepresentaionimage')){

 	function getbanquetrepresentaionimage($banquetid){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(hotel_meeting_events_images);
        $CI->db->where('meeting_event_id',$banquetid);
        //$CI->db->where('is_active','1');
        $CI->db->order_by('id','DESC');
        $CI->db->limit(1);
		$query = $CI->db->get();
		//echo $CI->db->last_query();
        return $query->row_array();
 	}

 }

 if(!function_exists('getrestaurantrepresentaionimage')){

 	function getrestaurantrepresentaionimage($resid){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(hotel_restaurant_images);
        $CI->db->where('restaurant_id',$resid);
        //$CI->db->where('is_active','1');
        $CI->db->order_by('id','DESC');
        $CI->db->limit(1);
		$query = $CI->db->get();
		//echo $CI->db->last_query();
        return $query->row_array();
 	}

 }

if(!function_exists('getmetadataofUnit')){

 	function getmetadataofUnit($unitid,$pcat){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(hotel_navigation_meta);
        $CI->db->where('hotel_id',$unitid);
        $CI->db->where('page_category_id',$pcat);
		$query = $CI->db->get();
		//echo $CI->db->last_query();
        return $query->row_array();
 	}

 }

 if(!function_exists('getbannersofUnit')){

 	function getbannersofUnit($unitid,$pcat=''){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(hotel_page_category_banners);
        $CI->db->where('hotel_id',$unitid);
        if($pcat>0){
        	$CI->db->where('page_category_id',$pcat);
        }
		$query = $CI->db->get();
		//echo $CI->db->last_query();
        return $query->row_array();
 	}

 }

 if(!function_exists('gethomepagebanners')){

 	function gethomepagebanners($type=''){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(home_banners);
		if($type==1){
			$CI->db->where('is_active<>',0);
			$CI->db->where('position<>',0);
        	$CI->db->order_by('position','ASC');
		}
		$query = $CI->db->get();
		//echo $CI->db->last_query();
        return $query->result_array();
 	}

 }

 if(!function_exists('getcountry')){

 	function getcountry(){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(country);
		$query = $CI->db->get();
		//echo $CI->db->last_query();
        return $query->result_array();
 	}

 }

 if(!function_exists('getbannersofunitpages')){

 	function getbannersofunitpages($catid,$hotelid){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(hotel_page_category_banners);
		$CI->db->where('hotel_id',$hotelid);
		$CI->db->where('page_category_id',$catid);
		$query = $CI->db->get();
		$CI->db->last_query();
        return $query->result_array();
 	}

 }


if(!function_exists('devicedetector')){

 	function devicedetector($useragent){
 		if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
 				$device='mobile';
 		}else{
 				$device='desktop';
 		}

 		return $device;
 	}

 }

/***url generation***/

if(!function_exists('urlgenerator')){

		function urlgenerator($type,$name,$id){
				$name=formatText($name);
				return base_url().strtolower($type).'/details/'.$name.'/'.base64_encode($id);
		}

}
/*
function urlgeneratorunitnav($type,$name,$pid,$id){
				$name=formatText($name);
				return base_url().strtolower(formatText($type)).'/details/'.$name.'/'.base64_encode($pid).'/'.($id);
		}
*/


function urlgeneratorunitnav($type){
				$name=formatText($type);
				return base_url().strtolower(formatText($type));
		}
		
		
function urlothers($type){
	$name=formatText($type);
	return base_url().strtolower(formatText($type));
}		
		
/***url generation***/




if(!function_exists('fetchapidata')){

 	function fetchapidata($url){
 		$headers = array('Content-Type: application/json',);
			// Open connection
			$ch = curl_init();

			// Set the url, number of GET vars, GET data
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, false);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

			// Execute request
			$result = curl_exec($ch);


			// Close connection
			curl_close($ch);

			// get the result and parse to JSON
			$items = json_decode($result,true);
			//print_r($items);

	   		if(isset($items)){ return $items ; }

	   		else { return FALSE ; }
	 	}









	 	function getapicurlconnect($apiurl,$var='')
	 	{
	 	 	
	 		//echo $var;

	 		if($var<>'')
	 			$data = array($var);
	 		else
	 			$data = array();	

	 		//print_r($data);
	 	 	$url= $apiurl; 
	 	 	$api_request= $data; 
	 	 	$ch = curl_init(); 
	 	 	curl_setopt($ch, CURLOPT_URL, $url); 
	 	 	//using the setopt function to send request to the url 
	 	 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	 	 	//response returned but stored not displayed in browser 
	 	 	curl_setopt($ch, CURLOPT_TIMEOUT, 100); 
	 	 	curl_setopt($ch, CURLOPT_POST, true); 
	 	 	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($api_request)); 
	 	 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	 	 	$result = curl_exec($ch); 
	 	 	//executing request 
	 	 	$err = curl_error($ch); 
	 	 	curl_close ($ch); 
	 	 	$items = json_decode($result,true);
	 	 	//terminate curl handler 
	 	 	if ($err) { echo "cURL Error #:" . $err; } 
	 	 	else { return $items; 
	 	 	//display response 
	 	 	} 
	 	 } 	
	 	 

 }


 function getcountrydetail($cid){

 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(country);
        $CI->db->where('id',$cid);
        $query = $CI->db->get();
        return $query->result_array();


 	}



function wordLimit($s, $limit) {
        return preg_replace('/((\w+\W*){'.($limit-1).'}(\w+))(.*)/', '${1}', $s);   
    }

function locationwithuints(){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('l.location,l.id,l.list_image,l.image,c.nicename,l.custom_url'); 
	$CI->db->distinct('l.location');
    	$CI->db->from(units. ' u');
    	$CI->db->join(state .' s', 's.id = u.state'); 
    	$CI->db->join(location .' l', 'l.id = u.location');
    	$CI->db->join(country .' c', 'l.country = c.id');
    	$CI->db->join(brands .' b', 'b.id = u.brand');
    	$CI->db->where('u.is_active',1); 
    	$CI->db->where('u.coming_soon',0);  
    	$CI->db->order_by('l.location','ASC'); 
    	$query = $CI->db->get();
    	return $query->result_array();

}


function getlocationwiseunits($locid=''){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('u.*,s.name, l.location, l.id as loc_id, c.nicename, r.room_price, b.brand_name, b.brand_styling'); 
    $CI->db->from(units. ' u');
    $CI->db->join(state .' s', 's.id = u.state'); 
    $CI->db->join(location .' l', 'l.id = u.location');
    $CI->db->join(country .' c', 'l.country = c.id');
    $CI->db->join(rooms .' r', 'r.hotel_id = u.id');
    $CI->db->join(brands .' b', 'b.id = u.brand');
    if($locid>0)
        $CI->db->where('u.location',$locid); 
    $CI->db->where('u.is_active',1); 
    $CI->db->where('b.id<>',17); 
    $CI->db->where('r.is_base',1); 
    $CI->db->order_by('u.hotel_name','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();

}

function getlocationwiseElectunits($locid=''){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('u.*,s.name, l.location, l.id as loc_id, c.nicename, r.room_price, b.brand_name, b.brand_styling'); 
    $CI->db->from(units. ' u');
    $CI->db->join(state .' s', 's.id = u.state'); 
    $CI->db->join(location .' l', 'l.id = u.location');
    $CI->db->join(country .' c', 'l.country = c.id');
    $CI->db->join(rooms .' r', 'r.hotel_id = u.id');
    $CI->db->join(brands .' b', 'b.id = u.brand');
    if($locid>0)
        $CI->db->where('u.location',$locid); 
    $CI->db->where('u.is_active',1); 
    $CI->db->where('b.id',17); 
    $CI->db->where('r.is_base',1); 
    $CI->db->order_by('u.hotel_name','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();

}


function totalavgdistancefrmhotel($type){
    $CI =& get_instance();
	$CI->load->database();
	$CI->db->select('sum(`nearby_detail`) as totaavgdistance'); 
    $CI->db->from(hotel_nearby. ' n');
    $CI->db->join(units .' u', 'n.hotel_id = u.id'); 
    $CI->db->where('u.is_active',1); 
    $CI->db->where('n.nearby_area',$type); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->row_array();
}


function distancefromairport($unitid){
	$CI =& get_instance();
	$CI->load->database();
	//$CI->db->distinct();
	$CI->db->from(hotel_nearby);
	$CI->db->where('nearby_area','Airport');
    $CI->db->where('hotel_id',$unitid);
    $query = $CI->db->get();
    return $query->result_array();
}

function distancefromrailstn($unitid){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->from(hotel_nearby);
	$CI->db->like('nearby_area','rail');
    $CI->db->where('hotel_id',$unitid);
    $query = $CI->db->get();
    return $query->result_array();
}

function getrestaurantwiseunits($resid){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('u.*,s.name, l.location, l.id as loc_id, c.nicename'); 
    $CI->db->from(units. ' u');
    $CI->db->join(state .' s', 's.id = u.state'); 
    $CI->db->join(location .' l', 'l.id = u.location');
    $CI->db->join(country .' c', 'l.country = c.id');
    $CI->db->join(hotel_restaurant .' h', 'h.hotel_id = u.id'); 
    $CI->db->where('h.restaurant_id',$resid); 
    $CI->db->where('u.is_active','1'); 
    $CI->db->order_by('u.hotel_name','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();

}


function getofferwiseunits($offid){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('u.*,s.name, l.location, l.id as loc_id, c.nicename'); 
    $CI->db->from(units. ' u');
    $CI->db->join(state .' s', 's.id = u.state'); 
    $CI->db->join(location .' l', 'l.id = u.location');
    $CI->db->join(country .' c', 'l.country = c.id');
    $CI->db->join(hotel_offers .' o', 'o.hotel_id = u.id'); 
    $CI->db->where('o.master_offer_id',$offid); 
    $CI->db->where('u.is_active','1');
    $CI->db->order_by('u.hotel_name','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();

}

function getreionidbyname($region){

 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(regions);
        $CI->db->where('region',$region);
        $query = $CI->db->get();
        return $query->result_array();


 	}
 	
 	function getbdteamregionwise($regionId){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('t.*,c.nicename'); 
    $CI->db->from(team. ' t');
    $CI->db->join(country .' c', 'c.id = t.country');
    //$CI->db->join(regions .' r', 'r.id = t.region');
    $CI->db->join(department .' d', 'd.id = t.department_id');
    //$CI->db->where_in('t.region',$regionId); 
    $CI->db->like('t.region', $regionId);
    $CI->db->where('t.is_active',1);
    $CI->db->where('t.department_id',3); 
    $CI->db->order_by('c.nicename','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();

}

function mdprofile(){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('t.*,c.nicename'); 
    $CI->db->from(team. ' t');
    $CI->db->join(country .' c', 'c.id = t.country');
    $CI->db->join(department .' d', 'd.id = t.department_id');
    $CI->db->where('t.is_active',1);
    $CI->db->where('t.is_mgmt',1);
    $CI->db->where('t.position',1);
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();
}


function mgmtteam(){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('t.*,c.nicename'); 
    $CI->db->from(team. ' t');
    $CI->db->join(country .' c', 'c.id = t.country');
    $CI->db->join(department .' d', 'd.id = t.department_id');
    $CI->db->where('t.is_active',1);
    $CI->db->where('t.is_mgmt',1);
    $CI->db->where('t.position >',1);
    $CI->db->order_by('t.position','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();
}

function advisoryteam(){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('t.*,c.nicename'); 
    $CI->db->from(team. ' t');
    $CI->db->join(country .' c', 'c.id = t.country');
    $CI->db->join(department .' d', 'd.id = t.department_id');
    $CI->db->where('t.is_active',1);
    $CI->db->where('t.is_advisory',1);
    $CI->db->where('t.position >',0);
    $CI->db->order_by('t.position','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();
}

function indiateam(){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('t.*,c.nicename,d.deptt_name'); 
    $CI->db->from(team. ' t');
    $CI->db->join(country .' c', 'c.id = t.country');
    $CI->db->join(department .' d', 'd.id = t.department_id');
    $CI->db->where('c.id',99);
    $CI->db->where('t.is_active',1);
    $CI->db->where('t.is_mgmt',0);
    $CI->db->where('t.position >',0);
    $CI->db->order_by('t.position','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();
}

function gethighlightdata($id){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select('highlights'); 
	$CI->db->from(highlights);
    $CI->db->where('member_id',$id);
    $CI->db->order_by('id','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();
}


function getcorpteamregionwise($regionId){
    $CI =& get_instance();
    $CI->load->database();
    $CI->db->select('t.*,c.nicename'); 
    $CI->db->from(team. ' t');
    $CI->db->join(country .' c', 'c.id = t.country');
    //$CI->db->join(regions .' r', 'r.id = t.region');
    $CI->db->join(department .' d', 'd.id = t.department_id');
    $CI->db->join(rtms .' r', 'r.member_id = t.id'); 
    $CI->db->where('t.is_active',1); 
    $CI->db->where('r.region_id',$regionId);
    $CI->db->where('r.sequence > ',0); 
    $CI->db->order_by('r.sequence','ASC'); 
    $query = $CI->db->get();
    //echo $CI->db->last_query();
    return $query->result_array();

}

function getregionteamlist($rid){
		$CI =& get_instance();
		$CI->load->database();
		$CI->db->select('t.*,r.sequence, r.id as rec_id'); 
    	$CI->db->from(team. ' t');
    	$CI->db->join(country .' c', 'c.id = t.country');
    	$CI->db->join(department .' d', 'd.id = t.department_id');
    	$CI->db->join(rtms .' r', 'r.member_id = t.id'); 
    	$CI->db->where('t.is_active',1); 
    	$CI->db->where('r.region_id',$rid); 
    	$CI->db->order_by('r.id','ASC'); 
    	$query = $CI->db->get();
    	//echo $CI->db->last_query();
    	return $query->result_array();	
}

function getteamdetailbyidentifier($identier){
		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(team);
        $CI->db->where('url',$identier);
        $query = $CI->db->get();
        return $query->result_array();
}

/*
function qualification(){
    $q=array("1"=>'Graduate',"2"=>'Post Graduate',"3"=>'MBA',"4"=>'Diploma','5'=>'Others');
    return $q;		
}
*/
function qualification(){
    $q=array("1"=>'Bachleors/Diploma in Hotel Management',"2"=>'Under Graduate / Graduate',"3"=>'B.Com',"4"=>'Graduate / Post-Graduate / CA','5'=>'Diploma in IT','6'=>'MBA HR','7'=>'B.E.','8'=>'Diploma in Engineering');
    return $q;		
}

function joblistperdate(){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select(" * from cyg_job_posts where now() >= `job_validity_frm` and now() <= `job_validity_to` and is_active='1' order by id desc"); 
	//$CI->db->from(team);
        $query = $CI->db->get();
        //echo $CI->db->last_query();
        return $query->result_array();
}

function joblistaspersts(){
	$CI =& get_instance();
	$CI->load->database();
	$CI->db->select(" * from cyg_job_posts where `job_validity_frm` IS NULL and is_active='1' order by id desc"); 
	//$CI->db->from(team);
        $query = $CI->db->get();
        //echo $CI->db->last_query();
        return $query->result_array();
}

if(!function_exists('sendmail')){
 	function sendmail($data,$template,$subject,$to,$cc='',$file='',$additionalinfo=''){
 		$ci = &get_instance();
 		$pdata=array("alldata"=>$data);
 		if($additionalinfo){
 		    $pdata=array("alldata"=>$data);
 		    $add=array("add"=>$additionalinfo);	
 		    $pdata=array_merge($pdata,$add);
 		    if($file){
 		    	$attchment=array("attchment"=>$file);
 		    	$pdata=array_merge($pdata,$add,$attchment);
 		    }
 		}
	    	$message = $ci->load->view('mailer/'.$template.'', $pdata);
	    	$mailArr = (array)$message->output;
	    	$message=($mailArr['final_output']);
	    	$to=$to;
	    	
    	$from="digital.marketing@cygnetthotels.com";
		$name=$additionalinfo['name'];
		$headers = "From: \"" . $name . "\" <" . $from . ">\r\n";
		$headers .=	"Reply-To: " . $from . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		if($cc!=''){
		    $headers .= 'Cc:'.$cc."\r\n";
		}
        $bcc='digital.marketing@cygnetthotels.com';
		$headers .= 'Bcc:'.$bcc."\r\n";
		

 		if(mail($to,$subject,$message,$headers)){
			//echo 'mail sent';
			return '1';

		}else{
			//echo 'mail couldn\'t be sent';
			return '0';
		}
 	}
 }


 if(!function_exists('parent_id')){

 	function getparentnav($parent_id){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(site_navigation);
        $CI->db->where('id',$parent_id);
        $query = $CI->db->get();
		//echo $CI->db->last_query();
        return $query->row_array();
 	}

 }     
 
 function insertguestreviewdata($input){
 	$CI =& get_instance();
	$CI->load->database();
	$datesubmitted=date('Y-m-d H:i:s');

	//print_r($input);

	if(!isset($input['room_no'])){
	        $roomno='--';
    	}else{
    	    $roomno=$input['room_no'];
    	}
    	
    	if(!isset($input['checkin-date'])){
	        $checkindate='--';
    	}else{
    	    $checkindate=$input['checkin-date'];
    	}
    	
    	if(!isset($input['checkout-date'])){
	        $checkoutdate='--';
    	}else{
    	    $checkoutdate=$input['checkout-date'];
    	}
    	
    	if($input['txtReservation']=='Select mode of reservation'){
	        $txtReservation='--';
    	}else{
    	    $txtReservation=$input['txtReservation'];
    	}
    	
    	if($input['txtStayPurpose']=='Select purpose of your stay'){
	        $txtStayPurpose='--';
    	}else{
    	    $txtStayPurpose=$input['txtStayPurpose'];
    	}
    	
    	if($input['txtFutureStay']=='Please choose'){
	        $txtFutureStay='--';
    	}else{
    	    $txtFutureStay=$input['txtFutureStay'];
    	}
    	
    	if(!isset($input['greetgrp'])){
	        $greetgrp='--';
    	}else{
    	    $greetgrp=$input['greetgrp'];
    	}
    	
    	if(!isset($input['appegrp'])){
	        $appegrp='--';
    	}else{
    	    $appegrp=$input['appegrp'];
    	}
    	
    	if(!isset($input['Checkgrp'])){
	        $Checkgrp='--';
    	}else{
    	    $Checkgrp=$input['Checkgrp'];
    	}
    	
    	if(!isset($input['Bell'])){
	        $bell='--';
    	}else{
    	    $bell=$input['Bell'];
    	}
    	
    	if($input['Imprgrp']==''){
	        $firstimpression='--';
    	}else{
    	    $firstimpression=$input['Imprgrp'];
    	}
    	
    	if(!isset($input['Cleangrp'])){
	        $cleanlinessarrvll='--';
    	}else{
    	    $cleanlinessarrvll=$input['Cleangrp'];
    	}
    	
    	if(!isset($input['Housegrp'])){
	        $housekeeping='--';
    	}else{
    	    $housekeeping=$input['Housegrp'];
    	}
    	
    	if(!isset($input['Maintengrp'])){
	        $maintenance='--';
    	}else{
    	    $maintenance=$input['Maintengrp'];
    	}
    	
    	if(!isset($input['Moneygrp'])){
	        $valformoney='--';
    	}else{
    	    $valformoney=$input['Moneygrp'];
    	}
    	
    	if(!isset($input['Valgrp'])){
	        $valet='--';
    	}else{
    	    $valet=$input['Valgrp'];
    	}
    	
    	if(!isset($input['Parkgrp'])){
	        $parking='--';
    	}else{
    	    $parking=$input['Parkgrp'];
    	}
    	
    	if(!isset($input['Fitngrp'])){
	        $fitnessc='--';
    	}else{
    	    $fitnessc=$input['Fitngrp'];
    	}
    	
    	if(!isset($input['Busingrp'])){
	        $businessservices='--';
    	}else{
    	    $businessservices=$input['Busingrp'];
    	}
    	
    	if(!isset($input['Outgrp'])){
	        $chkoutservice='--';
    	}else{
    	    $chkoutservice=$input['Outgrp'];
    	}
    	
    	if(!isset($input['Bell2grp'])){
	        $bellservice='--';
    	}else{
    	    $bellservice=$input['Bell2grp'];
    	}
    	
    	if(!isset($input['Friengrp'])){
	        $friendly='--';
    	}else{
    	    $friendly=$input['Friengrp'];
    	}
    	
    	if(!isset($input['Knowgrp'])){
	        $knowledge='--';
    	}else{
    	    $knowledge=$input['Knowgrp'];
    	}
    	
    	if(!isset($input['Helpgrp'])){
	        $helpgful='--';
    	}else{
    	    $helpgful=$input['Helpgrp'];
    	}
    	
    	if(!isset($input['Foodgrp'])){
	        $foodqlty='--';
    	}else{
    	    $foodqlty=$input['Foodgrp'];
    	}
    	
    	if(!isset($input['Clean2grp'])){
	        $cleangrpp='--';
    	}else{
    	    $cleangrpp=$input['Clean2grp'];
    	}
    	
    	if(!isset($input['QSergrp'])){
	        $qos='--';
    	}else{
    	    $qos=$input['QSergrp'];
    	}
    	
    	if(!isset($input['Mealgrp'])){
	        $mealval='--';
    	}else{
    	    $mealval=$input['Mealgrp'];
    	}
    	
    	if(!isset($input['Decorgrp'])){
	        $decorapeal='--';
    	}else{
    	    $decorapeal=$input['Decorgrp'];
    	}
    	
    	if(!isset($input['Metgrp'])){
	        $staffmet='--';
    	}else{
    	    $staffmet=$input['Metgrp'];
    	}
    	
    	if(!isset($input['QualityFoodgrp'])){
	        $foodquality='--';
    	}else{
    	    $foodquality=$input['QualityFoodgrp'];
    	}
    	
    	if(!isset($input['DCleangrp'])){
	        $foodclean='--';
    	}else{
    	    $foodclean=$input['DCleangrp'];
    	}
    	
    	if(!isset($input['DQSergrp'])){
	        $foodqly='--';
    	}else{
    	    $foodqly=$input['DQSergrp'];
    	}
    	
    	if(!isset($input['LDMealgrp'])){
	        $valofmeal='--';
    	}else{
    	    $valofmeal=$input['LDMealgrp'];
    	}
    	
    	if(!isset($input['LDecorgrp'])){
	        $decorappealfood='--';
    	}else{
    	    $decorappealfood=$input['LDecorgrp'];
    	}
    	
    	if(!isset($input['LMetgrp'])){
	        $staffmetservicefood='--';
    	}else{
    	    $staffmetservicefood=$input['LMetgrp'];
    	}
    	
    	if(!isset($input['comments'])){
	        $guestcomments='--';
    	}else{
    	    $guestcomments=$input['comments'];
    	}


	$reviewdata=array(
		'name' => $input['name'],
        	'city' => $input['city'],
        	'country' => $input['txtCountry'],
        	'phone' => $input['contact'],
        	'email' => $input['email'],
        	'hotel_stayed' => $input['hotel_name'],
        	'room_no' => $roomno,
        	'check_in' => $checkindate,
        	'check_out' => $checkoutdate,
        	'reservation_mode' => $txtReservation,
        	'stay_purpose' => $txtStayPurpose,
        	'future_stay_plan' => $txtFutureStay,
        	'reception_greet' => $greetgrp,
        	'reception_check_in_service' => $Checkgrp,
        	'reception_appearance_entrance' => $appegrp,
        	'reception_bell_service' => $bell,
        	'guest_room_impression' => $firstimpression,
        	'guest_room_house_keeping' => $housekeeping,
        	'guest_room_money_value' => $valformoney,
        	'guest_room_cleanliness' => $cleangrpp,
        	'guest_room_maintenance' => $maintenance,
        	'hotel_laundry' => $valet,
        	'hotel_fitness_center' => $fitnessc,
        	'hotel_parking' => $parking,
        	'hotel_business_service' => $businessservices,
        	'departure_check_out' => $chkoutservice,
        	'departure_bell_service' => $bellservice,
        	'staff_friendly' => $friendly,
        	'staff_knowledge' => $knowledge,
        	'staff_helpful' => $helpgful,
        	'restaurant_food' => $foodqlty,
        	'restaurant_service' => $qos,
        	'restaurant_decor' => $decorapeal,
        	'restaurant_clean' => $cleangrpp,
        	'restaurant_meal_value' => $mealval,
        	'restaurant_staff' => $staffmet,
        	'lunch_dinner_food_quality' => $foodquality,
        	'lunch_dinner_qos' => $foodqly,
        	'lunch_dinner_decor' => $decorappealfood,
        	'lunch_dinner_cleanliness' => $foodclean,
        	'lunch_dinner_value_for_meal' => $valofmeal,
        	'lunch_dinner_staff' => $staffmetservicefood,
        	'message' => $guestcomments,'submitted_on'=>$datesubmitted



	);

 	$CI->db->insert(guest_review, $reviewdata);

 }

    function fetchunitid($htlname){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->select('id');
		$CI->db->from(units);
        	$CI->db->where('custom_url',$htlname);
        	$query = $CI->db->get();
        	return $query->result_array();

 	}

 	function fetchhotelnavid($cat){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->select('id');
		$CI->db->from(hotel_nav_category);
        	$CI->db->where('page_category',$cat);
        	$query = $CI->db->get();
        	//echo $CI->db->last_query();
        	return $query->result_array();

 	}
 	
 	function fetchlocationidaspercurl($cat){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->select('id');
		$CI->db->from(location);
        	$CI->db->where('custom_url',$cat);
        	$query = $CI->db->get();
        	//echo $CI->db->last_query();
        	return $query->result_array();

 	}
 	
 	
 	if(!function_exists('navigationbanners')){

 	function navigationbanners($navid){
 		$CI =& get_instance();
		$CI->load->database();
		$CI->db->from(nav_banners);
        $CI->db->where('navigation_id',$navid);
        $CI->db->where('is_active','1');
        $CI->db->order_by('id','DESC');
		$query = $CI->db->get();
		//echo $CI->db->last_query();
        return $query->result_array();
 	}

 }
 	
 	
 if(!function_exists('gethotelofferidbymasterid')){

function gethotelofferidbymasterid($masterofferid,$hotelid){
$CI =& get_instance();
$CI->load->database();
$CI->db->from(hotel_offers);
       $CI->db->where('master_offer_id',$masterofferid);
       $CI->db->where('hotel_id',$hotelid);
$query = $CI->db->get();
// echo $CI->db->last_query();
       return $query->row_array();
}

}	
 	
 function cuisinesdetect($strid)
{
    $CI = &get_instance();
    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('api/cuisines/Cuisine_model');
    
        $select=explode(",",$strid);
		$string='';	
		foreach($select as $s){
			$carr=$CI->Cuisine_model->getdata($s,'');	
			$cuisinename=$carr[0]['cuisine_name'];
			$string .= ", $cuisinename";
			return $string = substr($string, 1);
		}	

		//
}	
 	
 function jobapplicationbydateandjobid($jobid,$date)
{
        $CI =& get_instance();
		$CI->load->database();
		$CI->db->from('cyg_job_posts_application_tracker');
        $CI->db->where('job_id',$jobid);
        $CI->db->where('date(`date_received`)',$date);
        $CI->db->order_by('id','DESC');
		$query = $CI->db->get();
	#echo $CI->db->last_query();
        return $query->result_array();
}	
 	
 	
?>