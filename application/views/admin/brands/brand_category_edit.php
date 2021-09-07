<?php

//print_r($results);
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

              			<form id='frmbrandcat_edit' name='frmbrandcat_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	
			                	<div class="form-row">
			                  <div class="form-group col-md-9">
			                    <label for="exampleInputEmail1">Brand Category (Eg: Upscale/Midscale..)</label>
			                    <input type="text" class="form-control" value='<?php echo $results['0']['category'] ?>' name="category" id="category" placeholder="Brand Category">	
			                  </div>
			                  
			              </div>
			              
			              <div class="form-row">
			              <div class="form-group col-md-9">
			                    <label for="exampleInputPassword1">Intro Text (On Brand listing page)</label>
			                    <textarea class="form-control" rows="6" name="text" id="text" placeholder="Intro Text"><?php echo $results['0']['text'] ?></textarea>
			                  </div>
			               </div>   

			              

			              

			              
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
			                  
			              </div>
			              </div>
			                </div>
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
			                <input type="hidden" id="brand_catid" name="brand_catid" value="<?php echo $this->uri->segment(3) ?>">
              			</form>	




					</div>


				</div>


				

			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>