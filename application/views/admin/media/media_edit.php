<?php
//print_r($results);

$tempfrom=$results[0]['date_of_publishing'];
$tempfrom=explode("-",$tempfrom);
$finalvalidfrom=$tempfrom[1].'/'.$tempfrom[2].'/'.$tempfrom[0];
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

              			<form id='frmmedia_edit' name='frmmedia_edit' method='post' enctype="multipart/form-data" autocomplete="off">
			                <div class="card-body">
			                	
			                	<div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                  				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                				</div>
			                	<div class="form-row">
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputEmail1">News Title</label>
			                    <input type="text" class="form-control" name="news_title" value='<?php echo $results[0]['news_title'] ?>' id="news_title" placeholder="News Title">	
			                  </div>
			                  
			                  <div class="form-group col-md-6">
			                    <label for="exampleInputFile">External URL</label>
			                    <div class="input-group">
			                      <input type="text" class="form-control" name="url" value='<?php echo $results[0]['url'] ?>' id="url" placeholder="External URL">
			                     
			                    </div>
			                  </div>
			              </div>

			              <div class="form-row">
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">News Source</label>
			                    <input type="text" class="form-control" name="source" value='<?php echo $results[0]['source'] ?>' id="source" placeholder="News Source">	
			                  </div>

			                  <div class="form-group col-md-4">
			                    <label for="exampleInputEmail1">Date of Publishing</label>
			                    <input type="text" class="form-control" readonly='readonly' value='<?php echo $finalvalidfrom ?>' name="date_of_publishing" id="date_of_publishing" placeholder="Date of Publishing">	
			                  </div>
			                  
			                  <div class="form-group col-md-4">
			                    <label for="exampleInputFile">News Thumb Image</label>
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
			                   <textarea class="form-control" rows="3" name="intro_text" id="intro_text" placeholder="Short Intro"><?php echo $results[0]['intro_text'] ?></textarea>
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
			                <input type='hidden' id='news_id' name='news_id' value='<?php echo base64_encode($results[0]['id']) ?>'>
              			</form>	




					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>