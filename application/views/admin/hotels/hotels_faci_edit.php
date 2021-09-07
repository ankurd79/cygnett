
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

              			<form id='frmfaci_add' name='frmfaci_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                	<div class="form-row">
			                <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">Parent Facility</label>
			                    	<select class="form-control" id="parent_id" name='parent_id'>
				                    
				                    <option value='0'>Select</option>
				                    <?php foreach($parentfacilities as $k=>$v) {?>
				                    	<option value='<?php echo $k ?>'><?php echo $v ?></option>

				                    <?php } ?>
                  				</select>
			                  </div>		

			                  
			                  
			              </div>
			              
			                  
			                </div>
			                <!-- /.card-body -->

			                
			                <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
              			</form>	




					</div>


				</div>


				<div class="col-md-12" id="sbmtblock" style='display:none;'>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hotel Facilities</h3>

                
              </div>
              <!-- /.card-header -->
              <form id='frmfaci_edit' name='frmfaci_edit' method="post">
	              <div class="card-body p-0" id="shwdatatable">
	              </div>
	              <p class="text-center pt-4" ><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary" ></p>
          	 </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="lds-facebookk" style="display:none;"><div></div><div></div><div></div></div>
            <div id='subjresponse'></div>
            
            <!-- /.card -->
          </div>


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>