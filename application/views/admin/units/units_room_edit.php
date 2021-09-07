<?php
//print_r($roomamenities);
//exit;
if($roomamenities){
	foreach($roomamenities as $fac){
		$ids[] = $fac["inclusion_id"]; 
	}
	$strroominclusions=implode(", ", $ids);
	$strroominclusions=explode(",",$strroominclusions);
}
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
                			<span style="float:right"><a href='<?php echo base_url() ?>manage-unit-room/list/<?php echo base64_encode($hoteldata[0]['id']) ?>'><button type="button" class="btn btn-block bg-gradient-success">Back to room listing</button></a></span>
              			</div>

              			<form id='frmunitroom_edit' name='frmunitroom_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	
			                	<!--<div class="form-row">
			                  <div class="form-group col-md-12">
			                    <label for="exampleInputEmail1">Name</label>
			                    <input type="text" class="form-control" value='<?php echo $roomdata[0]['room_name'] ?>' id="room_name" name="room_name" placeholder="Name of the room">
			                  </div>
			                  
			                  
			                  
			              </div>-->


			              	<div class="form-row">
			              	    
			              	    <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Room Type</label>
			                    <select class="form-control" id="room_name" name='room_name'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($roommasterlist as $rm) {?>
				                    	<?php if($rm['is_active']==1) {?>
				                    		<option value='<?php echo $rm['id'] ?>' <?php if($rm['id']==$roomdata[0]['room_name']) {?>selected='selected'<?php } ?>><?php echo $rm['room_type'] ?></option>
				                    	<?php } ?>

				                    <?php } ?>
                  				</select>
			                  </div>
			              	  
			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Rate <sup>Not in use</sup></label>
			                    <input type="text" class="form-control" value='<?php echo $roomdata[0]['room_price'] ?>' id="room_price" name="room_price" placeholder="Rate">
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Min Occupancy</label>
			                    <input type="text" class="form-control" value='<?php echo $roomdata[0]['min_occupancy'] ?>' id="min_occupancy" name="min_occupancy" placeholder="Minimum Occupancy">
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Max Occupancy</label>
			                    <input type="text" class="form-control" value='<?php echo $roomdata[0]['max_occupancy'] ?>' id="max_occupancy" name="max_occupancy" placeholder="Maximum Occupancy">
			                  </div>

			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Room Size</label>
			                    <input type="text" class="form-control" value='<?php echo $roomdata[0]['area'] ?>' id="area" name="area" placeholder="Room Size">
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Area Unit</label>
			                    <select class="form-control" id="area_unit" name='area_unit'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($areainunits as $k=>$v) {?>
				                    	<option value='<?php echo $k ?>' <?php if($k==$roomdata[0]['area_unit']) {?>selected='selected'<?php } ?> ><?php echo $v ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Available Bed Type</label>
			                    <select class="form-control" id="bed_type" name='bed_type'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($bedtypes as $bd) {?>
				                    	<option value='<?php echo $bd['id'] ?>' <?php if($bd['id']==$roomdata[0]['bed_type']) {?>selected='selected'<?php } ?>><?php echo $bd['bed_type'] ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>

			              </div>	

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Booking engine url</label>
			                    <input type="text" class="form-control" value='<?php echo $roomdata[0]['be_url'] ?>' id="be_url" name="be_url" placeholder="Booking engine url">
			                  </div>
			              </div>
			              
			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Description</label>
			                    <textarea class="form-control" rows="15" name="room_description" id="summernote" placeholder="Enter ..."><?php echo $roomdata[0]['room_description'] ?></textarea>
			                  </div>
			              </div>

			              <div class="form-row">
				                  <div class="form-group col-md-10">
				                    <label for="exampleInputEmail1">Amenities</label><br>
				                    <?php foreach($roomaminities as $rm) {?>
					                    <?php if($rm['is_active']==1){?>
					                    <div class="form-check form-check-inline">

					                    <?php
					                    	if($roomamenities){
								                if(in_array($rm['id'], $strroominclusions)){
						                          	$chk='1';
						                          	
						                        }else{
						                        	$chk='0';
						                        }
						                     }else{
						                     	$chk='0';
						                     }
				                          
				                         ?>	


							              	<input class="form-check-input" type="checkbox" id="inclusion_id" value='<?php echo $rm['id']?>' name="inclusion_id[]" <?php if($chk==1) {?>checked <?php } ?>>
						                     <label class="form-check-label"><?php echo $rm['room_amenity'] ?></label>
							             </div>
							         	<?php } ?>
						             <?php } ?>

				                  </div>

				                  
				                  
				                 
			               </div>
			               <?php 
			               if(count($roomimages)>0){
			               ?>
			               <div class="form-row">
				                  <div class="form-group col-md-10">
				                    <label for="exampleInputEmail1">Uploaded Images</label>
				                  </div>
				            </div>
			               <div class="form-row">
				                  <?php foreach($roomimages as $rmimgs) {?>
					                  <div class="form-group col-md-3">
					                    <img src='<?php echo base_url() ?>images/room_images/<?php echo $rmimgs['image'] ?>' style="width:200px; height:auto;">
					                  </div>
					                  <input type='hidden' name='room_image_id[]' value='<?php echo $rmimgs['id'] ?>'>

					                  <div class="form-group col-md-7">
					                    <input type="file" class="form-control" name="image[]" id="image">
					                  </div> 	
					                  

					                  <div class="form-group col-md-2">
					                    &nbsp;&nbsp;<span><i class="far fa-trash-alt delete" id='del_<?php echo $rmimgs['id'] ?>'></i></span>
					             	</div>
				             	<?php } ?>
			               </div>
			           <?php } ?>

			              	<div class="form-row">
				                  <div class="form-group col-md-10">
				                    <label for="exampleInputEmail1">Images</label>
				                    <input type="file" class="form-control" name="image[]" id="image">
				                  </div>

				                  

				                  <div class="form-group col-md-2">
				                    <div>&nbsp;</div>
				                    &nbsp;&nbsp;<span><i class="fas fa-plus addnb"></i></span>
				             	</div>
			               </div>

			               <div id='container'></div>
			              



			              
			              
			              	<div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_base" name="is_base" <?php if($roomdata[0]['is_base']==1){?>checked <?php } ?>>
		                          <label class="form-check-label">Base Category ?</label>
                        	</div>
			                  
			                  <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" <?php if($roomdata[0]['is_active']==1){?>checked <?php } ?>>
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
			                <input type='hidden' name='room_id' value='<?php echo base64_encode($roomdata[0]['id']) ?>'>
			                <input type='hidden' id='hotel_id' name='hotel_id' value='<?php echo base64_encode($hoteldata[0]['id']) ?>'>
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