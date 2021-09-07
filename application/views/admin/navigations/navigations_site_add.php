<?php
//print_r($sitenavigArr);
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

              			<form id='frmsitenav_add' name='frmsitenav_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                	<div class="form-row">
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Menu</label>
			                    <input type="text" class="form-control" name="menu_name" id="menu_name" placeholder="Menu Name">	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Parent Menu</label>
			                    <select class="form-control" id="parent_id" name='parent_id'>
			                    	<option value='0'>select</option>
			                    	<?php foreach($sitenavigArr as $nav) {?>
			                    		<option value="<?php echo $nav['id'] ?>" <?php if($nav['is_active']==0) {?>disabled=''<?php } ?>><?php echo $nav['menu_name'] ?></option>
			                    	<?php } ?>	
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">URL</label>
			                    <input type="text" class="form-control" name="url" id="url" placeholder="URL">	
			                  </div>
			                  
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Meta Information</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4"><textarea class="form-control" rows="4" name="meta_title" id="meta_title" placeholder="Meta Title"></textarea></div>
			              			<div class="col-md-4"><textarea class="form-control" rows="4" name="meta_description" id="meta_description" placeholder="Meta Description"></textarea></div>
			              			<div class="col-md-4"><textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"></textarea></div>
			              		</div>
			                  </div>
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Dropdown Text</label>
			                    <textarea class="form-control" rows="4" name="dropdown_text" id="dropdown_text" placeholder="Dropdown Text"></textarea>	
			                  </div>
			                  <div class="form-group col-md-8">
			                    <label for="exampleInputEmail1">Page Information</label>
			                    <textarea class="form-control" rows="8" name="page_text" id="summernote" placeholder="Page Text"></textarea>	
			                  </div>
			          	  </div>

			          	  <div class="form-row">
			          	  	<div class="form-group col-md-2">
			              	<label for="exampleInputEmail1">Placement</label>			              	
							  <select class="form-control" id="top_navigation" name='top_navigation'>
							  	<option value='1'>Header</option>
							  	<option value='2'>Footer</option>
                  			  </select>
							
						</div>
							<div class="form-group col-md-2">
							<label for="exampleInputEmail1">Sequence</label>							
							 <input type="text" class="form-control" name="priority" id="priority" placeholder="Assign Sequence">							
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

			          	  <br>
			          	  <span id='rolldetails' style="display:none;">
			          	  <label for="exampleInputPassword1">Roll Over Information</label>
			          	  <div class="form-row">
			              	<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="roll_options" id='rollyes' value="1">Yes
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" name="roll_options" id='rollno' value="0" checked>No
							  </label>
							</div>

			          	  </div>
			          	  <br>
			          	  <div class="form-row" style="display:none;" id='roll_data'>
			              	

			                  <div class="form-group col-md-12">
			                    
			                    <?php for($b=0;$b<4;$b++) {?>
				                    <div class="row mt-2">
				              			<div class="col-md-4"><input type="text" class="form-control" name="title[]" id="title" placeholder="Title"></div>
				              			<div class="col-md-4"><textarea class="form-control" rows="2" name="description[]" id="description" placeholder="Description"></textarea></div>
				              			<div class="col-md-4">
				              				<div class="custom-file mt-2">
				                        <input type="file" class="custom-file-input" name="image[]" id="image">
				                        <label class="custom-file-label" >Choose file</label>
				                      </div>
				              			</div>
				              		</div>
			              		<?php } ?>


			                  </div>
			              </div>
			              </span>
			              



			              

			              

			              
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
                <h3 class="card-title">Site Navigations</h3>

                
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