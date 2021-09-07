
				
				<!-- Tabs -->
        		<?php $this->load->view('site/unit/navigation',$navid);?>
        		<!-- Tabs -->

				<div class="card card-shadow hotel-inner-pad">
					<div class="row ">
						<div class="col-md-7 hotel-details-information">
							<!--<h3 class="mt-1 mb-3"><?php// echo $unitinfo['tag_line'] ?></h3>-->
							<p><?php echo htmlspecialchars_decode($unitinfo['description']) ?></p>
							<div class="row">
								<div class="col-md-9">
									<p class="mb-2 sub-heading">Get In Touch With Us</p>
									<p class="mt-0 mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo $unitinfo['address_line_1'] ?> ,

									<?php
										if($unitinfo['address_line_2']){
											echo $unitinfo['address_line_2'].' ,';
										}
									?>
									<?php echo $unitinfo['location'] ?>,		
										<?php echo $unitinfo['name'] ?>,  - 
									<?php echo $unitinfo['pincode'] ?>		
									</p>
							<?php if($phonelist) {?><p class="mt-1 mb-0"><i class="fas fa-phone"></i> 
								<?php 
								$i = 0;
								$len = count($phonelist);
								foreach($phonelist as $ph){?>
									+91 <?php echo $ph['mobile'] ?>
										<?php
											if ($i <> $len - 1) {
												echo ', ';
											}		
		    								$i++;

										?>


								<?php } ?>
									</p>
							<?php } ?>
							<?php if($maillist) {?><p class="mt-1 mb-0"><i class="fas fa-envelope"></i> 
								<?php 
								$y=0;
								$plen=count($maillist);	
								foreach($maillist as $m){?>
									<a href="mailto:<?php echo $m['email'] ?>">
										<?php echo $m['email'] ?></a>

											<?php
											if ($y <> $plen - 1) {
												echo ', ';
											}		
		    								$y++;

										?>

									<?php } ?>
							</p><?php } ?>
							<?php if($unitinfo['what3words']){?>
							    <div class="mt-3"><?php echo html_entity_decode($unitinfo['what3words'])  ?></div>
							<?php } ?>
							<?php if($social) {?>
								<p class="mt-2 mb-0">
									<?php 
										$pr=getsocial();
										foreach($social as $s){?>
											<?php foreach($pr as $k=>$v){?>
												<?php if($s['social_id']==$k){?>
													<a href='<?php echo $s['social_url'] ?>' target='_blank'><i class="fab fa-<?php echo formattext($v) ?>-square fa-2x align-middle <?php echo formattext($v) ?>"></i></a>	
												<?php }  ?>	
											<?php } ?>	
									<?php }  ?>  
								</p>
							<?php } ?>
							
								</div>
								<div class="col-md-3">
									<?php echo htmlspecialchars_decode($unitinfo['ta_widget']) ?>
								</div>
							</div>

						</div>
						<div class="col-md-5">							
							<!-- <div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/hotel-gal-img1.jpg" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/hotel-gal-img2.jpg" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/hotel-gal-img3.jpg" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="img/hotel-gal-img4.jpg" alt="">
									</div>
								</div>
								
							</div> -->
							<?php if($unitinfo['video_url']) {?>
							<iframe width="100%" height="400" src="<?php echo $unitinfo['video_url']?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen=""></iframe>
							<?php } ?>
							
							

						</div>
					</div>

					<div class="row mt-3 pt-3 pb-3" style="border-top: 1px solid #c4c4c4;">
						<div class="col-md-5">
							<h5 class="mt-2 mb-4"><strong>Hotel Policies</strong></h5>
							<div class="row">
								<div class="col-md-12 pb-2"><strong><i class="far fa-check-square"></i> Check-in from <?php echo $unitinfo['check_in']?> <?php echo $unitinfo['chkin_am_pm']?> </strong></div>	
								<div class="col-md-12 pb-2"><strong><i class="far fa-check-square"></i> Check-out till <?php echo $unitinfo['check_out']?> <?php echo $unitinfo['chkout_am_pm']?></strong></div>
							</div>
						</div>
							<div class="col-md-7">
						    <h5 class="mt-2 mb-4"><strong>Other Policies</strong></h5>
							<?php if($otherpolicies) {?>
								<?php foreach($otherpolicies as $p){?>		
									<p class="mb-0 add-info"><i class="far fa-file-alt"></i> <?php echo $p['policy_text'] ?></p>
								<?php } ?>
							<?php } ?>
						</div>	
							
						
					</div>

					<?php if($facilitylist){?>	
					<div class="hotel-highlights mt-3 mb-3">
					  <div class="row pb-3 pt-3">
						<div class="col-md-12"><h4 class="mt-2 mb-4">Hotel Highlights</h4></div>
						<?php foreach($facilitylist as $f){?>
								<div class="col-md-3 pb-2"><i class="fas fa-check"></i> <?php echo $f['facility'] ?></div>
						<?php }  ?>
					  </div>
					</div>
					<?php }  ?>				

				<div class="hotel-review mt-0 mb-3">
					<div class="row pb-3 pt-3">
					    <?php if($guestreviewArr) {?>
						<div class="col-md-8"><h4 class="">Guest Speak</h4></div><?php } ?>
						<div class="col-md-4"><h4 class="">Nearby</h4></div>
					</div>
					
					<div class="row">
					<?php if($guestreviewArr) {
					//echo count($guestreviewArr);
					?>	
						<div class="col-md-8">	
						<div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-dark nav-style-2 mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'stagePadding': 100, 'autoHeight': true}">
										<?php foreach($guestreviewArr as $gr) {?>
										
								<div>
									<div class="testimonial testimonial-style-2">
										<blockquote>
											<p class="mb-0"><?php echo htmlspecialchars_decode($gr['review_text']) ?></p>
										</blockquote>
										<div class="testimonial-arrow-down"></div>
										<div class="testimonial-author">
											<img src="<?php echo base_url() ?>images/unit_guest_reviews/<?php echo $gr['image'] ?>" class="img-fluid rounded-circle" alt="<?php echo $gr['review_text'] ?>" loading='lazy'>
											<p><strong class="font-weight-extra-bold">-  <?php echo $gr['review_by'] ?></strong><span>Date of stay: <?php echo $gr['review_date'] ?></span></p>
										</div>
									</div>
								</div>
								
							
										<?php } ?>
										
									</div>
									
									<!-- Carousel Block -->
									
									
									<!-- Carousel Block -->
									
									
									
								</div>
					<?php } ?>
					
					<?php if($nearbylist) {?>
						<div class="col-md-4 nearby">
						<?php foreach($nearbylist as $n) {?>
							<div class="row">							
								<div class="col-md-2"><i class="fas <?php echo $n['image_icon'] ?> fa-2x  icons pt-2"></i></div>
								<div class="col-md-10">
									<h3 class="mb-0"><?php echo $n['nearby_area'] ?></h3>
									<p class="mb-0"><?php echo $n['nearby_detail'] ?></p>
								</div>
							</div>
						<?php } ?>
							
						</div>
					<?php } ?>		
				
				</div>



				</div>
				<?php if($unitinfo['google_map']) {?>	
					<div class="hotel-location mt-0 mb-3">
						<div class="row pb-1 pt-3">
							<div class="col-md-12"><h4 class="">Location</h4></div>
						</div>
						<?php echo htmlspecialchars_decode($unitinfo['google_map']) ?>
					</div>
				<?php } ?>


				<?php if($unitinfo['hotel_schema']) {?>
					<?php echo htmlspecialchars_decode($unitinfo['hotel_schema']) ?>
				<?php } ?>	

				<?php if($unitinfo['booking_widget']) {?>
					<?php echo htmlspecialchars_decode($unitinfo['booking_widget']) ?>
				<?php } ?>