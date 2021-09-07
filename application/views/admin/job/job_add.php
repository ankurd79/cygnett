<?php
$qualarr=qualification();

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

              			<form id='frm_add' name='frm_add' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	
			                	<div class="form-row">
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Job Title</label>
			                    <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title">	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Location</label>
			                    <input type="text" class="form-control" name="job_location" id="job_location" placeholder="Location">	
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Qualification</label>
			                    
			                    <select class="form-control" id="job_qualification" name='job_qualification'>
				                    <option value='0'>Select</option>
				                    <?php foreach($qualarr as $k=>$v) {?>
				                    	<option value='<?php echo $k ?>'><?php echo $v ?></option>
				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Positions to be filled</label>
			                    
			                    <select class="form-control" id="no_positions" name='no_positions'>
				                    
				                    <?php for($l=1;$l<=20;$l++) {?>
				                    	<option value='<?php echo $l ?>'><?php echo $l ?></option>
				                    <?php } ?>
                  				</select>	
			                  </div>
			                  
			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-12">
			                    <label for="exampleInputEmail1">Job Description</label>
			                    <textarea class="form-control" rows="15" name="job_description" id="summernote" placeholder="Enter ..."></textarea>
			                  </div>

			              </div>

			              <div class="form-row">
			              	<div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Exp From (Years)</label>
			                    
			                    <select class="form-control" id="job_ex_frm" name='job_ex_frm'>
				                    <option value='0'>0</option>
				                    <?php for($x=1;$x<=40;$x++) {?>
				                    	<option value='<?php echo $x ?>'><?php echo $x ?></option>
				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-2">
			                    <label for="exampleInputEmail1">Exp To (Years)</label>
			                    <select class="form-control" id="job_ex_to" name='job_ex_to'>
				                    <option value='0'>0</option>
				                    <?php for($y=1;$y<=40;$y++) {?>
				                    	<option value='<?php echo $y ?>'><?php echo $y ?></option>
				                    <?php } ?>
                  				</select>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputPassword1">Valid From</label>
			                    <input type="text" class="form-control" id="valid_from" name="valid_from" readonly="readonly" placeholder="Valid From">
			                  </div>
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputPassword1">Valid To</label>
			                    <input type="text" class="form-control" id="valid_to" name="valid_to" readonly="readonly" placeholder="Valid To">
			                  </div>

			              </div>
			              
			              
			              <div class="form-row">
			              	<div class="form-group col-md-4">
			                    <label for="exampleInputPassword1">Document <sup>Any document related to a job can be uploaded. (PDF|DOC)</sup></label>
			                    <div class="custom-file mt-2">
				                        <input type="file" class="custom-file-input" name="document" id="document">
				                        <label class="custom-file-label" >Choose file</label>
				                      </div>	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">"To" Recipeint</label>
			                    <input type="text" class="form-control" name="to_mail" id="to_mail" value='hr@cygnetthotels.com' placeholder="To Recipeint">	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">"Cc" Recipients <sup>If needed, a comma separated list can be given</sup></label>
			                    <input type="text" class="form-control" name="cc_mail" id="cc_mail" placeholder="Cc Recipients">	
			                  </div>

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
              			</form>	




					</div>


				</div>


				<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Job Posts</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" id="shwdatatable">
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>