
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

              			<form id='frmlocation_add' name='frmlocation_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                	<div class="form-row">
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Country</label>
			                    <select class="form-control" id="country" name='country'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($countrylist as $cntry) {?>
				                    	<option value='<?php echo $cntry['id'] ?>' <?php if($cntry['id']=='99'){?>selected='selected'<?php }  ?>><?php echo $cntry['nicename'] ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputPassword1">Location/City</label>
			                    <!--<select class="form-control" id="city" name='city'>-->
			                    <input type="text" class="form-control" name="city" id="city" placeholder="Location">	
                  				</select>
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputPassword1">Latitude</label>
			                    <!--<select class="form-control" id="city" name='city'>-->
			                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude">	
                  				</select>
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputPassword1">Longitude</label>
			                    <!--<select class="form-control" id="city" name='city'>-->
			                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">	
                  				</select>
			                  </div>
			              </div>
			              <div class="form-row">
			                 		                  
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputFile">Home Image <sup>This is used in home page</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="image" id="image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputFile">Listing Image <sup>This is used in our hotels page</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="limage" id="limage">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  
			              </div>
			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Description</label>
			                    <textarea class="form-control" rows="15" name="description" id="summernote" placeholder="Enter ..."></textarea>
			                  </div>
			              </div>


			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Meta Information</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Title</label>
			              				<textarea class="form-control" rows="4" name="meta_title" id="meta_title" placeholder="Meta Title"></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Description</label>
			              				<textarea class="form-control" rows="4" name="meta_description" id="meta_description" placeholder="Meta Description"></textarea></div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Keywords</label>
			              				<textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"></textarea>
			              			</div>
			              		</div>
			                  </div>
			              </div>



			              

			              <div class="form-row">
			              	<div class="col-md-12"><label >Banner Images <sup>Used in location details page</sup></label></div>
			              	<?php for($x=0;$x<4;$x++) {?>
			              	<div class="form-group col-md-6">
			              		<!-- <label for="exampleInputPassword1">Banners</label> -->
			              		<div class="row pl-2 pr-2">
			              		
			              		<div class="custom-file mt-2">
			                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image1">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                    
			                </div>
			                      
			              	</div>
			              <?php } ?>

			              	
			              </div>

			              <div class="form-row">
			              	

			                  <div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Places to Visit</label>
			                    <?php for($b=0;$b<6;$b++) {?>
				                    <div class="row mt-2">
				              			<div class="col-md-4"><input type="text" class="form-control" name="place_name[]" id="place_name" placeholder="Name"></div>
				              			<div class="col-md-4"><textarea class="form-control" rows="2" name="place_details[]" id="place_details" placeholder="Description"></textarea></div>
				              			<div class="col-md-4">
				              				<div class="custom-file mt-2">
				                        <input type="file" class="custom-file-input" name="place_image[]" id="place_image">
				                        <label class="custom-file-label" >Choose file</label>
				                      </div>
				              			</div>
				              		</div>
			              		<?php } ?>


			                  </div>
			              </div>
			                  <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_popular" name="is_popular" >
		                          <label class="form-check-label">Popular</label>
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
			                  <!--<div class="col-md-10">
			                  	<p class="badge badge-success p-2 mt-2">Data added Successfully</p>
			                  	<div class="alert alert-success alert-dismissible" >
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                  </div>-->
			              </div>
			              </div>
			                </div>
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
              			</form>	




					</div>


				</div>


				<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Locations</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" id="shwdatatable">
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo strtolower($jsfile) ?>.js"></script>