<?php
//print_r($roomlistcount);
$roomcount=count($roomlistcount);

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
                			<h3 class="card-title" style="line-height: 220%;"><?php echo $hoteldata[0]['hotel_name'] ?> - Rooms </h3>
                      <span style="float:right"><a href='<?php echo base_url() ?>manage-unit-room/add/<?php echo base64_encode($hoteldata[0]['id']) ?>'><button type="button" class="btn bg-gradient-success">+ Add Rooms</button></a> <a href='<?php echo base_url() ?>manage-unit/list/'><button type="button" class="btn bg-gradient-success">Unit Listing</button></a></span> 
            </div>
	
              			

            			
              <div class="card-body">
                <?php 
                  if($roomcount==0){

                ?>
                <p>No Rooms Added</p>
              <?php } else {?>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Room Image</th>
                      <th>Room Name</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $i = 1;
                    foreach($roomlistcount as $rooms) {
                      
                      ?>
                      <tr>
                        <td><?php echo $i++ ?>.</td>
                        <?php
                       $arr=getroomrepresantationimage($rooms['id']);
                        ?>
                        <td><img src="<?php echo base_url() ?>images/room_images/<?php echo $arr['image'] ?>" style="width:200px; height:auto;"></td>
                        <td>
                          <?php echo ucfirst($rooms['room_type']) ?>
                        </td>
                        <td><a href="<?php echo base_url() ?>manage-unit-room/edit/<?php echo base64_encode($rooms['hotel_id']) ?>/<?php echo base64_encode($rooms['id']) ?>"><i class="far fa-edit"></i></a> | <i class="far fa-trash-alt delete" id='del_<?php echo $rooms['id'] ?>'></i></td>
                      </tr> 
                    <?php } ?> 

                  </tbody>
                </table>
              <?php } ?>





              </div>



					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


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
                                             
                                             url: base_url+'api/units/unit/deleteroom',
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

