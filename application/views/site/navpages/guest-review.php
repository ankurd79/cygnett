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
                	<h3 class="mb-2"><?php echo $details['menu_name'] ?></h3>                	
                	</div>
                	</div>
                	<div class="row">
                		<div class="col-md-12">
                			<p>Please let us know if you enjoyed your stay with us at Cygnett Hotels. Providing our guests with exceptional service is our first priority and we greatly value your feedback! Please leave your guest reviews, travel reviews, and any other hotel comments in the form below, and let us know if there’s anything we can do to make your next experience even more fantastic.</p>
                		</div>

                        <div class="col-md-12 guest-review">
                        <form id="reviewfrm" class="form-horizontal form1 contact-form">
                        
                        <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Name  <span class="required">*</span></label>
                                        <input class="field-long form-control" name="name"  maxlength="75" id="name" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">City  <span class="required">*</span></label>
                                        <input class="form-control" maxlength="75" name="city" type="text" id="city">
                                    </div>
                                </div> 


                      <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Country  </label>
                                        <select class="js-example-disabled-results select2 event select-style select2-offscreen form-control" name='txtCountry' id="txtCountry" tabindex="-1">
                           <option value="Canada">Canada</option>
                           <option value="United States">United States</option>
                           <option value="Afghanistan">Afghanistan</option>
                           <option value="Aland Islands">Aland Islands</option>
                           <option value="Albania">Albania</option>
                           <option value="Algeria">Algeria</option>
                           <option value="American Samoa">American Samoa</option>
                           <option value="Andorra">Andorra</option>
                           <option value="Angola">Angola</option>
                           <option value="Anguilla">Anguilla</option>
                           <option value="Antarctica">Antarctica</option>
                           <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                           <option value="Argentina">Argentina</option>
                           <option value="Armenia">Armenia</option>
                           <option value="Aruba">Aruba</option>
                           <option value="Australia">Australia</option>
                           <option value="Austria">Austria</option>
                           <option value="Azerbaijan">Azerbaijan</option>
                           <option value="Bahamas">Bahamas</option>
                           <option value="Bahrain">Bahrain</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Barbados">Barbados</option>
                           <option value="Belarus">Belarus</option>
                           <option value="Belgium">Belgium</option>
                           <option value="Belize">Belize</option>
                           <option value="Benin">Benin</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Bhutan">Bhutan</option>
                           <option value="Bolivia">Bolivia</option>
                           <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                           <option value="Botswana">Botswana</option>
                           <option value="Bouvet Island">Bouvet Island</option>
                           <option value="Brazil">Brazil</option>
                           <option value="British Virgin Islands">British Virgin Islands</option>
                           <option value="Brunei">Brunei</option>
                           <option value="Bulgaria">Bulgaria</option>
                           <option value="Burkina Faso">Burkina Faso</option>
                           <option value="Burundi">Burundi</option>
                           <option value="Cambodia">Cambodia</option>
                           <option value="Cameroon">Cameroon</option>
                           <option value="Cape Verde">Cape Verde</option>
                           <option value="Cayman Islands">Cayman Islands</option>
                           <option value="Central African Republic">Central African Republic</option>
                           <option value="Chad">Chad</option>
                           <option value="Chile">Chile</option>
                           <option value="China">China</option>
                           <option value="Christmas Island">Christmas Island</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Comoros">Comoros</option>
                           <option value="Congo">Congo</option>
                           <option value="Cook Islands">Cook Islands</option>
                           <option value="Costa Rica">Costa Rica</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cyprus">Cyprus</option>
                           <option value="Czech Republic">Czech Republic</option>
                           <option value="Denmark">Denmark</option>
                           <option value="Disputed Territory">Disputed Territory</option>
                           <option value="Djibouti">Djibouti</option>
                           <option value="Dominica">Dominica</option>
                           <option value="Dominican Republic">Dominican Republic</option>
                           <option value="East Timor">East Timor</option>
                           <option value="Ecuador">Ecuador</option>
                           <option value="Egypt">Egypt</option>
                           <option value="El Salvador">El Salvador</option>
                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                           <option value="Eritrea">Eritrea</option>
                           <option value="Estonia">Estonia</option>
                           <option value="Ethiopia">Ethiopia</option>
                           <option value="Falkland Islands">Falkland Islands</option>
                           <option value="Faroe Islands">Faroe Islands</option>
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                           <option value="French Guyana">French Guyana</option>
                           <option value="French Polynesia">French Polynesia</option>
                           <option value="Gabon">Gabon</option>
                           <option value="Gambia">Gambia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Ghana">Ghana</option>
                           <option value="Gibraltar">Gibraltar</option>
                           <option value="Greece">Greece</option>
                           <option value="Greenland">Greenland</option>
                           <option value="Grenada">Grenada</option>
                           <option value="Guadeloupe">Guadeloupe</option>
                           <option value="Guam">Guam</option>
                           <option value="Guatemala">Guatemala</option>
                           <option value="Guinea">Guinea</option>
                           <option value="Guinea-Bissau">Guinea-Bissau</option>
                           <option value="Guyana">Guyana</option>
                           <option value="Haiti">Haiti</option>
                           <option value="Honduras">Honduras</option>
                           <option value="Hong">Hong Kong</option>
                           <option value="Hungary">Hungary</option>
                           <option value="Iceland">Iceland</option>
                           <option value="India" selected="">India</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="Iraq">Iraq</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Israel">Israel</option>
                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Phone  <span class="required">*</span></label>
                                        <input class="form-control" name="contact" id="contact" maxlength="75" type="text">
                                    </div>
                                </div>


                        <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Email  <span class="required">*</span></label>
                                        <input class="form-control" name="email" id="email" maxlength="75" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Hotel Name  <span class="required">*</span></label>
                                        <select class="js-example-disabled-results select2 event select-style select2-offscreen form-control" name="hotel_name" id="hotel_name" tabindex="-1">       
                           <option value="0">Select Hotel Name</option>
                           <option value="Cygnett Lite Alwar">Cygnett Lite, Alwar</option>  
                           <option value="Cozzet Stay Amritsar">Cozzet Stay, Amritsar</option>                  
                           <option value="Cygnett Park Meghna Bongaigaon">Cygnett Park Meghna, Bongaigaon</option>
                           <option value="Cygnett Inn Sea View Digha">Cygnett Inn Sea View, Digha</option>
                           <option value="Cygnett Lite Digha">Cygnett Lite, Digha</option>
                           <option value="Cygnett Inn Dwarka">Cygnett Inn, Dwarka</option>
                           <option value="Cygnett Inn La Maison Gangtok">Cygnett Inn La Maison, Gangtok</option>
                           <option value="Cygnett Inn Celestiial Goa">Cygnett Inn Celestiial, Goa</option>
                           <option value="Cygnett Inn Repose Guwahati">Cygnett Inn Repose, Guwahati</option>
                           <option value="Cygnett Inn Trendz Itanagar">Cygnett Inn Trendz, Itanagar</option>
                           <option value="Cygnett Lite Grand Jaipur">Cygnett Lite Grand, Jaipur</option>
                           <option value="Cygnett Style Mantra Jodhpur">Cygnett Style Mantra, Jodhpur</option>
                           <option value="Siamton Inn Kolkata">Siamton Inn, An Elect Hotel, Kolkata</option>
                           <option value="Cygnett Park Lucknow">Cygnett Park, Lucknow</option>
                           <option value="Cygnett Style Signature Mcleodganj">Cygnett Style Signature, Mcleodganj</option>
                           <option value="Cygnett Resort Mountain Breeze Nainital">Cygnett Resort Mountain Breeze, Nainital</option>
                           <option value="Cygnett Style Tanias Siliguri">Cygnett Style Tania's, Siliguri</option>
                           <option value="Cygnett Inn Ramachandra Visakhapatnam">Cygnett Inn Ramachandra, Visakhapatnam</option>
                        </select>
                                    </div>
                                </div> 


                         <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Room #  </label>
                                        <input type="text" maxlength="75" class="form-control" name='room_no' id="room_no">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Check-In Date (mm-dd-yy)  </label>
                                    <input class="form-control" name="checkin-date" id="checkin-date" maxlength="75" type="text">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Check-Out Date (mm-dd-yy)  </label>
                                        <input class="form-control" name="checkout-date" id="checkout-date" maxlength="75" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">How did you make your reservation? (mm-dd-yy)  </label>
                                    <select class="js-example-disabled-results select2 event select-style select2-offscreen form-control" name="txtReservation" id="txtReservation" tabindex="-1">                           
                           <option selected>Select mode of reservation</option>
                           <option value="Called Hotel">Called Hotel</option>
                           <option value="Travel Agent">Travel Agent</option>
                           <option value="Online">Online - Cygnett Hotels website </option>
                           <option value="Online- Other source">Online- Other sources</option>
                        </select>
                                    </div>
                                </div>  


                        <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">What was the primary purpose of your stay?  </label>
                                        <select class="js-example-disabled-results select2 event select-style select2-offscreen form-control" name="txtStayPurpose" id="txtStayPurpose" tabindex="-1">
                           <option selected>Select purpose of your stay</option>
                           <option value="Pleasure" >Pleasure</option>
                           <option value="Business">Business</option>
                           <option value="Tour">Tour</option>
                           <option value="Meeting/Convention">Meeting/Convention</option>
                           <option value="Medical">Medical</option>
                           <option value="Other">Other</option>
                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Will you be staying at Cygnett Hotels in future?  </label>
                                    <select class="js-example-disabled-results select2 event select-style select2-offscreen form-control" name="txtFutureStay" id="txtFutureStay" tabindex="-1">
                           <option selected>Please choose</option>
                           <option value="yes">Yes</option>
                           <option value="No">No</option>
                           <option value="Not sure">Not sure</option>
                        </select>
                                    </div>
                                </div>       
            
            <div class="col-md-12 pl-0 pr-0 mt-3">     
            <h4>Overall How did our Hotel Meet your Expectations?</h4>
                <h4 class="general-h3 font-weight-bold" id="Receptionqert">Reception</h4>
            </div>
            <div class=" form-row radioshift">
               <div class="form-group col-md-6 col-sm-12 ">
                  <label class="fomeinner" for="Greeting"><strong>Greeting</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="greetgrp1" name="greetgrp" value="Excellent">
                  <label for="greetgrp1">Excellent</label>
                  <input type="radio" id="greetgrp2" name="greetgrp" value="Average">
                  <label for="greetgrp2">Average</label>
                  <input type="radio" id="greetgrp3" name="greetgrp" value="Unacceptable">
                  <label for="greetgrp3">Unacceptable</label>
                     <input type="radio" id="greetgrp4" name="greetgrp" value="NA">
                  <label for="greetgrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Appearance of Entrance</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="appegrp1" name="appegrp" value="Excellent">
                  <label for="appegrp1">Excellent</label>
                  <input type="radio" id="appegrp2" name="appegrp" value="Average">
                  <label for="appegrp2">Average</label>
                  <input type="radio" id="appegrp3" name="appegrp" value="Unacceptable">
                  <label for="appegrp3">Unacceptable</label>
                     <input type="radio" id="appegrp4" name="appegrp" value="NA">
                  <label for="appegrp4">NA</label>
               </div>
            </div>
            <div class="form-row radioshift">
               <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Check-in Service</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Checkgrp1" name="Checkgrp" value="Excellent">
                  <label for="Checkgrp1">Excellent</label>
                  <input type="radio" id="Checkgrp2" name="Checkgrp" value="Average">
                  <label for="Checkgrp2">Average</label>
                  <input type="radio" id="Checkgrp3" name="Checkgrp" value="Unacceptable">
                  <label for="Checkgrp3">Unacceptable</label>
                     <input type="radio" id="Checkgrp4" name="Checkgrp" value="NA">
                  <label for="Checkgrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Bell Service</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Bell1" name="Bell" value="Excellent">
                
                  <label for="Bell1">Excellent</label>
                  <input type="radio" id="Bell2" name="Bell" value="Average">
                  <label for="Bell2">Average</label>
                  <input type="radio" id="Bell3" name="Bell" value="Unacceptable">
                  <label for="Bell3">Unacceptable</label>
                     <input type="radio" id="Bell4" name="Bell" value="NA">
                  <label for="Bell4">NA</label>
               </div>



            </div>
            
            <div class="col-md-12 pl-0 pr-0"> 
            <h4 class="general-h3 font-weight-bold">Guest Room</h4>
            </div>
            <div class="form-row radioshift">
               <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>First Impression</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Imprgrp1" name="Imprgrp" value="Excellent">
                  <label for="Imprgrp1">Excellent</label>
                  <input type="radio" id="Imprgrp2" name="Imprgrp" value="Average">
                  <label for="Imprgrp2">Average</label>
                  <input type="radio" id="Imprgrp3" name="Imprgrp" value="Unacceptable">
                  <label for="Imprgrp3">Unacceptable</label>
                     <input type="radio" id="Imprgrp4" name="Imprgrp" value="NA">
                  <label for="Imprgrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Cleanliness Upon Arrival</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Cleangrp1" name="Cleangrp" value="Excellent">
                  <label for="Cleangrp1">Excellent</label>
                  <input type="radio" id="Cleangrp2" name="Cleangrp" value="Average">
                  <label for="Cleangrp2">Average</label>
                  <input type="radio" id="Cleangrp3" name="Cleangrp" value="Unacceptable">
                  <label for="Cleangrp3">Unacceptable</label>
                     <input type="radio" id="Cleangrp4" name="Cleangrp" value="NA">
                  <label for="Cleangrp4">NA</label>
               </div>
           </div>
            <div class="form-row radioshift">
                      <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Housekeeping</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Housegrp1" name="Housegrp" value="Excellent">
                  <label for="Housegrp1">Excellent</label>
                  <input type="radio" id="Housegrp2" name="Housegrp" value="Average">
                  <label for="Housegrp2">Average</label>
                  <input type="radio" id="Housegrp3" name="Housegrp" value="Unacceptable">
                  <label for="Housegrp3">Unacceptable</label>
                     <input type="radio" id="Housegrp4" name="Housegrp" value="NA">
                  <label for="Housegrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Maintenance</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Maintengrp1" name="Maintengrp" value="Excellent">
                  <label for="Maintengrp1">Excellent</label>
                  <input type="radio" id="Maintengrp2" name="Maintengrp" value="Average">
                  <label for="Maintengrp2">Average</label>
                  <input type="radio" id="Maintengrp3" name="Maintengrp" value="Unacceptable">
                  <label for="Maintengrp3">Unacceptable</label>
                     <input type="radio" id="Maintengrp4" name="Maintengrp" value="NA">
                  <label for="Maintengrp4">NA</label>
               </div>
            </div>
            <div class="form-row radioshift">
                      <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Value for Money</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Moneygrp1" name="Moneygrp" value="Excellent">
                  <label for="Moneygrp1">Excellent</label>
                  <input type="radio" id="Moneygrp2" name="Moneygrp" value="Average">
                  <label for="Moneygrp2">Average</label>
                  <input type="radio" id="Moneygrp3" name="Moneygrp" value="Unacceptable">
                  <label for="Moneygrp3">Unacceptable</label>
                     <input type="radio" id="Moneygrp4" name="Moneygrp" value="NA">
                  <label for="Moneygrp4">NA</label>
               </div>

            </div>

            

            <div class="col-md-12 pl-0 pr-0">       
            <h4 class="general-h3 font-weight-bold">Hotel Facilities</h4>
            </div>
            <div class="form-row radioshift">
               <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Valet/Laundry</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Valgrp1" name="Valgrp" value="Excellent">
                  <label for="Valgrp1">Excellent</label>
                  <input type="radio" id="Valgrp2" name="Valgrp" value="Average">
                  <label for="Valgrp2">Average</label>
                  <input type="radio" id="Valgrp3" name="Valgrp" value="Unacceptable">
                  <label for="Valgrp3">Unacceptable</label>
                     <input type="radio" id="Valgrp4" name="Valgrp" value="NA">
                  <label for="Valgrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Parking</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Parkgrp1" name="Parkgrp" value="Excellent"> 
                  <label for="Parkgrp1">Excellent</label>
                  <input type="radio" id="Parkgrp2" name="Parkgrp" value="Average">
                  <label for="Parkgrp2">Average</label>
                  <input type="radio" id="Parkgrp3" name="Parkgrp" value="Unacceptable">
                  <label for="Parkgrp3">Unacceptable</label>
                     <input type="radio" id="Parkgrp4" name="Parkgrp" value="NA">
                  <label for="Parkgrp4">NA</label>
               </div>
           </div>
            <div class="form-row radioshift">
                      <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Fitness Centre</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Fitngrp1" name="Fitngrp" value="Excellent"> 
                  <label for="Fitngrp1">Excellent</label>
                  <input type="radio" id="Fitngrp2" name="Fitngrp" value="Average">
                  <label for="Fitngrp2">Average</label>
                  <input type="radio" id="Fitngrp3" name="Fitngrp" value="Unacceptable">
                  <label for="Fitngrp3">Unacceptable</label>
                     <input type="radio" id="Fitngrp4" name="Fitngrp" value="NA">
                  <label for="Fitngrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Business Services</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Busingrp1" name="Busingrp" value="Excellent"> 
                  <label for="Busingrp1">Excellent</label>
                  <input type="radio" id="Busingrp2" name="Busingrp" value="Average">
                  <label for="Busingrp2">Average</label>
                  <input type="radio" id="Busingrp3" name="Busingrp" value="Unacceptable">
                  <label for="Busingrp3">Unacceptable</label>
                     <input type="radio" id="Busingrp4" name="Busingrp" value="NA">
                  <label for="Busingrp4">NA</label>
               </div>
            </div>
            

             <div class="col-md-12 pl-0 pr-0">       
            <h4 class="general-h3 font-weight-bold">Departure</h4>
            </div>
             <div class="form-row radioshift">
               <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Check Out Service</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Outgrp1" name="Outgrp" value="Excellent"> 
                  <label for="Outgrp1">Excellent</label>
                  <input type="radio" id="Outgrp2" name="Outgrp" value="Average">
                  <label for="Outgrp2">Average</label>
                  <input type="radio" id="Outgrp3" name="Outgrp" value="Unacceptable">
                  <label for="Outgrp3">Unacceptable</label>
                     <input type="radio" id="Outgrp4" name="Outgrp" value="NA">
                  <label for="Outgrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Bell Service</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Bell2grp1" name="Bell2grp" value="Excellent"> 
                  <label for="Bell2grp1">Excellent</label>
                  <input type="radio" id="Bell2grp2" name="Bell2grp" value="Average">
                  <label for="Bell2grp2">Average</label>
                  <input type="radio" id="Bell2grp3" name="Bell2grp" value="Unacceptable">
                  <label for="Bell2grp3">Unacceptable</label>
                     <input type="radio" id="Bell2grp4" name="Bell2grp" value="NA">
                  <label for="Bell2grp4">NA</label>
               </div>
           </div>

            
              <div class="col-md-12 pl-0 pr-0">       
            <h4 class="general-h3 font-weight-bold">Employees</h4>
            </div>
            <div class="form-row radioshift">
               <div class="form-group col-md-6 col-sm-12 ">
                  <label class="fomeinner "><strong>Friendly</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Friengrp1" name="Friengrp" value="Excellent"> 
                  <label for="Friengrp1">Excellent</label>
                  <input type="radio" id="Friengrp2" name="Friengrp" value="Average">
                  <label for="Friengrp2">Average</label>
                  <input type="radio" id="Friengrp3" name="Friengrp" value="Unacceptable">
                  <label for="Friengrp3">Unacceptable</label>
                     <input type="radio" id="Friengrp4" name="Friengrp" value="NA">
                  <label for="Friengrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Knowledgeable</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Knowgrp1" name="Knowgrp" value="Excellent"> 
                  <label for="Knowgrp1">Excellent</label>
                  <input type="radio" id="Knowgrp2" name="Knowgrp" value="Average">
                  <label for="Knowgrp2">Average</label>
                  <input type="radio" id="Knowgrp3" name="Knowgrp" value="Unacceptable">
                  <label for="Knowgrp3">Unacceptable</label>
                     <input type="radio" id="Knowgrp4" name="Knowgrp" value="NA">
                  <label for="Knowgrp4">NA</label>
               </div>
           </div>
            <div class=" form-row radioshift">
                  <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Helpful</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Helpgrp1" name="Helpgrp" value="Excellent"> 
                  <label for="Helpgrp1">Excellent</label>
                  <input type="radio" id="Helpgrp2" name="Helpgrp" value="Average">
                  <label for="Helpgrp2">Average</label>
                  <input type="radio" id="Helpgrp3" name="Helpgrp" value="Unacceptable">
                  <label for="Helpgrp3">Unacceptable</label>
                     <input type="radio" id="Helpgrp4" name="Helpgrp" value="NA">
                  <label for="Helpgrp4">NA</label>
               </div>

            </div>
              
                <div class="col-md-12 pl-0 pr-0">     
            <!-- <h4>Additional Comments</h4> -->
            <h4 class="general-h3 font-weight-bold">Restaurant (Breakfast)</h4>
            </div>

            <div class="form-row radioshift">
               <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Quality of Food</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Foodgrp1" name="Foodgrp" value="Excellent"> 
                  <label for="Foodgrp1">Excellent</label>
                  <input type="radio" id="Foodgrp2" name="Foodgrp" value="Average">
                  <label for="Foodgrp2">Average</label>
                  <input type="radio" id="Foodgrp3" name="Foodgrp" value="Unacceptable">
                  <label for="Foodgrp3">Unacceptable</label>
                     <input type="radio" id="Foodgrp4" name="Foodgrp" value="NA">
                  <label for="Foodgrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Cleanliness</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Clean2grp1" name="Clean2grp" value="Excellent"> 
                  <label for="Clean2grp1">Excellent</label>
                  <input type="radio" id="Clean2grp2" name="Clean2grp" value="Average">
                  <label for="Clean2grp2">Average</label>
                  <input type="radio" id="Clean2grp3" name="Clean2grp" value="Unacceptable">
                  <label for="Clean2grp3">Unacceptable</label>
                     <input type="radio" id="Clean2grp4" name="Clean2grp" value="NA">
                  <label for="Clean2grp4">NA</label>
               </div>
           </div>
            <div class="form-row radioshift">
                      <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Quality of Service</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="QSergrp1" name="QSergrp" value="Excellent"> 
                  <label for="QSergrp1">Excellent</label>
                  <input type="radio" id="QSergrp2" name="QSergrp" value="Average">
                  <label for="QSergrp2">Average</label>
                  <input type="radio" id="QSergrp3" name="QSergrp" value="Unacceptable">
                  <label for="QSergrp3">Unacceptable</label>
                     <input type="radio" id="QSergrp4" name="QSergrp" value="NA">
                  <label for="QSergrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Value of Meal</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Mealgrp1" name="Mealgrp" value="Excellent"> 
                  <label for="Mealgrp1">Excellent</label>
                  <input type="radio" id="Mealgrp2" name="Mealgrp" value="Average">
                  <label for="Mealgrp2">Average</label>
                  <input type="radio" id="Mealgrp3" name="Mealgrp" value="Unacceptable">
                  <label for="Mealgrp3">Unacceptable</label>
                     <input type="radio" id="Mealgrp4" name="Mealgrp" value="NA">
                  <label for="Mealgrp4">NA</label>
               </div>
            </div>
            <div class="form-row radioshift">
                      <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Appeal of Decor</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Decorgrp1" name="Decorgrp" value="Excellent"> 
                  <label for="Decorgrp1">Excellent</label>
                  <input type="radio" id="Decorgrp2" name="Decorgrp" value="Average">
                  <label for="Decorgrp2">Average</label>
                  <input type="radio" id="Decorgrp3" name="Decorgrp" value="Unacceptable">
                  <label for="Decorgrp3">Unacceptable</label>
                     <input type="radio" id="Decorgrp4" name="Decorgrp" value="NA">
                  <label for="Decorgrp4">NA</label>
               </div>

                  <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Staff Met your Needs?</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="Metgrp1" name="Metgrp" value="Excellent"> 
                  <label for="Metgrp1">Excellent</label>
                  <input type="radio" id="Metgrp2" name="Metgrp" value="Average">
                  <label for="Metgrp2">Average</label>
                  <input type="radio" id="Metgrp3" name="Metgrp" value="Unacceptable">
                  <label for="Metgrp3">Unacceptable</label>
                     <input type="radio" id="Metgrp4" name="Metgrp" value="NA">
                  <label for="Metgrp4">NA</label>
               </div>

            </div>

            
                <div class="col-md-12 pl-0 pr-0">
            <h4 class="general-h3 font-weight-bold">Lunch/Dinner</h4>
            </div>
             <div class="form-row radioshift">
               <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Quality of Food</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="QualityFoodgrp1" name="QualityFoodgrp" value="Excellent"> 
                  <label for="QualityFoodgrp1">Excellent</label>
                  <input type="radio" id="QualityFoodgrp2" name="QualityFoodgrp" value="Average">
                  <label for="QualityFoodgrp2">Average</label>
                  <input type="radio" id="QualityFoodgrp3" name="QualityFoodgrp" value="Unacceptable">
                  <label for="QualityFoodgrp3">Unacceptable</label>
                     <input type="radio" id="QualityFoodgrp4" name="QualityFoodgrp" value="NA">
                  <label for="QualityFoodgrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Cleanliness</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="DCleangrp1" name="DCleangrp" value="Excellent"> 
                  <label for="DCleangrp1">Excellent</label>
                  <input type="radio" id="DCleangrp2" name="DCleangrp" value="Average">
                  <label for="DCleangrp2">Average</label>
                  <input type="radio" id="DCleangrp3" name="DCleangrp" value="Unacceptable">
                  <label for="DCleangrp3">Unacceptable</label>
                     <input type="radio" id="DCleangrp4" name="DCleangrp" value="NA">
                  <label for="DCleangrp4">NA</label>
               </div>
           </div>
            <div class="form-row radioshift">
                      <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Quality of Service</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="DQSergrp1" name="DQSergrp" value="Excellent">
                  <label for="DQSergrp1">Excellent</label>
                  <input type="radio" id="DQSergrp2" name="DQSergrp" value="Average">
                  <label for="DQSergrp2">Average</label>
                  <input type="radio" id="DQSergrp3" name="DQSergrp" value="Unacceptable">
                  <label for="DQSergrp3">Unacceptable</label>
                     <input type="radio" id="DQSergrp4" name="DQSergrp" value="NA">
                  <label for="DQSergrp4">NA</label>
               </div>
         <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Value of Meal</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="LDMealgrp1" name="LDMealgrp" value="Excellent">
                  <label for="LDMealgrp1">Excellent</label>
                  <input type="radio" id="LDMealgrp2" name="LDMealgrp" value="Average">
                  <label for="LDMealgrp2">Average</label>
                  <input type="radio" id="LDMealgrp3" name="LDMealgrp" value="Unacceptable">
                  <label for="LDMealgrp3">Unacceptable</label>
                     <input type="radio" id="LDMealgrp4" name="LDMealgrp" value="NA">
                  <label for="LDMealgrp4">NA</label>
               </div>
            </div>

                    <div class="form-row radioshift">
                      <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Appeal of Decor</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="LDecorgrp1" name="LDecorgrp" value="Excellent">
                  <label for="LDecorgrp1">Excellent</label>
                  <input type="radio" id="LDecorgrp2" name="LDecorgrp" value="Average">
                  <label for="LDecorgrp2">Average</label>
                  <input type="radio" id="LDecorgrp3" name="LDecorgrp" value="Unacceptable">
                  <label for="LDecorgrp3">Unacceptable</label>
                     <input type="radio" id="LDecorgrp4" name="LDecorgrp" value="NA">
                  <label for="LDecorgrp4">NA</label>
               </div>

                  <div class="form-group col-md-6 col-sm-12">
                  <label class="fomeinner "><strong>Staff Met your Needs?</strong></label>
                  <div class="clearfix"></div>
                  <input type="radio" id="LMetgrp1" name="LMetgrp" value="Excellent"> 
                  <label for="LMetgrp1">Excellent</label>
                  <input type="radio" id="LMetgrp2" name="LMetgrp" value="Average">
                  <label for="LMetgrp2">Average</label>
                  <input type="radio" id="LMetgrp3" name="LMetgrp" value="Unacceptable">
                  <label for="LMetgrp3">Unacceptable</label>
                     <input type="radio" id="LMetgrp4" name="LMetgrp" value="NA">
                  <label for="LMetgrp4">NA</label>
               </div>

            
            </div>
                       <div class="form-group">
               <div class="col-sm-12 pl-0 pr-0">
                  <div>
                   <h4 class="fomeinner general-h3 font-weight-bold">*Additional Comments</h4>
                   <textarea class="form-control" rows="5" name='comments' id="comments" maxlength="1000" name="Additional Comments" type="textarea"></textarea>
                   <p class="text-center mt-3"><input type="submit" name="submit" id="submit" value="Submit Your Review" class="btn btn-primary btn-modern"></p>
                   <div></div>
                   <div id='shwimg' style="text-align:center; background-color: #f3f6f8; padding: 10px 0px; display:none;"></div>
                   <div id='msgg' style="text-align:center;"></div>
                   <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>

                        <div class="alert alert-success text-center alert-dismissible" id="msgdiv" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Thank you for your valuable feedback!</strong>
                        </div>

                        <div class="alert alert-danger text-center alert-dismissible" id="errordiv1" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Server Issues. Please try again later!</strong>
                        </div>
                  </div>
                  
               </div>
            </div>
         
                    </form>
                </div>

                	</div>
                 	                                   
                </div>             

 					</div>

 					


 					


 			</section>

 			

				<!-- Brand page content ends here -->
			</div>	

