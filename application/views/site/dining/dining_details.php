<?php
//print_r($details['results']);

$bannerlist=($bannerdetails['results']);

//print_r($bannerlist);


?>

<div role="main" class="main">
				<!-- Top Carousel -->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <?php 
    $i = 0;
    foreach($bannerlist as $b){ 
      $devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
        if($devicetye=='mobile'){
          $image1=$b['mobile_banner_image']; 
        }else{
          $image1=$b['banner_image'];
        }

        $i++;
    ?>
    <?php if($b['is_active']=='1') {?>
    <div class="carousel-item <?php if($i==1) {?>active<?php } ?>">
      <img class="d-block w-100" src="<?php echo base_url()?>images/<?php echo folder_restaurant?>/banners/<?php echo $image1 ?>" alt="First slide">
    </div>

    <?php } ?>

    <?php } ?>
    
  </div>
  
  <?php $this->load->view('site/booking-widget');?>
</div>	
				<!-- Top Carousel -->

				<!-- Brand page content starts here -->

				<section class="brands-container <?php echo $details['results'][0]['styling'] ?>">
  			<div class="container inner-page-pad brands pt-3">
 						<div class="col-md-8 offset-md-2">
                	
 					<div class="col-md-12">	
 						<div class="breadcrumb"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1"><a href="javascript:void(0);">Dining</a></span> > <span class="pl-1"><?php echo $details['results'][0]['name'] ?></span></div>
 					
 					<!-- For Desktop -->
 					<div class="row mb-3 restaurant-desktop">	
 					<div class="col-md-3"><img src="<?php echo base_url() ?>images/<?php echo folder_restaurant ?>/<?php echo $details['results'][0]['secondary_logo'] ?>" class="img-fluid mob-dining-img"></div>
 					<div class="col-md-9">	
                	<h3 class="mb-2"><?php echo $details['results'][0]['name'] ?></h3>
                	<p class="mb-1"><?php echo $details['results'][0]['tag_line'] ?></p>
                	<p class="mb-1">Cuisine - <?php echo $availablecuisines?> <!--| Timing - 17:30 to 22:00 daily</p>-->
                	</div>
                	</div>
                	<!-- For Desktop -->
                	
                	<!-- For mobile -->
                	<div class="restaurant-mob">
 					<div class="row mb-3">	
 					<div class="col-5 pr-0"><img src="<?php echo base_url() ?>images/<?php echo folder_restaurant ?>/<?php echo $details['results'][0]['secondary_logo'] ?>" class="img-fluid mob-dining-img"></div>
 					<div class="col-7">	
                	<h3 class="mb-0"><?php echo $details['results'][0]['name'] ?></h3>
                	<p class="mb-0"><?php echo $details['results'][0]['tag_line'] ?></p>                	
                	</div>
                	<div class="col-12 mt-3">
                		<p class="mb-1">Cuisine - <?php echo $availablecuisines?></p>
                		<!-- <p class="mb-1">Timing - 17:30 to 22:00 daily</p> -->
                	</div>
                	</div>
                	</div>
                	<!-- For mobile -->
                	
                	
                	<div class="row">
                		<div class="col-md-12">
                			<?php echo htmlspecialchars_decode($details['results'][0]['description']) ?>
                		</div>
                	</div>
                 	</div>                                   
                </div>             

 					</div>
 			</section>

 			<section class="brands-video">
      <div class="container">
          <div class="brand-media video-pad">
            <div class="col-md-8 offset-md-2">
            	<div class="col-md-12">              
            		<?php if($details['results'][0]['cygnetture_dishes']){
            					if(strlen($details['results'][0]['cygnetture_dishes']==1)){
            						$string='Cuisine';
            					}else{
            						$string='Cuisines';
            					}

            			?>
            		<h3 class="mb-3">Our Cygnetture <?php echo $string ?> </h3>
            		<div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<?php 
									$str=explode(",",$details['results'][0]['cygnetture_dishes']);
									foreach($str as $k=>$v){
										#echo $v;
										
										$apiurl=base_url().'api/restaurants/restaurant/restaurantcygnetturedishesfetch';
										$arr=(getapicurlconnect($apiurl,$v));

										//print_r($arr['results']);
								?>
								<div>
									<div class="card card-shadow">
								<img class="card-img-top" src="<?php echo base_url() ?>/images/<?php echo folder_cygnetture ?>/<?php echo $arr['results']['0']['dish_image'] ?>" alt="<?php echo $arr['results']['0']['dish_title'] ?>">
								<div class="card-body">
									<h4 class="mb-2 pb-0"><?php echo $arr['results']['0']['dish_title'] ?></h4>
									<p class="mb-3 pb-0 text-body"><?php echo $arr['results']['0']['dish_description'] ?></p>									
								</div>
							</div>
								</div>
							<?php } ?>
								
							</div>

						<?php } ?>
						
						   <?php
						   //print_r($hotellst);
						   if($hotellst){
						   ?>
                        							
							<h3 class="mb-3 mt-5" style="color:#000;">Participating Hotels </h3>
							<div class="owl-carousel owl-theme show-nav-title" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 2}}, 'loop': true, 'autoHeight': true, 'margin': 20, 'nav': true, 'dots': false}">
								<?php foreach($hotellst as $hotels){ ?>
								<div>
									<div class="card card-shadow">
								<img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_units ?>/<?php echo $hotels['image'] ?>" title="<?php echo $hotels['hotel_name'] ?>" loading='lazy'>
								<div class="card-body">
									<h4 class="mb-1 pb-0"><?php echo $hotels['hotel_name'] ?></h4>
									<p class="mb-3 pb-0 "><?php echo $hotels['location'] ?>, <?php echo $hotels['name'] ?></p>
									<!--<a href='<?php echo urlgeneratorunitnav('unit-overview',''.$hotels['nicename'].'/'.$hotels['location'].'/'.$hotels['hotel_name'].'',1,base64_encode($hotels['id'])) ?>' target='_blank'><button type="button" class="btn btn-primary btn-sm mb-2">View Hotel</button></a>-->
									
									    <a href='<?php echo urlgeneratorunitnav($hotels['custom_url'].'/unit-overview') ?>' target='_blank'><button type="button" class="btn btn-primary btn-sm mb-2">View Hotel</button></a>
								</div>
							</div>
								</div>
								<?php } ?>
								
							</div>
							<?php } ?>
          </div>
            </div>
          </div>
        </div>
 </section>

				<!-- Brand page content ends here -->
			</div>