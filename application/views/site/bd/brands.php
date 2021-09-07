<?php
$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);

if($devicetye=='mobile'){
    $image1='generic-img1-mob.jpg'; 
 }else{
    $image1='bd-banner-img4.jpg';
 }
 $brandacatapi=base_url().'api/brands/brandcategory/brandcategoryfetch';
 $brandcatarr=(getapicurlconnect($brandacatapi));

 $brandcatlist=$brandcatarr['results'];
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
            
                  <div class="row mb-5">
                  <div class="col-md-7"><img src="<?php echo base_url() ?>images/static/brand-position.png" class="img-fluid" loading='lazy'>
                  <p class="text-center mt-2"><a class="lightbox" href="<?php echo base_url() ?>images/static/brand-position-big.jpg" data-plugin-options="{'type':'image'}"><strong><i class="fas fa-search-plus"></i> View Enlarge</strong></a></p>
                  </div>
                  <div class="col-md-5">
                    <h4 class="mb-3">Cygnett global brand architecture</h4>
                  <p>Cygnett brands are designed to be suitable to both our guests and owners. Cygnett today offers the widest hotel and resort portfolio options - straddling Full Service, Up-scale ‘Anamore’ & ‘Cygnett Resort & Spa’; the Full Service, Mid-scale ‘Cygnett Park’ & ‘Cygnett Resort’, the Select Service, Budget ‘Cygnett Inn’ and the Condo Hotels/Service Apartment under ‘Cygnett Residences’; the budget friendly & young brand ‘Style By Cygnett’.  Cygnetture experiences can be divided into International, Standardized, Non-standardized, Regional and Local flavours.</p>
                  <p>We have also developed a upscale, full service 5 star  wellness & Lifestyle  brand “Ayurvyaas” for your well being.</p>
                  <p>Completing the awesome range of choices are our lifestyle and boutique hotels, as well as apartment hotels for extended stays.</p>
                  
                  </div>
                </div>


                <div class="row mb-3">                  
                  <div class="col-md-12">
                    <h4 class="mb-3">Discover all our brands and grow with us</h4> 
                  </div>
                </div>
                </div>
 					</div> 
 			</section>


      <section class="bd-container">
        <div class="container inner-page-pad pt-3">
            

          <div class="row">
            <div class="col-lg-4">
              <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">

                <?php if($brandcatlist) {?>
                  <ul class="nav nav-list flex-column mb-5">
                    <?php foreach($brandcatlist as $blist){?>
                      <li class="nav-item brand-nav-item">
                        <a class="nav-link" data-hash data-hash-offset="95" href="#<?php echo strtolower($blist['category']) ?>">
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
                  <div id="<?php 
                  $forclass=str_replace(" ","-",$blst['category']);
                  echo strtolower($forclass) ?>">
                    <?php
                      $brandlistapi=base_url().'api/brands/brand/brandsbycategoryfetch';
                      $list=(getapicurlconnect($brandlistapi,$blst['id'])); 
                      $list=$list['results'];
                      foreach($list as $lst){
                    ?>
                  
                  <div class="row mb-5">                  
                      <div class="col-md-12">
                        <div class="row mb-3">
                          <div class="col-md-3 mr-0 pr-0"><img src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/<?php echo $lst['logo_image'] ?>" title="<?php echo $lst['brand_name'] ?>" class="img-fluid " loading='lazy'></div>
                          <div class="col-md-9 pt-2"> 
                        <h4 class="mb-1"><?php echo $lst['brand_name'] ?></h4>
                        <h6><strong><?php echo $lst['brand_tagline'] ?></strong></h6>
                      </div>
                    </div>
                      </div>
                      <div class="col-md-6"><img src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/listimages/<?php echo $lst['listimg'] ?>" title="<?php echo $lst['brand_tagline'] ?>" class="img-fluid img-fluid-mob-hide" loading='lazy'></div>
                      <div class="col-md-6">                    
                      <p><?php echo html_entity_decode($lst['short_intro']) ?></p>
                      <p><a href="<?php echo urlgenerator('brands',$lst['brand_name'],$lst['id']); ?>"><button type="button" class="btn btn-outline btn-primary btn-sm mb-2">More About <?php echo $lst['brand_name'] ?></button></a></p>
                      </div>
                    </div>
                  <?php } ?>  


                  
                  </div>
                  
                  <hr class="mb-5">
                <?php } ?>

              
              
              
              
              

            </div>

          </div>
          </div>
      </section>

      <?php //$this->load->view('site/bd/meet-our-team-common');?>
			</div>