<?php $this->load->view('site/unit/navigation',$navid);?>
<?php
//print_r($gallerylist);
?>
<div class="card card-shadow hotel-inner-pad">

					<div class="lightbox mb-4" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
							
								<div class="row">
									<?php foreach($gallerylist as $gal){?>
										<?php if($gal['sequence']>0) {?>
										<div class="col-md-4 mb-4">
											<a class="img-thumbnail img-thumbnail-no-borders d-inline-block mb-1 mr-1" href="<?php echo base_url() ?>images/<?php echo folder_gallery_photos ?>/<?php echo $gal['image'] ?>" title="<?php echo $gal['text'] ?>">
												<img class="img-fluid" src="<?php echo base_url() ?>images/<?php echo folder_gallery_photos ?>/<?php echo $gal['image'] ?>" width="110" height="110" alt="<?php echo $gal['text'] ?>" loading="lazy">
												<span class="zoom">
														<i class="fas fa-search"></i>
													</span>
											</a>
										</div>
										<?php } ?>
										
										
										<?php }  ?>
									</div>
								