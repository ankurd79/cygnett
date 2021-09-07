<?php
$totalbanners=count($banners);
$loopbanners=4-$totalbanners;
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

              			<form id='frmoffr_edit' name='frmoffr_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                	<div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Name</label>
			                    <input type="text" class="form-control" value="<?php echo $results[0]['offer_name'] ?>" name="offer_name" id="offer_name" placeholder="Offer name">	
			                  </div>
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputFile">Offer Image</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" class="custom-file-input" name="image" id="image">
			                        <label class="custom-file-label" >Choose file</label>
			                      </div>
			                     
			                    </div>
			                  </div>
			                  
			              </div>
			              <div class="form-row">
			                 		                  
			                  <div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Short Intro</label>
			                   <textarea class="form-control" rows="3" name="short_intro" id="short_intro" placeholder="Short Intro"><?php echo $results[0]['short_intro'] ?></textarea>
			                  </div>

			                  
			              </div>
			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Description</label>
			                    <textarea class="form-control" rows="15" name="description" id="summernote" placeholder="Enter ..."><?php echo $results[0]['description'] ?></textarea>
			                  </div>
			              </div>


			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Meta Information</label>
			                    <div class="row mt-2">
			              			<div class="col-md-4"><textarea class="form-control" rows="4" name="meta_title" id="meta_title" placeholder="Meta Title"><?php echo $results[0]['meta_title'] ?></textarea></div>
			              			<div class="col-md-4"><textarea class="form-control" rows="4" name="meta_description" id="meta_description" placeholder="Meta Description"><?php echo $results[0]['meta_description'] ?></textarea></div>
			              			<div class="col-md-4"><textarea class="form-control" rows="4" name="meta_keywords" id="meta_keywords" placeholder="Meta keywords"><?php echo $results[0]['meta_keywords'] ?></textarea></div>
			              		</div>
			                  </div>
			              </div>



			              <label for="exampleInputPassword1">Banners</label>

			  <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 10%">Web</th>
                      <th style="width: 30%">&nbsp;</th>
                      <th style="width: 10%">Mobile</th>
                      <th style="width: 30%">&nbsp;</th>
                      <th style="width: 10px">Action</th>
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
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_offers ?>/banners/<?php echo $recs['banner_image'] ?>" style="width:80%; height:auto;">
	                      	
	                      </td>
	                      <td>
	                        <div class="custom-file">
				                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image" class='mb-2'>
				                        <label class="custom-file-label" >Choose file</label>			                        
				                      </div>
	                      </td>
	                      <td>
	                      	<?php if($recs['mobile_banner_image']) {?>
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_offers ?>/banners/<?php echo $recs['mobile_banner_image'] ?>" style="width:100%; height:auto;">
	                      	<?php } ?>
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
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" <?php if($results[0]['is_active']==1) {?>checked <?php } ?>>
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
			                <input type='hidden' id='offer_id' name='offer_id' value='<?php echo base64_encode($results[0]['id']) ?>'>
              			</form>	




					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/offers.js"></script>