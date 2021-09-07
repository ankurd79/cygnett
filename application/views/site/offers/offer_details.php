<?php
$offer=($offerdetails['results']);
//print_r($offer);
$bannerlist=($bannerdetails['results']);
?>

<div role="main" class="main">				
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
	      			<img class="d-block w-100" src="<?php echo base_url()?>images/<?php echo folder_offers?>/banners/<?php echo $image1 ?>" loading="lazy" alt="First slide">
	    		</div>
	    <?php } ?>
    
    <?php } ?>
    
    
  </div>
  
</div>	
			
			
			<section class="container offer-listing">
				<div class="container">
								
				
				<div class="col-md-10 offset-md-1 offer-details px-5 py-4 mb-3 card-shadow">
				<div class="breadcrumb-black mt-0 mb-2"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1"><a href="<?php echo base_url() ?>offers.php">Offers</a></span> > <span class="pl-1"><?php echo $offer['0']['offer_name'] ?></span></div>	
				

				<h3 class="mb-5"><?php echo $offer['0']['offer_name'] ?></h3>
				
				<div class="row">
					<div class="col-md-5 generic-offer-img"><img src="<?php echo base_url() ?>images/<?php echo folder_offers ?>/<?php echo $offer['0']['offer_image'] ?>" loading="lazy" class="img-fluid" alt='<?php echo $offer['0']['offer_name'] ?>'></div>
					<div class="col-md-7 generic-offer-content">
						<p><strong>Inclusions</strong></p>
						<?php echo (htmlspecialchars_decode($offer['0']['description'])) ?>
						
				
					</div>
				</div>
				</div>
			</div>
			</section>

				<?php
					if($unitlist){
				?>
				<div class="container participating-hotel-offer">
				<div class="col-md-10 offset-md-1 px-3 py-4 mb-5">
				<h3 class="mb-4">Participating Hotels</h3>
				<div class="row">
					<?php foreach($unitlist as $u){?>
						<div class="col-md-4 mb-4">
							<div class="card card-shadow">
									<img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_units ?>/<?php echo $u['image'] ?>" title="<?php echo $u['hotel_name'] ?>" loading='lazy'>
									<div class="card-body">									
										<h4 class="mb-1 pb-0"><?php echo $u['hotel_name'] ?></h4>
										<p class="mb-3 pb-0 "><?php echo $u['location'] ?>, <?php echo $u['name'] ?></p>
										<!--<a href='<?php echo urlgeneratorunitnav('unit-overview',''.$u['nicename'].'/'.$u['location'].'/'.$u['hotel_name'].'',1,base64_encode($u['id'])) ?>' target='_blank'><button type="button" class="btn btn-primary btn-sm mb-2">View Hotel</button></a>-->
										<?php
										//
										$a=gethotelofferidbymasterid($offer['0']['id'],$u['id']);
										?>
										<a href='<?php echo $a['be_url']?>' target='_blank'><button type="button" class="btn btn-primary btn-sm mb-2">Book Your Offer</button></a>
									</div>
								</div>
						</div>
				<?php } ?>

					<!--individual-offer/india/alwar/cygnett-lite--alwar/details/free-night-stay-offer/NQ==-->
					
				</div>
				</div>	
				
			</div>
			<?php } ?>
