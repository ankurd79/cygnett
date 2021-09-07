<?php $this->load->view('site/navpages/carousel'); 
//print_r($joblist);

?>
<section class="overview-container">
        <div class="container inner-page-pad pt-3">
            <div class="col-md-10 offset-md-1"> 
            <?php
                	    
                	    $p=getparentnav($details['parent_id']);
                	    //print_r($p);
                	    ?>
            <div class="breadcrumb"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1"> <span class="pl-1"><?php echo $p['menu_name'] ?></span> > <span class="pl-1"><?php echo $details['menu_name'] ?></span></div>
          <div class="row mb-3">          
          <div class="col-md-12"> 
                  <h3 class="mb-2"><?php echo $details['menu_name']  ?></h3>                 
                  </div>
                  </div>
          <div class="row">
            <div class="col-lg-12"> 
                <p>At the heart of every great change is a great human. If you have ideas, ingenuity and a passion for making a difference, come and be a part of our team.</p>              
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget. Suspendisse potenti. Curabitur euismod facilisis neque, eu malesuada diam finibus non. Nullam nec vehicula leo. Morbi porta ante eu feugiat mollis.</p>-->
            </div>            
          </div>


           <div class="row pb-4 mt-4">
              <div class="col-md-8">
                <div >
                  <?php
                    if($joblist){
                  ?>
                  <h4 class="mt-2 mb-2"><strong>Current Openings</strong></h4>

                  <div class="accordion accordion-modern accordion-modern-grey-scale-1 without-bg mt-4 career" id="accordion11">
                    <?php 
                    $i=0;
                    foreach($joblist as $j) {
                        $i++;

                        
                      ?>
                    
                    <div class="card card-default mb-2">
                      <div class="card-header">
                        <h4 class="card-title m-0">
                          <a class="accordion-toggle text-3" data-toggle="collapse" data-parent="#accordion11" href="#collapse11<?php echo $i ?>">
                            <strong><?php echo $j['job_title'] ?></strong>
                          </a>
                        </h4>
                      </div>
                      <div id="collapse11<?php echo $i ?>" class="collapse <?php if($i==1) {?>show<?php } ?>">
                        <div class="card-body mt-3">
                          <p class="mb-0 pb-0"><strong>Location:</strong> <?php echo $j['job_location'] ?></p>
                          <p class="mb-0 pb-0"><strong>Qualification:</strong>
                            <?php
                              $q=qualification();
                              foreach($q as $k=>$v){
                                if($k==$j['job_qualification']){
                                  echo $v;
                                }
                              }


                            ?>


                          </p>
                          <p class="mb-0 pb-0"><strong>Experience:</strong>

                            <?php
                              if($j['job_ex_to']>0){
                                echo $j['job_ex_frm'].' - '.$j['job_ex_to']." years of experience";
                              }else{
                                echo $j['job_ex_frm']." + years of experience";
                              }
                            ?>
                           
                          </p>
                          <p><strong>No of positions:</strong>
                            <?php echo $j['no_positions'] ?>
                           </p> 
                          <p><?php echo htmlspecialchars_decode($j['job_description']) ?></p>
                          <?php if($j['job_validity_frm']) {?>
                          <p class="text-muted mb-0 pb-0">Posted On : <?php echo formatDateTime($j['job_validity_frm'],1) ?></p>
                        <?php } else {?>
                              <p class="text-muted mb-0 pb-0">Posted On : <?php echo formatDateTime($j['added_on'],1) ?></p>
                        <?php } ?>
                          <?php if($j['job_validity_to']) {?>
                            <p class="text-muted">Expires On : <?php echo formatDateTime($j['job_validity_to'],1) ?></p>
                          <?php } ?>
                          <button class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#applyjobModal" data-id="<?php echo $j['job_title'] ?>~<?php echo $j['id'] ?>">Apply for this Job</button>
                          <?php if($j['document']<>'--') {?>
                            <a href="<?php echo base_url()."".folder_jobs."/hr_docs".'/'.$j['document'] ?>" target='_blank'><button type="button" class="btn btn-primary btn-sm mb-2">Download Job Profile</button></a>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ?>
                    </div>

                  <?php } else{?> 
                    <p class="mt-2 mb-2"><strong>Sorry! There are no openings at the moment. Please check back later.</strong></p>

                  <?php } ?>  


                    
                  
                
                </div>

              </div>
              <div class="col-md-4">                                                    
                    <div class="pb-2">
                      <img alt="" class="img-fluid" src="front/img/hotel4.jpg" loading='lazy'>
                    </div>
                  <div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
                    <!--<section class="toggle active">
                      <label>Our Benefits</label>
                      <div class="toggle-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>
                      </div>
                    </section>-->
                    <section class="toggle active">
                      <label>Our Culture</label>
                      <div class="toggle-content">
                        <p>Cygnett is bringing India to the World through Indian Heritage concept "Atithi Devo Bhava" meaning "Guest is God" is to treat tourists/guests.</p>
                      </div>
                    </section>
                    <section class="toggle">
                      <label>Our Values</label>
                      <div class="toggle-content">
                        <p>Cygnett Hotels & Resorts is committed to a set of principles that define our company identity not just in name but also truly in form.</p>
                      </div>
                    </section>
                    
                  </div>                
              </div>
            </div>
                </div>
          </div>
      </section>      

        <!-- Brand page content ends here -->
      </div>  

      <!-- Modal for Apply Job -->
<div class="modal fade" id="applyjobModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="formModalLabel"><span id="jname"></span></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">

                          <div class="alert alert-success text-center alert-dismissible" id="msgdiv" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>You have successfully applied to the job!</strong>
                        </div>

                        <div class="alert alert-danger text-center alert-dismissible" id="errordiv1" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>File size shouldn't exceed 3 MB!</strong>
                        </div>

                        <div class="alert alert-danger text-center alert-dismissible" id="errordiv2" style="display:none;font-size: 11px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Invalid File Format!</strong>
                        </div>


                          <form id="frm-apply" name='frm-apply' class="mb-4" method='post' enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group row align-items-center">
                              <label class="col-sm-4 text-left text-sm-right mb-0">Name</label>
                              <div class="col-sm-8">
                                <input type="text" name="fname" id='fname' class="form-control" placeholder="Type your name" required/>
                              </div>
                            </div>
                            <div class="form-group row align-items-center">
                              <label class="col-sm-4 text-left text-sm-right mb-0">Email</label>
                              <div class="col-sm-8">
                                <input type="text" name="email" id='email' class="form-control" placeholder="Type your email" required/>
                              </div>
                            </div>
                            <div class="form-group row align-items-center">
                              <label class="col-sm-4 text-left text-sm-right mb-0">Mobile</label>
                              <div class="col-sm-8">
                                <input type="text" name="mobile" id='mobile' class="form-control" placeholder="Type your Mobile Number" required/>
                              </div>
                            </div>
                            <div class="form-group row align-items-center">
                              <label class="col-sm-4 text-left text-sm-right mb-0">Upload CV</label>
                              <div class="col-sm-8">
                                <input type="file" class="form-control-file" id="uploaded_file" name='uploaded_file'>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-4 text-left text-sm-right mb-0">Cover Letter</label>
                              <div class="col-sm-8">
                                <textarea rows="3" name='coverletter' id='coverletter' class="form-control" placeholder="Write a small profile" ></textarea>
                              </div>
                              <input type="hidden" id="jobid" name="jobid" value="">
                            </div>
                          
                        </div>
                        <div class="modal-footer text-center">                          
                          <input type="submit" id="submit" name="submit" value="Apply Now" class="btn btn-primary">
                        </div>
                        <div class="lds-facebook" style="display:none;"><div></div><div></div><div></div></div>
                        </form>
                      </div>
                    </div>
                  </div>

                  
<!-- Modal For Apply Job -->