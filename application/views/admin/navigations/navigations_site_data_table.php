<?php
//print_r($pnav);
//exit;

?>

</style>
        <table class="table">
                  <!-- <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Navigation</th>
                      <th>Added On</th>
                      <th>Updated On</th>
                      <th>Added By</th>
                      <th>Updated By</th>
                      <th style="width: 40px">Status</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead> -->
                  <?php foreach($pnav as $pn){?>
                    <thead>
                      <tr>
                        <th colspan="9" style="background-color: rgba(0,0,0,.05);"><?php echo $pn['menu_name'] ?> (<?php echo $pn['priority'] ?>) | <a href="<?php echo base_url() ?>manage-site-navigations/edit/<?php echo base64_encode($pn['id']) ?>"><i class="fas fa-edit"></i></a> | <label class="switch">
                              <input type="checkbox" class="m" name="chk_active" id="p_<?php echo $pn['id'] ?>_<?php echo $pn['is_active'] ?>" value="1" <?php if($pn['is_active']==1) {?>checked="checked"<?php } ?>>
                              <span class="slider round"></span>
                            </label> | <i class="far fa-trash-alt delete" id="del_<?php echo $pn['id'] ?>"></i> </th>                      
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        
                        $results=$this->Sitenav_model->fetchsubmenu($pn['id']);
                        //print_r($results);
                        //exit;


                        if (count($results)) {
                          $i = 1;
                          $j=1;
                          foreach ($results as $recs) {
                      ?>
                        <tr>
                          <td><?php echo $i++ ?>.</td>
                          <td><?php echo $recs['menu_name'] ?></td>
                          <td>
                            <?php echo formatDateTime($recs['added_on']) ?>
                          </td>
                          <td>
                            <?php 
                                if($recs['updated_on']<>''){
                                    echo formatDateTime($recs['updated_on']);
                                }else{
                                  echo '--';
                                }

                             ?>
                            
                          </td>
                          <td>Admin</td>
                          <td>Admin</td>
                          <td>
                            <label class="switch">
                              <input type="checkbox" class="m" name="chk_active" id="p_<?php echo $recs['id'] ?>_<?php echo $recs['is_active'] ?>" value="1" <?php if($recs['is_active']==1) {?>checked="checked"<?php } ?>>
                              <span class="slider round"></span>
                            </label>
                          </td>
                          <td><a href="<?php echo base_url() ?>manage-site-navigations/edit/<?php echo base64_encode($recs['id']) ?>"><i class="fas fa-edit"></i></a></td>
                          
                          <td><i class="far fa-trash-alt delete" id="del_<?php echo $recs['id'] ?>"></i></td>
                        </tr>
                      <?php } }?> 
                    <?php } ?>  


                  </tbody>
                </table>