<?php
$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);

if($devicetye=='mobile'){
    $image1='generic-img1-mob.jpg'; 
 }else{
    $image1='bd-banner-img4.jpg';
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
				<!-- Top Carousel -->

				<!-- Brand page content starts here -->

				<section class="bd-container">
  			<div class="container inner-page-pad pt-3">
 			
 			
                <div class="col-md-12 mb-3 mob-brand-heading">
                <h3 class="mb-2">OUR BRANDS</h3>                
                </div>
                			

          <div class="row">
            <div class="col-lg-4">
              <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

                <?php if($brandcatlist) {?>
                  <ul class="nav nav-list flex-column mb-5">
                    <?php foreach($brandcatlist as $blist){?>
                      <li class="nav-item brand-nav-item">
                        <a class="nav-link" data-hash data-hash-offset="95" href="#<?php echo formattext($blist['category']) ?>">
                        <h4><?php echo $blist['category'] ?></h4>
                        <p><?php echo $blist['text'] ?></p>
                      </a>
                      </li>
                    <?php }  ?>
                  </ul>
                <?php } ?>

              </aside>
            </div>
            <div class="col-lg-8">
                <?php foreach($brandcatlist as $blst){?>
                  <div id="<?php echo formattext($blst['category']) ?>">
                    <?php
                      $brandlistapi=base_url().'api/brands/brand/brandsbycategoryfetch';
                      $list=(getapicurlconnect($brandlistapi,$blst['id'])); 
                      $list=$list['results'];
                      if($list){
                      foreach($list as $lst){
                    ?>
                  
                  <div class="row mb-5">                  
                      <div class="col-md-12">
                        <div class="row mb-3">
                          <div class="col-md-3 mr-0 pr-0"><img src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/<?php echo $lst['logo_image'] ?>" title="<?php echo $lst['brand_name'] ?>" class="img-fluid" loading='lazy'></div>
                          <div class="col-md-9 pt-2"> 
                        <h4 class="mb-1"><?php echo $lst['brand_name'] ?></h4>
                        <h6><strong><?php echo $lst['brand_tagline'] ?></strong></h6>
                      </div>
                    </div>
                      </div>
                      <div class="col-md-6"><img src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/listimages/<?php echo $lst['listimg'] ?>" title="<?php echo $lst['brand_tagline'] ?>" class="img-fluid mob-brand-img" loading='lazy'></div>
                      <div class="col-md-6">                    
                      <p><?php echo html_entity_decode($lst['short_intro']) ?></p>
                      <p><a href="<?php echo urlgenerator('brands',$lst['brand_name'],$lst['id']); ?>"><button type="button" class="btn btn-outline btn-primary btn-sm mb-2">More About <?php echo $lst['brand_name'] ?></button></a></p>
                      </div>
                    </div>
                  <?php } ?>
                  <?php } ?>


                  
                  </div>
                  
                  <hr class="mb-5">
                <?php } ?>

              
              
              
              
              

            </div>

          </div>
 					</div>
 			</section>

      

 			

				<!-- Brand page content ends here -->
			</div>	
