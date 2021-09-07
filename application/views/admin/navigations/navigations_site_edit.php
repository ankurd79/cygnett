<?php
//print_r($results);
$totalrolloverdata=count($rolloverArr);
$looprollover=4-$totalrolloverdata;

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

              			<form id='frmsitenav_edit' name='frmsitenav_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                	<div class="form-row">
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Menu</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['menu_name'] ?>' name="menu_name" id="menu_name" placeholder="Menu Name">	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Parent Menu</label>
			                    <select class="form-control" id="parent_id" name='parent_id'>
			                    	<option value='0'>select</option>
			                    	<?php foreach($sitenavigArr as $nav) {?>
			                    		<option value="<?php echo $nav['id'] ?>" <?php if($nav['is_active']==0) {?>disabled=''<?php } ?> <?php if($nav['id']==$results[0]['parent_id']) {?>selected='selected'<?php } ?>><?php echo $nav['menu_name'] ?></option>
			                    	<?php } ?>	
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">URL</label>
			                    <input type="text" class="form-control" value='<?php echo $results[0]['url'] ?>' name="url" id="url" placeholder="URL">	
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

			              <div class="form-row">
			              	<div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Dropdown Text</label>
			                    <textarea class="form-control" rows="4" name="dropdown_text" id="dropdown_text" placeholder="Dropdown Text"><?php echo $results[0]['dropdown_text'] ?></textarea>	
			                  </div>
			                  <div class="form-group col-md-8">
			                    <label for="exampleInputEmail1">Page Information</label>
			                    <textarea class="form-control" rows="8" name="page_text" id="summernote" placeholder="Page Text"><?php echo $results[0]['page_text'] ?></textarea>	
			                  </div>
			          	  </div>

			          	  

			          	  <div class="form-row">
			          	  	<?php if($results[0]['parent_id']==0) {?>
			          	  	<div class="form-group col-md-2">
			              	<label for="exampleInputEmail1">Placement</label>			              	
							  <select class="form-control" id="top_navigation" name='top_navigation'>
							  	<option value='1' <?php if($results[0]['top_navigation']==1) {?>selected='selected' <?php } ?> >Header</option>
							  	<option value='2' <?php if($results[0]['top_navigation']==2) {?>selected='selected' <?php } ?>>Footer</option>
							  	<option value='0' <?php if($results[0]['top_navigation']==0) {?>selected='selected' <?php } ?>>Select</option>
                  			  </select>
							
						</div>
					<?php } ?>
							<div class="form-group col-md-2">
							<label for="exampleInputEmail1">Sequence</label>							
							 <input type="text" class="form-control" value='<?php echo $results[0]['priority']?>' name="priority" id="priority" placeholder="Assign Sequence">							
						</div>

			          	  </div>
			          	  
			          	  <div class="form-row">
			              	<div class="form-group col-md-12">
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
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_nav_banners ?>/<?php echo $recs['banner_image'] ?>" style="width:100%; height:auto;">
	                      </td>
	                      <td>
	                      	<div class="custom-file">
				                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image" class='mb-2'>
				                        <label class="custom-file-label" >Choose file</label>			                        
				                      </div>
	                      </td>
	                      <td>
	                      	<?php if($recs['mobile_banner_image']) {?>
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_nav_banners ?>/<?php echo $recs['mobile_banner_image'] ?>" style="width:100%; height:auto;">
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
	                            <input type="checkbox" class="bnchk1" name="chk_active" id="p_<?php echo $recs['id'] ?>_<?php echo $recs['is_active'] ?>" value="1" <?php if($recs['is_active']==1) {?>checked="checked"<?php } ?>>
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



			          	 <?php if($results[0]['parent_id']>0) {?> 	
			          	  <br>
			          	  <label for="exampleInputPassword1">Roll Over Information</label>
			          	  <div class="form-row">
			              	<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" <?php if($results[0]['roll_options']==1) {?>checked <?php } ?> name="roll_options" id='rollyes' value="1">Yes
							  </label>
							</div>
							<div class="form-check-inline">
							  <label class="form-check-label">
							    <input type="radio" class="form-check-input" <?php if($results[0]['roll_options']==0) {?>checked <?php } ?> name="roll_options" id='rollno' value="0" >No
							  </label>
							</div>

			          	  </div>
			          	  <br>
			          	  <div class="form-row" id='roll_data'>
			              	
			                  <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="">Title</th>
                      <th style="">Description</th>
                      <th>Image </th>
                      <th style="width: 15%">Thumbnail</th>
                      <th style="width: 5%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 

                  		if (count($rolloverArr)) {
                        $i = 1;
                        $j=1;
                        foreach ($rolloverArr as $p) {
                  	?>
	                    <tr>
	                      <td>
	                      	<?php echo $i++ ?>
	                      </td>
	                      <td>
	                      	<div class="">
				             <div ><input type="text" value="<?php echo $p['title'] ?>" class="form-control" name="title[]" id="title" placeholder="Title"></div>  
				            </div>
	                      </td>
	                      <td>
	                        <div class="">
	                          <textarea class="form-control" rows="2" name="description[]" id="description" placeholder="Description"><?php echo $p['description'] ?></textarea>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="custom-file">
	                          <input type="file" class="custom-file-input" name="image[]" id="image">
				                        <label class="custom-file-label" >Choose file</label>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="">
	                          <img src="<?php echo base_url() ?>images/<?php echo folder_nav_ro ?>/<?php echo $p['image'] ?>" style="width:80%; height:auto;">
	                        </div>
	                      </td>
	                      <td>
	                      	<label class="switch">
	                            <input type="checkbox" class="bnchk" name="chk_active" id="p_<?php echo $p['id'] ?>_<?php echo $p['is_active'] ?>" value="1" <?php if($p['is_active']==1) {?>checked="checked"<?php } ?>>
	                            <span class="slider round"></span>
	                          </label>
	                      </td>
	                    </tr>
	                    <input type='hidden' id='rollover_id' name='rollover_id[]' value='<?php echo $p['id'] ?>'>
                    <?php }} ?>

                    <?php 
                    	for($y=0;$y<$looprollover;$y++){
                    			//$cnt=$totalbanners;
                    			//$cnt=$loopbanners+1;
                    ?>
	                    <tr>
		                      <td>
	                      	<?php //echo $i++ ?>
	                      </td>
	                      <td>
	                      	<div class="">
				             <input type="text" class="form-control" name="title[]" id="title" placeholder="Title">    
				            </div>
	                      </td>
	                      <td>
	                        <div class="">
	                          <textarea class="form-control" rows="2" name="description[]" id="description" placeholder="Description"></textarea>
	                        </div>
	                      </td>
	                      <td>
	                        <div class="custom-file">
	                          <input type="file" class="custom-file-input" name="image[]" id="image"> <label class="custom-file-label" >Choose file</label>
	                        </div>
	                      </td>
	                      
		                      
		                    </tr>
	                <?php } ?>
                    
                    
                  </tbody>
                </table> 
			              </div>
			              
			      <?php } ?>        



			              

			              

			              
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
			                <input type='hidden' id='nav_id' name='nav_id' value='<?php echo base64_encode($results[0]['id']) ?>'>
              			</form>	




					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>