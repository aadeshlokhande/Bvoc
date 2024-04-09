<?php echo form_open('admin/manage_donation_purposes/edit/' . $param2, array('data-parsley-validate' => 'true', 'name' => 'alumnus')); ?>
<div class="form-group">
    <label><?php echo $this->lang->line('name'); ?></label>
    <input value="<?php echo $this->db->get_where('donation_purpose', array('donation_purpose_id' => $param2))->row()->name; ?>" class="form-control" type="text" name="name" placeholder="<?php echo $this->lang->line('donation_purpose_input'); ?>" data-parsley-required="true" />
</div>
<div class="form-group">
    <label><?php echo $this->lang->line('status'); ?></label>
    <select class="combobox" name="status">
        <option value=""><?php echo $this->lang->line('select_status'); ?></option>
        <option <?php if ($this->db->get_where('donation_purpose', array('donation_purpose_id' => $param2))->row()->status == 0) echo 'selected'; ?> value="0"><?php echo $this->lang->line('inactive'); ?></option>
        <option <?php if ($this->db->get_where('donation_purpose', array('donation_purpose_id' => $param2))->row()->status == 1) echo 'selected'; ?> value="1"><?php echo $this->lang->line('active'); ?></option>
    </select>
</div>

<button type="submit" class="btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>

<script>
    $(document).ready(function() {
        $('.combobox').combobox();
    });
</script>