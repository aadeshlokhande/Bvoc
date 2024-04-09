<?php
$volunteer_info = $this->security->xss_clean($this->db->get_where('volunteer', array('volunteer_id' => $param2))->result_array());
foreach ($volunteer_info as $row) :
?>
    <?php echo form_open('admin/volunteers/edit/' . $row['volunteer_id'], array('data-parsley-validate' => 'true', 'name' => 'alumnus', 'id' => 'volunteer')); ?>
    <div class="form-group">
        <label><?php echo $this->lang->line('name'); ?></label>
        <input value="<?php echo $row['name']; ?>" class="form-control" type="text" name="name" placeholder="<?php echo $this->lang->line('ph_volunteer_name'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('username'); ?></label>
        <input value="<?php echo $row['username']; ?>" class="form-control" type="text" name="username" placeholder="<?php echo $this->lang->line('ph_volunteer_username'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('email'); ?></label>
        <input value="<?php echo $row['email']; ?>" class="form-control" type="text" name="email" placeholder="<?php echo $this->lang->line('ph_volunteer_email'); ?>" data-parsley-required="true" />
    </div>
    <?php if ($row['password'] == "") : ?>
        <div class="form-group">
            <label><?php echo $this->lang->line('password'); ?></label>
            <input type="text" name="password" id="password-indicator-visible" class="form-control m-b-5" data-parsley-required="true" />
        </div>
    <?php endif; ?>
    <div class="form-group">
        <label><?php echo $this->lang->line('mobile'); ?></label>
        <input value="<?php echo $row['mobile']; ?>" class="form-control" type="text" name="mobile" placeholder="<?php echo $this->lang->line('ph_volunteer_mobile'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('batch'); ?></label>
        <select class="combobox" name="batch">
            <option value=""><?php echo $this->lang->line('select_batch'); ?></option>
            <?php for ($start_year = date('Y') + 5; $start_year >= 1900; $start_year--) : ?>
                <option <?php if ($start_year == $row['batch']) echo 'selected'; ?> value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('profession'); ?></label>
        <select class="combobox" name="profession_id">
            <option value=""><?php echo $this->lang->line('select_profession'); ?></option>
            <?php
            $professions_info = $this->db->get('profession')->result_array();
            foreach ($professions_info as $profession) :
            ?>
                <option <?php if ($profession['profession_id'] == $row['profession_id']) echo 'selected'; ?> value="<?php echo $profession['profession_id']; ?>"><?php echo $profession['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('status'); ?></label>
        <select class="combobox" name="status" data-parsley-required="true">
            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
            <option <?php if ($row['status'] == 0) echo 'selected'; ?> value="0"><?php echo $this->lang->line('pending'); ?></option>
            <option <?php if ($row['status'] == 1) echo 'selected'; ?> value="1"><?php echo $this->lang->line('active'); ?></option>
            <option <?php if ($row['status'] == 2) echo 'selected'; ?> value="2"><?php echo $this->lang->line('cencel'); ?></option>
        </select>
    </div>

    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
    <?php echo form_close(); ?>
<?php endforeach; ?>

<script>
    $(document).ready(function() {
        $('#volunteer').parsley();
        FormPlugins.init();
    });
</script>