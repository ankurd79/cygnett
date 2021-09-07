<?php
//print_r($brandlist);
//exit;
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

<form id='frm' name='frm' method='post' enctype="multipart/form-data" autocomplete="off">
                      <div class="card-body">
                     
                   
                        <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Brands</th>
                      <th>Sequence</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if (count($brandlist)) {
                        $i = 1;
                        $j=1;
                        foreach ($brandlist as $recs) {
                    ?>
                      <tr>
                        <td><?php echo $i++ ?>.</td>
                        <td>
                           <?php echo $recs['brand_name'] ?> 
                        </td>
                        <td><input type="text" class="form-control" name="sequence[]" id="sequence" placeholder="sequence" value="<?php echo $recs['sequence'] ?>"></td>
                        <input type='hidden' name='id[]' id='id' value='<?php echo $recs['id'] ?>'>
                      </tr>
                      
                    <?php } }?> 
                  </tbody>
                </table>
                        
                      </div>
                      <!-- /.card-body -->
                      <?php if($brandlist){?>  
                      <div class="card-footer">
                        <div class="container">
                          <div class="row">
                        <div class="col-md-12 text-center"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary swalDefaultSuccess"></div>


                        
                       
                    </div>
                    </div>
                      </div>
                      <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
                    </form> 
                    <?php }  ?>
                    </div>


        </div>


        


      </div>
    </div>
  </section>


</div>
<script>

  $("#frm").validate({
                      rules: {
                            
                          'sequence[]': {
                              required: true,
                              minlength: 1,
                              maxlength: 2,
                              numeric:true
                          },

                          
                          
                      
                      },
                  
                      messages: {
                          
                          
                          'sequence[]': {
                              required: "Specify sequence",
                              minlength: jQuery.validator.format("At least {0} characters required!"),
                              maxlength: jQuery.validator.format("A maximum of 2 characters allowed.")
                          },
                          
                          
     
                      },
                  
                  });

$("#frm").on('submit',(function(e) {
        //alert('hello');
              e.preventDefault();
              if($("#frm").valid()){
                  $.ajax({
                      type:'POST',
                      cache: false,
                      contentType: false,
                      processData: false,
                      url:base_url+'api/brands/brand/updatebrandsequence',
                      data:new FormData(this),
                      beforeSend: function ( xhr ) {
                          //Add your image loader here
                           jQuery(".lds-facebook").show();
                      },
                      success:function(data){
                      //alert(data);
                            jQuery(".lds-facebook").hide();
                    //$("#shwdatatable").load(base_url+'fetch-brands');
                    if(data=='Sequence updated.'){
                    
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
                            title: ' Sequence updated.'
                          })
                        });
                      //location.reload();
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
          }
      }));




</script>