<?php
    $album_info = $this->security->xss_clean($this->db->get_where('album', array('album_id' => $param2))->result_array());
    foreach ($album_info as $row):
?>
<?php echo form_open('admin/albums/edit/' . $row['album_id'], array('data-parsley-validate' => 'true', 'name' => 'update_text')); ?>
    <div class="form-group">
        <label><?php echo $this->lang->line('title'); ?></label>
        <input value="<?php echo $row['name']; ?>" class="form-control" type="text" name="name" placeholder="<?php echo $this->lang->line('ph_album_title'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('description'); ?></label>
        <textarea style="resize: none" class="form-control" rows="5" type="text" name="description" placeholder="<?php echo $this->lang->line('ph_album_description'); ?>"><?php echo $row['description']; ?></textarea>
    </div>

    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>
<?php endforeach; ?>
