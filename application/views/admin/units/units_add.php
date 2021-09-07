<?php
#print_r($salutation);

?>
<style>
/*.error{display:block; font-size:12px; font-weight:400!important; color:red;}*/
.custom-file:nth-child(odd) {padding-right:15px;}
.custom-file:nth-child(even) {padding-left:15px;}
</style>
</style>

<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $main_title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $sub_title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-primary">
						<div class="card-header">
                			<h3 class="card-title"><?php echo $sub_title ?></h3>
              			</div>

              			<form id='frmunit_add' name='frmunit_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<h5><strong>Hotel Overview</strong></h5>
			                	<hr>

			                	<div class="form-row">
			                  
			                		<div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Unit Name</label>
			                    <input type="text" class="form-control" name="hotel_name" id="hotel_name" placeholder="Unit Name">	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Tagline</label>
			                    <input type="text" class="form-control" name="tag_line" id="tag_line" placeholder="Tag Line">	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Brand</label>
			                    <select class="form-control" id="brand" name='brand'>
				                    
				                    <option value='0'>Select</option>

				                    <?php foreach($brands as $b) {?>
				                    	<option value='<?php echo $b['id'] ?>'><?php echo $b['brand_name'] ?></option>

				                    <?php } ?>
				                    
                  				</select>	
			                  </div>

			                  <label for="exampleInputPassword1">Unit Types : </label><br>
			                  <?php foreach($hoteltype as $htltype) {?>
				                  <?php if($htltype['is_active']==1) {?>
					                  <div class="form-group col-md-1">
					                    <div class="form-check">
				                          <input class="form-check-input" type="checkbox" id="hotel_type" name="hotel_type[]" value='<?php echo ucfirst($htltype['id']) ?>'>
				                          <label class="form-check-label"><?php echo ucfirst($htltype['category']) ?></label>
		                        		</div>
					                  </div>
				                  <?php } ?>
			                  <?php } ?>
			                 </div>
			                  <div class="form-row">
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Country</label>
			                    <select class="form-control" id="country" name='country'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($country as $cntry) {?>
				                    	<option value='<?php echo $cntry['id'] ?>'><?php echo $cntry['nicename'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Location</label>
			                    <select class="form-control" id="location" name='location'>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Latitude</label>
			                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Longitude</label>
			                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">	
			                  </div>

			                  

			                  

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Unit Image <sup>Used in location details page and participating hotels head</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="image" id="image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Listing Image <sup>Used in our hotels page</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="limage" id="limage">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Video URL</label>
			                    <input type="text" class="form-control" name="video_url" id="video_url" placeholder="Video URL">	
			                  </div>
			                  
			              </div>

			              <div class='form-row'>
			              	<div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Trip Advisor Widget</label>
			                    <textarea class="form-control" rows="3" name="ta_widget" id="ta_widget" placeholder="TA Widget"></textarea>
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Google Map</label>
			                    <textarea class="form-control" rows="3" name="google_map" id="google_map" placeholder="Google Map"></textarea>	
			                  </div>

			              </div>
			              
			              <div class='form-row'>
			              	<div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Hotel Schema</label>
			                    <textarea class="form-control" rows="3" name="hotel_schema" id="hotel_schema" placeholder="Hotel Schema"></textarea>
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Watch my rate widget</label>
			                    <textarea class="form-control" rows="3" name="booking_widget" id="booking_widget" placeholder="Rate Widget"></textarea>	
			                  </div>

			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-12">
			                    <label for="exampleInputEmail1">Hotel Description</label>
			                    <textarea class="form-control" rows="15" name="description" id="summernote" placeholder="Address "></textarea>
			                  </div>

			                  <div class="col-md-12"><h5><strong>Hotel Address</strong></h5>
			                	<hr>
			                	</div>

			                	<div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">State</label>
			                    <select class="form-control" id="state" name='state'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($states as $st) {?>
				                    	<option value='<?php echo $st['id'] ?>'><?php echo $st['name'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Address Line 1</label>
			                    <textarea class="form-control" rows="3" name="address_line_1" id="address_line_1" placeholder="Address Line 1"></textarea>
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Address Line 2</label>
			                    <textarea class="form-control" rows="3" name="address_line_2" id="address_line_2" placeholder="Address Line 2"></textarea>	
			                  </div>

			                  

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Pincode</label>
			                    <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pin Code">	
			                  </div>
			              </div>
			                  
			                  <div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Email</label>&nbsp;&nbsp;<span><i class="fas fa-plus m2"></i></span>
			                    
			                    <div class="row">
			                    	<div class="col-md-12 mt-2">
			                    <input type="text" class="form-control" name="email[]" id="email" placeholder="Email">
			                		</div>	
			                  </div>
			                    <div id='containercat'></div> 		                 

			                  </div>  
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Mobile</label>&nbsp;&nbsp;<span><i class="fas fa-plus m1"></i></span>
			                    <div class="row" >
			                    	<div class="col-md-12 mt-2">
			                    <input type="text" class="form-control" name="mobile[]" id="mobile" placeholder="Mobile">
			                </div>
			                
			                    </div>
			                    <div id='containermob'></div>  
			                  
			              

			                 
			                  
			              </div>
			          </div>

			              <div class="col-md-12 mt-3">

			              	<h5><strong>Hotel Highlights</strong></h5>
			                	<hr>
			                	</div>

			                	
			                	<?php foreach($getparentfacility as $key=>$val) {?>
				                	<div class="col-md-12 mt-3">
				                		<h6><span style="background-color: #dedede; padding: 0.5% 2%; border-radius: 5px;"><?php echo $val ?></span></h6>			                	
				                	
				                
				                	<?php $arrfacility=getchildfacilites($key);//print_r($arr);?>	
				                	<?php foreach($arrfacility as $facility){?>
						                <div class="form-check form-check-inline">
						              	<input class="form-check-input" type="checkbox" id="facility_id" value='<?php echo $facility['id']?>' name="facility_id[]" >
					                     <label class="form-check-label"><?php echo $facility['facility']?></label>
						              	</div>
					              	<?php } ?>
					              	</div>

			              		<?php } ?>
			              	
	

			              <div class="col-md-12 mt-3"><h5><strong>Check In / Out</strong></h5>
			                	<hr>
			                	</div>

			              <div class='form-row'>
			              	<div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Check In</label>
			                     <input type="text" class="form-control" name="check_in" id="check_in" placeholder="Check In">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">AM/PM</label>
			                     <select class="form-control" id="chkin_am_pm" name='chkin_am_pm'>
				                    <option value='0'>Select</option>
				                    	<option value='AM'>AM</option>
				                    	<option value='PM'>PM</option> 
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Check Out</label>
			                     <input type="text" class="form-control" name="check_out" id="check_out" placeholder="Check out">	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">AM/PM</label>
			                     <select class="form-control" id="chkout_am_pm" name='chkout_am_pm'>
				                    <option value='0'>Select</option>
				                    	<option value='AM'>AM</option>
				                    	<option value='PM'>PM</option> 
                  				</select>	
			                  </div>

			              </div>

			              <div class="col-md-12 mt-3"><h5><strong>Other Policies</strong></h5>
			              <hr>
			              </div>
			              
			              <div class="form-row">
			                  <?php for($x=1;$x<=3;$x++) {?>
				                  <div class="form-group col-md-4">
				                    <label for="exampleInputEmail1">Policy <?php echo $x ?></label>
				                    <input type="text" class="form-control" name="policy[]" id="policy" placeholder="Policy <?php echo $x ?>">
				                  </div>
			                  <?php } ?>
			               </div>

			              <div class="col-md-12 mt-3"><h5><strong>Social Media</strong></h5>
			              <hr>
			              </div>
			              <div class="form-row">
			              	<div class="form-group col-md-4">
				                    <label for="exampleInputEmail1">Social Channels</label>
				                    <select class="form-control" id="soc_channel" name='soc_channel[]'>
				                    <option value='0'>Select</option>
				                    <?php foreach($socialchannels as $k=>$v) {?>
				                    	<option value='<?php echo $k ?>'><?php echo $v ?></option>
				                    <?php } ?>
				                    	
                  				</select>
				                    
				             </div>
				             <div class="form-group col-md-4">
				                    <label for="exampleInputEmail1">URL</label>
				                    <input type="text" class="form-control" name="social_url[]" id="social_url" placeholder="Social URL">
				             </div>
				             
				             <div class="form-group col-md-2">
				                    <div>&nbsp;</div>
				                    &nbsp;&nbsp;<span><i class="fas fa-plus sadd"></i></span>
				             </div>
			              </div>

			              <div id='socialcontainer'></div>

			              <div class="col-md-12 mt-3"><h5><strong>Near By</strong></h5>
			              <hr>
			              </div>

			              <div class="form-row">
				                  <div class="form-group col-md-4">
				                    <label for="exampleInputEmail1">Near by place</label>
				                    <input type="text" class="form-control" name="nearby_area[]" id="nearby_area" placeholder="Near by place">
				                  </div>

				                  <div class="form-group col-md-4">
				                    <label for="exampleInputEmail1">Information </label>
				                    <input type="text" class="form-control" name="nearby_detail[]" id="nearby_detail" placeholder="Near by information">
				                  </div>

				                  <div class="form-group col-md-2">
				                  	<label for="exampleInputEmail1">Image Icon </label>
						                    <input type="text" class="form-control"  name="image_icon[]" id="image_icon" placeholder="Image Icon">
						                  </div>

				                  <div class="form-group col-md-2">
				                    <div>&nbsp;</div>
				                    &nbsp;&nbsp;<span><i class="fas fa-plus addnb"></i></span>
				             	</div>
			               </div>

			               <div id='nearbycontainer'></div>
			                        

			              <div class="form-check">
			              	<input class="form-check-input" type="checkbox" id="coming_soon" name="coming_soon" >
		                          <label class="form-check-label">Coming Soon ?</label>

			              </div>

			              
			                  <!--<div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" checked>
		                          <label class="form-check-label">Activate</label>
                        	</div>-->
			                </div>
			                <!-- /.card-body -->

			                <div class="card-footer">
			                	<div class="container">
			                		<div class="row">
			                  <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success"></div>
			                 
			              </div>
			              </div>
			                </div>
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
              			</form>	




					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>