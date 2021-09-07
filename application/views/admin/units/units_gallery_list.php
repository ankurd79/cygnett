<?php
//print_r($restaurantlist);
$gallerycount=count($gallerylist);

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
            <h1><?php //echo $main_title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>dashboard">Home</a></li>
              <li class="breadcrumb-item active"><?php //echo $sub_title ?></li>
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
                			<h3 class="card-title" style="line-height: 220%;"><?php echo $hoteldata[0]['hotel_name'] ?> - Gallery </h3>
                      <span style="float:right"><a href='<?php echo base_url() ?>manage-unit-gallery/add/<?php echo base64_encode($hoteldata[0]['id']) ?>'><button type="button" class="btn bg-gradient-success">+ Add Photos</button></a> <a href='<?php echo base_url() ?>manage-unit/list/'><button type="button" class="btn bg-gradient-success">Unit Listing</button></a></span> 
            </div>
	
              			

            			
              <div class="card-body">
                <?php 
                  if($gallerycount==0){

                ?>
                <p>No Photos Added</p>
              <?php } else {?>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th> Image</th>
                      <th>Upload</th>
                      <th>Text</th>
                      <th style="width: 110px">Sequence</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <form id='frmgalleryedit' name='frmgalleryedit'  enctype="multipart/form-data" autocomplete="off">
                  <tbody>
                    <?php 
                    $i = 1;
                    foreach($gallerylist as $g) {
                      
                      ?>
                      <tr>
                        <td><?php echo $i++ ?>.</td>
                        
                        <td>
 
                          <img src="<?php echo base_url() ?>images/<?php echo folder_gallery_photos ?>/<?php echo $g['image'] ?>" style="width:200px; height:auto;" <?php if($g['is_active']==0) {?> class='img-deactive' <?php } ?>>
                        </td>

                        <td><input type="file" class="form-control" name="image[]" id="image"></td>
                  
                        <td>
                          <input type='text'name='text[]' class="form-control" value='<?php echo ucfirst($g['text']) ?>'>
                        </td>
                        <td>
                          <input type='text'name='sequence[]' class="form-control" value='<?php echo $g['sequence']?>'>
                        </td>
                        <td><i class="far fa-trash-alt delete" id='del_<?php echo $g['id'] ?>'></i></td>
                      </tr> 
                      <input type='hidden' name='photo_id[]' value='<?php echo $g['id'] ?>'>
                    
                    <?php } ?> 

                  </tbody>
                </table>
              <?php } ?>







              </div>

              <div class="card-footer">
                        <div class="container">
                          <div class="row">
                        <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary"></div>
                        
                    </div>
                    </div>
                      </div>

             </form>         

					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>

<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>

<script>

$(document).on('click', '.delete', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var deleteid = splitid[1];
                                     
                                        var txt;
                              var r = confirm("Are you sure of DELETING the record?");
                              if (r == true) {
                      // AJAX Request
                                           $.ajax({
                                             
                                             url: base_url+'api/units/unit/deletegalleryphoto',
                                             type: 'POST',
                                             data: { id:deleteid },
                                             success: function(response){
                                                // Remove row 
                                           alert('Record deleted');
                                           location.reload();
                                            }
                                           });  

                              } else {
                                alert("You've chosen NOT to delete the record!")
                              }
  

                                   });


</script>

