        <?php $this->load->view('site/navpages/carousel'); ?>
				<!-- Top Carousel -->

				<!-- Brand page content starts here -->

					<section class="overview-container">
  			<div class="container inner-page-pad pt-3">
 						<div class="col-md-10 offset-md-1">
                	    <?php
                	    
                	    $p=getparentnav($details['parent_id']);
                	    //print_r($p);
                	    ?>
 					
 						<div class="breadcrumb"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1"><a href="javascript:void(0);"><?php echo $p['menu_name'] ?></a></span> > <span class="pl-1"><?php echo $details['menu_name'] ?></span></div>
 						<div class="row mb-3"> 					
 					<div class="col-md-12">	
                	<h3 class="mb-2"><?php echo $details['menu_name']  ?></h3>
                	</div>
                	</div>
                	<div class="row">
                		<div class="col-md-12">
                			<?php
                			    if($details['page_text']){
                			        echo $details['page_text'];
                			    }else{
                			        echo '<p>Coming Soon</p>';
                			    }
                			
                			?>
                		</div>
                	</div>
                 	                                   
                </div>             

 					</div>

 					


 					


 			</section>

 			

				<!-- Brand page content ends here -->
			</div>	

