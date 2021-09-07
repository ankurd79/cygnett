<?php
//print_r($selectedmetaofnav);


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
                			<h3 class="card-title" style="line-height: 220%;"><?php echo $hoteldata[0]['hotel_name'] ?> - Page Banners </h3>
                      <span style="float:right"> <a href='<?php echo base_url() ?>manage-unit/list/'><button type="button" class="btn bg-gradient-success">Unit Listing</button></a></span> 
            </div>
	
              			

            			
              <div class="card-body">
               
              
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Navigation</th>
                      <th>Banner 1</th>
                      <th>Banner 2</th>
                      <th>Banner 3</th>
                    </tr>
                  </thead>
                  <form id='frmgalleryedit' name='frmgalleryedit' method='post' enctype="multipart/form-data" autocomplete="off">
                  <tbody>
                    <?php 
                      $j=1;
                      foreach($hotelnavigation as $nav) {
                            $arr=getbannersofUnit($hoteldata[0]['id'],$nav['id']);
                            //print_r($arr);
                        ?>
                      <tr>
                        <td><?php echo $j++ ?></td>
                        <td><?php echo $nav['page_category'] ?></td>

                        <td style="width:20%;">
                          <input type='file' id='image' name='banner1[]' class='mb-2'>
                          <?php if(isset($arr['banner1'])){?>
                              <br>
                              <img src='<?php echo base_url() ?>images/<?php echo folder_unit_page_images ?>/<?php echo $arr['banner1'] ?>' class="img-fluid">

                         <?php } ?>
                         <br>   
                        </td>
                          
                        <td style="width:20%;">
                          <input type='file' id='image' name='banner2[]' class='mb-2'>
                          <?php if(isset($arr['banner2'])){?>
                              <br>
                              <img src='<?php echo base_url() ?>images/<?php echo folder_unit_page_images ?>/<?php echo $arr['banner2'] ?>' class="img-fluid">

                         <?php } ?> 
                        </td>
                        <td style="width:20%;">
                          <input type='file' id='image' name='banner3[]' class='mb-2'>
                          <?php if(isset($arr['banner3'])){?>
                              <br>
                              <img src='<?php echo base_url() ?>images/<?php echo folder_unit_page_images ?>/<?php echo $arr['banner3'] ?>' class="img-fluid">

                         <?php } ?> 
                        </td>
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
                      url:base_url+'api/units/unit/updateunitbanners',
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
                            title: ' Banner information added.'
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

