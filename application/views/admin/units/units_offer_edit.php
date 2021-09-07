<?php
//print_r($unitofferdata);
$totalbanners=count($unitofferbanners);
$loopbanners=4-$totalbanners;
				
			//2021-10-04 to 04/09/2021

			  $tempfrom=$unitofferdata[0]['valid_from'];
              $tempfrom=explode("-",$tempfrom);
              $finalvalidfrom=$tempfrom[1].'/'.$tempfrom[2].'/'.$tempfrom[0];
              

              $tempto=$unitofferdata[0]['valid_to'];
              $tempto=explode("-",$tempto);
              $finalvalidto=$tempto[1].'/'.$tempto[2].'/'.$tempto[0];

?>
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $main_title ?> - (<?php echo $hoteldata[0]['hotel_name'] ?>)</h1>
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
                			<span style="float:right"><a href='<?php echo base_url() ?>manage-unit-offers/list/<?php echo base64_encode($hoteldata[0]['id']) ?>'><button type="button" class="btn btn-block bg-gradient-success">Back to offer listing</button></a></span>
              			</div>

              			<form id='frmunitoffer_edit' name='frmunitoffer_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	
			                <div class="form-row">
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Offer Master list</label>
			                    <select class="form-control" id="master_offer_id" name='master_offer_id'>
				                    <option value='0'>Select</option>
				                    <?php foreach($offerlist as $o) {?>
				                    	<option value='<?php echo $o['id'] ?>' <?php if($unitofferdata['0']['master_offer_id']==$o['id']) {?>selected='selected'<?php } ?>><?php echo $o['offer_name'] ?></option>
				                    <?php } ?>
                  				</select>
			                  </div>

			                  

			                  <div class="form-group col-md-7">
			                    <label for="exampleInputEmail1">Offer Name <sup>To be used only if a custom name for the offer is needed</sup></label>
			                    <input type="text" class="form-control" id="offer_title" value='<?php echo $unitofferdata['0']['offer_title'] ?>' name="offer_title" placeholder="Offer Name">
			                  </div>

			                  <div class="form-group col-md-1">
			                    <label for="exampleInputEmail1">Nights</label>
			                    <input type="text" class="form-control" id="nights" name="nights" value='<?php echo $unitofferdata['0']['nights'] ?>' maxlength="2" placeholder="Nights" onkeypress="return isNumberKey(event)">
			                  </div>

			                  <div class="form-group col-md-1">
			                    <label for="exampleInputEmail1">Days</label>
			                    <input type="text" class="form-control" id="days" value='<?php echo $unitofferdata['0']['days'] ?>' name="days" maxlength="2" placeholder="Days" onkeypress="return isNumberKey(event)">
			                  </div>
   
			                  
			                  
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Valid From</label>
			                    <input type="text" class="form-control" value='<?php echo $finalvalidfrom ?>' id="valid_from" name="valid_from" readonly="readonly" placeholder="Valid From">
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Valid To</label>
			                    <input type="text" class="form-control" value='<?php echo $finalvalidto ?>' id="valid_to" name="valid_to" readonly="readonly" placeholder="Valid To">
			                  </div>
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Short Intro</label>
			                    <textarea class="form-control" rows="4" name="short_intro" id="short_intro" placeholder="Short Intro"><?php echo $unitofferdata['0']['short_intro'] ?></textarea>
			                  </div>
			              </div>
			              
			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Description</label>
			                    <textarea class="form-control" rows="15" name="offer_description" id="summernote" placeholder="Enter ..."><?php echo $unitofferdata['0']['offer_description'] ?></textarea>
			                  </div>
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Booking Engine URL</label>
			                    <input type="text" class="form-control" value='<?php echo $unitofferdata['0']['be_url'] ?>' id="be_url" name="be_url" placeholder="Booking engine URL">
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Cost</label>
			                    <input type="text" class="form-control" id="cost" value='<?php echo $unitofferdata['0']['cost'] ?>' name="cost" placeholder="Cost">
			                  </div>
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Image</label>
			                    <div class="custom-file mt-2">
				                        <input type="file" class="custom-file-input" name="image" id="image">
				                        <label class="custom-file-label" >Choose file</label>
				                      </div>
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Room <sup>To be used if a room is to be associated with the offer</sup></label>
			                    <select class="form-control" id="room_id" name='room_id'>
				                    <option value='0'>Select</option>
				                    <?php foreach($roomlist as $r) {?>
				                    	<option value='<?php echo $r['id'] ?>' <?php if($unitofferdata['0']['room_id']==$r['id']) {?>selected='selected'<?php } ?>><?php echo $r['room_type'] ?></option>
				                    <?php } ?>
                  				</select>
			                    
			                  </div>
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Meta Information</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Title</label>
			              				<textarea class="form-control" rows="4" name="meta_title" id="meta_title" placeholder="Meta Title"><?php echo $unitofferdata['0']['meta_title'] ?></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Description</label>
			              				<textarea class="form-control" rows="4" name="meta_description" id="meta_description" placeholder="Meta Description"><?php echo $unitofferdata['0']['meta_description'] ?></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Keywords</label>
			              				<textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"><?php echo $unitofferdata['0']['meta_keywords'] ?></textarea>
			              			</div>
			              		</div>
			                  </div>
			              </div>

			              			              <div class="form-row">
			              	<div class="form-group col-md-12">
			              		<label for="exampleInputPassword1">Banners</label>
			              		
			      <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 10%">Web</th>
                      <th style="width: 30%">&nbsp;</th>
                      <th style="width: 10%">Mobile</th>
                      <th style="width: 30%">&nbsp;</th>
                      <th style="width: 10px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 

                  		if (count($unitofferbanners)) {
                        $i = 1;
                        $j=1;
                        foreach ($unitofferbanners as $recs) {
                  	?>
	                    <tr>
	                      <td>
	                      	<?php echo $i++ ?>
	                      </td>
	                      <td>
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_unit_offers ?>/banners/<?php echo $recs['banner_image'] ?>" style="width:100%; height:auto;">
	                      </td>
	                      <td>
	                      	<div class="custom-file">
				                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image" class='mb-2'>
				                        <label class="custom-file-label" >Choose file</label>			                        
				                      </div>
	                      </td>
	                      <td>
	                      	<?php if($recs['mobile_banner_image']) {?>
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_unit_offers ?>/banners/<?php echo $recs['mobile_banner_image'] ?>" style="width:100%; height:auto;">
	                      	<?php } ?>
	                      </td>
	                      <td>
	                        <div class="custom-file">
	                          <input type="file" class="custom-file-input" name="mobile_banner_image[]" id="mobile_banner_image">
				                        <label class="custom-file-label" >Choose file</label>		                        
				                        <input type='hidden' id='banner_id' name='banner_id[]' value='<?php echo $recs['id'] ?>'>
	                        </div>
	                      </td>
	                      <td>
	                      	<label class="switch">
	                            <input type="checkbox" class="bnchk" name="chk_active" id="p_<?php echo $recs['id'] ?>_<?php echo $recs['is_active'] ?>" value="1" <?php if($recs['is_active']==1) {?>checked="checked"<?php } ?>>
	                            <span class="slider round"></span>
	                          </label>
	                      </td>
	                    </tr>
                    <?php }} ?>

                    <?php 
                    	for($x=0;$x<$loopbanners;$x++){
                    			//$cnt=$totalbanners;
                    			//$cnt=$loopbanners+1;
                    ?>
	                    <tr>
		                      <td>
		                      	#
		                      </td>
		                      <td>&nbsp;</td>
		                      <td>
		                      	<div class="custom-file">
					                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image">
					                        <label class="custom-file-label" >Choose file</label>
					                      </div>
		                      </td>

		                      <td>&nbsp;</td>


		                      <td>
		                      	<div class="custom-file">
					                        <input type="file" class="custom-file-input" name="mobile_banner_image[]" id="banner_image">
					                        <label class="custom-file-label" >Choose file</label>
					                      </div>
		                      </td>
		                      
		                    </tr>
	                <?php } ?>
                    
                    
                  </tbody>
                </table>



			              	
			              

			                  <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" checked>
		                          <label class="form-check-label">Activate</label>
                        	</div>
			                </div>
			                <!-- /.card-body -->

			                <div class="card-footer">
			                	<div class="container">
			                		<div class="row">
			                  <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary"></div>
			                  
			              </div>
			              </div>
			                </div>
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
			                <input type='hidden' id='hotel_id' name='hotel_id' value='<?php echo base64_encode($hoteldata[0]['id']) ?>'>
			                <input type='hidden' id='offer_id' name='offer_id' value='<?php echo base64_encode($unitofferdata[0]['id']) ?>'>
              			</form>	




					</div>


				</div>


				

			</div>
		</div>
	</section>


</div>
<script>
var unit_id='<?php echo base64_encode($hoteldata[0]['id'])?>';
//alert (base_url);
</script>

<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>