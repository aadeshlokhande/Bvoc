<!-- begin #content -->
<div id="content" class="content">
	<h1 class="page-header"><?php echo $this->lang->line('jobs'); ?> <small><?php echo $this->lang->line('add_job_page'); ?></small></h1>

	<!-- begin row -->
	<div class="row">
        <!-- begin col-6 -->
	    <div class="col-lg-6 offset-lg-3">
	        <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
					<?php echo form_open('admin/jobs/add', array('data-parsley-validate' => 'true', 'name' => 'update_text')); ?>
						<div class="form-group">
							<label><?php echo $this->lang->line('title'); ?></label>
							<input class="form-control" type="text" name="title" placeholder="<?php echo $this->lang->line('ph_job_title'); ?>" data-parsley-required="true" />
						</div>
                        <div class="form-group">
							<label><?php echo $this->lang->line('position'); ?></label>
							<input class="form-control" type="text" name="position" placeholder="<?php echo $this->lang->line('ph_job_position'); ?>" data-parsley-required="true" />
						</div>
                        <div class="form-group">
							<label><?php echo $this->lang->line('location'); ?></label>
                            <div class="radio radio-css radio-inline m-l-10">
                                <input type="radio" onclick="locationType(this);" name="not_remote" id="in_person" value="1" checked />
                                <label for="in_person"><?php echo $this->lang->line('in_person'); ?></label>
                            </div>
                            <div class="radio radio-css radio-inline">
                                <input type="radio" onclick="locationType(this);" name="not_remote" id="remote" value="0" />
                                <label for="remote"><?php echo $this->lang->line('remote'); ?></label>
                            </div>
							<input class="form-control" type="text" id="location" name="location" placeholder="<?php echo $this->lang->line('ph_job_location'); ?>" />
						</div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('deadline'); ?></label>
                            <input type="text" name="deadline" class="form-control" id="datepicker-default" placeholder="mm/dd/yyyy" />
                        </div>
						<div class="form-group">
                            <label><?php echo $this->lang->line('description'); ?></label>
                            <textarea style="resize: none" rows="10" class="form-control" type="text" name="description" placeholder="<?php echo $this->lang->line('ph_job_description'); ?>" data-parsley-required="true"></textarea>
                        </div>
                        <div class="form-group">
							<label><?php echo $this->lang->line('salary'); ?></label>
							<input class="form-control" type="text" name="salary" placeholder="<?php echo $this->lang->line('ph_job_salary'); ?>" />
						</div>
                        <div class="form-group">
							<label><?php echo $this->lang->line('website'); ?></label>
							<input class="form-control" type="text" name="website" placeholder="<?php echo $this->lang->line('ph_job_website'); ?>" />
						</div>
                        <div class="form-group">
							<label><?php echo $this->lang->line('email'); ?></label>
							<input class="form-control" type="text" name="contact_email" placeholder="<?php echo $this->lang->line('ph_job_email'); ?>" data-parsley-required="true" />
						</div>
                        <div class="form-group">
							<label><?php echo $this->lang->line('phone'); ?></label>
							<input class="form-control" type="text" name="contact_phone" placeholder="<?php echo $this->lang->line('ph_job_phone'); ?>" data-parsley-required="true" />
						</div>

						<button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('add'); ?></button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->

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