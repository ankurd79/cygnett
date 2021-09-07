<?php
$totahighlights=count($highlights);
$loop=7-$totahighlights;

$regions=$results[0]['region'];
$selectregions=explode(",",$regions);
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

              			<form id='frmteam_edit' name='frmteam_add' method='post' enctype="multipart/form-data" autocomplete="off">
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
				                    	<option value='<?php echo $k ?>' <?php if($k==$results[0]['salutation']){?>selected='selected'<?php }?>><?php echo $v ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">First Name</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['first_name'] ?>' name="first_name" id="first_name" placeholder="First Name">	
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Middle Name</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['middle_name'] ?>' name="middle_name" id="middle_name" placeholder="Middle Name">	
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Last Name</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['last_name'] ?>' name="last_name" id="last_name" placeholder="Last Name">	
			                  </div>

			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">URL <sup>Custom url for team members</sup></label>
			                    <input type="text" class="form-control" name="url" id="url" value='<?php echo $results[0]['url'] ?>'placeholder="URL">	
			                  </div>
			                  
			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Department</label>
			                    <select class="form-control" id="department_id " name='department_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($deptt as $dep) {?>
				                    	<option value='<?php echo $dep['id'] ?>' <?php if($dep['is_active']==0) {?>disabled='disabled'<?php } ?> <?php if($dep['id']==$results[0]['department_id']){?>selected='selected'<?php }?>><?php echo $dep['deptt_name'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Designation</label>
			                    <select class="form-control" id="designation_id" name='designation_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($desig as $k=>$d) {?>
				                    	<option value='<?php echo $d['id'] ?>' <?php if($d['is_active']==0) {?>disabled='disabled'<?php } ?> <?php if($d['id']==$results[0]['designation_id']){?>selected='selected'<?php }?>><?php echo $d['designation'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Job Title</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['job_title'] ?>' name="job_title" id="job_title" placeholder="Job Title">	
			                  </div>

			                 
			                  
			              </div>

			              <div class="form-row">
			              		<div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Country</label>
			                    <select class="form-control" id="country_id" name='country_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($country as $c) {?>
				                    	<option value='<?php echo $c['id'] ?>'<?php if($c['id']==$results[0]['country']){?>selected='selected'<?php }?>><?php echo $c['nicename'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Region</label>
			                    <select class="form-control" id="region_id" name='region_id[]' multiple="multiple">
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($region as $r) {

				                    		if(in_array($r['id'], $selectregions)){
				                          		$pchk='selected';
				                          	}else{
				                          		$pchk='';
				                          	}
				                    	?>
				                    	<option value='<?php echo $r['id'] ?>' <?php echo $pchk ?>><?php echo $r['region'] ?></option>

				                    <?php } ?>
                  				</select>	
			                  </div>

			              </div>


			              <div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Email</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['email'] ?>' name="email" id="email" placeholder="Email">
			                  </div>

			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Mobile</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['mobile'] ?>' name="mobile" id="mobile" placeholder="Mobile">
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
			                    <textarea class="form-control" rows="15" name="profile" id="summernote" placeholder="Enter ..."><?php echo $results[0]['profile'] ?></textarea>
			                  </div>
			                  

			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Appearance Order (Mgmt/India)</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['position'] ?>' name="position" id="position">
			              </div>

			                  

			                  
			                  
			              </div>
			              
			              

			              <div class="form-group col-md-12">
			              		<label for="exampleInputPassword1">Highlights</label>
			              		
			                     <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 40%">Highlights</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                  		if (count($highlights)) {
                        $lblcount = 1;
                        foreach ($highlights as $kps) {
                  	?>
                    <tr>
                      <td>
                      	<?php echo $lblcount++ ?>
                      </td>
                      <td>
                      	<input type="text" class="form-control" id="highlights" name="highlights[]" value="<?php echo $kps['highlights'] ?>" placeholder="highlights">
                      </td>
                      
                      <td>
                      	<label class="switch">
                            <input type="checkbox" class="pchk" name="chk_active" id="p_<?php echo $kps['id'] ?>_<?php echo $kps['is_active'] ?>" value="1" <?php if($kps['is_active']==1) {?>checked="checked"<?php } ?>>
                            <span class="slider round"></span>
                          </label>
                      </td>
                      <input type='hidden' id='highlight_id' name='highlight_id[]' value='<?php echo $kps['id'] ?>'>
                    </tr>
                    <?php }} ?>
                    <?php 
                    	for($y=0;$y<$loop;$y++){
                    			//$cnt=$totalpointers;
                    		//$mcnt=$y+2;
                    ?>
	                    <tr>
	                      <td>
	                      	<?php //echo $mcnt++ ?>
	                      </td>
	                      <td>
	                      	<input type="text" class="form-control" id="highlights" name="highlights[]" placeholder="Highlights">
	                      </td>
	                      
	                      
	                    </tr>
                <?php } ?>
                    
                    
                  </tbody>
                </table> 
			              		
			              		
			                      
			                      
			              	</div>

			              	<div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Meta Information</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Title</label>
			              				<textarea class="form-control" rows="4" name="meta_title" id="meta_title" placeholder="Meta Title"><?php echo $results[0]['meta_title'] ?></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Description</label>
			              				<textarea class="form-control" rows="4" name="meta_description" id="meta_description" placeholder="Meta Description"><?php echo $results[0]['meta_description'] ?></textarea>
			              			</div>
			              			<div class="col-md-4">
			              				<label for="exampleInputPassword1">Keywords</label>
			              				<textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"><?php echo $results[0]['meta_keywords'] ?></textarea>
			              			</div>
			              		</div>
			                  </div>
			              </div>

			              <div class="form-check">
			              	<input class="form-check-input" type="checkbox" id="is_mgmt" name="is_mgmt" 
			              	<?php if($results[0]['is_mgmt']==1) {?> checked <?php } ?>>
		                          <label class="form-check-label">Key Management ?</label>

			              </div>
			              
			              <!--<div class="form-check">
			              	<input class="form-check-input" type="checkbox" id="is_advisory" name="is_advisory" <?php if($results[0]['is_advisory']==1) {?> checked <?php } ?>>
		                          <label class="form-check-label">Advisory ? &nbsp;</label>

			              </div>-->

			              

			              
			                  <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" <?php if($results[0]['is_active']==1) {?> checked <?php } ?>>
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
			                <input type="hidden" id="member_id" name="member_id" value="<?php echo $this->uri->segment(3) ?>">
              			</form>	




					</div>


				</div>


				

			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>