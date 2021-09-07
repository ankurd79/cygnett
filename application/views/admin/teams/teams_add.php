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

              			<form id='frmteam_add' name='frmteam_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                	<div class="form-row">
			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Salutation</label>
			                    <select class="form-control" id="salutation" name='salutation'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($salutation as $k=>$v) {?>
				                    	<option value='<?php echo $k ?>'><?php echo $v ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">First Name</label>
			                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">	
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Middle Name</label>
			                    <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Middle Name">	
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Last Name</label>
			                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">URL <sup>Custom url for team members</sup></label>
			                    <input type="text" class="form-control" name="url" id="url" placeholder="URL">	
			                  </div>
			                  
			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Department</label>
			                    <select class="form-control" id="department_id " name='department_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($deptt as $dep) {?>
				                    	<option value='<?php echo $dep['id'] ?>' <?php if($dep['is_active']==0) {?>disabled='disabled'<?php } ?>><?php echo $dep['deptt_name'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Designation</label>
			                    <select class="form-control" id="designation_id" name='designation_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($desig as $k=>$d) {?>
				                    	<option value='<?php echo $d['id'] ?>' <?php if($d['is_active']==0) {?>disabled='disabled'<?php } ?>><?php echo $d['designation'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Job Title</label>
			                    <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title">	
			                  </div>

			                 
			                  
			              </div>

			              <div class="form-row">
			              		<div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Country</label>
			                    <select class="form-control" id="country_id" name='country_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($country as $c) {?>
				                    	<option value='<?php echo $c['id'] ?>'><?php echo $c['nicename'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Region</label>
			                    <select class="form-control" id="region_id" name='region_id[]' multiple="multiple">
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($region as $r) {?>
				                    	<option value='<?php echo $r['id'] ?>'><?php echo $r['region'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Email</label>
			                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Mobile</label>
			                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
			                  </div>

			                  
			                  
			              </div>
			              
			              <div class="form-row">
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Image <sup>For desktop view</sup></label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="image" id="image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Image <sup>For mobile view</sup></label>
			                   <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="mobile_image" id="mobile_image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Image <sup>For business development page</sup></label>
			                   <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="bd_image" id="bd_image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>

			                  
			                  
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Profile</label>
			                    <textarea class="form-control" rows="15" name="profile" id="summernote" placeholder="Enter ..."></textarea>
			                  </div>
			                  

			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Appearance Order (Mgmt/India)</label>
			                    <input type="text" class="form-control" name="position" id="position">
			              </div>

			                  

			                  
			                  
			              </div>
			              
			              

			              <div class="form-row">
			              	<div class="col-md-12"><label >Key Highlights</label></div>
			              	<?php for($b=0;$b<6;$b++) {?>
				              <div class="form-group col-md-4">
					              		<div class="row mt-2">
					              			<div class="col-md-12"><input type="text" class="form-control" id="highlights[]" name="highlights[]" placeholder="Key Highlights"></div>
					              			
					              		</div>  
				              	</div>
				              	<?php } ?>
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

			              <div class="form-check">
			              	<input class="form-check-input" type="checkbox" id="is_mgmt" name="is_mgmt" >
		                          <label class="form-check-label">Key Management ? &nbsp;</label>

			              </div>
			              
			              <!--<div class="form-check">
			              	<input class="form-check-input" type="checkbox" id="is_advisory" name="is_advisory"
		                          <label class="form-check-label">Advisory ? &nbsp;</label>

			              </div>-->

			              

			              

			              
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
                <h3 class="card-title">Team Members</h3>

                
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