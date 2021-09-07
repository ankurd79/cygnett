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
                		<div class="col-md-12 corporate-enquiry">
                			 <form class="form-horizontal form1 contact-form" method=enctype="multipart/form-data" name="frmcorp" id='frmcorp'>
                            
                            <div class="alert alert-success text-center alert-dismissible" id="msgdiv" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Thank you for showing interest in us! We will revert shortly.</strong>
                        </div>

                        <div class="alert alert-danger text-center alert-dismissible" id="errordiv1" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Server Issues. Please try again later!</strong>
                        </div>

                             <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">First Name <span class="required">*</span></label>
                                        <input type="text" id="first_name" name='first_name' class="field-long form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Last Name  <span class="required">*</span></label>
                                        <input type="text" id="last_name" name='last_name' placeholder="Last Name" class="field-long form-control">
                                    </div>
                                </div> 
                                
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Company  <span class="required">*</span></label>
                                        <input type="text" id="company" name='company' class="field-long form-control" placeholder="Company">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Phone Number <span class="required">*</span></label>
                                        <input type="text" name="mobile" id="mobile" placeholder="Phone Number" class="field-long form-control">
                                    </div>
                                </div>  

                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Email Address <span class="required">*</span></label>
                                        <input type="email" name="email" id="email" placeholder="Email" class="field-long form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Street Address  <span class="required">*</span></label>
                                        <input type="text" id="street_address" name='street_address' placeholder="Street Address" class="field-long form-control">
                                    </div>
                                </div>  

                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">City <span class="required">*</span></label>
                                        <input type="text" name="city" id="city" placeholder="City" class="field-long form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Postal Code <span class="required">*</span></label>
                                        <input type="text" name="pincode" id="pincode" placeholder="Postal Code" class="field-long form-control">
                                    </div>
                                </div>  

                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="font-weight-bold text-dark text-2">Country <span class="required">*</span></label>
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
                                        <label class="font-weight-bold text-dark text-2">Estimated Number of Room Nights Per Year <span class="required">*</span></label>
                                        <select class="js-example-disabled-results select2 event select-style select2-offscreen form-control" name='room_night' id="room_night" tabindex="-1">
                           <option value="0-100 Room Nights / Year">0-100 Room Nights / Year</option>
                           <option value="101-250 Room Nights / Year">101-250 Room Nights / Year</option>
                           <option value="251-500 Room Nights / Year">251-500 Room Nights / Year</option>
                           <option value="500+ Room Nights / Year">500+ Room Nights / Year</option>
                    </select>
                                    </div>
                                </div>


                                <div class="form-row">
                                   <div class="form-group col text-center mb-0 pb-0 mt-3">
                                    <input type="submit" name="submit" id="submit" value="Submit Form" class="btn btn-primary btn-modern">
                                    </div>
                                </div>      


              <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
              <div id='msg'></div>
            </form>
                		</div>
                	</div>
                 	                                   
                </div>             

 					</div>

 					


 					


 			</section>

 			

				<!-- Brand page content ends here -->
			</div>	

