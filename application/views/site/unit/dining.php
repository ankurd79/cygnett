<?php $this->load->view('site/unit/navigation',$navid);
//print_r($dininglist);

?>
<div class="card card-shadow hotel-inner-pad">

					<!-- Dining Blocks -->
					<?php
						$i = 0;
						$len = count($dininglist);
						foreach($dininglist as $res){
					?>
					<div class="row ">						
						<div class="col-md-5">							
							<div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<?php
										$api=base_url().'api/units/unit/diningimagesfetch';
										$imgsarr=(getapicurlconnect($api,$res['id']));
										$imgsarr=$imgsarr['results'];

										//print_r($imgsarr);

										foreach($imgsarr as $img){
									?>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="<?php echo base_url() ?>images/<?php echo folder_restaurant_images ?>/<?php echo $img['image'] ?>" width='600' height='500' loading="lazy" alt="<?php echo $res['name'] ?>">
									</div>
								</div>
							<?php } ?>
															
							</div>										

						</div>
						<div class="col-md-7 hotel-acco-details">
							<h4 class="mt-2 mb-2"><?php echo $res['name'] ?></h4>
							<p class="mb-2"><?php echo htmlspecialchars_decode($res['description']) ?></p>
							
							<div class="row">
								<div class="col-md-12 mt-2"><i class="fas fa-utensils"></i> 
								<?php
								$apiurl=base_url().'api/restaurants/restaurant/restaurantfetch';
								$arr=(getapicurlconnect($apiurl,$res['restaurant_id']));
								
								//print_r($arr);
								
								$cuisineid=$arr['results']['0']['cuisine'];
								
								echo cuisinesdetect($cuisineid=$arr['results']['0']['cuisine']);
								
								?>
								
								</div>
								<div class="col-md-12 mt-2"><i class="far fa-clock"></i> <?php echo $res['open_time'] ?> <?php echo $res['open_am_pm'] ?> to <?php echo $res['close_time'] ?> <?php echo $res['close_am_pm'] ?></div>	
								<div class="col-md-12 mt-2"><i class="fas fa-mobile-alt"></i> 
									<?php
										$api=base_url().'api/units/unit/diningcontactfetch';
										$mobarr=(getapicurlconnect($api,$res['id']));
										$m=$mobarr['results'];
                                        $i = 0;
							        	$len = count($m);
										foreach($m as $mob){
									?>
									+91 <?php echo $mob['mobile'];
									    if ($i <> $len - 1) {echo ', ';}	$i++;
									?>
								<?php } ?>

								</div>
							</div>	

							<p class="mt-4"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-id="<?php echo $res['id'] ?>~<?php echo $res['name'] ?>~<?php echo $unitinfo['hotel_name'] ?>~1~<?php echo $unitinfo['id'] ?>" data-target="#booktableModal">Click here to reserve your table</button></p>						
							
						</div>						
					</div>
					<!-- Dining Blocks -->
					<?php
					 if ($i <> $len - 1) {
        				// last
        				echo '<hr>';
    				}
                    $i++;    
					?>
					<?php } ?>

								

				<?php $this->load->view('site/unit/dining-modal') ?>