<?php
$url=base_url().'api/locations/location/locationfetch1';
$arr=fetchapidata($url);
$locarr=($arr['results']);
//print_r($locarr);
?>
<section class="pt-5 pb-4 popular-destinations">
				<?php if($locarr){ ?>
				<div class="container">
					<h3 class="mb-3">POPULAR DESTINATIONS</h3>
					<div class="owl-carousel owl-theme show-nav-title" data-plugin-options="{'items': 2, 'margin': 20, 'loop': true, 'nav': true, 'dots': false}">
						
						<?php foreach($locarr as $loc) {?>	
								<?php //if($loc['is_popular']==1) {?>
								<div>
											<div class="card card-shadow">
												<div class="image-box">
										<img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_location ?>/<?php echo $loc['image'] ?>" loading="lazy" alt="Card Image">
											</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-8">
													<h4 class="mb-1 pb-0"><?php echo $loc['location'] ?></h4>
													<span class="cygnett-hotel-count"><?php echo $loc['nicename'] ?></span>
												</div>
												<div class="col-md-4">
													<a href='<?php echo urlothers($loc['custom_url']); ?>' title='Explore <?php echo $loc['location'] ?>'><button type="button" class="btn btn-primary btn-sm mb-2 float-right">Explore</button></a>
												</div>
											</div>
										</div>
									</div>
										</div>
								<?php //} ?>		
						<?php } ?>
							</div>
				</div>
			    <?php } ?>
			</section>
