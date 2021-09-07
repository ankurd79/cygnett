<?php
$url=base_url().'api/offers/offer/offerfetch';
$arr=getapicurlconnect($url);
$result=($arr['results']);
//print_r($result);
?>
<div role="main" class="main">				
			<section class="container offer-listing">
				<div class="container">
				<div class="breadcrumb-black mt-3 mb-3"><span class="pr-1"><a href="javascript:void(0);">Home</a></span> > <span class="pl-1">Offers</span></div>				
				<h3 class="mb-2">offers</h3>
				<h6>Cygnett Hotels provides a wide range of curated offers to all its business or leisure travellers that allows them to discover, explore, rejuvenate and rejoice. All your travel needs are just a click away.</h6>
			
				
				<div class="row mb-5 mt-4 pl-3 pr-3"> 
  				
  				<?php foreach($result as $r){?>
  						<div class="col-md-4 p-0">
		  						<div class="card mb-0">
										<img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_offers ?>/<?php echo $r['offer_image'] ?>" alt="<?php echo $r['offer_name'] ?>" loading="lazy" width='389' height='391'>
										<div class="card-body pl-4 pr-4 pt-5 pb-5">
											<h4 class="mb-1 pb-0"><?php echo $r['offer_name'] ?></h4>
											<!-- <p class="pb-0 mb-0 font-weight-bold"><i class="far fa-clock"></i> -  Valid till 31 Dec 2021</p> -->
											<p class=""><?php echo $r['short_intro'] ?></p>
											<a href="<?php echo urlgenerator('offers',$r['offer_name'],$r['id']); ?>"><button type="button" class="btn btn-primary btn-sm mb-2">View Details</button></a>							
										</div>
									</div>
  						</div>
  				<?php } ?>			

  				
  				
  				
  				
  				
			</div>

			</section>
