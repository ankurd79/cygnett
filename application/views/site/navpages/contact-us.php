        <?php $this->load->view('site/navpages/carousel'); ?>
				<!-- Top Carousel -->

				<!-- Brand page content starts here -->

					<section class="overview-container">
  			<div class="container inner-page-pad pt-3">
 						<div class="col-md-12">
                	<?php
                	    
                	    $p=getparentnav($details['parent_id']);
                	    //print_r($p);
                	    ?>
 					
 						<div class="breadcrumb"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1"><?php echo $details['menu_name'] ?></span></div>
 						<div class="row mb-3"> 					
 					<div class="col-md-12">	
                	<h3 class="mb-2"><?php echo $details['menu_name'] ?></h3>                	
                	</div>
                	</div>
                	<div class="row">                	
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14035.550738761973!2d77.0376039!3d28.4226457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2191664ca7e3fefc!2sCygnett+Hotels+and+Resorts!5e0!3m2!1sen!2sin!4v1541885732987" width="100%" height="400" frameborder="0" style=" width:100%; border:0; padding: 15px 12px 0px 20px;" allowfullscreen></iframe>   
                    
                    <div class="container corporate-office-details">

                    <div class="row py-4">
                        
                        <div class="col-lg-7">

                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                                <h4 class="pt-0"><strong>Corporate Office</strong></h4>
                                <h5 class="pt-3"><strong>INDIA</strong></h5>
                                <ul class="list list-icons list-icons-style-2 mt-2">
                                    <li><i class="fas fa-map-marker-alt top-6"></i>  Vipul Business Park Unit No 519, 5th Floor, Sector 48, Gurgaon 122004, Haryana, India</li>
                                    <li><i class="fas fa-phone top-6"></i>  +91 124 4262555/+91 124 4263555</li>
                                    <li><i class="fas fa-mobile-alt top-6"></i>  +91-8800699823</li>
                                    <li><i class="fas fa-globe top-6"></i>  <a href="www.cygnetthotels.com" target="_blank">www.cygnetthotels.com</a></li>
                                </ul>
                            </div>

                            <div class="row">
                                 <div class="col-lg-6">
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                                <h5 class="pt-3"><strong>NEPAL</strong></h5>
                                <ul class="list list-icons list-icons-style-2 mt-2">
                                    <li><i class="fas fa-map-marker-alt top-6"></i>  Bageshwori tole, Surkhet road, ward number 3, Nepalgunj, Nepal-22900</li>
                                    <li><i class="fas fa-phone top-6"></i>  +91 8800215482</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                                <h5 class="pt-3"><strong>GERMANY</strong></h5>
                                <ul class="list list-icons list-icons-style-2 mt-2">
                                    <li><i class="fas fa-map-marker-alt top-6"></i> Cygnett Hotels & Resorts <br>
                                              Dietze Hospitality Management<br>
                                              Teltower Damm 155<br>
                                              D – 14167 Berlin </li>
                                    <li><i class="fas fa-phone top-6"></i>  +49 (0) 30 847 20037</li>
                                </ul>
                            </div>
                        </div>

                        </div>


                            <h4 class="pt-5"><strong>Central Reservations</strong></h4>
                            <p class="mb-0">To contact one of our Reservations Associate at The Cygnett Hotels & Resorts you may either write on: centralreservations@cygnetthotels.com drop in a whats app message or call on any of the numbers listed below.</p>
                            <ul class="list list-icons list-icons-style-2 mt-2">
                                    <li><i class="fas fa-envelope top-6"></i> <a href="mailto:centralreservations@cygnetthotels.com">centralreservations@cygnetthotels.com</a></li>
                                    <li><i class="fas fa-phone top-6"></i>  +91 124 4262555 / 18002122350</li>
                                    <li><i class="fas fa-mobile-alt top-6"></i>  +91-8595 450450, +91-8595 192192 (10AM - 8PM)</li>
                                </ul>

                                <h4 class="pt-5"><strong>Development Support</strong></h4>
                            <ul class="list list-icons list-icons-style-2 mt-2">
                                    <li><i class="fas fa-envelope top-6"></i> <a href="mailto:ankur.chandra@cygnetthotels.com">ankur.chandra@cygnetthotels.com</a></li>
                                    <li><i class="fas fa-mobile-alt top-6"></i>  +91 8800215482</li>
                                </ul>

                        </div>

                        <div class="col-lg-5 get-in-touch">

                            <div class="overflow-hidden mb-1">
                                <h4 class="pt-0 mb-0"><strong>Get in Touch</strong></h4>
                            </div>
                            <div class="overflow-hidden mb-2 pb-0">
                                <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Feel free to ask for details, don't save any questions!</p>
                            </div>

                            <form class="contact-form form1" name='contactfrm' id='contactfrm' method='POST'>                        
                                                             
                               


                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">Your Name <span class="required">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control field-long" placeholder="" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">Your Email Address  <span class="required">*</span> </label>
                                        <input type="email" name="email" id="email" class="form-control field-long" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">Contact Number  <span class="required">*</span></label>
                                        <input type="text" minlength="10" maxlength="10" name="contact" id="contact" class="form-control field-long" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">Your City  <span class="required">*</span></label>
                                        <input type="text" name="city" id="city" class="form-control field-long" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">Query For <span class="required">*</span></label>
                                        <input type="text" name="query" id="query" class="form-control field-long" />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="font-weight-bold text-dark text-2">Your Comments <span class="required">*</span></label>
                                        <textarea name="comments" id="comments" class="form-control field-long field-textarea" rows="5"></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="submit" name="submit" id="submit" value="Send Message" class="btn btn-primary btn-modern">
                                    </div>
                                    <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
                                </div>
                                <div class="alert alert-success text-center alert-dismissible" id="msgdiv" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Thank you for showing interest in us! We will revert shortly.</strong>
                            </div>
                            </form>

                        </div>

                    </div>

                </div>	
                    



                	</div>
                 	                                   
                </div>             

 					</div>

 					


 					


 			</section>

 			

				<!-- Brand page content ends here -->
			</div>	

