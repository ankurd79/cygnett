<?php
$url=base_url().'api/brands/brand/brandfetchhome';
$arr=getapicurlconnect($url);
$result=($arr['results']);
#print_r($result);

?>
<section class="pb-4 other-sections">
				<div class="container">
					<h3 class="mb-2">OUR BRANDS</h3>
					<p>VERSATILE OFFERINGS | GREAT PRICES | CYGNETTURE EXPERIENCES</p>
				<div class="row">

								<?php foreach($result as $r) {?>	
									<div class="col-md-3">
										<div class="card card-shadow home-brand-section">
								<img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/home/<?php echo $r['home_image'] ?>" alt="<?php echo $r['brand_name']?>">

								<div class="card-body">									
									<p class="card-text"><?php echo $r['home_intro'] ?></p>
									
									<p style="text-align:center" class="emblem"><?php if($r['id']==8){?>
									<img src='<?php echo base_url()?>front/img/ayurvyaas-emblem.jpg'
									<?php } elseif($r['id']==16) { ?>
									<img src='<?php echo base_url()?>front/img/cozzet-emblem.jpg'
									<?php } elseif($r['id']==17) {?>
									<img src='<?php echo base_url()?>front/img/elect-emblem.jpg'
									<?php } ?></p>
									
									<?php if($r['id']==5){?>
									<a href='<?php echo base_url() ?>brands.php' title='<?php echo $r['brand_name']; ?>'><button type="button" class="btn btn-primary btn-sm mb-2">View Brand</button></a>
								<?php } else {?>
									<a href='<?php echo urlgenerator('brands',$r['brand_name'],$r['id']); ?>' title='<?php echo $r['brand_name']; ?>'><button type="button" class="btn btn-primary btn-sm mb-2">View Brand</button></a>
								<?php } ?>	
								</div>
								<!--<div class="img_logo"><img src="images/<?php //echo folder_brand ?>/<?php //echo $r['logo_image'] ?>" loading="lazy" alt="<?php //echo $r['brand_name'] ?>"></div>-->
							</div>
									</div>
							<?php } ?>			
									

													
								</div>
					
				</div>
			</section>