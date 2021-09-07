<?php
$htlname=$this->uri->segment(1);
$p=fetchunitid($htlname); 
$unitId=$p['0']['id'];  

$navid;

//print_r($hotelnavigation);
//$bannerlist=getbannersofunitpages($navid,base64_decode($unitId));
$bannerlist=getbannersofunitpages($navid,$unitId);

$apiurl=base_url().'api/units/unit/unitbanquetmeetingfetch';
$meetarr=(getapicurlconnect($apiurl,$unitId));

//print_r($arr);



?>
<div role="main" class="main">        
        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2500">
  <div class="carousel-inner">
    <!-- <div class="carousel-item active">
      <img class="d-block w-100" src="img/hotel-img1.jpg" alt="First slide">
    </div> -->
    <?php 
    $i = 0;
    foreach($bannerlist as $b){ 
      $devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
        if($devicetye=='desktop'){
          $image1=$b['banner_image']; 
        }else{
          $image1=$b['mobile_banner_image'];
        }

        $i++;

        #echo $i;
    ?>
    <?php if($b['is_active']=='1') {?>
    <div class="carousel-item <?php if($i==1) {?>active<?php } ?>">
      <img class="d-block w-100" src="<?php echo base_url()?>images/<?php echo folder_unit_page_images?>/<?php echo $image1 ?>" alt="First slide" loading='lazy'>
    </div>
    <?php } ?>

    <?php } ?>
    
  </div>
  <div class="banner-image-tint"></div>
    <?php $this->load->view('site/booking-widget');?>
    <?php
    //print_r($unitinfo);
    ?>
    <div class="banner-titles">
            <div class="cm-header-label-con">
                <h1 class="cm-header-label"><?php echo $unitinfo['hotel_name'] ?><?php //echo $unitinfo['location'] ?></h1>
                <p class="mb-0 mt-2"><?php echo $unitinfo['location'] ?>, <?php echo $unitinfo['name'] ?></p>
                <!-- <p class="mb-0 mt-2">Business Hotel | <span><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i></span></p> -->                
            </div> 
        </div>
    

</div>  

        <section class="container cygnett-offers">
        <div class="breadcrumb-black mt-3 mb-3"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1"><a href="javascript:void(0);">Our Hotels</a></span> > <a href="<?php echo base_url() ?>location/details/<?php echo formattext($unitinfo['nicename'])?>/<?php echo formattext($unitinfo['location'])?>/<?php echo base64_encode($unitinfo['loc_id']) ?>"><?php echo $unitinfo['location'] ?></a></span> > <?php echo $unitinfo['hotel_name'] ?></span></div>
<nav class="mb-5 border for-mob nav-mob-pad"> 
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      
                      <?php
                      //$navArr=hotelnavigation();
                      foreach($hotelnavigation as $n){
                      ?>
                      <!--<a href="<?php echo urlgeneratorunitnav('unit-'.$n['page_category'].'',''.$unitinfo['nicename'].'/'.$unitinfo['location'].'/'.$unitinfo['hotel_name'].'',$n['id'],$unitId) ?>" class="nav-item nav-link border-right <?php if($navid==$n['id']) {?>active<?php } ?>"><?php echo $n['page_category'] ?></a>-->
                      
                            <?php
                                if(!($meetarr['results'])){    
                                    if($n['id']<>4){
                            ?>
                            <a href="<?php echo urlgeneratorunitnav($unitinfo['custom_url'].'/unit-'.$n['page_category']) ?>" class="nav-item nav-link border-right <?php if($navid==$n['id']) {?>active<?php } ?>"><?php echo $n['page_category'] ?></a>
                            <?php } }else{?>
                            
                            <a href="<?php echo urlgeneratorunitnav($unitinfo['custom_url'].'/unit-'.$n['page_category']) ?>" class="nav-item nav-link border-right <?php if($navid==$n['id']) {?>active<?php } ?>"><?php echo $n['page_category'] ?></a>
                            
                            
                            
                          <?php }  ?>
                      
                      <?php } ?>
                      <!--<a href="hotel-details.php" class="nav-item nav-link  active border-right">Overview</a>
                      <a href="hotel-accomodation.php" class="nav-item nav-link  border-right">Accommodation</a>
                      <a href="hotel-offers.php" class="nav-item nav-link  border-right">Offers</a>
                      <a href="hotel-dining.php" class="nav-item nav-link  border-right">Dining</a>
                      <a href="hotel-meetings.php" class="nav-item nav-link  border-right">Meetings & Events</a>
                      <a href="hotel-gallery.php" class="nav-item nav-link  border-right">Gallery</a>-->
                      <div class="more-container-mobile"> 
                    <span>More Links +</span>
                </div>
                <!-- Panel for Mobile More Links -->
                <div class="mobile-nav-morelinks">
                  <p class="close"><a href="javascript:void(0);"><i class="fas fa-times"></i></a></p>
                  <h3><?php echo $unitinfo['hotel_name'] ?></h3>
                  <p><?php echo $unitinfo['location'] ?>, <?php echo $unitinfo['name'] ?></p>
                  <ul>
                  <?php
                   foreach($hotelnavigation as $n){
                       if(!($meetarr['results'])){    
                          if($n['id']<>4){
                  ?>  
                  <li><a href="<?php echo urlgeneratorunitnav($unitinfo['custom_url'].'/unit-'.$n['page_category']) ?>" class="nav-item nav-link border-right " class=""><?php echo $n['page_category'] ?></a></li>
                  
                  
                  <?php }}else{ ?>
                  
                  <li><a href="<?php echo urlgeneratorunitnav($unitinfo['custom_url'].'/unit-'.$n['page_category']) ?>" class="nav-item nav-link border-right " class=""><?php echo $n['page_category'] ?></a></li>
                  
                  <?php }} ?>
                  
                  </ul>
                </div>
                <!-- Panel for Mobile More Links -->
                    </div>
                  </nav>