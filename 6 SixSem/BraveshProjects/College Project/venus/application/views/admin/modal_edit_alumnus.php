<?php echo form_open_multipart('admin/alumni/edit/' . $param2, array('data-parsley-validate' => 'true', 'name' => 'alumnus', 'id' => 'alumnus')); ?>
<?php
$alumnus_info = $this->security->xss_clean($this->db->get_where('alumnus', array('alumnus_id' => $param2))->result_array());
foreach ($alumnus_info as $alumnus) :
?>
    <div class="form-group">
        <label><?php echo $this->lang->line('name'); ?></label>
        <input value="<?php echo $alumnus['name']; ?>" class="form-control" type="text" name="name" placeholder="<?php echo $this->lang->line('ph_alumnus_name'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('username'); ?></label>
        <input value="<?php echo $alumnus['username']; ?>" class="form-control" type="text" name="username" placeholder="<?php echo $this->lang->line('ph_alumnus_username'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('email'); ?></label>
        <input value="<?php echo $alumnus['email']; ?>" class="form-control" type="text" name="email" placeholder="<?php echo $this->lang->line('ph_alumnus_email'); ?>" data-parsley-required="true" />
    </div>
    <?php if ($alumnus['password'] == "") : ?>
        <div class="form-group">
            <label><?php echo $this->lang->line('password'); ?></label>
            <input type="text" name="password" id="password-indicator-visible" class="form-control m-b-5" data-parsley-required="true">
        </div>
    <?php endif; ?>
    <div class="form-group">
        <label><?php echo $this->lang->line('date_of_birth'); ?></label>
        <input value="<?php if ($alumnus['dob']) echo date('m/d/Y', $alumnus['dob']); ?>" type="text" name="dob" class="form-control" id="datepicker-default" placeholder="mm/dd/yyyy" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('batch'); ?></label>
        <select class="combobox" name="batch">
            <option value=""><?php echo $this->lang->line('select_batch'); ?></option>
            <?php for ($start_year = date('Y'); $start_year >= 1900; $start_year--) : ?>
                <option <?php if ($alumnus['batch'] == $start_year) echo 'selected'; ?> value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
            <?php endfor; ?>
        </select>
    </div>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('mobile_number'); ?></label>
        <input value="<?php echo $alumnus['mobile_number']; ?>" class="form-control" type="text" name="mobile_number" placeholder="<?php echo $this->lang->line('ph_alumnus_mobile'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('location'); ?></label>
        <select class="combobox" name="location_id">
            <option value=""><?php echo $this->lang->line('select_location'); ?></option>
            <?php
            $location_info = $this->db->get('location')->result_array();
            foreach ($location_info as $location) :
            ?>
                <option <?php if ($alumnus['location_id'] == $location['location_id']) echo 'selected'; ?> value="<?php echo $location['location_id']; ?>"><?php echo $location['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('personal_website'); ?></label>
        <input value="<?php echo $alumnus['website']; ?>" class="form-control" type="text" name="website" placeholder="<?php echo $this->lang->line('ph_alumnus_webstie'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('short_biography'); ?></label>
        <textarea maxlength="181" style="resize: none" rows="5" class="form-control" type="text" name="short_bio" placeholder="<?php echo $this->lang->line('ph_alumnus_short_bio'); ?>"><?php echo $alumnus['short_bio']; ?></textarea>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('profession'); ?></label>
        <select class="combobox" name="profession_id">
            <option value=""><?php echo $this->lang->line('select_profession'); ?></option>
            <?php
            $professions_info = $this->db->get('profession')->result_array();
            foreach ($professions_info as $profession) :
            ?>
                <option <?php if ($alumnus['profession_id'] == $profession['profession_id']) echo 'selected'; ?> value="<?php echo $profession['profession_id']; ?>"><?php echo $profession['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('position'); ?></label>
        <input value="<?php echo $alumnus['position']; ?>" class="form-control" type="text" name="position" placeholder="Type alumnus position" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('blood_group'); ?></label>
        <select class="combobox" name="blood_group">
            <option value=""><?php echo $this->lang->line('select_blood_group'); ?></option>
            <option <?php if ($alumnus['blood_group'] == 'O+') echo 'selected'; ?> value="O+">O+</option>
            <option <?php if ($alumnus['blood_group'] == 'O-') echo 'selected'; ?> value="O-">O-</option>
            <option <?php if ($alumnus['blood_group'] == 'A+') echo 'selected'; ?> value="A+">A+</option>
            <option <?php if ($alumnus['blood_group'] == 'A-') echo 'selected'; ?> value="A-">A-</option>
            <option <?php if ($alumnus['blood_group'] == 'B+') echo 'selected'; ?> value="B+">B+</option>
            <option <?php if ($alumnus['blood_group'] == 'B-') echo 'selected'; ?> value="B-">B-</option>
            <option <?php if ($alumnus['blood_group'] == 'AB+') echo 'selected'; ?> value="AB+">AB+</option>
            <option <?php if ($alumnus['blood_group'] == 'AB-') echo 'selected'; ?> value="AB-">AB-</option>
        </select>
    </div>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('facebook'); ?></label>
        <input value="<?php echo $alumnus['facebook']; ?>" class="form-control" type="text" name="facebook" placeholder="<?php echo $this->lang->line('ph_alumnus_facebook'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('twitter'); ?></label>
        <input value="<?php echo $alumnus['twitter']; ?>" class="form-control" type="text" name="twitter" placeholder="<?php echo $this->lang->line('ph_alumnus_twitter'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('linkedin'); ?></label>
        <input value="<?php echo $alumnus['linkedin']; ?>" class="form-control" type="text" name="linkedin" placeholder="<?php echo $this->lang->line('ph_alumnus_linkedin'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('youtube'); ?></label>
        <input value="<?php echo $alumnus['youtube']; ?>" class="form-control" type="text" name="youtube" placeholder="<?php echo $this->lang->line('ph_alumnus_youtube'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('status'); ?></label>
        <select class="combobox" name="status" data-parsley-required="true">
            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
            <option <?php if ($alumnus['status'] == 0) echo 'selected'; ?> value="0"><?php echo $this->lang->line('pending'); ?></option>
            <option <?php if ($alumnus['status'] == 1) echo 'selected'; ?> value="1"><?php echo $this->lang->line('active'); ?></option>
            <option <?php if ($alumnus['status'] == 2) echo 'selected'; ?> value="2"><?php echo $this->lang->line('cancel'); ?></option>
        </select>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('deceased'); ?></label>
        <select class="combobox" name="deceased" data-parsley-required="true">
            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
            <option <?php if ($alumnus['deceased'] == 0) echo 'selected'; ?> value="0"><?php echo $this->lang->line('no'); ?></option>
            <option <?php if ($alumnus['deceased'] == 1) echo 'selected'; ?> value="1"><?php echo $this->lang->line('yes'); ?></option>
        </select>
    </div>

    <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php endforeach; ?>
<?php echo form_close(); ?>

<script>
    $(document).ready(function() {
        $('#alumnus').parsley();
        FormPlugins.init();
    });
</script>