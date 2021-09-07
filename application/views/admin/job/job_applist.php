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
                			<h3 class="card-title"><?php echo $sub_title ?> - <?php echo $jd['0']['job_title'] ?></h3>
              			</div>

              			<table class="table">
              			 <tr>
                          <td>#</td>
                          <td>Applicant</td>
                          <td>Details</td>
                          <td>Download Resume</td>
                          <td>Contacted</td>
                          <td>Interviewed</td>
                          <td>Hired</td>
                         </tr>
                  
                  <?php foreach($results as $pn){?>
                    <thead>
                      <tr>
                        <th colspan="9" style="background-color: rgba(0,0,0,.05);"><?php echo formatDateTime($pn['RECD_DATE'],1) ?>
                             
                            </label>  </th>                      
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        
                        $dataset=jobapplicationbydateandjobid($jobid,($pn['RECD_DATE']));
                        //print_r($results);
                        //exit;


                        if (count($dataset)) {
                          $i = 1;
                          $j=1;
                          foreach ($dataset as $recs) {
                      ?>
                        <tr>
                          <td><?php echo $i++ ?>.</td>
                          <td><?php echo $recs['candidate_name'] ?></td>
                          <td><?php echo $recs['mobile'] ?> | <?php echo $recs['email'] ?></td>
                          <td><a href='<?php echo base_url() ?>jobs/resumes/<?php echo $recs['resume'] ?>'><i class="far fa-file"></i>
</a></td>
                          
                          <td>
                            <label class="switch">
                              <input type="checkbox" class="cn" name="chk_active" id="c_<?php echo $recs['id'] ?>_<?php echo $recs['contacted'] ?>" value="1" <?php if($recs['contacted']==1) {?>checked="checked"<?php } ?>>
                              <span class="slider round"></span>
                            </label>
                            <?php if($recs['contacted']==1) {?>
                            <br>
                            <?php echo formatDateTime($recs['contact_date'],1) ?>
                            <?php } ?>
                          </td>
                          
                          <?php if($recs['contacted']==1) {?>
                              <td>
                                <label class="switch">
                                  <input type="checkbox" class="iv" name="chk_active" id="i_<?php echo $recs['id'] ?>_<?php echo $recs['interviewed'] ?>" value="1" <?php if($recs['interviewed']==1) {?>checked="checked"<?php } ?>>
                                  <span class="slider round"></span>
                                </label>
                                <?php if($recs['interviewed']==1) {?>
                                <br>
                                <?php echo formatDateTime($recs['interview_date'],1) ?>
                                <?php } ?>
                              </td>
                          <?php } else{?>
                            <td>--</td>
                          
                          <?php } ?>
                          <?php if(($recs['contacted']==1)&&($recs['interviewed']==1)) {?>
                              <td>
                                <label class="switch">
                                  <input type="checkbox" class="h" name="chk_active" id="h_<?php echo $recs['id'] ?>_<?php echo $recs['hired'] ?>" value="1" <?php if($recs['hired']==1) {?>checked="checked"<?php } ?>>
                                  <span class="slider round"></span>
                                </label>
                                <?php if($recs['hired']==1) {?>
                                <br>
                                <?php echo formatDateTime($recs['hire_date'],1) ?>
                                <?php } ?>
                              </td>
                          <?php } else {?>
                            <td>--</td>
                          <?php } ?>
                          
                          
                          <td><i class="far fa-trash-alt deleteapp" id="del_<?php echo $recs['id'] ?>"></i></td>
                        </tr>
                      <?php } }?> 
                    <?php } ?>  
                  </tbody>
                </table>




					</div>


				</div>


				


			</div>
		</div>
	</section>


</div>


<script src="<?php echo base_url() ?><?php echo adm_assets ?>/modules/<?php echo $jsfile ?>.js"></script>