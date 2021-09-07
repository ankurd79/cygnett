
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
                			<span style="float:right"><a href='<?php echo base_url() ?>manage-unit-banquet/list/<?php echo base64_encode($hoteldata[0]['id']) ?>'><button type="button" class="btn btn-block bg-gradient-success">Back to banquet listing</button></a></span>
              			</div>

              			<form id='frmunitbanquet_add' name='frmunitbanquet_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	
			                <div class="form-row">
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Banquet Name</label>
			                    <select class="form-control" id="meeting_event_id" name='meeting_event_id'>
				                    <option value='0'>Select</option>
				                    <?php foreach($banquetlist as $b) {?>
				                    	<option value='<?php echo $b['id'] ?>'><?php echo $b['meeting_unit'] ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Max Occupancy</label>
			                    <input type="text" class="form-control" id="max_occupancy" name="max_occupancy" placeholder="Maximum Occupancy">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Banquet Size</label>
			                    <input type="text" class="form-control" id="area" name="area" placeholder="Banquet Size">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Area Unit</label>
			                    <select class="form-control" id="area_unit" name='area_unit'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($areainunits as $k=>$v) {?>
				                    	<option value='<?php echo $k ?>'><?php echo $v ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>
			                  
			                  
			                  
			              </div>



			              <div class="form-row">
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Theatre Capacity</label>
			                    <input type="text" class="form-control" id="theatre" name="theatre" placeholder="Theatre">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Cluster Capacity</label>
			                    <input type="text" class="form-control" id="cluster" name="cluster" placeholder="Cluster">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">U-shape Capacity</label>
			                    <input type="text" class="form-control" id="ushape" name="ushape" placeholder="U-shape">
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Informal Capacity</label>
			                    <input type="text" class="form-control" id="informal" name="informal" placeholder="informal">
			                  </div>

			                  

			                  
			              </div>

			              
			              
			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Description</label>
			                    <textarea class="form-control" rows="15" name="description" id="summernote" placeholder="Enter ..."></textarea>
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