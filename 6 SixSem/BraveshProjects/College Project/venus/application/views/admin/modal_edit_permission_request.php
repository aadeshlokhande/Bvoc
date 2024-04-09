<?php echo form_open('admin/permission_requests/edit/' . $param2, array('data-parsley-validate' => 'true', 'name' => 'alumnus')); ?>
    <div class="form-group">
        <label><?php echo $this->lang->line('permission_requests'); ?></label>
		<select class="combobox" name="story_permission">
            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
		    <option value="1"><?php echo $this->lang->line('approve'); ?></option>
		    <option value="0"><?php echo $this->lang->line('reject'); ?></option>
        </select>
    </div>

	<button type="submit" class="btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>

<script>
	$(document).ready(function() {
		$('.combobox').combobox();
	});
</script>
