<?php
#print_r($catlist);
?>

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

              			<form id='frmbrand_add' name='frmbrand_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	<div class="form-row">
			                		
			                		<div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Brand Category</label>
			                    <select class="form-control" id="brand_category" name='brand_category'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($catlist as $c) {?>
				                    	<option value='<?php echo $c['id'] ?>'><?php echo ucfirst($c['category']) ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>


			                		<div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Parent Brand</label>
			                    <select class="form-control" id="parent_id" name='parent_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($brandlist as $b) {?>
				                    	<option value='<?php echo $b['id'] ?>'><?php echo ucfirst($b['brand_name']) ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Brand Name</label>
			                    <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Name of the brand">
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputPassword1">Brand Tag line</label>
			                    <input type="text" class="form-control" id="brand_tagline" name="brand_tagline" placeholder="Tagline">
			                  </div>
			              </div>
			              <div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Brand Styling</label>
			                    <input type="text" class="form-control" id="brand_styling" name="brand_styling" placeholder="Styling">
			                  </div>			                  
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputFile">Brand Logo</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="image" id="image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputFile">Secondary Logo <sup>Not in use</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="image2" id="image2">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Video</label>
			                    <input type="text" class="form-control" id="brand_video" name="brand_video" placeholder="Upload Video">
			                  </div>
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputFile">Listing Image <sup>Used in brand listing page</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="listimg" id="listimg">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputFile">Infographic</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="infographic" id="infographic">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputFile">Upload PDF <sup>Brand Factsheet</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="pdf" id="pdf">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>
			              </div>

			              

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Brand Description</label>
			                    <textarea class="form-control" rows="15" name="description" id="summernote" placeholder="Enter ..."></textarea>
			                  </div>
			                  <div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Short Intro</label>
			                    <textarea class="form-control" rows="4" name="short_intro" id="short_intro" placeholder="Short Intro"></textarea>
			                  </div>

			              </div>
                            
                            <div class="form-row">
			              	<div class="form-group col-md-12">
			                    
			                    <div class="row mt-2">
			              			<div class="form-group col-md-6">
			                    <label for="exampleInputFile">Image (Home Page)</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="home_image" id="home_image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>
			              			<div class="col-md-6">
			              				<label for="exampleInputPassword1">Intro (Home page)</label>
			              				<textarea class="form-control" rows="4" name="home_intro" id="home_intro" placeholder="Home page intro"></textarea>
			              			</div>
			              			
			              		</div>
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
			              				<label for="exampleInputPassword1">Keywords</label>
			              				<textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"></textarea>
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

			              <div class="form-row">
			              		<div class="form-group col-md-6">
			              		<label for="exampleInputPassword1">Key Pointers <sup>Not in use</sup></label>
			              		<?php for($b=0;$b<4;$b++) {?>
				              		<div class="row mt-2">
				              			<div class="col-md-4"><input type="text" class="form-control" id="value[]" name="value[]" placeholder="Count"></div>
				              			<div class="col-md-8"><input type="text" class="form-control" id="label[]" name="label[]" placeholder="Count Label"></div>
				              		</div>
			              		<?php } ?>   
			              	</div>
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-5">
			              		<label for="exampleInputPassword1">Carousel Image</label>
			              		<?php for($a=0;$a<6;$a++) {?>
				              		<div class="custom-file mt-2">
				                        <input type="file" class="custom-file-input" name="carousel_images[]" id="carousel_images">
				                        <label class="custom-file-label" >Choose file</label>
				                      </div>
			                    <?php } ?>
			                      
			              	</div>

			              	<div class="form-group col-md-5">
			              		<label for="exampleInputPassword1">Text</label>
			              		<?php for($a=0;$a<6;$a++) {?>
				              		<div class="custom-file mt-2">
				                        <input type="text" class="form-control" id="img_label[]" name="img_label[]" placeholder="Text for the image">
				                      </div>
			                    <?php } ?>
			                      
			              	</div>

			              	<div class="form-group col-md-2">
			              		<label for="exampleInputPassword1">Sequence</label>
			              		<?php for($a=0;$a<6;$a++) {?>
				              		<div class="custom-file mt-2">
				                        <input type="text" class="form-control" id="sequence[]" name="sequence[]" placeholder="Sequence">
				                      </div>
			                    <?php } ?>
			                      
			              	</div>
			              	
			              </div>
			              

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Footnote <sup>Not in use</sup></label>
			                    <input type="text" class="form-control" id="foot_note" name="foot_note" placeholder="Footnote">
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
			                  <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary swalDefaultSuccess"></div>
			                  <div class="col-md-10">
			                  	<div class="alert-msg" style="display:none;">
                  <p class="mb-0 text-center" id="subjresponse" ></p>                  
                </div>
			                  </div>
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
                <h3 class="card-title">Brands</h3>

                
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



<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/brands.js"></script>