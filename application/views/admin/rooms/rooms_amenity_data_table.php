<?php
//print_r($results);
?>

</style>
        <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Amenity</th>
                      <th>Image</th>
                      <th>Upload</th>
                     
                      <th style="width: 40px">Status</th>
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
                        <td><input type="text" class="form-control" name="room_amenityy[]" id="room_amenityy" placeholder="Room Amenities" value="<?php echo $recs['room_amenity'] ?>"></td>
                        <td>
                           <i class="fas <?php echo $recs['image_icon'] ?>"></i>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="image_icon[]" id="image_icon" placeholder="Image Icon" value="<?php echo $recs['image_icon'] ?>">
                          
                        </td>
                       
                        <td>
                          <label class="switch">
                            <input type="checkbox" class="m" name="chk_active" id="p_<?php echo $recs['id'] ?>_<?php echo $recs['is_active'] ?>" value="1" <?php if($recs['is_active']==1) {?>checked="checked"<?php } ?>>
                            <span class="slider round"></span>
                          </label>
                        </td>
                        
                        <td><i class="far fa-trash-alt delete" id="del_<?php echo $recs['id'] ?>"></i></td>
                      </tr>
                      <input type='hidden' name='amenity_id[]' id='amenity_id' value='<?php echo $recs['id'] ?>'>
                    <?php } }?> 
                  </tbody>
                </table>