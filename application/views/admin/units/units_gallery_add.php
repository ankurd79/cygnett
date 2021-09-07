<?php
//print_r($restaurantlist);
?>
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $main_title ?> - (<?php echo $hoteldata[0]['hotel_name'] ?>)</h1>
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
                			<span style="float:right"><a href='<?php echo base_url() ?>manage-unit-gallery/list/<?php echo base64_encode($hoteldata[0]['id']) ?>'><button type="button" class="btn btn-block bg-gradient-success">Back to gallery listing</button></a></span>
              			</div>

              			<form id='frmgallery' name='frmgallery' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	
			                <div class="form-row">
			                  <div class="form-group col-md-5">
			                    <label for="exampleInputEmail1">Image</label>&nbsp;&nbsp;<span><i class="fas fa-plus m1"></i></span>
			                    <div>
			                    <input type="file" class="form-control" name="image[]" id="image">
			                	</div>	
			                  </div>



			                  <div class="form-group col-md-5">
			                    <label for="exampleInputEmail1">Text</label>
			                    <div>
			                    <input type="text" class="form-control" name="text[]" id="text" placeholder="Text">
			                	</div>	
			                  </div>
			                  
			                 <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Sequence</label>
			                    <div>
			                    <input type="text" class="form-control" name="sequence[]" id="sequence" placeholder="Sequence">
			                	</div>	
			                  </div>
			                  
			                  
			                  
			              </div>


			              <div class="row">
							    <div id="containercat" class="form-group col-lg-12"></div>
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
			                  <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary"></div>
			                  
			              </div>
			              </div>
			                </div>
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
			                <input type='hidden' id='hotel_id' name='hotel_id' value='<?php echo base64_encode($hoteldata[0]['id']) ?>'>
              			</form>	




					</div>


				</div>


				

			</div>
		</div>
	</section>


</div>
<script>
var unit_id='<?php echo base64_encode($hoteldata[0]['id'])?>';
//alert (base_url);
</script>

<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>