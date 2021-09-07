<?php
$url=base_url().'api/offers/offer/offerfetch';
$arr=getapicurlconnect($url);
//print_r($arr);
$result=($arr['results']);
//print_r($result);
?>
<section class="pb-4 cygnett-offers">
				<div class="container">
					<h3 class="mb-3">OFFERS</h3>
					<div class="owl-carousel owl-theme show-nav-title" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': false, 'autoHeight': true, 'margin': 20, 'nav': true, 'dots': false}">
								
								<?php foreach($result as $r){?>

									<div>
										<div class="card card-shadow offers-home-class">
											<div class="image-box">
									<img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_offers ?>/<?php echo $r['offer_image'] ?>" loading="lazy" alt="<?php echo $r['offer_name'] ?>">
										</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-9">
												<h4 class="mb-1 pb-0"><?php echo $r['offer_name'] ?></h4>
												<span class="cygnett-hotel-count"><?php echo $r['short_intro'] ?></span>
											</div>
											<div class="col-md-3 ">
												<a href="<?php echo urlgenerator('offers',$r['offer_name'],$r['id']); ?>" title='Know about <?php echo $r['offer_name'] ?>'><button type="button" class="btn btn-primary btn-sm mb-2 float-right">Details</button></a>
											</div>
										</div>
									</div>
								</div>
									</div>
							<?php }  ?>	
							
							</div>
				</div>
			</section>	