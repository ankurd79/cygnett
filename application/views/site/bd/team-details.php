<?php
$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);

if($devicetye=='mobile'){
    $image1='generic-img1-mob.jpg'; 
 }else{
    $image1='bd-banner-img5.jpg';
 }
?>
<div role="main" class="main">
        <!-- Top Carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url() ?>images/static/<?php echo $image1 ?>" alt="First slide" loading='lazy'>
    </div>
    
    
  </div>
  
</div>
<section class="bd-container">
  			<div class="container inner-page-pad pt-3">
 						<div class="col-md-12">
 						<!-- <div class="breadcrumb"><span class="pr-1"><a href="javascript:void(0);">Home</a></span> > <span class="pl-1 pr-1"><a href="javascript:void(0);">Our Story</a></span> > <span class="pl-1">Overview</span></div> -->
 					<div class="row mb-0">
          <div class="col-md-12">	
                	
                   <div class="tabs tabs-bottom tabs-simple bd-tabs">
                <ul class="nav nav-tabs">
                  <?php $this->load->view('site/bd/bd-navigation');?>
                  
                </ul>
              </div>
              </div>
              </div> 

                <div class="row mb-3">                  
                  <div class="col-md-12">
                    <h4 class="mb-3">Meet our <?php echo $region[0]['region'] ?> Team</h4> 
                  </div>
                </div>


                <div class="row mb-5 pb-4 location-team">
                  <?php 
                    if($teamlist){
                        foreach($teamlist as $lst){
                  ?> 
                  <div class="col-md-4 mb-4">
                      <div class="signature-box">
                      <img src="<?php echo base_url() ?>images/<?php echo folder_team ?>/<?php echo $lst['bd_image'] ?>" loading='lazy' class="img-fluid" title='<?php echo $lst['first_name'] ?> <?php echo $lst['middle_name'] ?> <?php echo $lst['last_name'] ?>'>
                      <div class="bd-signature-content">
                        <h4 class="mb-0"><?php echo $lst['first_name'] ?> <?php echo $lst['middle_name'] ?> <?php echo $lst['last_name'] ?></h4>
                        <p class="mb-1"><?php echo $lst['job_title'] ?></p> 
                        <!--<p class="mb-1"><?php //echo $lst['nicename'] ?></p>-->
                        <p class="mb-0"><a href="mailto:<?php echo $lst['email'] ?>"><?php echo $lst['email'] ?></a></p>                      
                      </div>
                    </div>
                    </div>

                    
                 <?php }} ?>     
                     
                    
                    
                    
                    

                    
                    

                   

                </div>

               

                

                </div>
 					</div>
 					


 			</section>

       <?php //$this->load->view('site/bd/meet-our-team-common');?>
      </div>  