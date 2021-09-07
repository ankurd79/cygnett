<?php
$this->load->view('site/unit/navigation',$navid);
//print_r($banquestlist);
?>
<div class="card card-shadow hotel-inner-pad">

					<!-- Dining Blocks -->
					<?php 
						$i = 0;
						$len = count($banquestlist);
						foreach($banquestlist as $bl){
					?>
					<div class="row ">						
						<div class="col-md-5">							
							<div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<?php
										$api=base_url().'api/units/unit/unitbanquetimagesfetch';
										$imgsarr=(getapicurlconnect($api,$bl['id']));
										$imgsarr=$imgsarr['results'];

										//print_r($imgsarr);

										foreach($imgsarr as $img){
									?>
								<div>
									<div class="img-thumbnail border-0 p-0 d-block">
										<img class="img-fluid border-radius-0" src="<?php echo base_url() ?>images/<?php echo folder_banquet_images ?>/<?php echo $img['image'] ?>" width='600' height='500' loading="lazy" alt="<?php echo $bl['meeting_unit'] ?>">
									</div>
								</div>
								<?php } ?>
															
							</div>										

						</div>
						<div class="col-md-7 hotel-acco-details">
							<h4 class="mt-2 mb-2"><?php echo $bl['meeting_unit'] ?></h4>
							<p class="mb-2"><?php echo htmlspecialchars_decode($bl['description']) ?></p>							
							<div class="row">
								<div class="col-md-4 mt-2"><i class="fas fa-vector-square"></i> <?php echo $bl['area'] ?> 
								<?php 
								$uarr=getareaunits();
								foreach($uarr as $k=>$v){
									if($bl['area_unit']==$k){
										echo $v;
									}	
								}

								//echo $rooms['area_unit'] 

								?>
								</div>
								<div class="col-md-4 mt-2"><i class="fas fa-user-friends"></i> Up to <?php echo $bl['max_occupancy'] ?> guests</div>								
							</div>	
							<p class="mt-3 mb-2"><strong>Seating Style</strong></p>
							<table class="table table-bordered">
										<thead>
											<tr>
												<th>Theatre	</th>
												<th>Cluster</th>
												<th>U-shape</th>
												<th>Informal</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php 
												if($bl['theatre']>0){
												    echo $bl['theatre'];
												}else{
												    echo '--';
												}
												?>
												</td>
												<td><?php 
												if($bl['cluster']>0){
												    echo $bl['cluster'];
												}else{
												    echo '--';
												}
												?>
												</td>
												<td><?php 
												if($bl['ushape']>0)
												    echo $bl['ushape'];
												else
												    echo '--';
												?>
												</td>
												<td><?php 
												if($bl['informal']>0)
												    echo $bl['informal'];
												 else
												    echo '--';
												?>
												</td>
											</tr>
											
										</tbody>
									</table>
							<p class="mt-4"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-id="<?php echo $bl['id'] ?>~<?php echo $bl['meeting_unit'] ?>~<?php echo $unitinfo['hotel_name'] ?>~2" data-target="#booktableModal">Click here to let us know about your events</button></p>						
							
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