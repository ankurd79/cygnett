<?php $this->load->view('site/unit/navigation',$navid);

//print_r($offerlist);
?>
<div class="card card-shadow hotel-inner-pad">

				<div class="row mb-5 mt-4 pl-3 pr-3 offer-listing">

					<!-- Single Offer -->
					<?php 
						foreach($offerlist as $o){
							if($o['offer_title'])
								$offer=$o['offer_title'];
							else
								$offer=$o['offer_name'];
					 ?>
					<div class="col-md-4 p-0">
  				<div class="card mb-0">
								<img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_unit_offers ?>/<?php echo $o['image'] ?>" alt="<?php echo $offer ?>" loading='lazy'>
								<div class="card-body pl-4 pr-4 pt-5 pb-5">
									<h4 class="mb-1 pb-0">
										<?php
											echo $offer;
											
										?>
									</h4>
									<?php if($o['valid_to']) {?><p class="pb-0 mb-0 font-weight-bold"><i class="far fa-clock"></i> -  Valid till <?php echo formatDateTime($o['valid_to'],1) ?></p><?php } ?>
									<p class=""><?php echo htmlspecialchars_decode($o['short_intro']) ?></p>
									<a href="<?php echo urlgenerator('individual-offer/'.formattext($unitinfo['nicename']).'/'.formattext($unitinfo['location']).'/'.formattext($unitinfo['hotel_name']).'',formattext($offer),$o['id'])?>"><button type="button" class="btn btn-primary btn-sm mb-2">See Details</button></a>							
								</div>
							</div>
  				</div>
  				<?php } ?>
  				<!-- Single Offer -->

  				

  				

				</div>