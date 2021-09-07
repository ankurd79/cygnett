        <?php //$this->load->view('site/navpages/carousel'); ?>
				<!-- Top Carousel -->

				<!-- Brand page content starts here -->

					<div role="main" class="main">
				

				<!-- Brand page content starts here -->

				<section class="overview-container">
  			<div class="container inner-page-pad pt-3">
 						
                	
 					
 						<div class="breadcrumb"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1"><a href="javascript:void(0);">Our Story</a></span> > <span class="pl-1">Our Leadership Team</span></div>
 					
 					<?php
 						//print_r($md);
 						if($md){			
 					?>

 					<div class="row mb-3"> 					
 					<div class="col-md-12">	
                	<h3 class="mb-2 leadership-head">MANAGING DIRECTOR</h3>                	
                	</div>
                	</div>
                	
                  <div class="col-md-12"> 

                  <div class="row managing-director">
                		<div class="row">
                      <div class="col-md-5">
                      		<?php
                      			$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
                				if($devicetye=='mobile'){
		    						$mdimg=$md[0]['mobile_image']; 
		 						}else{
		    						$mdimg=$md[0]['image'];
		 						}
                      		?>

                      	<img src="<?php echo base_url() ?>images/<?php echo folder_team ?>/<?php echo $mdimg ?>" class="img-fluid" loading='lazy' title='<?php echo $md['0']['first_name'] ?> <?php echo $md['0']['last_name'] ?>'></div>
                      <div class="col-md-7 md-bio">
                        
                        <div class="row">
                          <div class="col-md-8">
                        <h2 class="mb-0 pb-0"><?php echo $md['0']['first_name'] ?> <?php echo $md['0']['last_name'] ?></h2>
                        <h6><?php echo $md['0']['job_title'] ?></h6>
                        <?php echo htmlspecialchars_decode($md['0']['profile']) ?>
                      </div>
                      <div class="col-md-4 add-info">
                        <p>
                        	<?php
                        		$higharr=gethighlightdata($md['0']['id']);
                        		foreach($higharr as $h){
                        			echo '- '.$h['highlights'].'<br>';	
                        		}
                        	?>
                        </p>
                      </div>
                    </div>


                      </div>
                    </div>
                	</div>
                </div>
            <?php } ?>


                <!-- Other leadership members -->
                  <div class="col-md-12"> 
                    <div class="row">
                  <div class="accordion mt-4 mb-5">
            <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-one" checked="checked" />
            <label class="accordion__label" for="tab-one">Key Management Team
              <span class="accordion-tab--status"></span>
            </label>
            <div class="accordion__content mt-2">
              <div class="row">
              <?php foreach($mgmtteam as $mt){
              					$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
                				if($devicetye=='mobile'){
		    						$image1=$mt['mobile_image']; 
		 						}else{
		    						$image1=$mt['image'];
		 						}

              	?>
                <div class="col-md-4">
                  <div class="other-members">
                    <a href="<?php echo base_url() ?>team/<?php echo $mt['url'] ?>">
                    <img src="<?php echo base_url()?>images/<?php echo folder_team ?>/<?php echo $image1 ?>" class="img-fluid" loading='lazy' title='<?php echo $mt['first_name'] ?> <?php echo $mt['last_name'] ?>'>
                    <div class="other-members-info">
                      <h4><?php echo $mt['first_name'] ?> <?php echo $mt['middle_name'] ?> <?php echo $mt['last_name'] ?></h4>
                      <h6><?php echo $mt['job_title'] ?></h6>
                    </div>
                  </a>
                  </div>
                </div>
            <?php } ?>

                

                
                
              </div>              
            </div>
            
            <?php
            
            if(indiateam()){
            ?>
            <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-w" />
            <label class="accordion__label" for="tab-w">India Team
              <span class="accordion-tab--status"></span>
            </label>
            <div class="accordion__content mt-2">              
              <div class="row">
                <?php 
                	$iteamArr=indiateam();
                	foreach($iteamArr as $ind){

                				$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
                				if($devicetye=='mobile'){
		    						$image1=$ind['mobile_image']; 
		 						}else{
		    						$image1=$ind['image'];
		 						}
                ?>
                <div class="col-md-4">
                  <div class="other-members">
                    <a href="<?php echo base_url() ?>team/<?php echo $ind['url'] ?>">
                    <img src="<?php echo base_url()?>images/<?php echo folder_team ?>/<?php echo $image1 ?>" class="img-fluid" loading='lazy' title='<?php echo $ind['first_name'] ?> <?php echo $ind['last_name'] ?>'>
                    <div class="other-members-info">
                      <h4><?php echo $ind['first_name'] ?> <?php echo $ind['last_name'] ?></h4>
                      <h6><?php echo $ind['job_title'] ?></h6>
                    </div>
                  </a>
                  </div>
                </div>
                <?php } ?>

                
              </div>
            </div>
            
            <?php } ?>
           
            
            <?php
            $i=0;
            foreach($region as $r){ 
            	$i++;
              $arr=getcorpteamregionwise($r['id']);
                if($arr){

            ?>
            <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-<?php echo $i ?>" />
            <label class="accordion__label" for="tab-<?php echo $i ?>"><?php echo $r['region'] ?> Team
              <span class="accordion-tab--status"></span>
            </label>
            <div class="accordion__content mt-2">              
              <div class="row">
                <?php 
                	$teamArr=getcorpteamregionwise($r['id']);
                	foreach($teamArr as $t){

                				$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
                				if($devicetye=='mobile'){
		    						$image1=$t['mobile_image']; 
		 						}else{
		    						$image1=$t['image'];
		 						}
                ?>
                <div class="col-md-4">
                  <div class="other-members">
                    <a href="<?php echo base_url() ?>team/<?php echo $t['url'] ?>">
                    <img src="<?php echo base_url()?>images/<?php echo folder_team ?>/<?php echo $image1 ?>" class="img-fluid" loading='lazy' title='<?php echo $t['first_name'] ?> <?php echo $t['last_name'] ?>'>
                    <div class="other-members-info">
                      <h4><?php echo $t['first_name'] ?> <?php echo $t['last_name'] ?></h4>
                      <h6><?php echo $t['job_title'] ?></h6>
                    </div>
                  </a>
                  </div>
                </div>
                <?php } ?>

                
              </div>
            </div>
            <?php } ?>
            <?php } ?>
            
            <?php
            
            if(advisoryteam()){
            ?>
            <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-adv" />
            <label class="accordion__label" for="tab-adv">Advisory Board
              <span class="accordion-tab--status"></span>
            </label>
            <div class="accordion__content mt-2">              
              <div class="row">
                <?php 
                	$advteamArr=advisoryteam();
                	foreach($advteamArr as $adv){

                				$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
                				if($devicetye=='mobile'){
		    						$image1=$adv['mobile_image']; 
		 						}else{
		    						$image1=$adv['image'];
		 						}
                ?>
                <div class="col-md-4">
                  <div class="other-members">
                    <a href="<?php echo base_url() ?>team/<?php echo $adv['url'] ?>">
                    <img src="<?php echo base_url()?>images/<?php echo folder_team ?>/<?php echo $image1 ?>" class="img-fluid" loading='lazy' title='<?php echo $adv['first_name'] ?> <?php echo $adv['last_name'] ?>'>
                    <div class="other-members-info">
                      <h4><?php echo $adv['first_name'] ?> <?php echo $adv['last_name'] ?></h4>
                      <h6><?php echo $adv['job_title'] ?></h6>
                    </div>
                  </a>
                  </div>
                </div>
                <?php } ?>

                
              </div>
            </div>
            
            <?php } ?>
            
          </div>
        
        </div>
        </div>
          <!-- Other leadership members -->

                 	                               
                
 					</div>					

 			</section>

 			

				<!-- Brand page content ends here -->
			</div>
