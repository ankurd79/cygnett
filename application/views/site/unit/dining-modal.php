<div class="modal fade" id="booktableModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title w-100" id="formModalLabel" style="display: block;"><span id='hunit'></span> <br>
                            <span id='restaurant'></span></h5>                          
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form id='diningquery' name='diningquery' method='post' autocomplete="off">
                          <div class="form-row">
                          
                            <div class="alert alert-success text-center alert-dismissible" id="msgdiv" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Thank you for showing interest in us! We will revert shortly.</strong>
                        </div>

                          <div class="form-group col-md-6">
                          <label for="inputEmail4">First Name</label>
                          <input type="text" class="form-control" id="fname" name='fname' placeholder="First Name">
                          </div>
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Last Name</label>
                          <input type="text" class="form-control" id="lname" name='lname' placeholder="Last Name">
                          </div>
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Total Guests</label>
                          <input type="text" class="form-control" id="guests" name='guests' placeholder="Number of Guests">
                          </div>
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Date of Booking</label>
                          <input type="date" class="form-control" id="bookdate" name='bookdate' placeholder="booking date">
                          </div>
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Email Address</label>
                          <input type="email" class="form-control" id="email" name='email' placeholder="Email">
                          </div>
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Mobile</label>
                          <input type="text" class="form-control" id="mobile" name='mobile' placeholder="Mobile">
                          </div>
                          <div class="form-group col-md-12">
                          <label for="inputEmail4">Your Message</label>
                           <textarea rows="3" class="form-control" id='msg' name='msg' placeholder="Let us know of any special requests" ></textarea>
                          </div>
                          <div class="modal-footer text-center">                          
                          
                          <input type="submit" value="Book Now" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                        </div>
                          </div>
                          <input type='hidden' id='htl_name' name='htl_name' value><input type='hidden' id='rest_name' name='rest_name' value><input type='hidden' id='type' name='type' value>
                          <input type='hidden' id='resid' name='resid' value><input type='hidden' id='htlid' name='htlid' value>
                          <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
