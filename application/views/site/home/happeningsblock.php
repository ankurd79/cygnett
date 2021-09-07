<?php
$url=base_url().'api/units/unit/unitsfetch';
$arr=fetchapidata($url);
$result=($arr['results']);
//print_r($result);

?>
<section class="pb-4 cygnett-happenings">
				<div class="container">
					<h3 class="mb-3">HAPPENINGS @ CYGNETT</h3>
					<div class="owl-carousel owl-theme show-nav-title" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 2}}, 'loop': false, 'autoHeight': true, 'margin': 20, 'nav': true, 'dots': false}">
								<?php foreach($result as $r){?>	
									<div>
										<div class="card card-shadow happening-home-class">
											<div class="image-box">
									<img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_units ?>/<?php echo $r['image'] ?>" loading="lazy" alt="<?php echo $r['hotel_name'] ?>">
										</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">											
												<h4 class="mb-1 pb-0"><?php echo $r['location'] ?></h4>
												<span class="cygnett-hotel-count"><?php echo $r['nicename'] ?></span>
											</div>
											<div class="col-md-6 text-right opening-soon mt-2">Opening Soon</div>
										</div>
									</div>
								</div>
									</div>
								<?php }  ?>	
							</div>
				</div>
			</section>	