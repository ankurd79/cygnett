<?php
$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);

if($devicetye=='mobile'){
    $image1='generic-img1-mob.jpg'; 
 }else{
    $image1='bd-banner-img3.jpg';
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
                    <h4 class="mb-3">Meet your business development team</h4> 
                  </div>
                </div>

                  <?php
                  if($regionlist){
                  ?>
                <div class="row mb-5 pb-4 location-team">
                  
                  <?php foreach($regionlist as $r){?>
                    <div class="col-md-4 mb-4">
                        <div class="signature-box">
                        <a href="<?php echo base_url() ?>business-development-team/<?php echo formattext($r['region']) ?>"><img src="<?php echo base_url() ?>images/<?php echo folder_regions ?>/<?php echo $r['image'] ?>" title='<?php echo $r['region'] ?>'class="img-fluid" loading='lazy'></a>
                        <div class="signature-content">
                          <h4 class="mb-2"><?php echo $r['region'] ?></h4> 
                          <p><a href="<?php echo base_url() ?>business-development-team/<?php echo formattext($r['region']) ?>"><button type="button" class="btn btn-outline btn-primary btn-sm mb-2">Meet our <?php echo $r['short_name'] ?> Team</button></a></p>                       
                        </div>
                      </div>
                      </div>
                   <?php }  ?> 


                </div>
              <?php } ?>

               

                

                </div>
 					</div>
 					


 			</section>

      
      <?php //$this->load->view('site/bd/meet-our-team-common');?>
	</div>	