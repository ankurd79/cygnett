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
 					
 						<div class="breadcrumb"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1"> <span class="pl-1"><?php echo $p['menu_name'] ?></span> > <span class="pl-1"><?php echo $details['menu_name'] ?></span></div>
 						<div class="row mb-3"> 					
 					<div class="col-md-12">	
                	<h3 class="mb-2">Our Technologies</h3>                	
                	</div>
                	</div>
                	<div class="row">
                		<div class="col-md-12">
                		
                		<h4 class="mb-3"><strong>Business & Technology Division</strong></h4> 
                			<p>Our technologies are the product of an interaction between our organization and our customer over the duration of our relationship. This interaction is made up of three parts:</p>
                      <ul>
                        <li>The customer journey</li>
                        <li>The brand touch points the customer interacts with</li>
                        <li>The environments the customer experiences (including digital environment) during their experience</li>
                        <li>A good customer experience means that the individual's experience during all points of contact matches the individual's expectations</li>
                      </ul>

                      <blockquote class="blockquote-primary">
                        <p class="mb-0 pb-0">THE RIGHT TECHNOLOGY WILL PROVIDE YOU THE WINNING EDGE IN THE HIGHLY COMETITIVE NEW NORMAL</p>                        
                      </blockquote>
                		</div>
                		
                		<div class="col-md-4 mt-5 tech-logo"><img src="images/static/cygnett-cla1.jpg" class="img-fluid" loading="lazy"></div>
                    <div class="col-md-8 mt-5">
                      <h3 class="mb-2 pb-0">E-Learning & Technology</h3>
                      <h6 ><strong>Cygnett E-Learnings & Academics (CLA)</strong></h6>
                      <p>Cygnett's Human Resource philosophy focuses on meritocracy and capability development. The Capability Development Agenda aims at strengthening the organizational capability required in pursuit of our Mission and Vision.</p>
                      <p>We offer several customized training and development interventions at Corporate and Divisional levels aimed at developing functional, behavioral, leadership and management capabilities amongst the youth. Each program is designed to reflect the new capability requirements. The development approach holds elements beyond training, with the objective of increasing knowledge of systems and procedures, providing opprotunities for on-the-job learning, encouraging employee participation etc.</p>
                    </div>
                    
                    <div class="col-md-4 mt-5 tech-logo"><img src="images/static/cygnett-cx1.jpg" class="img-fluid" loading="lazy"></div>
                    <div class="col-md-8 mt-5">
                      <h3 class="mb-2 pb-0">Cygnett CX</h3>
                      <h6 ><strong>We are rapidly building Cygnett's next-gen AI driven technology engine, christened 'CygnettCX'</strong></h6>
                      <p>CygnettCX comprises of several inter meshed components that include an information-rich and user friendly website, the Central Reservation System(CRS), on Online Reputation Management (ORM) and a service monitoring module all supported by powerful artificial intellience and data analytics to understand and deliver a personalized hospitality experience to every single customer at their numerous touch points with the hotel. Every interaction with our guest results in a deeper and more meaningful relationship. Our Technical Architect is very detailed.</p>
                      <p>We will be introducing a cognitive layer to our upgraded website with tools such as robotic chat box to ease guest navigation. We will also be developing blockchain powered loyalty ecosystem to deliver true benefits to our guests. Simultaneously, we are developing our booking engine. All these will help in increasing guest satisfaction, number of direct conversions and revenue per guest. The idea here is to deliver maximum to our guests.</p>
                    </div>

                		
                		
                	</div>
                 	                                   
                </div>             

 					</div>

 					


 					


 			</section>

 			

				<!-- Brand page content ends here -->
			</div>	

