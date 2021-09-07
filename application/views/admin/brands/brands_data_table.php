<?php
//print_r($results);
?>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 18px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 12px;
  width: 12px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #8DB39E;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
        <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Brand</th>
                      <th>Added On</th>
                      <th>Updated On</th>
                      <th>Added By</th>
                      <th>Updated By</th>
                      <th style="width: 40px">Status</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if (count($results)) {
                        $i = 1;
                        $j=1;
                        foreach ($results as $recs) {
                    ?>
                      <tr>
                        <td><?php echo $i++ ?>.</td>
                        <td><?php echo $recs['brand_name'] ?></td>
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
                        <td><a href="<?php echo base_url() ?>manage-brands/edit/<?php echo base64_encode($recs['id']) ?>"><i class="fas fa-edit"></i></a></td>
                        <!--<td class='delete' id='del_<?php echo $recs['id'] ?>'>X</td>-->
                        <td><i class="far fa-trash-alt delete" id="del_<?php echo $recs['id'] ?>"></i></td>
                      </tr>
                    <?php } }?> 
                  </tbody>
                </table>