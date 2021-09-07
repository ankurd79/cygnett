<?php
//print_r($profiledetails);
$input=$profiledetails['0'];

?>
<div role="main" class="main">

				<!-- Brand page content starts here -->

				<section class="overview-container">
  			<div class="container inner-page-pad pt-3">
 						
                	
 					
 						<div class="breadcrumb"><span class="pr-1"><a href="<?php echo base_url()?>">Home</a></span> > <span class="pl-1 pr-1"><a href="javascript:void(0);">Our Story</a></span> > <span class="pl-1 pr-1"><a href="<?php echo base_url()?>team.php">Our Leadership Team</a></span> > <span class="pl-1"><?php echo $input['first_name'] ?> <?php echo $input['middle_name'] ?> <?php echo $input['last_name'] ?></span></div>
 					<!-- <div class="row mb-3"> 					
 					<div class="col-md-12">	
                	<h3 class="mb-2 leadership-head">MANAGING DIRECTOR</h3>                	
                	</div>
                	</div> -->
                	
                  <div class="col-md-12"> 

                  <div class="row member-details">
                		<div class="row">
                      <div class="col-md-5">
                        <?php
                            $devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
                            if($devicetye=='mobile'){
                                $mdimg=$input['mobile_image']; 
                            }else{
                                $mdimg=$input['image'];
                            }
                          ?>
                        <img src="<?php echo base_url() ?>images/<?php echo folder_team ?>/<?php echo $mdimg ?>" class="img-fluid" loading='lazy' title='<?php echo $input['first_name'] ?> <?php echo $input['last_name'] ?>'></div>
                      <div class="col-md-7 member-bio">
                        <?php
                          $higharr=gethighlightdata($input['id']);
                          if($higharr){
                        ?>
                        <div class="member-profile-addinfo">
                          <p>
                            <?php
                            foreach($higharr as $h){
                              echo '- '.$h['highlights'].'<br>';  
                            }
                          ?>
                           </p>
                        </div>
                        <?php } ?>

                        <div class="member-profile-intro">
                        <h2 class="mb-0 pb-0"><?php echo $input['first_name'] ?> <?php echo $input['middle_name'] ?> <?php echo $input['last_name'] ?></h2>
                        <h6><?php echo $input['job_title'] ?></h6>
                        <?php if($input['email']) {?>
                        <blockquote class="blockquote-primary">                        
                        <p><i class="far fa-envelope"></i> <?php echo $input['email'] ?></p>
                      </blockquote>
                      <?php } ?>
                        </div>

                        <div class="member-profile-details">
                        <?php echo html_entity_decode($input['profile']) ?>
                      </div>

                      </div>
                    </div>
                	</div>
                </div>                           
                
 					</div>					

 			</section>

 			

				<!-- Brand page content ends here -->
			</div>