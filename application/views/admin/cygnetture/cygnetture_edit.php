<?php
//print_r($results[0]);
$arr=$results[0];
//echo currentDay();
//exit;
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

              			<form id='frmdish_edit' name='frmdish_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                	

			              <div class="form-row">
			                  
			              	<div class="form-group col-md-3">
			                    <label for="exampleInputEmail1">Cuisine Type</label>
			                    <select class="form-control" id="cuisine" name='cuisine'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($cuisinelist as $c) {?>
				                    	<option value='<?php echo $c['id'] ?>' <?php if($c['id']==$arr['cuisine_id']){?>selected='selected'<?php } ?>><?php echo ucfirst($c['cuisine_name']) ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>


			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Dish Title</label>
			                    <input type="text" class="form-control" value='<?php echo $arr['dish_title'] ?>' name="dish_title" id="dish_title" placeholder="Dish Title">	
			                  </div>

			                  
			                  
			                  <div class="form-group col-md-3">
			                    <label for="exampleInputFile">Image</label>
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
			                    <label for="exampleInputPassword1">About the dish</label>
			                   <textarea class="form-control" rows="5" name="dish_description" id="dish_description" placeholder="About the dish"><?php echo $arr['dish_description'] ?></textarea>
			                  </div>

			                  

			                  
			              </div>
			              
			              


			              

			              
			                  <div class="form-check">
		                          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" <?php if($arr['is_active']==1) {?>checked <?php } ?>>
		                          <label class="form-check-label">Activate</label>
                        	</div>
			                </div>
			                <!-- /.card-body -->

			                <div class="card-footer">
			                	<div class="container">
			                		<div class="row">
			                  <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary"></div>
			                  <input type='hidden' name='dish_id' value='<?php echo base64_encode($arr['id']) ?>'>
			              </div>
			              </div>
			                </div>
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
              			</form>	




					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>