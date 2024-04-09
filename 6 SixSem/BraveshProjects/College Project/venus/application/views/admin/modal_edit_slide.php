<?php
	$slider_info = $this->db->get_where('slide', array('slide_id' => $param2))->result_array();
	foreach ($slider_info as $row):
?>
<?php echo form_open_multipart('admin/slides/edit/' . $row['slide_id'], array('data-parsley-validate' => 'true', 'name' => 'slide')); ?>
	<div class="form-group">
		<label><?php echo $this->lang->line('name'); ?></label>
		<input value="<?php echo $row['image_name']; ?>" class="form-control" type="text" name="image_name" placeholder="<?php echo $this->lang->line('ph_slide_name'); ?>" data-parsley-required="true" />
	</div>
    <div class="form-group">
        <label><?php echo $this->lang->line('status'); ?></label>
		<select class="combobox" name="status">
            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
            <option <?php if ($row['status'] == 'Show') echo 'selected'; ?> value="Show"><?php echo $this->lang->line('show'); ?></option>
		    <option <?php if ($row['status'] == 'Hide') echo 'selected'; ?> value="Hide"><?php echo $this->lang->line('hide'); ?></option>
        </select>
    </div>

	<button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>
<?php endforeach; ?>

<script>
	$(document).ready(function() {
		$('.combobox').combobox();
	});
</script>
