<?php
//print_r($results);

$totalbanners=count($banners);
$loopbanners=4-$totalbanners;

$totalplaces=count($places);
$loopplaces=6-$totalplaces;
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

              			<form id='frmlocation_edit' name='frmlocation_edit' method='post' enctype="multipart/form-data" autocomplete="off">
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
				                    	<option value='<?php echo $cntry['id'] ?>' <?php if($results[0]['country']==$cntry['id']) {?>selected='selected'<?php } ?>><?php echo $cntry['nicename'] ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputPassword1">Location/City</label>
			                    
			                    <input type="text" class="form-control" name="city" id="city" value="<?php echo $results[0]['location']?>" placeholder="Location">	
                  				
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputPassword1">Latitude</label>
			                    
			                    <input type="text" class="form-control" name="latitude" id="latitude" value="<?php echo $results[0]['latitude']?>"placeholder="Latitude">	
                  				
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputPassword1">Longitude</label>
			                    
			                    <input type="text" class="form-control" name="longitude" id="longitude" value="<?php echo $results[0]['longitude']?>" placeholder="Longitude">	
                  				
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
			                    <textarea class="form-control" rows="15" name="description" id="summernote" placeholder="Enter ..."><?php echo $results[0]['description']?></textarea>
			                  </div>
			              </div>


			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Meta Information</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4"><textarea class="form-control" rows="4" name="meta_title" id="meta_title" placeholder="Meta Title"><?php echo $results[0]['meta_title']?></textarea></div>
			              			<div class="col-md-4"><textarea class="form-control" rows="4" name="meta_description" id="meta_description" placeholder="Meta Description"><?php echo $results[0]['meta_description']?></textarea></div>
			              			<div class="col-md-4"><textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"><?php echo $results[0]['meta_keywords']?></textarea></div>
			              		</div>
			                  </div>
			              </div>


			              <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 50%">Upload Image</th>
                      <th>Image Thumbnail</th>
                      <th style="width: 40px">Action</th>
                      <th style="width: 40px">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 

                  		if (count($banners)) {
                        $i = 1;
                        $j=1;
                        foreach ($banners as $recs) {
                  	?>
	                    <tr>
	                      <td>
	                      	<?php echo $i++ ?>
	                      </td>
	                      <td>
	                      	<div class="custom-file">
				                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image">
				                        <label class="custom-file-label" >Choose file</label>
				                        <input type='hidden' id='banner_id' name='banner_id[]' value='<?php echo $recs['id'] ?>'>
				                      </div>
	                      </td>
	                      <td>
	                        <div class="">
	                          <img src="<?php echo base_url() ?>images/<?php echo folder_location ?>/banners/<?php echo $recs['banner_image'] ?>" style="width:80%; height:auto;">
	                        </div>
	                      </td>
	                      <td>
	                      	<label class="switch">
	                            <input type="checkbox" class="bnchk" name="chk_active" id="p_<?php echo $recs['id'] ?>_<?php echo $recs['is_active'] ?>" value="1" <?php if($recs['is_active']==1) {?>checked="checked"<?php } ?>>
	                            <span class="slider round"></span>
	                          </label>
	                      </td>
	                      <td><i class="far fa-trash-alt bannerremv" id="del_<?php echo $recs['id'] ?>"></i></td>
	                    </tr>

                    <?php }} ?>

                    <?php 
                    	for($x=0;$x<$loopbanners;$x++){
                    			//$cnt=$totalbanners;
                    			//$cnt=$loopbanners+1;
                    ?>
	                    <tr>
		                      <td>
		                      	<?php //echo $cnt++ ?>
		                      </td>
		                      <td>
		                      	<div class="custom-file">
					                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image">
					                        <label class="custom-file-label" >Choose file</label>
					                      </div>
		                      </td>
		                      
		                    </tr>
	                <?php } ?>
                    
                    
                  </tbody>
                </table> 


                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="">Place</th>
                      <th style="">Details</th>
                      <th>Image </th>
                      <th style="width: 15%">Thumbnail</th>
                      <th style="width: 5%">Action</th>
                      <th style="width: 5%">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 

                  		if (count($places)) {
                        $i = 1;
                        $j=1;
                        foreach ($places as $p) {
                  	?>
	                    <tr>
	                      <td>
	                      	<?php echo $i++ ?>
	                      </td>
	                      <td>
	                      	<div class="">
				             <input type="text" class="form-control" value="<?php echo $p['place_name'] ?>" name="place_name[]" id="place_name" placeholder="Name">    
				            </div>
	                      </td>
	                      <td>
	                        <div class="">
	                          <textarea class="form-control" rows="2" name="place_details[]" id="place_details" placeholder="Description"><?php echo $p['place_details'] ?></textarea>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="custom-file">
	                          <input type="file" class="custom-file-input" name="place_image[]" id="place_image">
				                        <label class="custom-file-label" >Choose file</label>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="">
	                          <img src="<?php echo base_url() ?>images/<?php echo folder_location ?>/places/<?php echo $p['place_image'] ?>" style="width:80%; height:auto;">
	                        </div>
	                      </td>
	                      <td>
	                      	<label class="switch">
	                            <input type="checkbox" class="mchk" name="chk_active" id="p_<?php echo $p['id'] ?>_<?php echo $p['is_active'] ?>" value="1" <?php if($p['is_active']==1) {?>checked="checked"<?php } ?>>
	                            <span class="slider round"></span>
	                          </label>
	                      </td>
	                      <td><i class="far fa-trash-alt placermv" id="del_<?php echo $p['id'] ?>"></i></td>
	                    </tr>
	                    <input type='hidden' id='place_id' name='place_id[]' value='<?php echo $p['id'] ?>'>
                    <?php }} ?>

                    <?php 
                    	for($y=0;$y<$loopplaces;$y++){
                    			//$cnt=$totalbanners;
                    			//$cnt=$loopbanners+1;
                    ?>
	                    <tr>
		                      <td>
	                      	<?php //echo $i++ ?>
	                      </td>
	                      <td>
	                      	<div class="">
				             <input type="text" class="form-control" name="place_name[]" id="place_name" placeholder="Name">    
				            </div>
	                      </td>
	                      <td>
	                        <div class="">
	                          <textarea class="form-control" rows="2" name="place_details[]" id="place_details" placeholder="Description"></textarea>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="custom-file">
	                          <input type="file" class="custom-file-input" name="place_image[]" id="place_image">
				                        <label class="custom-file-label" >Choose file</label>
	                        </div>
	                      </td>
	                      
		                      
		                    </tr>
	                <?php } ?>
                    
                    
                  </tbody>
                </table> 
			                    <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_popular" name="is_popular" <?php if($results[0]['is_popular']==1) {?>checked<?php } ?>>
		                          <label class="form-check-label">Popular</label>
                        	</div>
			                  
			                  <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" <?php if($results[0]['is_active']==1) {?>checked<?php } ?>>
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
			                <input type='hidden' id='location_id' name='location_id' value='<?php echo base64_encode($results[0]['id']) ?>'>
              			</form>	




					</div>


				</div>


				

			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo strtolower($jsfile) ?>.js"></script>