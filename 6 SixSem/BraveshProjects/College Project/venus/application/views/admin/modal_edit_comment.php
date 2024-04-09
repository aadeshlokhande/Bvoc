<?php echo form_open('admin/comment/edit/' . $param2, array('data-parsley-validate' => 'true', 'name' => 'alumnus')); ?>
    <div class="form-group">
        <label><?php echo $this->lang->line('comment'); ?></label>
        <p><?php echo $this->db->get_where('comment', array('comment_id' => $param2))->row()->content; ?></p>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('status'); ?></label>
		<select class="combobox" name="status">
            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
		    <option <?php if ($this->db->get_where('comment', array('comment_id' => $param2))->row()->status == 1) echo 'selected'; ?> value="1"><?php echo $this->lang->line('approve'); ?></option>
		    <option <?php if ($this->db->get_where('comment', array('comment_id' => $param2))->row()->status == 2) echo 'selected'; ?> value="2"><?php echo $this->lang->line('reject'); ?></option>
        </select>
    </div>

	<button type="submit" class="btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>

<script>
	$(document).ready(function() {
		$('.combobox').combobox();
	});
</script>
