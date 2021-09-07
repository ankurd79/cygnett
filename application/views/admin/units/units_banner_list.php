<?php
//print_r($homebannerlist);
$totalbanners=count($homebannerlist);
$loopbanners=4-$totalbanners;
?>


<form id='frm' name='frm' method='post' enctype="multipart/form-data" autocomplete="off">
                      <div class="card-body">
                     
                   <?php if (count($homebannerlist)>0) {?>      
                    <table class="table">
                        <thead>
                          <tr>
                                <th style="width: 10px">#</th>
                                <th style="width: 10%">Web Banner</th>
                               <th style="width: 30%">&nbsp;</th>
                                <th style="width: 10%">Mobile Banner</th>
                                <th style="width: 30%">&nbsp;</th>
                               
                                <th style="width: 10px">Action</th>
                          </tr>
                        </thead>

                  
                          <?php 
                            $i=1;
                          foreach($homebannerlist as $lst) {?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td>
                                  <img src="<?php echo base_url() ?>images/<?php echo folder_unit_page_images ?>/<?php echo $lst['banner_image'] ?>" style="width:100%; height:auto;">
                                </td>
                                <td >
                                  <input type="file"  name="banner_image[]" id="banner_image1">
                                </td>
                                <td>
                                  <?php if($lst['mobile_banner_image']) {?>
                                  <img src="<?php echo base_url() ?>images/<?php echo folder_unit_page_images ?>/<?php echo $lst['mobile_banner_image'] ?>" style="width:100%; height:auto;">
                                <?php } ?>

                                </td>
                                <td>
                                  <input type="file"  name="mobile_banner_image[]" id="banner_image1">
                                </td>
                                
                                <td>
                                  <label class="switch">
                                        <input type="checkbox" class="m" name="chk_active" id="p_<?php echo $lst['id'] ?>_<?php echo $lst['is_active'] ?>" value="1" <?php if($lst['is_active']==1) {?>checked="checked"<?php } ?>>
                                        <span class="slider round"></span>
                                      </label>
                                </td>
                                <input type='hidden' name='banner_id[]' value='<?php echo $lst['id'] ?>'>
                            </tr>
                          <?php } ?>
                  

                      </table>
                  <?php } ?>




                  <?php if($loopbanners==10) {?>  
                    <div class="form-row">
                      
                      <div class="form-group col-md-5">
                        
                        <?php for($a=0;$a<10;$a++) {?>
                          <div class="custom-file mt-2">
                                <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image1">
                                <label class="custom-file-label" >Choose file</label>
                              </div>
                          <?php } ?>
                            
                      </div>

                      <div class="form-group col-md-5">
                        
                        <?php for($a=0;$a<10;$a++) {?>
                          <div class="custom-file mt-2">
                                <input type="file" class="custom-file-input" name="mobile_banner_image[]" id="mobile_banner_image">
                                <label class="custom-file-label" >Choose file</label>
                              </div>
                          <?php } ?>
                            
                      </div>

                      
                      
                    </div>
                    <?php } else { ?>
                        <div class="form-row">
                        <div class="form-group col-md-5">
                        
                          <?php for($a=0;$a<$loopbanners;$a++) {?>
                            <div class="custom-file mt-2">
                                  <input type="file" class="custom-file-input" name="banner_image[]" id="banner_image1">
                                  <label class="custom-file-label" >Choose file</label>
                                </div>
                            <?php } ?>
                            
                         </div>

                         <div class="form-group col-md-5">
                        
                        <?php for($b=0;$b<$loopbanners;$b++) {?>
                          <div class="custom-file mt-2">
                                <input type="file" class="custom-file-input" name="mobile_banner_image[]" id="mobile_banner_image">
                                <label class="custom-file-label" >Choose file</label>
                              </div>
                          <?php } ?>
                            
                      </div>

                      
                      </div>      


                   <?php } ?>   

                   
                        
                        
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <div class="container">
                          <div class="row">
                        <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary swalDefaultSuccess"></div>
                        <input type='hidden' id='page_category_id' name='page_category_id' value='<?php echo base64_encode($page_category_id) ?>'>
                        <input type='hidden' id='hotel_id' name='hotel_id' value='<?php echo base64_encode($hotel_id) ?>'>
                       
                    </div>
                    </div>
                      </div>
                      <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
                    </form> 

<script>

$("#frm").on('submit',(function(e) {
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
                    if(data=='Banner added.'){
                    
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
                            title: ' Banner added.'
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