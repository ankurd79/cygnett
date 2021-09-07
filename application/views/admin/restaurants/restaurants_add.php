
<style>
/*.error{display:block; font-size:12px; font-weight:400!important; color:red;}*/

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

              			<form id='frmrestaurant_add' name='frmrestaurant_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                	<div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Restaurant Name</label>
			                    <input type="text" class="form-control" id="name" name="name" placeholder="Name of the restaurant">
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Restaurant Tag line</label>
			                    <input type="text" class="form-control" id="tag_line" name="tag_line" placeholder="Tagline">
			                  </div>
			                  <label for="exampleInputPassword1">Cuisine Types : </label><br>
			                  <?php foreach($cuisinetype as $cuisine) {?>
				                  <?php if($cuisine['is_active']==1) {?>
					                  <div class="form-group col-md-1">
					                    <div class="form-check">
				                          <input class="form-check-input" type="checkbox" id="cuisine_type" name="cuisine_type[]" value='<?php echo ucfirst($cuisine['id']) ?>'>
				                          <label class="form-check-label"><?php echo ucfirst($cuisine['cuisine_name']) ?></label>
		                        		</div>
					                  </div>
				                  <?php } ?>
			                  <?php } ?>

			                  
			              </div>
			              <div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Styling <sup>Restaurant brand color that reflects in the restaurant page</sup></label>
			                    <input type="text" class="form-control" id="styling" name="styling" placeholder="Styling">
			                  </div>			                  
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputFile">Logo <sup>used in top navigation</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="image" id="image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputFile">Secondary Logo <sup>used in restaurant page</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="image2" id="image2">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  
			              	<div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Video</label>
			                    <input type="text" class="form-control" id="video" name="video" placeholder="Upload Video">
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
			              				<textarea class="form-control" rows="4" name="meta_description" id="meta_description" placeholder="Meta Description"></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Title</label>
			              				<textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"></textarea>
			              			</div>
			              		</div>
			                  </div>
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Cygnetture Dishes</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4">
			              				<select class="form-control" id="cygnetture_dishes" name='cygnetture_dishes[]' multiple="multiple">
						                    <option value='0'>Select</option>
						                    <?php foreach($cygenturedishes as $c) {?>
						                    	<option value='<?php echo $c['id'] ?>'><?php echo ucfirst($c['dish_title']) ?></option>

						                    <?php } ?>
                  						</select>
			              			</div>
			              			
			              		</div>
			                  </div>
			              </div>



			              
			              
			              <div class="form-row">
			              	<div class="form-group col-md-6">
			              		<label for="exampleInputPassword1">Web Banners</label>
			              		<?php for($a=0;$a<4;$a++) {?>
				              		<div class="custom-file mt-2">
				                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image1">
				                        <label class="custom-file-label" >Choose file</label>
				                      </div>
			                    <?php } ?>
			                      
			              	</div>

			              	<div class="form-group col-md-6">
			              		<label for="exampleInputPassword1">Mobile Banners</label>
			              		<?php for($a=0;$a<4;$a++) {?>
				              		<div class="custom-file mt-2">
				                        <input type="file" class="custom-file-input" name="mobile_banner_image[]" id="mobile_banner_image">
				                        <label class="custom-file-label" >Choose file</label>
				                      </div>
			                    <?php } ?>
			                      
			              	</div>
			              	
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
              			</form>	




					</div>


				</div>


				<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Restaurants</h3>

                
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


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>