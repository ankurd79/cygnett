        <?php $this->load->view('site/navpages/carousel'); ?>
				<!-- Top Carousel -->

				<!-- Brand page content starts here -->

					<section class="overview-container">
  			<div class="container inner-page-pad pt-3">
 						<div class="col-md-12">
                	
 					
 						<div class="breadcrumb"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1"><?php echo $details['menu_name'] ?></span></div>
 						<div class="row mb-3"> 					
 					<div class="col-md-12">	
                	<h3 class="mb-2">NEW AND UPCOMING HOTELS</h3>                	
                	</div>
                	</div>
                	
                	
                	<div class="row cygnett-happenings">
                		
                    <?php
                        $url=base_url().'api/units/unit/unitsfetch';
                        $arr=fetchapidata($url);
                        $result=($arr['results']);
                        //print_r($result);
                    ?>
                    
                    
                    <?php 
                        foreach($result as $r){
                    ?>
                    <div class="col-md-4 mb-3">
                		<div class="card card-shadow">
                    <div class="image-box">
                <img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_units ?>/<?php echo $r['image'] ?>" alt="<?php echo $r['hotel_name'] ?>">
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
                		<?php } ?>
                		
                		

                    

                    

                   

                	</div>
                	
                	
                 	                                   
                </div>             

 					</div>

 					


 					


 			</section>

 			

				<!-- Brand page content ends here -->
			</div>	

