<?php

?>

<h4 style="color:#4a4a4a;"><strong>Request For Brand Fact Sheet</strong></h4>

                            <div class="brand-download-form">
                            <div class="alert alert-success text-center alert-dismissible" id="msgdiv" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Thank you for showing interest in us! We will revert shortly.</strong>
                        </div>

                        <div class="alert alert-danger text-center alert-dismissible" id="errordiv1" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Server Issues. Please try again later!</strong>
                        </div>
                            
                            <form id="pillar_request" name='pillar_request' class="contact-form" method="post" autocomplete='off'>               
                
                <div class="form-row">
                  <div class="form-group col-lg-6 mb-1">
                    <label class="required text-2 mb-0">First Name</label>
                    <input type="text" data-msg-required="Please enter your First Name." class="form-control" name="fname" id="fname" required>
                  </div>
                  <div class="form-group col-lg-6 mb-1">
                    <label class="required text-2 mb-0">Last Name</label>
                    <input type="text" data-msg-required="Please enter your Last Name." class="form-control" name="lname" id="lname" required>
                  </div>
                  <div class="form-group col-lg-6 mb-1">
                    <label class="required text-2 mb-0">Email Address</label>
                    <input type="email" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control" name="email" id="email" required>
                  </div>
                  <div class="form-group col-lg-6 mb-1">
                    <label class="required text-2 mb-0">Mobile Number</label>
                    <input type="text" data-msg-required="Please enter Mobile Number." class="form-control" name="mobile" id="mobile" required>
                  </div>
                  <div class="form-group col-lg-6 mb-1">
                    <label class="required text-2 mb-0">Type of User</label>
                    <select id="user" name='user' class="form-control" size="0">
                              <option value="0">Select</option>
                              <option value="1">Owner</option>
                              <option value="2">Investor/Developer</option>                              
                          </select>
                  </div>
                  <div class="form-group col-lg-6 mb-1" id='htlnameblk'>
                    <label class="required text-2 mb-0">Name of the Hotel if you are an owner</label>
                    <input type="text"  class="form-control" data-msg-required="Specify name of the property" name="hotelname" id="hotelname" required>
                  </div>
                  <div class="form-group col-lg-6 mb-1" id='investorblk'>
                    <label class="required text-2 mb-0">Location & Project Name</label>
                    <input type="text"  class="form-control" data-msg-required="Specify Location & Project Name" name="locprojname" id="locprojname" required>
                  </div>
                  <div class="form-group col-lg-12 mb-1">
                    <label class="required text-2 mb-0">Your Project Details</label>
                    <textarea class="form-control" id="details" name="details" rows="3"></textarea>
                  </div>
                  
                </div>
                
                <input type='hidden' name='brand'value='<?php echo $brand ?>'>
                
                <div class="form-row mt-3">
                  <div class="form-group col text-center mb-0 pb-0">
                    <input type="submit" value="Submit" class="btn btn-primary btn-modern">
                  </div>
                </div>
                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
              </form>

                            </div>