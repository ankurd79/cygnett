<?php
#print_r($salutation);

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
                			<h3 class="card-title">Cygnett Units <?php //echo $sub_title ?></h3>
              			</div>
	
              			

            			
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><i class="fas fa-hotel"></i> Unit</th>
                    <th><i class="fas fa-bed"></i> Rooms</th>
                    <th><i class="fas fa-users"></i> Banquet</th>
                    <th><i class="fas fa-utensils"></i> Restaurant</th>
                    <th><i class="far fa-images"></i> Gallery</th>
                    <th><i class="far fa-images"></i> Meta Info.</th>
                    <th><i class="far fa-images"></i> Page Banners</th>
                    <th><i class="far fa-images"></i> Offers</th>
                    <th>Status</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($results as $r){?>
                    <tr>
                      <td><a href='<?php echo base_url() ?>manage-unit/edit/<?php echo base64_encode($r['id']) ?>'><?php echo $r['hotel_name'] ?></a> <br><span><i class="fas fa-map-marker-alt"></i> <?php echo $r['location'] ?>, <?php echo $r['name'] ?></span>
                          <?php if($r['coming_soon']==0) {?>
                          <br>
                         <a href="<?php echo urlgeneratorunitnav('unit-overview',''.$r['nicename'].'/'.$r['location'].'/'.$r['hotel_name'].'',1,base64_encode($r['id'])) ?>" target='_blank'>view</a>
                         <?php } ?>


                      </td>
                      <td>
                        <?php if($r['coming_soon']==0) {?>
                        <a href='<?php echo base_url() ?>manage-unit-room/list/<?php echo base64_encode($r['id']) ?>'>Manage Rooms</a> 
                        <?php 
                        if(count($this->Unit_model->getroomsofunit($r['id']))>0){
                        ?>
                        <span><i class="fas fa-check"  style="color:#28a745;"></i></span>
                        <?php } ?>
                      <?php } else{?>
                          Sequence<br>
                          <input type="text" name="seq" size='3'class='sc' id="seq_<?php echo $r['id'] ?>" value='<?php echo $r['sequence'] ?>'>

                      <?php } ?>
                      </td>
                      <td>
                        <?php if($r['coming_soon']==0) {?>
                        <a href='<?php echo base_url() ?>manage-unit-banquet/list/<?php echo base64_encode($r['id']) ?>'>Manage Banquets</a>
                        <?php 
                        if(count($this->Unit_model->getbanquetsofunit($r['id'],''))>0){
                        ?>
                        <span><i class="fas fa-check"  style="color:#28a745;"></i></span>
                        <?php } ?>
                      <?php } ?>

                      </td>
                      <td>
                        <?php if($r['coming_soon']==0) {?>
                        <a href='<?php echo base_url() ?>manage-unit-restaurant/list/<?php echo base64_encode($r['id']) ?>'>Manage Restaurants</a>
                        <?php 
                        if(count($this->Unit_model->getrestaurantsofunit($r['id'],''))>0){
                        ?>
                        <span><i class="fas fa-check"  style="color:#28a745;"></i></span>
                        <?php } ?>
                      <?php } ?>
                      </td>
                      <td>
                        <?php if($r['coming_soon']==0) {?>
                        <a href='<?php echo base_url() ?>manage-unit-gallery/list/<?php echo base64_encode($r['id']) ?>'>Manage Gallery</a>
                        <?php 
                        if(count($this->Unit_model->getgalleryofunit($r['id'],''))>0){
                        ?>
                        <span><i class="fas fa-check"  style="color:#28a745;"></i></span>
                        <?php } ?>
                      <?php } ?>
                      </td>
                      <td>
                        <?php if($r['coming_soon']==0) {?>
                        <a href='<?php echo base_url() ?>manage-unit-meta-information/list/<?php echo base64_encode($r['id']) ?>'>Manage Meta Information</a>
                        <?php 
                        if(count($this->Unit_model->getmetadataofUnit($r['id'],''))>0){
                        ?>
                        <span><i class="fas fa-check"  style="color:#28a745;"></i></span>
                        <?php } ?>
                      <?php } ?>
                      </td>
                      <td>
                        <?php if($r['coming_soon']==0) {?>
                        <a href='<?php echo base_url() ?>manage-unit-page-banners/list/<?php echo base64_encode($r['id']) ?>'>Manage Page Banners</a>
                        <?php 
                        $a=getbannersofUnit($r['id'],'');
                        if($a){
                          echo "<span><i class='fas fa-check'  style='color:#28a745;''></i></span>";
                        }
                        ?>
                      <?php } ?>
                      </td>
                      <td>
                        <?php if($r['coming_soon']==0) {?>
                        <a href='<?php echo base_url() ?>manage-unit-offers/list/<?php echo base64_encode($r['id']) ?>'>Manage Offers</a>
                        <?php 
                        if(count($this->Unit_model->getofferofunit($r['id'],''))>0){
                        ?>
                        <span><i class="fas fa-check"  style="color:#28a745;"></i></span>
                        <?php } ?>
                      <?php } ?>
                      </td>
                      <td>
                        <?php if($r['coming_soon']==0) {?>
                        <?php
                        if((count($this->Unit_model->getroomsofunit($r['id'],''))>0)&&(count($this->Unit_model->getrestaurantsofunit($r['id'],''))>0)&&(count($this->Unit_model->getgalleryofunit($r['id'],''))>0)){
                        ?>

                        <label class="switch">
                            <input type="checkbox" class="m" name="chk_active" id="p_<?php echo $r['id'] ?>_<?php echo $r['is_active'] ?>" value="1" <?php if($r['is_active']==1) {?>checked="checked"<?php } ?>>
                            <span class="slider round"></span>
                          </label>


                      <?php } else { ?>

                        --
                      <?php } ?>  
                    <?php } ?>
                      </td>                   
                    </tr>
                <?php } ?>
                  
                  
                </table>
              </div>



					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?><?php echo adm_assets ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });




                              $(document).on('click', '.m', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var value = splitid[2];
                                       
                                       //var table = "cyg_cuisines";
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'api/units/unit/updatehotelandassociatedSTS',
                                         type: 'POST',
                                         data: { id:recordid, value:value},
                                         success: function(response){
                                            // Remove row 
                                       alert('Status Updated');
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });



                                    $(document).on('keyup', '.sc', function(){
                                       var el = this;
                                       var id = this.id;
                                       var splitid = id.split("_");
                                    
                                       // Delete id
                                       var recordid = splitid[1];
                                       var currentval=$(this).val();
                                       var final=recordid+"_"+currentval;
                                      
                                       //alert(value);
                                         // AJAX Request
                                       $.ajax({
                                         url: base_url+'api/units/unit/updatesequence',
                                         type: 'POST',
                                         data: { id:final},
                                         success: function(response){
                                            if(response=='1'){
                                            alert('Status Updated');
                                          }else{
                                            alert('Invalid Input');
                                          }
                                       
                                       
                                        }
                                       });
                                       
                                    
                                     });












</script>