<?php
//print_r($bannerlist);
?>
<div role="main" class="main">				
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
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
      <img class="d-block w-100" src="<?php echo base_url()?>images/<?php echo folder_unit_offers?>/banners/<?php echo $image1 ?>" alt="First slide" loading='lazy'>
    </div>
    <?php } ?>

    <?php } ?>
    
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> 
</div>	
			
			
			<section class="container offer-listing">
				<div class="container">
				<?php
					if($offerdetails[0]['offer_title']){
						$offer=$offerdetails[0]['offer_title'];
						$breadcrumb=$offerdetails[0]['offer_name'].' > '.$offerdetails[0]['offer_title'];
					}else{
						$offer=$offerdetails[0]['offer_name'];
						$breadcrumb=$offerdetails[0]['offer_name'];
					}

					
				?>				
				
				<div class="col-md-10 offset-md-1 offer-details px-5 py-4 mb-3 card-shadow">
				<div class="breadcrumb-black mt-0 mb-2"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1"><a href="<?php echo base_url() ?>unit-offers/details/<?php echo formattext($hotel['nicename']) ?>/<?php echo formattext($hotel['location']) ?>/<?php echo formattext($hotel['hotel_name']) ?>/Nw==/<?php echo base64_encode($offerdetails[0]['hotel_id']) ?>"><?php echo $hotel['hotel_name'] ?> Offers</a></span> > <span class="pl-1"><?php echo $breadcrumb ?></span></div>	
				

				<h3 class="mb-5"><?php echo $offer ?></h3>
				<!--<h2 class="mb-2 font-weight-bold">&#8377;<?php //echo $offerdetails[0]['cost'] ?></h2>-->				
				<!--<?php if($offerdetails[0]['valid_to']) {?><p class="pb-0 mb-0 font-weight-bold"><i class="far fa-clock"></i> -  Valid till <?php echo formatDateTime($offerdetails[0]['valid_to'],1) ?></p><?php } ?>-->
			    <!--<p class="muted">Taxes Inclusive</p>-->
			    <div class="row">
				<div class="col-md-5 generic-offer-img"><img src="<?php echo base_url() ?>images/unit_offers/<?php echo $offerdetails['0']['image'] ?>" loading="lazy" class="img-fluid" alt='<?php echo $offerdetails['0']['offer_name'] ?>'>
				<p><?php if($offerdetails[0]['valid_to']) {?><p class="pb-0 mb-0 font-weight-bold"><i class="far fa-clock"></i> -  This offer is valid till <?php echo formatDateTime($offerdetails[0]['valid_to'],1) ?></p><?php } ?></p>
				</div>
				<div class="col-md-7">
				
					<?php echo htmlspecialchars_decode($offerdetails[0]['offer_description']) ?>
					
				<p class="muted mb-0">* T&C Apply</p>
				<?php if($offerdetails[0]['be_url']) {?><p class="mt-4"><a href="<?php echo $offerdetails[0]['be_url'] ?>" target='_blank'><button type="button" class="btn btn-primary mb-2">Book Your Offer</button></a></p><?php } ?>	
				</div>
				</div>
				</div>
			</div>
			</section>
