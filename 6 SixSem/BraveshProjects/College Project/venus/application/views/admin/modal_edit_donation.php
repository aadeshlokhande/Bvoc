<?php echo form_open('admin/donations/edit/' . $param2, array('data-parsley-validate' => 'true', 'name' => 'update_text')); ?>
<div class="form-group">
    <label><?php echo $this->lang->line('alumnus'); ?></label>
    <select class="combobox" name="alumnus_id" data-parsley-required="true">
        <option value=""><?php echo $this->lang->line('select_alumnus'); ?></option>
        <?php
        $alumni = $this->security->xss_clean($this->db->get('alumnus')->result_array());
        foreach ($alumni as $alumnus) :
        ?>
            <option <?php if ($this->db->get_where('donation', array('donation_id' => $param2))->row()->alumnus_id == $alumnus['alumnus_id']) echo 'selected'; ?> value="<?php echo $alumnus['alumnus_id']; ?>"><?php echo $alumnus['name']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group">
    <label><?php echo $this->lang->line('amount'); ?></label>
    <input value="<?php echo $this->db->get_where('donation', array('donation_id' => $param2))->row()->amount; ?>" class="form-control" name="amount" placeholder="<?php echo $this->lang->line('amount_input_field'); ?>" data-parsley-required="true" data-parsley-type="digits" />
</div>
<div class="form-group">
    <label><?php echo $this->lang->line('donation_purpose'); ?></label>
    <select class="combobox" name="donation_purpose_id" data-parsley-required="true">
        <option value=""><?php echo $this->lang->line('select_donation_purpose'); ?></option>
        <?php
        $donation_purposes = $this->security->xss_clean($this->db->get_where('donation_purpose', array('status', 1))->result_array());
        foreach ($donation_purposes as $donation_purpose) :
        ?>
            <option <?php if ($this->db->get_where('donation', array('donation_id' => $param2))->row()->donation_purpose_id == $donation_purpose['donation_purpose_id']) echo 'selected'; ?> value="<?php echo $donation_purpose['donation_purpose_id']; ?>"><?php echo $donation_purpose['name']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group">
    <label><?php echo $this->lang->line('donation_via'); ?></label>
    <input value="<?php echo $this->db->get_where('donation', array('donation_id' => $param2))->row()->via; ?>" class="form-control" name="via" placeholder="<?php echo $this->lang->line('donation_via_field'); ?>" data-parsley-required="true" data-parsley-type="text" />
</div>
<div class="form-group">
    <label><?php echo $this->lang->line('status'); ?></label>
    <select class="combobox" name="status" data-parsley-required="true">
        <option value=""><?php echo $this->lang->line('select_status'); ?></option>
        <option <?php if ($this->db->get_where('donation', array('donation_id' => $param2))->row()->status == 0) echo 'selected'; ?> value="0"><?php echo $this->lang->line('due'); ?></option>
        <option <?php if ($this->db->get_where('donation', array('donation_id' => $param2))->row()->status == 1) echo 'selected'; ?> value="1"><?php echo $this->lang->line('donated'); ?></option>
    </select>
</div>

<button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>

<script>
    $(document).ready(function() {
        $('.combobox').combobox();
    });
</script>