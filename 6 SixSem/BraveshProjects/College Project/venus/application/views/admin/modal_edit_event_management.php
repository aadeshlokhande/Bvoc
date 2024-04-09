<?php $volunteers = $this->security->xss_clean($this->db->get_where('event_management', array('event_management_id' => $param2))->row()->volunteers); ?>
<?php echo form_open('admin/manage_events/edit/' . $param2, array('data-parsley-validate' => 'true', 'name' => 'event')); ?>
    <div class="form-group">
        <label><?php echo $this->lang->line('assign_volunteers'); ?></label>
        <select class="multiple-select2 form-control" multiple="multiple" name="volunteers[]" style="width: 100%">
        <?php
        	$this->db->where('status', 1);
        	$volunteers_info = $this->security->xss_clean($this->db->get('volunteer')->result_array());
        	foreach ($volunteers_info as $volunteer):
        ?>
            <option <?php foreach (explode(",", $volunteers) as $key => $value) {if ($value == $volunteer['volunteer_id']) echo 'selected';} ?> value="<?php echo $volunteer['volunteer_id']; ?>">
            	<?php echo $volunteer['name']; ?>
            </option>
        <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>

<script>
	$('select').select2({
        dropdownParent: $("#modal_ajax")
    });
</script>
