<?php
$hid=base64_decode($this->uri->segment(3));

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

                    <form id='frmdish_add' name='frmdish_add' method='post' enctype="multipart/form-data" autocomplete="off">
                      <div class="card-body">
                        
                        <div class="alert alert-danger alert-dismissible" id="redalert" style="display:none;">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <p class="mb-0"><i class="icon fas fa-ban"></i></p>
                   
                        </div>
                        

                    <div class="form-row">
                        
                      <div class="form-group col-md-8">
                          <label for="exampleInputEmail1">Navigation Pages</label>
                          <select class="form-control" id="nav" name='nav'>
                            
                            <option value='0'>Select</option>
                            <?php foreach($hotelnavigation as $n) {?>
                              <option value='<?php echo $n['id'] ?>-<?php echo $hid ?>'><?php echo ucfirst($n['page_category']) ?></option>

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


        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Banners</h3>

                
              </div>
              <!-- /.card-header -->
              <div  id="shwdatatable">
                
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

<script>

        $("#nav").change(function(){
                //alert($('#nav').val());
                //jQuery(".lds-facebook").show();
                var parent_id=$('#nav').val();
                var splitid = parent_id.split("-");
                // Delete id
                var recordid = splitid[0];
                if(recordid>0){
                  $("#shwdatatable").show();
                }else{
                  $("#shwdatatable").hide();
                }
                $.ajax({
                url: base_url+'admin/hotels/unitmgmt/pagebannerlist',
                type: 'POST',
                data: { parent_id:parent_id},
                   beforeSend: function ( xhr ) {
              //Add your image loader here
              jQuery(".lds-facebook").show();
              },
                   success: function(html){
                       jQuery(".lds-facebook").hide();
                       $("#shwdatatable").html(html);

                    }
             });
            });

             $(document).on('click', '.m', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       var table = "cyg_hotel_page_category_banners";
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'admin/admin/updatestatus',
                                         type: 'POST',
                                         data: { id:recordid, value:value, table:table },
                                         success: function(response){
                                            // Remove row 
                                       alert('Status Updated');
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });  


</script>  
