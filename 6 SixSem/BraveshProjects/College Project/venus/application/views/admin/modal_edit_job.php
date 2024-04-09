<?php echo form_open_multipart('admin/jobs/edit/' . $param2, array('data-parsley-validate' => 'true', 'name' => 'job', 'id' => 'job')); ?>
<?php
$job_info = $this->security->xss_clean($this->db->get_where('job', array('job_id' => $param2))->result_array());
foreach ($job_info as $job) :
?>
    <div class="form-group">
        <label><?php echo $this->lang->line('title'); ?></label>
        <input value="<?php echo $job['title']; ?>" class="form-control" type="text" name="title" placeholder="<?php echo $this->lang->line('ph_job_title'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('position'); ?></label>
        <input value="<?php echo $job['position']; ?>" class="form-control" type="text" name="position" placeholder="<?php echo $this->lang->line('ph_job_position'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('location'); ?></label>
        <div class="radio radio-css radio-inline m-l-10">
            <input type="radio" onclick="locationType(this);" name="not_remote" id="in_person" value="1" <?php if ($job['not_remote']) echo 'checked';?> />
            <label for="in_person"><?php echo $this->lang->line('in_person'); ?></label>
        </div>
        <div class="radio radio-css radio-inline">
            <input type="radio" onclick="locationType(this);" name="not_remote" id="remote" value="0" <?php if (!$job['not_remote']) echo 'checked';?> />
            <label for="remote"><?php echo $this->lang->line('remote'); ?></label>
        </div>
        <input <?php if (!$job['not_remote']) echo 'readonly'; ?> value="<?php echo $job['location']; ?>" class="form-control" type="text" id="location" name="location" placeholder="<?php echo $this->lang->line('ph_job_location'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('deadline'); ?></label>
        <input value="<?php if ($job['deadline']) echo date('m/d/Y', $job['deadline']); ?>" type="text" name="deadline" class="form-control" id="datepicker-default" placeholder="mm/dd/yyyy" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('description'); ?></label>
        <textarea style="resize: none" rows="10" class="form-control" type="text" name="description" placeholder="<?php echo $this->lang->line('ph_job_description'); ?>" data-parsley-required="true"><?php echo $job['description']; ?></textarea>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('salary'); ?></label>
        <input value="<?php echo $job['salary']; ?>" class="form-control" type="text" name="salary" placeholder="<?php echo $this->lang->line('ph_job_salary'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('website'); ?></label>
        <input value="<?php echo $job['website']; ?>" class="form-control" type="text" name="website" placeholder="<?php echo $this->lang->line('ph_job_website'); ?>" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('email'); ?></label>
        <input value="<?php echo $job['contact_email']; ?>" class="form-control" type="text" name="contact_email" placeholder="<?php echo $this->lang->line('ph_job_email'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('phone'); ?></label>
        <input value="<?php echo $job['contact_phone']; ?>" class="form-control" type="text" name="contact_phone" placeholder="<?php echo $this->lang->line('ph_job_phone'); ?>" data-parsley-required="true" />
    </div>
    

    <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php endforeach; ?>
<?php echo form_close(); ?>

<script>
    $(document).ready(function() {
        $('#job').parsley();
        FormPlugins.init();
    });
</script>

<script>
    var currentValue = "";
    function locationType(myRadio) {
        if (myRadio.value == '1') {
            document.getElementById("location").readOnly = false;
            document.getElementById("location").value = currentValue;
        } else if (myRadio.value == '0') {
            if (document.getElementById("location").value != "") {
                currentValue = document.getElementById("location").value;
            }
            document.getElementById("location").value = "";
            document.getElementById("location").readOnly = true;
        }
    }
</script>