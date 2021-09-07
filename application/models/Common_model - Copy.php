<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Common_model extends CI_model{
 
  public function __construct() {
           parent::__construct(); 
           $this->load->database();
		   $this->load->library('image_lib');
		   $this->load->library("phpmailer_library");
  }
 
 function SendMail ($mailArr){
		    $mail = $this->phpmailer_library->load();
    		$mail = new PHPMailer;

            //try {
                
                $mail->IsSMTP(); // Using SMTP.
                    //$mail->SMTPDebug = 1;
                    $mail->SMTPAuth = false; // Enables SMTP authentication.
                    $mail->Host = "localhost"; // GoDaddy support said to use localhost
                    $mail->Port = 25;
                    $mail->SMTPSecure = 'none';
                    
                    //havent read yet, but this made it work just fine
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    
                    $mail->AddReplyTo('admin@naish.in', 'Naish Admin');
                    $mail->AddAddress($mailArr['to']); 
                    $mail->SetFrom('admin@naish.in', 'Naish Admin');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $mailArr['subject'];
                    $mail->Body    = $mailArr['body'];
                    if(!$mail->Send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    } else {
                        echo "Message has been sent";
                    }
                
                
                
                
            //}
	} 
 
 
 public function img_upload($path,$filetype){
		
		
		$new_name = time().$_FILES["photo"]['name'];
		$new_name = str_replace(" ","_",$new_name);
		$config = array(
		'upload_path' => "./images/".$path."",
		'allowed_types' => "".$filetype."",
		'overwrite' => TRUE,
		'max_size' => "7048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'max_height' => "1300",
		'max_width' => "1300",	
		'file_name' => $new_name,
		
		);
		//print_r($config);
		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		//return $new_name;
		
		$config['image_library'] = 'gd2';
		$config['source_image'] = './images/'.$path.'/'.$new_name.'';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']         = 198;
		$config['height']       = 144;
		
		//print_r($config);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		return $new_name;
		
		
}

public function date_stamp(){
	$t=date('Y-m-d H:i:s');
	return $t;
}

public function current_time(){
    $t=date('H:i:s');
	return $t;
}


public function currentDay(){
    $t=date('m/d/Y');
	return $t;
}



public function userGreetings(){
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

public function formatDateTime($date,$od=''){
	if($od==1)
	    $formattedDate=date("d-M,Y", strtotime($date));
	 else
	    $formattedDate=date("d-M,Y h:i:s A", strtotime($date));
	   
	return $formattedDate;
}

public function findTimeDiff($date1,$currDateTime){
    $seconds = strtotime($currDateTime) - strtotime($date1);
    $days    = floor($seconds / 86400);
    return $hours   = floor(($seconds - ($days * 86400)) / 3600);
}

public function formatText($data){
    $data=strtolower($data);
    $data=str_replace(" ","-",$data);
    return $data;
}


public function section_img_path($path_id){
	if($path_id==1){
	    $path="img/quiz_section_image/";
	}elseif($path_id==2){
	    $path="img/class_groups/";
	}
	elseif($path_id==3){
	    $path="img/news/";
	}
	elseif($path_id==4){
	    $path="img/testimonials/";
	}elseif($path_id==5){
	    $path="img/pictorial_quiz/";
	}
	return $path;
}

public function msgToUser($type){
		if($type==1){
			$msg=" Successfully";
		}elseif($type==2){
			$msg="Updated Successfully";
		}elseif($type==3){
			$msg="Deleted Successfully";
		}
		
		return $msg;
	}
	
public function generateRandomString(){
	 $string = "";
	 $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	 $len=8;
	 for($i=0;$i<$len;$i++)
	  $string.=substr($chars,rand(0,strlen($chars)),1);
	return $string;
 }

public function generateOtp(){
    return rand (1000 , 9999);
}


public function encrypt($data){
	 //$data=md5($data);
	 $data=password_hash($data, PASSWORD_DEFAULT);
	 return $data;
 }
 
 public function siteConfig(){
     $siteArr=array("site_name"=>'wizwings.org',"phone"=>'1234567890',"email"=>'support@wizwings.org');
     return $siteArr; 
 }


public function uploadcustomImg($uploadedfile,$folder){
    $srvAddr=$_SERVER['SERVER_ADDR'];
    $uploadedfile=time()."_".$uploadedfile;
    if($srvAddr=='::1'){
        $path=$_SERVER['DOCUMENT_ROOT'] . '/wizwings_corp/images/'.$folder.'/'.$uploadedfile;
    }else{
        $path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.$folder.'/'.$uploadedfile;
    }
    move_uploaded_file($_FILES["image"]['tmp_name'],$path);
    return $uploadedfile;
}

public function uploadcustomImgg($uploadedfile,$folder){
    $srvAddr=$_SERVER['SERVER_ADDR'];
    $uploadedfile=time()."_".$uploadedfile;
    if($srvAddr=='::1'){
        $path=$_SERVER['DOCUMENT_ROOT'] . '/wizwings_corp/images/'.$folder.'/'.$uploadedfile;
    }else{
        $path=$_SERVER['DOCUMENT_ROOT'] . '/images/'.$folder.'/'.$uploadedfile;
    }
    move_uploaded_file($_FILES["imagesmall"]['tmp_name'],$path);
    return $uploadedfile;
}

 public function currencyList(){
     $currArr=array("AED"=> "United Arab Emirates dirham",
    "AFN"=> "Afghan afghani",
    "ALL"=> "Albanian lek",
    "AMD"=> "Armenian dram",
    "ANG"=> "Netherlands Antillean guilder",
    "AOA"=> "Angolan kwanza",
    "ARS"=> "Argentine peso",
    "AUD"=> "Australian dollar",
    "AWG"=> "Aruban florin",
    "AZN"=> "Azerbaijani manat",
    "BAM"=> "Bosnia and Herzegovina convertible mark",
    "BBD"=> "Barbados dollar",
    "BDT"=> "Bangladeshi taka",
    "BGN"=> "Bulgarian lev",
    "BHD"=> "Bahraini dinar",
    "BIF"=> "Burundian franc",
    "BMD"=> "Bermudian dollar",
    "BND"=> "Brunei dollar",
    "BOB"=> "Boliviano",
    "BRL"=> "Brazilian real",
    "BSD"=> "Bahamian dollar",
    "BTN"=> "Bhutanese ngultrum",
    "BWP"=> "Botswana pula",
    "BYN"=> "New Belarusian ruble",
    "BYR"=> "Belarusian ruble",
    "BZD"=> "Belize dollar",
    "CAD"=> "Canadian dollar",
    "CDF"=> "Congolese franc",
    "CHF"=> "Swiss franc",
    "CLF"=> "Unidad de Fomento",
    "CLP"=> "Chilean peso",
    "CNY"=> "Renminbi|Chinese yuan",
    "COP"=> "Colombian peso",
    "CRC"=> "Costa Rican colon",
    "CUC"=> "Cuban convertible peso",
    "CUP"=> "Cuban peso",
    "CVE"=> "Cape Verde escudo",
    "CZK"=> "Czech koruna",
    "DJF"=> "Djiboutian franc",
    "DKK"=> "Danish krone",
    "DOP"=> "Dominican peso",
    "DZD"=> "Algerian dinar",
    "EGP"=> "Egyptian pound",
    "ERN"=> "Eritrean nakfa",
    "ETB"=> "Ethiopian birr",
    "EUR"=> "Euro",
    "FJD"=> "Fiji dollar",
    "FKP"=> "Falkland Islands pound",
    "GBP"=> "Pound sterling",
    "GEL"=> "Georgian lari",
    "GHS"=> "Ghanaian cedi",
    "GIP"=> "Gibraltar pound",
    "GMD"=> "Gambian dalasi",
    "GNF"=> "Guinean franc",
    "GTQ"=> "Guatemalan quetzal",
    "GYD"=> "Guyanese dollar",
    "HKD"=> "Hong Kong dollar",
    "HNL"=> "Honduran lempira",
    "HRK"=> "Croatian kuna",
    "HTG"=> "Haitian gourde",
    "HUF"=> "Hungarian forint",
    "IDR"=> "Indonesian rupiah",
    "ILS"=> "Israeli new shekel",
    "INR"=> "Indian rupee",
    "IQD"=> "Iraqi dinar",
    "IRR"=> "Iranian rial",
    "ISK"=> "Icelandic króna",
    "JMD"=> "Jamaican dollar",
    "JOD"=> "Jordanian dinar",
    "JPY"=> "Japanese yen",
    "KES"=> "Kenyan shilling",
    "KGS"=> "Kyrgyzstani som",
    "KHR"=> "Cambodian riel",
    "KMF"=> "Comoro franc",
    "KPW"=> "North Korean won",
    "KRW"=> "South Korean won",
    "KWD"=> "Kuwaiti dinar",
    "KYD"=> "Cayman Islands dollar",
    "KZT"=> "Kazakhstani tenge",
    "LAK"=> "Lao kip",
    "LBP"=> "Lebanese pound",
    "LKR"=> "Sri Lankan rupee",
    "LRD"=> "Liberian dollar",
    "LSL"=> "Lesotho loti",
    "LYD"=> "Libyan dinar",
    "MAD"=> "Moroccan dirham",
    "MDL"=> "Moldovan leu",
    "MGA"=> "Malagasy ariary",
    "MKD"=> "Macedonian denar",
    "MMK"=> "Myanmar kyat",
    "MNT"=> "Mongolian tögrög",
    "MOP"=> "Macanese pataca",
    "MRO"=> "Mauritanian ouguiya",
    "MUR"=> "Mauritian rupee",
    "MVR"=> "Maldivian rufiyaa",
    "MWK"=> "Malawian kwacha",
    "MXN"=> "Mexican peso",
    "MXV"=> "Mexican Unidad de Inversion",
    "MYR"=> "Malaysian ringgit",
    "MZN"=> "Mozambican metical",
    "NAD"=> "Namibian dollar",
    "NGN"=> "Nigerian naira",
    "NIO"=> "Nicaraguan córdoba",
    "NOK"=> "Norwegian krone",
    "NPR"=> "Nepalese rupee",
    "NZD"=> "New Zealand dollar",
    "OMR"=> "Omani rial",
    "PAB"=> "Panamanian balboa",
    "PEN"=> "Peruvian Sol",
    "PGK"=> "Papua New Guinean kina",
    "PHP"=> "Philippine peso",
    "PKR"=> "Pakistani rupee",
    "PLN"=> "Polish złoty",
    "PYG"=> "Paraguayan guaraní",
    "QAR"=> "Qatari riyal",
    "RON"=> "Romanian leu",
    "RSD"=> "Serbian dinar",
    "RUB"=> "Russian ruble",
    "RWF"=> "Rwandan franc",
    "SAR"=> "Saudi riyal",
    "SBD"=> "Solomon Islands dollar",
    "SCR"=> "Seychelles rupee",
    "SDG"=> "Sudanese pound",
    "SEK"=> "Swedish krona",
    "SGD"=> "Singapore dollar",
    "SHP"=> "Saint Helena pound",
    "SLL"=> "Sierra Leonean leone",
    "SOS"=> "Somali shilling",
    "SRD"=> "Surinamese dollar",
    "SSP"=> "South Sudanese pound",
    "STD"=> "São Tomé and Príncipe dobra",
    "SVC"=> "Salvadoran colón",
    "SYP"=> "Syrian pound",
    "SZL"=> "Swazi lilangeni",
    "THB"=> "Thai baht",
    "TJS"=> "Tajikistani somoni",
    "TMT"=> "Turkmenistani manat",
    "TND"=> "Tunisian dinar",
    "TOP"=> "Tongan paʻanga",
    "TRY"=> "Turkish lira",
    "TTD"=> "Trinidad and Tobago dollar",
    "TWD"=> "New Taiwan dollar",
    "TZS"=> "Tanzanian shilling",
    "UAH"=> "Ukrainian hryvnia",
    "UGX"=> "Ugandan shilling",
    "USD"=> "United States dollar",
    "UYI"=> "Uruguay Peso en Unidades Indexadas",
    "UYU"=> "Uruguayan peso",
    "UZS"=> "Uzbekistan som",
    "VEF"=> "Venezuelan bolívar",
    "VND"=> "Vietnamese đồng",
    "VUV"=> "Vanuatu vatu",
    "WST"=> "Samoan tala",
    "XAF"=> "Central African CFA franc",
    "XCD"=> "East Caribbean dollar",
    "XOF"=> "West African CFA franc",
    "XPF"=> "CFP franc",
    "XXX"=> "No currency",
    "YER"=> "Yemeni rial",
    "ZAR"=> "South African rand",
    "ZMW"=> "Zambian kwacha",
    "ZWL"=> "Zimbabwean dollar");
    
    return $currArr;
 }
 
 public function currencySymbol($currency=''){
     $currency_symbols = array(
        	'AED' => '&#1583;.&#1573;', // ?
        	'AFN' => '&#65;&#102;',
        	'ALL' => '&#76;&#101;&#107;',
        	'AMD' => '',
        	'ANG' => '&#402;',
        	'AOA' => '&#75;&#122;', // ?
        	'ARS' => '&#36;',
        	'AUD' => '&#36;',
        	'AWG' => '&#402;',
        	'AZN' => '&#1084;&#1072;&#1085;',
        	'BAM' => '&#75;&#77;',
        	'BBD' => '&#36;',
        	'BDT' => '&#2547;', // ?
        	'BGN' => '&#1083;&#1074;',
        	'BHD' => '.&#1583;.&#1576;', // ?
        	'BIF' => '&#70;&#66;&#117;', // ?
        	'BMD' => '&#36;',
        	'BND' => '&#36;',
        	'BOB' => '&#36;&#98;',
        	'BRL' => '&#82;&#36;',
        	'BSD' => '&#36;',
        	'BTN' => '&#78;&#117;&#46;', // ?
        	'BWP' => '&#80;',
        	'BYR' => '&#112;&#46;',
        	'BZD' => '&#66;&#90;&#36;',
        	'CAD' => '&#36;',
        	'CDF' => '&#70;&#67;',
        	'CHF' => '&#67;&#72;&#70;',
        	'CLF' => '', // ?
        	'CLP' => '&#36;',
        	'CNY' => '&#165;',
        	'COP' => '&#36;',
        	'CRC' => '&#8353;',
        	'CUP' => '&#8396;',
        	'CVE' => '&#36;', // ?
        	'CZK' => '&#75;&#269;',
        	'DJF' => '&#70;&#100;&#106;', // ?
        	'DKK' => '&#107;&#114;',
        	'DOP' => '&#82;&#68;&#36;',
        	'DZD' => '&#1583;&#1580;', // ?
        	'EGP' => '&#163;',
        	'ETB' => '&#66;&#114;',
        	'EUR' => '&#8364;',
        	'FJD' => '&#36;',
        	'FKP' => '&#163;',
        	'GBP' => '&#163;',
        	'GEL' => '&#4314;', // ?
        	'GHS' => '&#162;',
        	'GIP' => '&#163;',
        	'GMD' => '&#68;', // ?
        	'GNF' => '&#70;&#71;', // ?
        	'GTQ' => '&#81;',
        	'GYD' => '&#36;',
        	'HKD' => '&#36;',
        	'HNL' => '&#76;',
        	'HRK' => '&#107;&#110;',
        	'HTG' => '&#71;', // ?
        	'HUF' => '&#70;&#116;',
        	'IDR' => '&#82;&#112;',
        	'ILS' => '&#8362;',
        	'INR' => '&#8377;',
        	'IQD' => '&#1593;.&#1583;', // ?
        	'IRR' => '&#65020;',
        	'ISK' => '&#107;&#114;',
        	'JEP' => '&#163;',
        	'JMD' => '&#74;&#36;',
        	'JOD' => '&#74;&#68;', // ?
        	'JPY' => '&#165;',
        	'KES' => '&#75;&#83;&#104;', // ?
        	'KGS' => '&#1083;&#1074;',
        	'KHR' => '&#6107;',
        	'KMF' => '&#67;&#70;', // ?
        	'KPW' => '&#8361;',
        	'KRW' => '&#8361;',
        	'KWD' => '&#1583;.&#1603;', // ?
        	'KYD' => '&#36;',
        	'KZT' => '&#1083;&#1074;',
        	'LAK' => '&#8365;',
        	'LBP' => '&#163;',
        	'LKR' => '&#8360;',
        	'LRD' => '&#36;',
        	'LSL' => '&#76;', // ?
        	'LTL' => '&#76;&#116;',
        	'LVL' => '&#76;&#115;',
        	'LYD' => '&#1604;.&#1583;', // ?
        	'MAD' => '&#1583;.&#1605;.', //?
        	'MDL' => '&#76;',
        	'MGA' => '&#65;&#114;', // ?
        	'MKD' => '&#1076;&#1077;&#1085;',
        	'MMK' => '&#75;',
        	'MNT' => '&#8366;',
        	'MOP' => '&#77;&#79;&#80;&#36;', // ?
        	'MRO' => '&#85;&#77;', // ?
        	'MUR' => '&#8360;', // ?
        	'MVR' => '.&#1923;', // ?
        	'MWK' => '&#77;&#75;',
        	'MXN' => '&#36;',
        	'MYR' => '&#82;&#77;',
        	'MZN' => '&#77;&#84;',
        	'NAD' => '&#36;',
        	'NGN' => '&#8358;',
        	'NIO' => '&#67;&#36;',
        	'NOK' => '&#107;&#114;',
        	'NPR' => '&#8360;',
        	'NZD' => '&#36;',
        	'OMR' => '&#65020;',
        	'PAB' => '&#66;&#47;&#46;',
        	'PEN' => '&#83;&#47;&#46;',
        	'PGK' => '&#75;', // ?
        	'PHP' => '&#8369;',
        	'PKR' => '&#8360;',
        	'PLN' => '&#122;&#322;',
        	'PYG' => '&#71;&#115;',
        	'QAR' => '&#65020;',
        	'RON' => '&#108;&#101;&#105;',
        	'RSD' => '&#1044;&#1080;&#1085;&#46;',
        	'RUB' => '&#1088;&#1091;&#1073;',
        	'RWF' => '&#1585;.&#1587;',
        	'SAR' => '&#65020;',
        	'SBD' => '&#36;',
        	'SCR' => '&#8360;',
        	'SDG' => '&#163;', // ?
        	'SEK' => '&#107;&#114;',
        	'SGD' => '&#36;',
        	'SHP' => '&#163;',
        	'SLL' => '&#76;&#101;', // ?
        	'SOS' => '&#83;',
        	'SRD' => '&#36;',
        	'STD' => '&#68;&#98;', // ?
        	'SVC' => '&#36;',
        	'SYP' => '&#163;',
        	'SZL' => '&#76;', // ?
        	'THB' => '&#3647;',
        	'TJS' => '&#84;&#74;&#83;', // ? TJS (guess)
        	'TMT' => '&#109;',
        	'TND' => '&#1583;.&#1578;',
        	'TOP' => '&#84;&#36;',
        	'TRY' => '&#8356;', // New Turkey Lira (old symbol used)
        	'TTD' => '&#36;',
        	'TWD' => '&#78;&#84;&#36;',
        	'TZS' => '',
        	'UAH' => '&#8372;',
        	'UGX' => '&#85;&#83;&#104;',
        	'USD' => '&#36;',
        	'UYU' => '&#36;&#85;',
        	'UZS' => '&#1083;&#1074;',
        	'VEF' => '&#66;&#115;',
        	'VND' => '&#8363;',
        	'VUV' => '&#86;&#84;',
        	'WST' => '&#87;&#83;&#36;',
        	'XAF' => '&#70;&#67;&#70;&#65;',
        	'XCD' => '&#36;',
        	'XDR' => '',
        	'XOF' => '',
        	'XPF' => '&#70;',
        	'YER' => '&#65020;',
        	'ZAR' => '&#82;',
        	'ZMK' => '&#90;&#75;', // ?
        	'ZWL' => '&#90;&#36;',
        );
        
        //return $currency_symbols;
        if(array_key_exists($currency, $currency_symbols)){
		    return $currency_symbols[$currency];
	    }

 }
 
    public function countryAndShortCodes(){
        $country_array = array(
                    "AF" => "Afghanistan",
                    "AL" => "Albania",
                    "DZ" => "Algeria",
                    "AS" => "American Samoa",
                    "AD" => "Andorra",
                    "AO" => "Angola",
                    "AI" => "Anguilla",
                    "AQ" => "Antarctica",
                    "AG" => "Antigua and Barbuda",
                    "AR" => "Argentina",
                    "AM" => "Armenia",
                    "AW" => "Aruba",
                    "AU" => "Australia",
                    "AT" => "Austria",
                    "AZ" => "Azerbaijan",
                    "BS" => "Bahamas",
                    "BH" => "Bahrain",
                    "BD" => "Bangladesh",
                    "BB" => "Barbados",
                    "BY" => "Belarus",
                    "BE" => "Belgium",
                    "BZ" => "Belize",
                    "BJ" => "Benin",
                    "BM" => "Bermuda",
                    "BT" => "Bhutan",
                    "BO" => "Bolivia",
                    "BA" => "Bosnia and Herzegovina",
                    "BW" => "Botswana",
                    "BV" => "Bouvet Island",
                    "BR" => "Brazil",
                    "BQ" => "British Antarctic Territory",
                    "IO" => "British Indian Ocean Territory",
                    "VG" => "British Virgin Islands",
                    "BN" => "Brunei",
                    "BG" => "Bulgaria",
                    "BF" => "Burkina Faso",
                    "BI" => "Burundi",
                    "KH" => "Cambodia",
                    "CM" => "Cameroon",
                    "CA" => "Canada",
                    "CT" => "Canton and Enderbury Islands",
                    "CV" => "Cape Verde",
                    "KY" => "Cayman Islands",
                    "CF" => "Central African Republic",
                    "TD" => "Chad",
                    "CL" => "Chile",
                    "CN" => "China",
                    "CX" => "Christmas Island",
                    "CC" => "Cocos [Keeling] Islands",
                    "CO" => "Colombia",
                    "KM" => "Comoros",
                    "CG" => "Congo - Brazzaville",
                    "CD" => "Congo - Kinshasa",
                    "CK" => "Cook Islands",
                    "CR" => "Costa Rica",
                    "HR" => "Croatia",
                    "CU" => "Cuba",
                    "CY" => "Cyprus",
                    "CZ" => "Czech Republic",
                    "CI" => "Côte d’Ivoire",
                    "DK" => "Denmark",
                    "DJ" => "Djibouti",
                    "DM" => "Dominica",
                    "DO" => "Dominican Republic",
                    "NQ" => "Dronning Maud Land",
                    "DD" => "East Germany",
                    "EC" => "Ecuador",
                    "EG" => "Egypt",
                    "SV" => "El Salvador",
                    "GQ" => "Equatorial Guinea",
                    "ER" => "Eritrea",
                    "EE" => "Estonia",
                    "ET" => "Ethiopia",
                    "FK" => "Falkland Islands",
                    "FO" => "Faroe Islands",
                    "FJ" => "Fiji",
                    "FI" => "Finland",
                    "FR" => "France",
                    "GF" => "French Guiana",
                    "PF" => "French Polynesia",
                    "TF" => "French Southern Territories",
                    "FQ" => "French Southern and Antarctic Territories",
                    "GA" => "Gabon",
                    "GM" => "Gambia",
                    "GE" => "Georgia",
                    "DE" => "Germany",
                    "GH" => "Ghana",
                    "GI" => "Gibraltar",
                    "GR" => "Greece",
                    "GL" => "Greenland",
                    "GD" => "Grenada",
                    "GP" => "Guadeloupe",
                    "GU" => "Guam",
                    "GT" => "Guatemala",
                    "GG" => "Guernsey",
                    "GN" => "Guinea",
                    "GW" => "Guinea-Bissau",
                    "GY" => "Guyana",
                    "HT" => "Haiti",
                    "HM" => "Heard Island and McDonald Islands",
                    "HN" => "Honduras",
                    "HK" => "Hong Kong SAR China",
                    "HU" => "Hungary",
                    "IS" => "Iceland",
                    "IN" => "India",
                    "ID" => "Indonesia",
                    "IR" => "Iran",
                    "IQ" => "Iraq",
                    "IE" => "Ireland",
                    "IM" => "Isle of Man",
                    "IL" => "Israel",
                    "IT" => "Italy",
                    "JM" => "Jamaica",
                    "JP" => "Japan",
                    "JE" => "Jersey",
                    "JT" => "Johnston Island",
                    "JO" => "Jordan",
                    "KZ" => "Kazakhstan",
                    "KE" => "Kenya",
                    "KI" => "Kiribati",
                    "KW" => "Kuwait",
                    "KG" => "Kyrgyzstan",
                    "LA" => "Laos",
                    "LV" => "Latvia",
                    "LB" => "Lebanon",
                    "LS" => "Lesotho",
                    "LR" => "Liberia",
                    "LY" => "Libya",
                    "LI" => "Liechtenstein",
                    "LT" => "Lithuania",
                    "LU" => "Luxembourg",
                    "MO" => "Macau SAR China",
                    "MK" => "Macedonia",
                    "MG" => "Madagascar",
                    "MW" => "Malawi",
                    "MY" => "Malaysia",
                    "MV" => "Maldives",
                    "ML" => "Mali",
                    "MT" => "Malta",
                    "MH" => "Marshall Islands",
                    "MQ" => "Martinique",
                    "MR" => "Mauritania",
                    "MU" => "Mauritius",
                    "YT" => "Mayotte",
                    "FX" => "Metropolitan France",
                    "MX" => "Mexico",
                    "FM" => "Micronesia",
                    "MI" => "Midway Islands",
                    "MD" => "Moldova",
                    "MC" => "Monaco",
                    "MN" => "Mongolia",
                    "ME" => "Montenegro",
                    "MS" => "Montserrat",
                    "MA" => "Morocco",
                    "MZ" => "Mozambique",
                    "MM" => "Myanmar [Burma]",
                    "NA" => "Namibia",
                    "NR" => "Nauru",
                    "NP" => "Nepal",
                    "NL" => "Netherlands",
                    "AN" => "Netherlands Antilles",
                    "NT" => "Neutral Zone",
                    "NC" => "New Caledonia",
                    "NZ" => "New Zealand",
                    "NI" => "Nicaragua",
                    "NE" => "Niger",
                    "NG" => "Nigeria",
                    "NU" => "Niue",
                    "NF" => "Norfolk Island",
                    "KP" => "North Korea",
                    "VD" => "North Vietnam",
                    "MP" => "Northern Mariana Islands",
                    "NO" => "Norway",
                    "OM" => "Oman",
                    "PC" => "Pacific Islands Trust Territory",
                    "PK" => "Pakistan",
                    "PW" => "Palau",
                    "PS" => "Palestinian Territories",
                    "PA" => "Panama",
                    "PZ" => "Panama Canal Zone",
                    "PG" => "Papua New Guinea",
                    "PY" => "Paraguay",
                    "YD" => "People's Democratic Republic of Yemen",
                    "PE" => "Peru",
                    "PH" => "Philippines",
                    "PN" => "Pitcairn Islands",
                    "PL" => "Poland",
                    "PT" => "Portugal",
                    "PR" => "Puerto Rico",
                    "QA" => "Qatar",
                    "RO" => "Romania",
                    "RU" => "Russia",
                    "RW" => "Rwanda",
                    "RE" => "Réunion",
                    "BL" => "Saint Barthélemy",
                    "SH" => "Saint Helena",
                    "KN" => "Saint Kitts and Nevis",
                    "LC" => "Saint Lucia",
                    "MF" => "Saint Martin",
                    "PM" => "Saint Pierre and Miquelon",
                    "VC" => "Saint Vincent and the Grenadines",
                    "WS" => "Samoa",
                    "SM" => "San Marino",
                    "SA" => "Saudi Arabia",
                    "SN" => "Senegal",
                    "RS" => "Serbia",
                    "CS" => "Serbia and Montenegro",
                    "SC" => "Seychelles",
                    "SL" => "Sierra Leone",
                    "SG" => "Singapore",
                    "SK" => "Slovakia",
                    "SI" => "Slovenia",
                    "SB" => "Solomon Islands",
                    "SO" => "Somalia",
                    "ZA" => "South Africa",
                    "GS" => "South Georgia and the South Sandwich Islands",
                    "KR" => "South Korea",
                    "ES" => "Spain",
                    "LK" => "Sri Lanka",
                    "SD" => "Sudan",
                    "SR" => "Suriname",
                    "SJ" => "Svalbard and Jan Mayen",
                    "SZ" => "Swaziland",
                    "SE" => "Sweden",
                    "CH" => "Switzerland",
                    "SY" => "Syria",
                    "ST" => "São Tomé and Príncipe",
                    "TW" => "Taiwan",
                    "TJ" => "Tajikistan",
                    "TZ" => "Tanzania",
                    "TH" => "Thailand",
                    "TL" => "Timor-Leste",
                    "TG" => "Togo",
                    "TK" => "Tokelau",
                    "TO" => "Tonga",
                    "TT" => "Trinidad and Tobago",
                    "TN" => "Tunisia",
                    "TR" => "Turkey",
                    "TM" => "Turkmenistan",
                    "TC" => "Turks and Caicos Islands",
                    "TV" => "Tuvalu",
                    "UM" => "U.S. Minor Outlying Islands",
                    "PU" => "U.S. Miscellaneous Pacific Islands",
                    "VI" => "U.S. Virgin Islands",
                    "UG" => "Uganda",
                    "UA" => "Ukraine",
                    "SU" => "Union of Soviet Socialist Republics",
                    "AE" => "United Arab Emirates",
                    "GB" => "United Kingdom",
                    "US" => "United States",
                    "ZZ" => "Unknown or Invalid Region",
                    "UY" => "Uruguay",
                    "UZ" => "Uzbekistan",
                    "VU" => "Vanuatu",
                    "VA" => "Vatican City",
                    "VE" => "Venezuela",
                    "VN" => "Vietnam",
                    "WK" => "Wake Island",
                    "WF" => "Wallis and Futuna",
                    "EH" => "Western Sahara",
                    "YE" => "Yemen",
                    "ZM" => "Zambia",
                    "ZW" => "Zimbabwe",
                    "AX" => "Åland Islands",
                    );
                    
                    return $country_array;


    }
 
    public function get_country_currency($sec_id=''){
        $curr_arr = array(
			'AF' => 'AFN',
			'AL' => 'ALL',
			'DZ' => 'DZD',
			'AS' => 'USD',
			'AD' => 'EUR',
			'AO' => 'AOA',
			'AI' => 'XCD',
			'AQ' => 'XCD',
			'AG' => 'XCD',
			'AR' => 'ARS',
			'AM' => 'AMD',
			'AW' => 'AWG',
			'AU' => 'AUD',
			'AT' => 'EUR',
			'AZ' => 'AZN',
			'BS' => 'BSD',
			'BH' => 'BHD',
			'BD' => 'BDT',
			'BB' => 'BBD',
			'BY' => 'BYR',
			'BE' => 'EUR',
			'BZ' => 'BZD',
			'BJ' => 'XOF',
			'BM' => 'BMD',
			'BT' => 'BTN',
			'BO' => 'BOB',
			'BA' => 'BAM',
			'BW' => 'BWP',
			'BV' => 'NOK',
			'BR' => 'BRL',
			'IO' => 'USD',
			'BN' => 'BND',
			'BG' => 'BGN',
			'BF' => 'XOF',
			'BI' => 'BIF',
			'KH' => 'KHR',
			'CM' => 'XAF',
			'CA' => 'CAD',
			'CV' => 'CVE',
			'KY' => 'KYD',
			'CF' => 'XAF',
			'TD' => 'XAF',
			'CL' => 'CLP',
			'CN' => 'CNY',
			'HK' => 'HKD',
			'CX' => 'AUD',
			'CC' => 'AUD',
			'CO' => 'COP',
			'KM' => 'KMF',
			'CG' => 'XAF',
			'CD' => 'CDF',
			'CK' => 'NZD',
			'CR' => 'CRC',
			'HR' => 'HRK',
			'CU' => 'CUP',
			'CY' => 'EUR',
			'CZ' => 'CZK',
			'DK' => 'DKK',
			'DJ' => 'DJF',
			'DM' => 'XCD',
			'DO' => 'DOP',
			'EC' => 'ECS',
			'EG' => 'EGP',
			'SV' => 'SVC',
			'GQ' => 'XAF',
			'ER' => 'ERN',
			'EE' => 'EUR',
			'ET' => 'ETB',
			'FK' => 'FKP',
			'FO' => 'DKK',
			'FJ' => 'FJD',
			'FI' => 'EUR',
			'FR' => 'EUR',
			'GF' => 'EUR',
			'TF' => 'EUR',
			'GA' => 'XAF',
			'GM' => 'GMD',
			'GE' => 'GEL',
			'DE' => 'EUR',
			'GH' => 'GHS',
			'GI' => 'GIP',
			'GR' => 'EUR',
			'GL' => 'DKK',
			'GD' => 'XCD',
			'GP' => 'EUR',
			'GU' => 'USD',
			'GT' => 'QTQ',
			'GG' => 'GGP',
			'GN' => 'GNF',
			'GW' => 'GWP',
			'GY' => 'GYD',
			'HT' => 'HTG',
			'HM' => 'AUD',
			'HN' => 'HNL',
			'HU' => 'HUF',
			'IS' => 'ISK',
			'IN' => 'INR',
			'ID' => 'IDR',
			'IR' => 'IRR',
			'IQ' => 'IQD',
			'IE' => 'EUR',
			'IM' => 'GBP',
			'IL' => 'ILS',
			'IT' => 'EUR',
			'JM' => 'JMD',
			'JP' => 'JPY',
			'JE' => 'GBP',
			'JO' => 'JOD',
			'KZ' => 'KZT',
			'KE' => 'KES',
			'KI' => 'AUD',
			'KP' => 'KPW',
			'KR' => 'KRW',
			'KW' => 'KWD',
			'KG' => 'KGS',
			'LA' => 'LAK',
			'LV' => 'EUR',
			'LB' => 'LBP',
			'LS' => 'LSL',
			'LR' => 'LRD',
			'LY' => 'LYD',
			'LI' => 'CHF',
			'LT' => 'EUR',
			'LU' => 'EUR',
			'MK' => 'MKD',
			'MG' => 'MGF',
			'MW' => 'MWK',
			'MY' => 'MYR',
			'MV' => 'MVR',
			'ML' => 'XOF',
			'MT' => 'EUR',
			'MH' => 'USD',
			'MQ' => 'EUR',
			'MR' => 'MRO',
			'MU' => 'MUR',
			'YT' => 'EUR',
			'MX' => 'MXN',
			'FM' => 'USD',
			'MD' => 'MDL',
			'MC' => 'EUR',
			'MN' => 'MNT',
			'ME' => 'EUR',
			'MS' => 'XCD',
			'MA' => 'MAD',
			'MZ' => 'MZN',
			'MM' => 'MMK',
			'NA' => 'NAD',
			'NR' => 'AUD',
			'NP' => 'NPR',
			'NL' => 'EUR',
			'AN' => 'ANG',
			'NC' => 'XPF',
			'NZ' => 'NZD',
			'NI' => 'NIO',
			'NE' => 'XOF',
			'NG' => 'NGN',
			'NU' => 'NZD',
			'NF' => 'AUD',
			'MP' => 'USD',
			'NO' => 'NOK',
			'OM' => 'OMR',
			'PK' => 'PKR',
			'PW' => 'USD',
			'PA' => 'PAB',
			'PG' => 'PGK',
			'PY' => 'PYG',
			'PE' => 'PEN',
			'PH' => 'PHP',
			'PN' => 'NZD',
			'PL' => 'PLN',
			'PT' => 'EUR',
			'PR' => 'USD',
			'QA' => 'QAR',
			'RE' => 'EUR',
			'RO' => 'RON',
			'RU' => 'RUB',
			'RW' => 'RWF',
			'SH' => 'SHP',
			'KN' => 'XCD',
			'LC' => 'XCD',
			'PM' => 'EUR',
			'VC' => 'XCD',
			'WS' => 'WST',
			'SM' => 'EUR',
			'ST' => 'STD',
			'SA' => 'SAR',
			'SN' => 'XOF',
			'RS' => 'RSD',
			'SC' => 'SCR',
			'SL' => 'SLL',
			'SG' => 'SGD',
			'SK' => 'EUR',
			'SI' => 'EUR',
			'SB' => 'SBD',
			'SO' => 'SOS',
			'ZA' => 'ZAR',
			'GS' => 'GBP',
			'SS' => 'SSP',
			'ES' => 'EUR',
			'LK' => 'LKR',
			'SD' => 'SDG',
			'SR' => 'SRD',
			'SJ' => 'NOK',
			'SZ' => 'SZL',
			'SE' => 'SEK',
			'CH' => 'CHF',
			'SY' => 'SYP',
			'TW' => 'TWD',
			'TJ' => 'TJS',
			'TZ' => 'TZS',
			'TH' => 'THB',
			'TG' => 'XOF',
			'TK' => 'NZD',
			'TO' => 'TOP',
			'TT' => 'TTD',
			'TN' => 'TND',
			'TR' => 'TRY',
			'TM' => 'TMT',
			'TC' => 'USD',
			'TV' => 'AUD',
			'UG' => 'UGX',
			'UA' => 'UAH',
			'AE' => 'AED',
			'GB' => 'GBP',
			'US' => 'USD',
			'UM' => 'USD',
			'UY' => 'UYU',
			'UZ' => 'UZS',
			'VU' => 'VUV',
			'VE' => 'VEF',
			'VN' => 'VND',
			'VI' => 'USD',
			'WF' => 'XPF',
			'EH' => 'MAD',
			'YE' => 'YER',
			'ZM' => 'ZMW',
			'ZW' => 'ZWD',
		);
		
		if(array_key_exists($sec_id, $curr_arr)){
		    return $curr_arr[$sec_id];
	    }
    }
 
 
 
 
    public function chkDuplicateDataOccurence($table,$chkData,$field){
    	$this->db->where($field, $chkData);
    	$query = $this->db->get($table);
    	$num = $query->num_rows();
    	
    	if($num >0){
    		$rtVal=0;
    	}else{
    		$rtVal=1;
    	}
    	
    	return $rtVal;
    }
 
 
    public function getgenreList($con='',$genre_id=''){
        $this->db->select('id, genre, is_active, added_by, added_on, updated_on, updated_by');
        
        if($con==1){
          $this->db->where('is_active', 1);
          $this->db->order_by('genre','ASC');   
        }elseif($con==0){
           $this->db->order_by('genre','ASC');    
        }
        

        if($genre_id>0){
            $this->db->where('id', $genre_id);
        }


	    $this->db->from('tbl_genre');
    	 if($query=$this->db->get()){
    		  //return $query->row_array();
    		  return $query->result_array();
    	  }else{
    		return false;
    	  }	
    }
    
     public function getcrewList($con='',$crew_id=''){
        $this->db->select('id, crew, is_active, added_by, added_on, updated_on, updated_by');
        
        if($con==1){
          $this->db->where('is_active', 1);
          $this->db->order_by('crew','ASC');   
        }elseif($con==0){
           $this->db->order_by('crew','ASC');    
        }
        

        if($crew_id>0){
            $this->db->where('id', $crew_id);
        }


        $this->db->from('tbl_crew');
         if($query=$this->db->get()){
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          } 
    } 

     public function getlanguageList($con='',$lang_id=''){
        $this->db->select('id, language, is_active, added_by, added_on, updated_on, updated_by');
        
        if($con==1){
          $this->db->where('is_active', 1);
          $this->db->order_by('language','ASC');   
        }elseif($con==0){
           $this->db->order_by('language','ASC');    
        }
        

        if($lang_id>0){
            $this->db->where('id', $lang_id);
        }


        $this->db->from('tbl_language');
         if($query=$this->db->get()){
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          } 
    }    

    public function getstatusList($con='',$sts_id=''){
        $this->db->select('id, status, is_active, added_by, added_on, updated_on, updated_by');
        
        if($con==1){
          $this->db->where('is_active', 1);
          $this->db->order_by('status','ASC');   
        }elseif($con==0){
           $this->db->order_by('status','ASC');    
        }
        

        if($sts_id>0){
            $this->db->where('id', $sts_id);
        }


        $this->db->from('tbl_status');
         if($query=$this->db->get()){
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          } 
    }     


    public function getclientList($con='',$sts_id=''){
        $this->db->select('id, client_name, client_text, client_logo, is_active, added_by, added_on, updated_on, updated_by');
        
        if($con==1){
          $this->db->where('is_active', 1);
          $this->db->order_by('client_name','ASC');   
        }elseif($con==0){
           $this->db->order_by('client_name','ASC');    
        }
        

        if($sts_id>0){
            $this->db->where('id', $sts_id);
        }


        $this->db->from('tbl_clients');
         if($query=$this->db->get()){
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          } 
    }

    public function getprojectList($con='',$sts_id=''){
        $this->db->select('*');
        
        if($con==1){
          $this->db->where('is_active', 1);
          $this->db->order_by('project_title','ASC');   
        }elseif($con==0){
           $this->db->order_by('project_title','ASC');    
        }
        

        if($sts_id>0){
            $this->db->where('id', $sts_id);
        }


        $this->db->from('tbl_projects');
         if($query=$this->db->get()){
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          } 
    }

    
     public function getprojectCast($p='',$con='',$id=''){
        $this->db->select('*');
        
        if($con==1){
          if($p>0){
             $this->db->where('project_id', $p);   
          }  
          $this->db->where('is_active', 1);
          $this->db->order_by('first_name','ASC');   
        }elseif($con==0){
            if($p>0){
             $this->db->where('project_id', $p);   
          }
           $this->db->order_by('first_name','ASC');    
        }
        

        if($id>0){
            $this->db->where('id', $id);
        }


        $this->db->from('tbl_projects_cast');
         if($query=$this->db->get()){
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          } 
    }
   

    public function getprojectCrew($p='',$con='',$id=''){
        $this->db->select('*');
        
        if($con==1){
          if($p>0){
             $this->db->where('project_id', $p);   
          }  
          $this->db->where('is_active', 1);
          $this->db->order_by('first_name','ASC');   
        }elseif($con==0){
            if($p>0){
             $this->db->where('project_id', $p);   
          }
           $this->db->order_by('first_name','ASC');    
        }
        

        if($id>0){
            $this->db->where('id', $id);
        }


        $this->db->from('tbl_projects_crew');
         if($query=$this->db->get()){
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          } 
    }


    public function getprojectGallery($p='',$con='',$id=''){
        $this->db->select('*');
        
        if($con==1){
          if($p>0){
             $this->db->where('project_id', $p);   
          }  
          $this->db->where('is_active', 1);
          $this->db->order_by('id','ASC');   
        }elseif($con==0){
            if($p>0){
             $this->db->where('project_id', $p);   
          }
           $this->db->order_by('id','ASC');    
        }
        

        if($id>0){
            $this->db->where('id', $id);
        }


        $this->db->from('tbl_projects_gallery');
         if($query=$this->db->get()){
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          } 
    }

    public function getprojectFestivalParticiptionGallery($p='',$con='',$id=''){
        $this->db->select('*');
        
        if($con==1){
          if($p>0){
             $this->db->where('project_id', $p);   
          }  
          $this->db->where('is_active', 1);
          $this->db->order_by('id','ASC');   
        }elseif($con==0){
            if($p>0){
             $this->db->where('project_id', $p);   
          }
           $this->db->order_by('id','ASC');    
        }
        

        if($id>0){
            $this->db->where('id', $id);
        }


        $this->db->from('tbl_projects_festival_selection');
         if($query=$this->db->get()){
                //echo $this->db->last_query();
              //return $query->row_array();
              return $query->result_array();
          }else{
            return false;
          } 
    }
    
    public function getprojectListArr($timeline='',$site='',$count=''){
        
        $this->db->select('p.id, p.project_title, p.is_active, p.background_poster, p.project_in, p.added_on, p.updated_on, s.status, l.language, g.genre');
        $this->db->from('tbl_projects as p');
        $this->db->join('tbl_status as s', ' p.project_status = s.id');
        $this->db->join('tbl_genre as g', ' p.project_genre = g.id');
        $this->db->join('tbl_language as l', ' p.project_language = l.id');
        if($timeline>0){
            $this->db->where('p.project_in', $timeline);
        }
        if($site>0){
            $this->db->where('p.is_active', $site);
        }

        $this->db->order_by('p.project_title', 'ASC');
        if($count>0){
            $this->db->limit($count);
        }
         if($query=$this->db->get()){
              //echo $this->db->last_query();
              return $query->result_array();
          }else{
            return false;
          } 
    }

    public function getCrewOfProject($projectId,$director=''){
        
        $this->db->select('p.id, t.crew, pc.crew_id, pc.first_name, pc.last_name, pc.crew_text, pc.crew_image, pc.crew_vdo');
        $this->db->from('tbl_projects as p');
        $this->db->join('tbl_projects_crew as pc', ' pc.project_id = p.id');
        $this->db->join('tbl_crew as t', ' t.id = pc.crew_id');
        
        if($director==1){
            $this->db->where('t.crew', 'Director');
        }
        $this->db->where('pc.is_active', 1);
        $this->db->where('p.id', $projectId);
        
        
         if($query=$this->db->get()){
              //echo $this->db->last_query();
              return $query->result_array();
          }else{
            return false;
          } 
    }


    public function contentFormat($content){
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


    public function siteUrlLink(){
        $srvAddr=$_SERVER['SERVER_ADDR'];
        if($srvAddr=='::1'){
            $urllink = "http://".$_SERVER['HTTP_HOST']."/naish/index.php/";
            //$urllink=$config['base_url']."/index.php/" ;
        }else{
            $urllink = "https://".$_SERVER['HTTP_HOST']."/";
                //$urllink=$config['base_url'];
        }

        return $urllink;
    }

    public function timelineArr(){
        return $projtypesArr=array("1"=>"Past", "2"=>"Present","3"=>"Upcoming");
    }

    public function generatedUrl($text,$id,$k){
        $text=$this->contentFormat($text);
        //$id=base64_encode($id);
        $val=$this->timelineArr();
        $value = $val[$k];

        return $this->siteUrlLink()."project-details/".strtolower($value)."/".$id."/".$text.".html";
    }



    function getAddress() {
            $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
            return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    }    











}











