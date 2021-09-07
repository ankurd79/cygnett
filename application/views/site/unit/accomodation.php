<!-- Tabs -->
        		<?php $this->load->view('site/unit/navigation',$navid);?>
        		<!-- Tabs -->
<div class="card card-shadow hotel-inner-pad">

					<!-- Room Blocks -->
					<?php
						$i = 0;
						$asd=0;
						$blk=0;
						$len = count($roomlist);
					 	foreach($roomlist as $rooms){ 


					?>
					<div class="row ">						
						<div class="col-md-5">							
							<div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<?php
										$unitroomimagesapi=base_url().'api/units/unit/unitroomimgfetch';
										$roomimagesarr=(getapicurlconnect($unitroomimagesapi,$rooms['id']));
										$imgsarr=$roomimagesarr['results'];

										foreach($imgsarr as $img){
									?>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="<?php echo base_url() ?>images/<?php echo folder_room_images ?>/<?php echo $img['image'] ?>" alt="<?php echo $img['alt_text'] ?>" loading="lazy" width='600' height='500'>
									</div>
								<?php } ?>
								</div>
															
							</div>										

						</div>
						<div class="col-md-7 hotel-acco-details">
							<h4 class="mt-2 mb-1"><?php echo $rooms['room_type'] ?></h4>
							<p class="mb-2"><?php echo htmlspecialchars_decode($rooms['room_description']) ?></p>
							<p class="mb-1 room-info-head"><strong>Room Information</strong></p>
							<div class="row">
								<div class="col-md-4 room-info"><i class="fas fa-vector-square"></i> <?php echo $rooms['area'] ?> 
								<?php 
								$uarr=getareaunits();
								foreach($uarr as $k=>$v){
									if($rooms['area_unit']==$k){
										echo $v;
									}	
								}

								//echo $rooms['area_unit'] 

								?>
							</div>
								<div class="col-md-4 room-info"><i class="fas fa-user-friends"></i> Up to <?php echo $rooms['max_occupancy'] ?> guests</div>
								<div class="col-md-4 room-info"><i class="fas fa-bed"></i> <?php echo $rooms['bed_type'] ?></div>
							</div>
							<p class="mt-3 mb-0 room-amenities-head"><strong>Room Amenities</strong></p>
							<div class="row">
								<?php
								
										$api=base_url().'api/units/unit/unitroomamenitiesfetch';
										$amearr=(getapicurlconnect($api,$rooms['id']));
										$a=$amearr['results'];

										$j=0;
										$string='';
										foreach($a as $inc){
											if($j<=2){
												$inclusionids=$inc['id'];
												$string .= ", $inclusionids";
												//$listarr=
								?>
								<div class="col-md-4 mt-1 room-amenities"><i class="fas <?php echo $inc['image_icon'] ?>"></i> <?php echo $inc['room_amenity'] ?></div>
							<?php 
								$j++;

								}} ?>
								
							</div>
							<p class="mt-3 mb-3"><a href="javascript:void(0);" class="view-room-amenities" id="p_<?php echo $asd++ ?>"><strong>View All Amenities >></strong></a></p>
							<div class="row hotel-listing-footer">
							<!-- <div class="col-md-6 listing-rate pt-2 pb-1">
								<span>Starting from</span>
								<span class="listing-price">INR <?php echo $rooms['room_price'] ?></span>
							</div> -->
							<div class="col-md-12 listing-view-hotel pt-3 pb-0">
							    <?php
							    if($rooms['be_url']){
									$purl=$rooms['be_url'];
								}else{
									$purl='javascript:void(0);';
								}
							    
							    ?>
								<a href="<?php echo $purl ?>" target='_blank'><button type="button" class="btn btn-primary btn-sm  ">Book Now </button></a>
							</div>
						</div>					

						</div>
						<div class="container">
							<div class="room-details-container containershw_<?php echo $blk++ ?>">
						<div class="row pb-0 pt-0">
						<div class="col-md-12"><h4 class="mt-2 mb-4"><strong>Room Amenities For <?php echo $rooms['room_type'] ?></strong></h4></div>
					   <?php 
					   		//echo $string = substr($string, 1);
					   		$newlist=explode(",",$string);
					   		//print_r($newlist);
					   		foreach($a as $inc){
					   			if (!in_array($inc['id'], $newlist)) {
					    ?>							
						<div class="col-md-3 pb-1"><i class="fas <?php echo $inc['image_icon'] ?>"></i> <?php echo $inc['room_amenity'] ?></div>
					   <?php } }?>	

											
					</div>
					</div>
						</div>		
						
					</div>
					<?php
					if ($i <> $len - 1) {
												echo '<hr>';
											}		
		    								$i++;

					?>
					
					<?php } ?>
					

						
						
					</div>
					<!-- Room Blocks -->
					