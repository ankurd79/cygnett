
<style>
/*.error{display:block; font-size:12px; font-weight:400!important; color:red;}*/

</style>



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

              			<form id='frmunitroom_add' name='frmunitroom_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	
			                	<!--<div class="form-row">
			                  <div class="form-group col-md-12">
			                    <label for="exampleInputEmail1">Name</label>
			                    <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Name of the room">
			                  </div>
			                  
			                  
			                  
			              </div>-->


			              	<div class="form-row">
			              	    
			              	    
			              	    <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Room Type</label>
			                    <select class="form-control" id="room_name" name='room_name'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($roommasterlist as $rm) {?>
				                    	<?php if($rm['is_active']==1) {?>
				                    		<option value='<?php echo $rm['id'] ?>'><?php echo $rm['room_type'] ?></option>
				                    	<?php } ?>

				                    <?php } ?>
                  				</select>
			                  </div>
			              	    
			              	    
			              	    
			              	    
			              	    
			              	    
			              	    
			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Rate <sup>Not in use</sup></label>
			                    <input type="text" class="form-control" value="0" id="room_price" name="room_price" placeholder="Rate">
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Min Occupancy</label>
			                    <input type="text" class="form-control" id="min_occupancy" name="min_occupancy" placeholder="Minimum Occupancy">
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Max Occupancy</label>
			                    <input type="text" class="form-control" id="max_occupancy" name="max_occupancy" placeholder="Maximum Occupancy">
			                  </div>

			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Room Size</label>
			                    <input type="text" class="form-control" id="area" name="area" placeholder="Room Size">
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Area Unit</label>
			                    <select class="form-control" id="area_unit" name='area_unit'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($areainunits as $k=>$v) {?>
				                    	<option value='<?php echo $k ?>'><?php echo $v ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Available Bed Type</label>
			                    <select class="form-control" id="bed_type" name='bed_type'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($bedtypes as $bd) {?>
				                    	<option value='<?php echo $bd['id'] ?>'><?php echo $bd['bed_type'] ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>

			              </div>	

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Booking engine url</label>
			                    <input type="text" class="form-control" id="be_url" name="be_url" placeholder="Booking engine url">
			                  </div>
			              </div>
			              
			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Description</label>
			                    <textarea class="form-control" rows="15" name="room_description" id="summernote" placeholder="Enter ..."></textarea>
			                  </div>
			              </div>

			              <div class="form-row">
				                  <div class="form-group col-md-10">
				                    <label for="exampleInputEmail1">Amenities</label><br>
				                    <?php foreach($roomaminities as $rm) {?>
					                    <?php if($rm['is_active']==1){?>
					                    <div class="form-check form-check-inline">
							              	<input class="form-check-input" type="checkbox" id="inclusion_id" value='<?php echo $rm['id']?>' name="inclusion_id[]" >
						                     <label class="form-check-label"><?php echo $rm['room_amenity'] ?></label>
							             </div>
							         	<?php } ?>
						             <?php } ?>

				                  </div>

				                  

				                 
			               </div>


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
		                          <input class="form-check-input" type="checkbox" id="is_base" name="is_base" >
		                          <label class="form-check-label">Base Category ?</label>
                        	</div>
			                  
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