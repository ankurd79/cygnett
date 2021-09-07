<?php
//print_r($results);

$totalbanners=count($banners);
$loopbanners=4-$totalbanners;

$cuisines=$results[0]['cuisine'];
$select=explode(",",$cuisines);


$dishes=$results[0]['cygnetture_dishes'];
$selectdishes=explode(",",$dishes);

?>
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

              			<form id='frmrestaurant_edit' name='frmrestaurant_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	<div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Restaurant Name</label>
			                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $results[0]['name'] ?>" placeholder="Name of the restaurant">
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Restaurant Tag line</label>
			                    <input type="text" class="form-control" id="tag_line" name="tag_line" value="<?php echo $results[0]['tag_line'] ?>" placeholder="Tagline">
			                  </div>

			                  <label for="exampleInputPassword1">Cuisine Types</label><br>
			                  <?php foreach($cuisinetype as $cuisine) {?>
				                  <?php if($cuisine['is_active']==1) {?>
					                  <div class="form-group col-md-1">
					                    <div class="form-check">
					                      <?php
				                          if(in_array($cuisine['id'], $select)){
				                          	$chk='checked';
				                          }else{
				                          	$chk='';
				                          }
				                          ?>	
				                          <input class="form-check-input" type="checkbox" id="cuisine_type" name="cuisine_type[]" value='<?php echo ucfirst($cuisine['id']) ?>'<?php echo $chk ?>> 
				                          <label class="form-check-label"><?php echo ucfirst($cuisine['cuisine_name']) ?></label>
		                        		</div>
					                  </div>
				                  <?php } ?>
			                  <?php } ?>
			              </div>
			              <div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Styling <sup>Restaurant brand color that reflects in the restaurant page</sup></label>
			                    <input type="text" class="form-control" id="styling" name="styling" value="<?php echo $results[0]['styling'] ?>" placeholder="Styling">
			                  </div>			                  
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputFile">Logo <sup>used in top navigation</sup></label>
			                    <div class="input-group">
			                      	<div class="col-md-12 pl-0">
			                    	<div class="row">
			                    		<div class="col-md-9">
			                    			<div class="custom-file">
			                        <input type="file" class="custom-file-input" name="image" id="image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                    		</div>
			                    		<div class="col-md-3"><img src="<?php echo base_url() ?>images/<?php echo folder_restaurant ?>/<?php echo $results[0]['logo_image'] ?>" class="img-fluid"></div>
			                    	</div>
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
			                      <?php if($results[0]['secondary_logo']) {?>
				                     <div class="col-md-3"><img src="<?php echo base_url() ?>images/<?php echo folder_restaurant ?>/<?php echo $results[0]['secondary_logo'] ?>" class="img-fluid"></div>
				                     <?php } ?>
			                    </div>
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Video</label>
			                    <input type="text" class="form-control" id="video" name="video" value="<?php echo $results[0]['video'] ?>" placeholder="Upload Video">
			                  </div>
			              </div>
			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Description</label>
			                    <textarea class="form-control" rows="15" name="description" id="summernote"><?php echo $results[0]['description'] ?></textarea>
			                  </div>
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

			              	<div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Cygnetture Dishes</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4">
			              				<?php
				                          if(in_array($cuisine['id'], $selectdishes)){
				                          	$chk='checked';
				                          }else{
				                          	$chk='';
				                          }
				                          ?>
			              				<select class="form-control" id="cygnetture_dishes" name='cygnetture_dishes[]' multiple="multiple">
						                    <option value='0'>Select</option>
						                    <?php foreach($cygenturedishes as $c) {
						                    		if(in_array($c['id'], $selectdishes)){
				                          					$pchk='selected';
				                          			}else{
				                          					$pchk='';
				                          			}
						                    	?>
						                    	<option value='<?php echo $c['id'] ?>' <?php echo $pchk ?>><?php echo ucfirst($c['dish_title']) ?></option>

						                    <?php } ?>
                  						</select>
			              			</div>
			              			
			              		</div>
			                  </div>
			              </div>

			              

			              <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 10%">Web</th>
                      <th style="width: 30%">&nbsp;</th>
                      <th style="width: 10%">Mobile</th>
                      <th style="width: 30%">&nbsp;</th>
                      <th style="width: 10px">Action</th>
                      <th style="width: 30%">&nbsp;</th>
                      <th style="width: 10px">Remove</th>
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
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_restaurant ?>/banners/<?php echo $recs['banner_image'] ?>" style="width:100%; height:auto;">
	                      </td>
	                      <td>
	                      	<div class="custom-file">
				                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image" class='mb-2'>
				                        <label class="custom-file-label" >Choose file</label>			                        
				                      </div>
	                      </td>
	                      <td>
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_restaurant ?>/banners/<?php echo $recs['mobile_banner_image'] ?>" style="width:100%; height:auto;">
	                      </td>
	                      <td>
	                        <div class="custom-file">
	                          <input type="file" class="custom-file-input" name="mobile_banner_image[]" id="mobile_banner_image">
				                        <label class="custom-file-label" >Choose file</label>		                        
				                        <input type='hidden' id='banner_id' name='banner_id[]' value='<?php echo $recs['id'] ?>'>
	                        </div>
	                      </td>
	                      <td>
	                      	<label class="switch">
	                            <input type="checkbox" class="bnchk" name="chk_active" id="p_<?php echo $recs['id'] ?>_<?php echo $recs['is_active'] ?>" value="1" <?php if($recs['is_active']==1) {?>checked="checked"<?php } ?>>
	                            <span class="slider round"></span>
	                          </label>
	                      </td>
	                      <th style="width: 30%">&nbsp;</th>
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
		                      	#
		                      </td>
		                      <td>&nbsp;</td>
		                      <td>
		                      	<div class="custom-file">
					                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image">
					                        <label class="custom-file-label" >Choose file</label>
					                      </div>
		                      </td>

		                      <td>&nbsp;</td>


		                      <td>
		                      	<div class="custom-file">
					                        <input type="file" class="custom-file-input" name="mobile_banner_image[]" id="banner_image">
					                        <label class="custom-file-label" >Choose file</label>
					                      </div>
		                      </td>
		                      
		                    </tr>
	                <?php } ?>
                    
                    
                  </tbody>
                </table> 
			               
			                  
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
			                  <div class="col-md-10">
			                  	<div class="alert-msg" style="display:none;">
                  <p class="mb-0 text-center" id="subjresponse" ></p>                  
                </div>
			                  </div>
			              </div>
			              </div>
			                </div>
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
			                <input type="hidden" id="restaurant_id" name="restaurant_id" value="<?php echo $this->uri->segment(3) ?>">
              			</form>	




					</div>


				</div>


				

			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>