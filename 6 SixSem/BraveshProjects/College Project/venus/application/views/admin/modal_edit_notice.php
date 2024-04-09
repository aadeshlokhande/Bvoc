<?php
	$notices_info = $this->security->xss_clean($this->db->get_where('notice', array('notice_id' => $param2))->result_array());
	foreach ($notices_info as $row):
?>
<?php echo form_open('admin/notices/edit/' . $row['notice_id'], array('data-parsley-validate' => 'true', 'name' => 'update_text')); ?>
	<div class="form-group">
		<label><?php echo $this->lang->line('title'); ?></label>
		<input value="<?php echo $row['title']; ?>" class="form-control" type="text" name="title" placeholder="<?php echo $this->lang->line('ph_notice_title'); ?>" data-parsley-required="true" />
	</div>
	<div class="form-group">
        <label><?php echo $this->lang->line('description'); ?></label>
        <textarea rows="10" style="resize: none" class="form-control" type="text" name="description" placeholder="<?php echo $this->lang->line('ph_notice_description'); ?>" data-parsley-required="true"><?php echo $row['description']; ?></textarea>
    </div>

	<button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>
<?php endforeach; ?>