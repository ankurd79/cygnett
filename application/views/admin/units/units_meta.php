<?php
//print_r($selectedmetaofnav);
//print_r($hotelnavigation);
//exit;

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
                			<h3 class="card-title" style="line-height: 220%;"><?php echo $hoteldata[0]['hotel_name'] ?> - Meta Information </h3>
                      <span style="float:right"> <a href='<?php echo base_url() ?>manage-unit/list/'><button type="button" class="btn bg-gradient-success">Unit Listing</button></a></span> 
            </div>
	
              			

            			
              <div class="card-body">
               
              
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Navigation</th>
                      <th>Meta Title</th>
                      <th>Meta Description</th>
                      <th>Meta Keywords</th>
                    </tr>
                  </thead>
                  <form id='frmgalleryedit' name='frmgalleryedit' method='post' enctype="multipart/form-data" autocomplete="off">
                  <tbody>
                    <?php 
                      $j=1;
                      foreach($hotelnavigation as $nav) {
                            $arr=getmetadataofUnit($hoteldata[0]['id'],$nav['id']);
                            //print_r($arr);
                        ?>
                      <tr>
                        <td><?php echo $j++ ?></td>
                        <td><?php echo $nav['page_category'] ?></td>

                        <td><textarea class="form-control" rows="2" name="meta_title[]" placeholder="Meta Title for <?php echo $nav['page_category'] ?> page"><?php if(isset($arr['meta_title']))echo $arr['meta_title'] ?></textarea></td>
                  
                        <td>
                          <textarea class="form-control" rows="2" name="meta_description[]" placeholder="Meta Description for <?php echo $nav['page_category'] ?> page"><?php if(isset($arr['meta_description']))echo $arr['meta_description'] ?></textarea>
                        </td>
                        <td><textarea class="form-control" rows="2" name="meta_keywords[]" placeholder="Meta Keywords for <?php echo $nav['page_category'] ?> page"><?php if(isset($arr['meta_keywords']))echo $arr['meta_keywords'] ?></textarea></td>
                      </tr> 
                      <input type='hidden' name='navigation_id[]' value='<?php echo $nav['id'] ?>'>

                      <?php if(isset($arr['id'])){?><input type='hidden' name='record_id[]' value='<?php echo $arr['id'] ?>'> <?php } ?>

                      
                    <?php } ?>





                  </tbody>
                </table>
          







              </div>

              <div class="card-footer">
                        <div class="container">
                          <div class="row">
                        <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary"></div>
                        
                    </div>
                    </div>
                      </div>
                      <input type='hidden' name='hotel_id' value='<?php echo base64_encode($hoteldata[0]['id']) ?>'>

             </form>         

					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>



<script>

$("#frmgalleryedit").on('submit',(function(e) {
        //alert('hello');
              e.preventDefault();
              //if($("#frmgalleryedit").valid()){
                  $.ajax({
                      type:'POST',
                      cache: false,
                      contentType: false,
                      processData: false,
                      url:base_url+'api/units/unit/updateunitmetainfo',
                      data:new FormData(this),
                      beforeSend: function ( xhr ) {
                          //Add your image loader here
                           jQuery(".lds-facebook").show();
                      },
                      success:function(data){
                      //alert(data);
                            jQuery(".lds-facebook").hide();
                    //$("#shwdatatable").load(base_url+'fetch-brands');
                    if(data=='Item updated successfully.'){
                    
                    $(window).off("beforeunload");
                    $(function() {  

                          var Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 7000
                        });

                        Toast.fire({
                            icon: 'success',
                            title: ' Meta information added.'
                          })
                        });
                      location.reload();
                      /*
                      var delay = 3000;
                      var url = base_url+'manage-unit-meta-information/list/'+unit_id;
                      var timeoutID = setTimeout(function() {window.location.href = url;}, delay); 
                      */
                       
                    
                    
                  }
                          
                      },
                  error : function(XMLHttpRequest, textStatus, errorThrown) {
                      alert(textStatus);
                  }
              });
          //}
      }));


</script>

