<?php
//print_r($keypointers);

$totalbanners=count($banners);
$loopbanners=4-$totalbanners;
$totalpointers=count($keypointers);
$looppointers=4-$totalpointers;
$totlcarouselimgs=count($carouselimages);
$loopcarousel=6-$totlcarouselimgs;


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

              			<form id='frmbrand_edit' name='frmbrand_edit' method='post' enctype="multipart/form-data">
			                <div class="card-body">
			                	<div class="form-row">
			                		
			                		<div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Brand Category</label>
			                    <select class="form-control" id="brand_category" name='brand_category'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($catlist as $c) {?>
				                    	<option value='<?php echo $c['id'] ?>' <?php if($results[0]['brand_category']==$c['id']) {?>selected='selected'<?php } ?>><?php echo ucfirst($c['category']) ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>

			                		<div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Parent Brand</label>
			                    <select class="form-control" id="parent_id" name='parent_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($brandlist as $b) {?>

				                    	<?php if($b['id']<>$results[0]['id']){ ?>
					                    	<option value='<?php echo $b['id'] ?>' <?php if($results[0]['parent_id']==$b['id']) {?>selected='selected'<?php } ?>><?php echo ucfirst($b['brand_name']) ?>
					                    	</option>
				                    	<?php } ?>

				                    <?php } ?>
                  				</select>
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Brand Name</label>
			                    <input type="text" class="form-control" id="brand_name" name="brand_name" value="<?php echo $results[0]['brand_name'] ?>" placeholder="Name of the brand">
			                  </div>
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputPassword1">Brand Tag line</label>
			                    <input type="text" class="form-control" id="brand_tagline" value="<?php echo $results[0]['brand_tagline'] ?>" name="brand_tagline" placeholder="Tagline">
			                  </div>
			              </div>
			              <div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputPassword1">Brand Styling</label>
			                    <input type="text" class="form-control" value="<?php echo $results[0]['brand_styling'] ?>" id="brand_styling" name="brand_styling" placeholder="Styling">
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
			                    <input type="text" class="form-control" id="brand_video" name="brand_video" value="<?php echo $results[0]['brand_video'] ?>" placeholder="Upload Video">
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
			                    <textarea class="form-control" rows="15" name="description" id="summernote" placeholder="Enter ..."><?php echo html_entity_decode($results[0]['description']) ?></textarea>
			                  </div>
			                  <div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Short Intro</label>
			                    <textarea class="form-control" rows="4" name="short_intro" id="short_intro" placeholder="Short Intro"><?php echo html_entity_decode($results[0]['short_intro']) ?></textarea>
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
			              				<label for="exampleInputPassword1">Intro (Home Page)</label>
			              				<textarea class="form-control" rows="4" name="home_intro" id="home_intro" placeholder="Home page intro"><?php echo  html_entity_decode($results[0]['home_intro'])?></textarea>
			              			</div>
			              			
			              		</div>
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
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/banners/<?php echo $recs['banner_image'] ?>" style="width:100%; height:auto;">
	                      </td>
	                      <td>
	                      	<div class="custom-file">
				                        <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image" class='mb-2'>
				                        <label class="custom-file-label" >Choose file</label>			                        
				                      </div>
	                      </td>
	                      <td>
	                      	<?php if($recs['mobile_banner_image']) {?>
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/banners/<?php echo $recs['mobile_banner_image'] ?>" style="width:100%; height:auto;">
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
			                      
			                      
			              	</div>
			              	<div class="form-group col-md-12">
			              		<label for="exampleInputPassword1">Key Pointers <sup>Not in use</sup></label>
			              		
			                     <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 40%">Count</th>
                      <th>Label</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                  		if (count($keypointers)) {
                        $lblcount = 1;
                        foreach ($keypointers as $kps) {
                  	?>
                    <tr>
                      <td>
                      	<?php echo $lblcount++ ?>
                      </td>
                      <td>
                      	<input type="text" class="form-control" id="value" name="value[]" value="<?php echo $kps['value'] ?>" placeholder="Count">
                      </td>
                      <td>
                        <div class="">
                          <input type="text" class="form-control" id="label" name="label[]" value="<?php echo $kps['label'] ?>" placeholder="Count Label">
                        </div>
                      </td>
                      <td>
                      	<label class="switch">
                            <input type="checkbox" class="pchk" name="chk_active" id="p_<?php echo $kps['id'] ?>_<?php echo $kps['is_active'] ?>" value="1" <?php if($kps['is_active']==1) {?>checked="checked"<?php } ?>>
                            <span class="slider round"></span>
                          </label>
                      </td>
                      <input type='hidden' id='pointer_id' name='pointer_id[]' value='<?php echo $kps['id'] ?>'>
                    </tr>
                    <?php }} ?>
                    <?php 
                    	for($y=0;$y<$looppointers;$y++){
                    			//$cnt=$totalpointers;
                    		//$mcnt=$y+2;
                    ?>
	                    <tr>
	                      <td>
	                      	<?php //echo $mcnt++ ?>
	                      </td>
	                      <td>
	                      	<input type="text" class="form-control" id="value" name="value[]" placeholder="Count">
	                      </td>
	                      <td>
	                        <div class="">
	                          <input type="text" class="form-control" id="label" name="label[]" placeholder="Count Label">
	                        </div>
	                      </td>
	                      
	                    </tr>
                <?php } ?>
                    
                    
                  </tbody>
                </table> 
			              		
			              		
			             <div class="form-row">
			              	<div class="form-group col-md-12">
			              		<label for="exampleInputPassword1">Carousel Images</label>
			              		
			      <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 10%">Image</th>
                      <th >Upload</th>
                      <th style="width: 3%">&nbsp;</th>
                      <th >Text</th>
                      <th style="width: 3%">&nbsp;</th>
                      <th style="width: 110px">Sequence</th>
                      <th style="width: 3%">&nbsp;</th>
                      <th style="width: 50px">Action</th>
                      <th style="width: 3%">&nbsp;</th>
                      <th style="width: 50px">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 

                  		if (count($carouselimages)) {
                        $p = 1;
                        //$j=1;
                        foreach ($carouselimages as $recs) {
                  	?>
	                    <tr>
	                      <td>
	                      	<?php echo $p++ ?>
	                      </td>
	                      <td>
	                      	<img src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/brand_carousel/<?php echo $recs['image'] ?>" style="width:100%; height:auto;">
	                      </td>
	                      <td>
	                      	<div class="custom-file">
				                        <input type="file" class="custom-file-input" name="carousel_images[]" id="carousel_images" class='mb-2'>
				                        <label class="custom-file-label" >Choose file</label>			                        
				                      </div>
	                      </td>
	                      <td>&nbsp;</td>
	                      <td>
	                        <input type="text" class="form-control" id="img_label[]" name="img_label[]" value='<?php echo $recs['text'] ?>' placeholder="Text for the image">
	                      </td>
	                      <td>&nbsp;</td>
	                      <td>
	                        <input type="text" class="form-control" id="sequence[]" name="sequence[]" value='<?php echo $recs['sequence'] ?>'placeholder="Sequence">
	                      </td>
	                      <td>&nbsp;</td>
	                      <td>
	                      	<label class="switch">
	                            <input type="checkbox" class="carochk" name="chk_active" id="p_<?php echo $recs['id'] ?>_<?php echo $recs['is_active'] ?>" value="1" <?php if($recs['is_active']==1) {?>checked="checked"<?php } ?>>
	                            <span class="slider round"></span>
	                          </label>
	                      </td>
	                      <td>&nbsp;</td>
	                      <td><i class="far fa-trash-alt carouselremv" id="del_<?php echo $recs['id'] ?>"></i></td>
	                      <input type='hidden' id='data_id' name='data_id[]' value='<?php echo $recs['id'] ?>'>
	                    </tr>

                    <?php }} ?>

                    <?php 
                    	for($q=0;$q<$loopcarousel;$q++){
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
					                        <input type="file" class="custom-file-input" name="carousel_images[]" id="carousel_images">
					                        <label class="custom-file-label" >Choose file</label>
					                      </div>
		                      </td>

		                      <td>&nbsp;</td>


		                      <td>
		                      	<input type="text" class="form-control" id="img_label[]" name="img_label[]" placeholder="Text for the image">
		                      </td>

		                      <td>&nbsp;</td>

		                      <td>
		                      	<input type="text" class="form-control" id="sequence[]" name="sequence[]" placeholder="Sequence">
		                      </td>
		                      
		                    </tr>
	                <?php } ?>
                    
                    
                  </tbody>
                </table> 
			                      
			                      
			              	   
			                      
			              	</div>
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputPassword1">Footnote <sup>Not in use</sup></label>
			                    <input type="text" class="form-control" id="foot_note" value="<?php echo $results[0]['foot_note'] ?>"name="foot_note" placeholder="Footnote">
			                  </div>
			              </div>
			                  
			                  <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" <?php if($results[0]['is_active']==1) {?>checked <?php }  ?>>
		                          <label class="form-check-label">Activate</label>
                        	</div>
			                </div>
			                <!-- /.card-body -->

			                <div class="card-footer">
			                  <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Update" class="btn btn-primary"></div>
			                </div>
			                <input type="hidden" id="brand_id" name="brand_id" value="<?php echo $this->uri->segment(3) ?>">
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
			                <div id="subjresponse"></div>
              			</form>	




					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>



<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/brands.js"></script>