<?php
//print_r($facilities);
//exit;
if($facilities){
	foreach($facilities as $fac){
		$ids[] = $fac["facility_id"]; 
	}
	$unitfacilities=implode(", ", $ids);
	$unitfacilities=explode(",",$unitfacilities);
}else{
	$unitfacilities=array();
}

$totalsocialmedia=count($socialmedia);
$totalsocialchannels=count($socialchannels);
$loopchannels=$totalsocialchannels-$totalsocialmedia;

$seletedhoteltype=$results[0]['hotel_type'];
$select=explode(",",$seletedhoteltype);

$totalguestreview=count($guestreviewlist);
$loopunitreviews=4-$totalguestreview;
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
                			<span style="float:right"><a href='<?php echo base_url() ?>manage-unit/list'><button type="button" class="btn btn-block bg-gradient-success">Back to unit listing</button></a></span>
              			</div>

              			<form id='frmunit_edit' name='frmunit_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<h5><strong>Hotel Overview</strong></h5>
			                	<hr>

			                	<div class="form-row">
			                  
			                <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Unit Name</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['hotel_name'] ?>' name="hotel_name" id="hotel_name" placeholder="Unit Name">	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Tagline</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['tag_line'] ?>' name="tag_line" id="tag_line" placeholder="Tag Line">	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Brand</label>
			                    <select class="form-control" id="brand" name='brand'>
				                    
				                    <option value='0'>Select</option>

				                    <?php foreach($brands as $b) {?>
				                    	<option value='<?php echo $b['id'] ?>' <?php if($results[0]['brand']==$b['id']){?>selected='selected'<?php } ?>><?php echo $b['brand_name'] ?></option>

				                    <?php } ?>
				                    
                  				</select>	
			                  </div>

			                  <label for="exampleInputPassword1">Unit Types : </label><br>
			                  <?php foreach($hoteltype as $htltype) {?>
				                  <?php if($htltype['is_active']==1) {?>
					                  <div class="form-group col-md-1">
					                    <div class="form-check">
					                    <?php
					                   
				                          if(in_array($htltype['id'], $select)){
				                          	$chk='checked';
				                          }else{
				                          	$chk='';
				                          }
				                          
				                          ?>
				                          <input class="form-check-input" type="checkbox" id="hotel_type" name="hotel_type[]" value='<?php echo ucfirst($htltype['id']) ?>' checked='<?php echo $chk ?>'>
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
				                    	<option value='<?php echo $cntry['id'] ?>' <?php if($results[0]['country']==$cntry['id']){?>selected='selected'<?php } ?> ><?php echo $cntry['nicename'] ?></option>
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
			                    <input type="text" class="form-control" name="latitude" value='<?php echo $results[0]['latitude'] ?>' id="latitude" placeholder="Latitude">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Longitude</label>
			                    <input type="text" class="form-control" name="longitude" value='<?php echo $results[0]['longitude'] ?>' id="longitude" placeholder="Longitude">	
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
			                    <label for="exampleInputEmail1">Unit List Image <sup>Used in our hotels page</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="limage" id="limage">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Video URL</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['video_url'] ?>' name="video_url" id="video_url" placeholder="Video URL">	
			                  </div>
			                  
			              </div>

			              <div class='form-row'>
			              	<div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Trip Advisor Widget</label>
			                    <textarea class="form-control" rows="3" name="ta_widget" id="ta_widget" placeholder="TA Widget"><?php echo $results[0]['ta_widget'] ?></textarea>
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Google Map</label>
			                    <textarea class="form-control" rows="3" name="google_map" id="google_map" placeholder="Google Map">
			                    	<?php echo $results[0]['google_map'] ?>
			                    </textarea>	
			                  </div>

			              </div>
			              
			              <div class='form-row'>
			              	<div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Hotel Schema</label>
			                    <textarea class="form-control" rows="3" name="hotel_schema" id="hotel_schema" placeholder="Hotel Schema"><?php echo $results[0]['hotel_schema'] ?></textarea>
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Watch my rate widget</label>
			                    <textarea class="form-control" rows="3" name="booking_widget" id="booking_widget" placeholder="Rate Widget"><?php echo $results[0]['booking_widget'] ?></textarea>	
			                  </div>
			                  
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">What 3 Words</label>
			                    <textarea class="form-control" rows="3" name="what3words" id="what3words" placeholder="What 3 Words"><?php echo $results[0]['what3words'] ?></textarea>	
			                  </div>

			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-12">
			                    <label for="exampleInputEmail1">Hotel Description</label>
			                    <textarea class="form-control" rows="15" name="description" id="summernote" placeholder="Address ">
			                    	<?php echo $results[0]['description'] ?>
			                    </textarea>
			                  </div>

			                  <div class="col-md-12"><h5><strong>Hotel Address</strong></h5>
			                	<hr>
			                	</div>

			                <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">State</label>
			                    <select class="form-control" id="state" name='state'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($states as $st) {?>
				                    	<option value='<?php echo $st['id'] ?>' <?php if($results[0]['state']==$st['id']){?>selected='selected'<?php } ?> ><?php echo $st['name'] ?></option>
				                    <?php } ?>
                  				</select>	
			                  </div>	

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Address Line 1</label>
			                    <textarea class="form-control" rows="3" name="address_line_1" id="address_line_1" placeholder="Address Line 1"><?php echo $results[0]['address_line_1'] ?></textarea>
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Address Line 2</label>
			                    <textarea class="form-control" rows="3" name="address_line_2" id="address_line_2" placeholder="Address Line 2"><?php echo $results[0]['address_line_2'] ?></textarea>	
			                  </div>


			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Pincode</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['pincode'] ?>' name="pincode" id="pincode" placeholder="Pin Code">	
			                  </div>
			              </div>
			                  
			                  <div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Email</label>&nbsp;&nbsp;<span><i class="fas fa-plus m2"></i></span>
			                    
			                    <div class="row">
			                    	<?php if(count($emails)>0) {?>
			                    		<?php foreach($emails as $email) {?>
				                    		<div class="col-md-10 mt-2">
				                   			 <input type="text" class="form-control" value='<?php echo $email['email'] ?>' name="email[]" id="email" placeholder="Email">
				                			</div>
				                			<div class="col-md-2 mt-2 rmvemail" id="del_<?php echo $email['id'] ?>">x</div>
				                			<input type='hidden' value='<?php echo $email['id'] ?>' name='email_id[]'>
			                			<?php } ?>

			                    	<?php } else {?>

			                    	<div class="col-md-12 mt-2">
			                    <input type="text" class="form-control" name="email[]" id="email" placeholder="Email">
			                		</div>	
			                	<?php } ?>
			                  </div>
			                    <div id='containercat'></div> 		                 

			                  </div>  
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Mobile</label>&nbsp;&nbsp;<span><i class="fas fa-plus m1"></i></span>
			                    <div class="row" >
			                    <?php if(count($phones)>0) {?>
			                    	<?php foreach($phones as $phone) {?>
				                    	<div class="col-md-10 mt-2">
					                    <input type="text" class="form-control" value='<?php echo $phone['mobile'] ?>' name="mobile[]" id="mobile" placeholder="Mobile">
					                	</div>
					                	<div class="col-md-2 mt-2 removephone" id="del_<?php echo $phone['id'] ?>">x</div>
					                	<input type='hidden' value='<?php echo $phone['id'] ?>' name='phone_id[]'>
				                	<?php } ?>

			                    <?php } else {?>
				                    
				                    <div class="col-md-12 mt-2">
				                    <input type="text" class="form-control" name="mobile[]" id="mobile" placeholder="Mobile">
				                	</div>
				                <?php } ?>
			                
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
						                <?php
						                if(in_array($facility['id'], $unitfacilities)){
				                          	$chk='1';
				                          	//echo "<input type='hidden' name='faci_id[]' value='".$unitfacilities['facility_id']."'>";
				                        }else{
				                        	$chk='0';
				                        }
				                          
				                         ?>	
						              	<input class="form-check-input" type="checkbox" id="facility_id" value='<?php echo $facility['id']?>' name="facility_id[]" <?php if($chk==1) {?>checked <?php } ?>>
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
			                     <input type="text" class="form-control" value='<?php echo $results[0]['check_in'] ?>' name="check_in" id="check_in" placeholder="Check In">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">AM/PM</label>
			                     <select class="form-control" id="chkin_am_pm" name='chkin_am_pm'>
				                    <option value='0'>Select</option>
				                    	<option value='AM' <?php if($results[0]['chkin_am_pm']=='AM'){?>selected='selected'<?php } ?>>AM</option>
				                    	<option value='PM' <?php if($results[0]['chkin_am_pm']=='PM'){?>selected='selected'<?php } ?>>PM</option> 
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Check Out</label>
			                     <input type="text" class="form-control" value='<?php echo $results[0]['check_out'] ?>' name="check_out" id="check_out" placeholder="Check out">	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">AM/PM</label>
			                     <select class="form-control" id="chkout_am_pm" name='chkout_am_pm'>
				                    <option value='0'>Select</option>
				                    	<option value='AM' <?php if($results[0]['chkin_am_pm']=='AM'){?>selected='selected'<?php } ?>>AM</option>
				                    	<option value='PM' <?php if($results[0]['chkin_am_pm']=='PM'){?>selected='selected'<?php } ?>>PM</option> 
                  				</select>	
			                  </div>

			              </div>

			              <div class="col-md-12 mt-3"><h5><strong>Other Policies</strong></h5>
			              <hr>
			              </div>
			              
			              <div class="form-row">
			              	<?php if(count($othpolicy)>0){?>

			              		<?php foreach($othpolicy as $othpol) {?>
				                  <div class="form-group col-md-4">
				                    <label for="exampleInputEmail1">Policy </label>
				                    <input type="text" class="form-control" value='<?php echo $othpol['policy_text'] ?>' name="policy[]" id="policy" placeholder="Policy ">
				                  </div>
				                  <input type='hidden' value='<?php echo $othpol['id'] ?>' name='other_pol_id[]'>
			                  <?php } ?>

			              	<?php } else {?>	

			                  <?php for($x=1;$x<=3;$x++) {?>
				                  <div class="form-group col-md-4">
				                    <label for="exampleInputEmail1">Policy <?php echo $x ?></label>
				                    <input type="text" class="form-control" name="policy[]" id="policy" placeholder="Policy <?php echo $x ?>">
				                  </div>
			                  <?php } ?>

			                <?php } ?>


			               
			               </div>

			              <div class="col-md-12 mt-3"><h5><strong>Social Media</strong></h5>
			              <hr>
			              </div>
			              <div class="form-row">
				              	<div class="form-group col-md-4">
					                    <label for="exampleInputEmail1">Social Channels</label>
					                    
					                    
					             </div>
					             <div class="form-group col-md-4">
					                    <label for="exampleInputEmail1">URL</label>
					                    
					             </div>
					             
					             <div class="form-group col-md-2">
					                    <div>&nbsp;</div>
					                    
					             </div>

			              </div>
			              <?php
			              	if(count($socialmedia)>0){
			              ?>	
			              <div class="form-row">
				              	<?php foreach($socialmedia as $sm) {?>
					              	<div class="form-group col-md-4">
					                    <select class="form-control" id="soc_channel" name='soc_channel[]'>
					                    <option value='0'>Select</option>
					                    <?php foreach($socialchannels as $k=>$v) {?>
					                    	<option value='<?php echo $k ?>' <?php if($sm['social_id']==$k) {?>selected='selected'<?php } ?>><?php echo $v ?></option>
					                    <?php } ?>
					                    	
	                  				</select>
					                    
					             </div>
					             <div class="form-group col-md-4">
					                    <input type="text" class="form-control" value='<?php echo $sm['social_url'] ?>' name="social_url[]" id="social_url" placeholder="Social URL">
					             </div>
					             
					             <div class="form-group col-md-2">
					                    &nbsp;&nbsp;<span><i class="fas fa-minus remsocial" id='del_<?php echo $sm['id'] ?>'></i></span>
					             </div>
					             <input type='hidden' name='sm_id[]' value='<?php echo $sm['id']  ?>'>
				         	<?php } ?>

			              </div>
			          
			              <?php for($a=1;$a<=$loopchannels;$a++) {?>
			              	<!--this block represents the remaining social media data out of the total-->
			              <div class="form-row">
			              	<div class="form-group col-md-4">
				                    <select class="form-control" id="soc_channel" name='soc_channel[]'>
				                    <option value='0'>Select</option>
				                    <?php foreach($socialchannels as $k=>$v) {?>
				                    	<option value='<?php echo $k ?>'><?php echo $v ?></option>
				                    <?php } ?>
				                    	
                  				</select>
				                    
				             </div>
				             <div class="form-group col-md-4">
				                    <input type="text" class="form-control" name="social_url[]" id="social_url" placeholder="Social URL">
				             </div>
				             
				             
			              </div>
			              <!--this block represents the remaining social media data out of the total-->
			          <?php } ?>

			      <?php } else {?>
			      	<!--this block will be generated if there is no social media information present-->
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
				                    &nbsp;&nbsp;<span><i class="fas fa-plus sadd"></i></span>
				             </div>
			              </div>

			      	<div id='socialcontainer'></div>
			      	<!--this block will be generated if there is no social media information present-->

			      <?php } ?>

			              

			              <div class="col-md-12 mt-3"><h5><strong>Near By</strong></h5>
			              <hr>
			              </div>

			              
			              <?php if(count($nearbydata)>0) {?>
				              <div class="form-row">
					                  <div class="form-group col-md-5">
					                  	<label for="exampleInputEmail1">Near By area </label>
					                  </div>

					                  <div class="form-group col-md-5">
					                    <label for="exampleInputEmail1">Information </label>
					                  </div>

					                  <div class="form-group col-md-2">
					                    <label for="exampleInputEmail1">Image Icon </label>
					                  </div>

					                  <?php foreach($nearbydata as $nearby){?>
						                  <div class="form-group col-md-4">
						                    <input type="text" class="form-control" value='<?php echo $nearby['nearby_area'] ?>' name="nearby_area[]" id="nearby_area" placeholder="Near by place">
						                  </div>

						                  <div class="form-group col-md-4">
						                    <input type="text" class="form-control" value='<?php echo $nearby['nearby_detail'] ?>' name="nearby_detail[]" id="nearby_detail" placeholder="Near by information">
						                  </div>
						                  <div class="form-group col-md-2">
						                    <input type="text" class="form-control" value='<?php echo $nearby['image_icon'] ?>' name="image_icon[]" id="image_icon" placeholder="Image Icon">
						                  </div>
						                  <div class="form-group col-md-2"> &nbsp;&nbsp;<span><i class="fas fa-minus remnearby" id='del_<?php echo $nearby['id']?>'></i></span></div>
						                  <input type='hidden' name='nearby_id[]' value='<?php echo $nearby['id']  ?>'>
					              	  <?php } ?>

					                  
				               </div>

				               
				           <?php } ?>

				           	<div class="form-row">
					                  <div class="form-group col-md-4">
					                    <input type="text" class="form-control" name="nearby_area[]" id="nearby_area" placeholder="Near by place">
					                  </div>

					                  <div class="form-group col-md-4">
					                    <input type="text" class="form-control" name="nearby_detail[]" id="nearby_detail" placeholder="Near by information">
					                  </div>

					                  <div class="form-group col-md-2">
						                    <input type="text" class="form-control" name="image_icon[]" id="image_icon" placeholder="Image Icon">
						                  </div>

					                  <div class="form-group col-md-2">
					                    &nbsp;&nbsp;<span><i class="fas fa-plus addnb"></i></span>
					             	</div>
				               </div>

				               <div id='nearbycontainer'></div>


                                <div class="col-md-12 mt-3"><h5><strong>Guest Review</strong></h5>
			              		<hr>
			              	</div>

			              	<div class="form-row">
					                  <?php
			              							if(count($guestreviewlist)>0){
			              				?>
					                  	<?php foreach($guestreviewlist as $grl){?>
							                  <div class="form-group col-md-2">
							                    <input type="text" class="form-control" name="review_by[]" id="review_by" placeholder="Reviewer Name" value='<?php echo $grl['review_by'] ?>'>
							                  </div>

							                  <div class="form-group col-md-2">
							                    <input type="text" class="form-control" name="review_date[]" id="review_date" placeholder="Review Date" value='<?php echo $grl['review_date'] ?>'>
							                  </div>

							                  <div class="form-group col-md-3">
							                    <textarea class="form-control" rows="3" name="guest_review[]" id="guest_review" placeholder="Guest Review Text"><?php echo $grl['review_text'] ?></textarea>
							                  </div>

							                  <div class="col-md-2">
						              				<div class="custom-file mt-2">
						                        <input type="file" class="custom-file-input" name="rev_img[]" id="rev_img">
						                        <label class="custom-file-label" >Choose file</label>
						                      </div>
						              			</div>

						              			<div class="form-group col-md-2"> &nbsp;&nbsp;<span><i class="fas fa-minus remguestrev" id='x_<?php echo $grl['id'] ?>'></i></span></div>

						              			<input type='hidden' name='review_id[]' value='<?php echo $grl['id']  ?>'>
						              		<?php } ?>
						              	<?php } ?>	

						              			<?php for($gr=1;$gr<=$loopunitreviews;$gr++){?>
							                  <div class="form-group col-md-2">
							                    <input type="text" class="form-control" name="review_by[]" id="review_by" placeholder="Reviewer Name">
							                  </div>

							                  <div class="form-group col-md-2">
							                    <input type="text" class="form-control" name="review_date[]" id="review_date" placeholder="Review Date">
							                  </div>

							                  <div class="form-group col-md-3">
							                    <textarea class="form-control" rows="3" name="guest_review[]" id="guest_review" placeholder="Guest Review Text"></textarea>
							                  </div>

							                  <div class="col-md-2">
						              				<div class="custom-file mt-2">
						                        <input type="file" class="custom-file-input" name="rev_img[]" id="rev_img">
						                        <label class="custom-file-label" >Choose file</label>
						                      </div>
						              			</div>

						              			<div class="form-group col-md-2"> &nbsp;&nbsp;<span></i></span></div>
						              		<?php } ?>
					                  
				               </div>
				           


				           
			                        

			              <div class="form-check">
			              	<input class="form-check-input" type="checkbox" id="coming_soon" name="coming_soon" <?php if($results[0]['coming_soon']==1) {?>checked <?php } ?>>
		                          <label class="form-check-label">Coming Soon ?</label>

			              </div>

			              
			                  <!--<div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" <?php if($results[0]['is_active']==1) {?>checked <?php } ?>>
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
			                <input type="hidden" id='unit_id' name='unit_id' value='<?php echo base64_encode($results[0]['id']) ?>'>
              			</form>	




					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>

<script>
								var country_id = $("#country").val();
								//alert(state_id);
								$.ajax({
    						                url: base_url+'admin/admin/calllocationofcountry',
                    						type: 'POST',
                    						data: {country_id:country_id},
                    						beforeSend: function ( xhr ) {
                                                //Add your image loader here
                                                //jQuery("#loaderimg").html('<img src="<?php echo base_url() ?>images/ajax-loader.gif">');
                                            },
                    						
                    						success:function(data){
                    						    
                    							 var resp = $.trim(data);
                    							    $("#location").html('<option value="0">--Select--</option>');
                    							    $("#location").append(resp);
                                            }
                    		    });
                    		    
                    		    $.ajax({
						                url: base_url+'admin/admin/calllocationofcountry',
                						type: 'POST',
                						data: {country_id:country_id,state_id:<?php echo $results[0]['loc_id']?>},
                						//dataType: 'json',
                						
                						success:function(data){
                						    var resp = $.trim(data);
                						    //alert(resp);
                						    $("#location").html('<option value="0">--Select--</option>');
                    					    $("#location").append(resp);
                						    
                				}
		                    
		                    });
</script>