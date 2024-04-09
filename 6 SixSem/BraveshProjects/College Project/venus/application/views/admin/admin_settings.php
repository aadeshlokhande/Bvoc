<!-- begin #content -->
<div id="content" class="content">
	<div class="row">
		<div class="col-md-6">
			<h1 class="page-header"><?php echo $this->lang->line('settings'); ?> <small><?php echo $this->lang->line('admin_settings_page'); ?></small></h1>
		</div>
	</div>

	<!-- begin row -->
	<div class="row">
        <!-- begin col-6 -->
	    <div class="col-lg-6 offset-lg-3">
	        <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
					<?php echo form_open('admin/admin_settings/update', array('data-parsley-validate' => 'true', 'name' => 'admin_settings')); ?>
						<div class="form-group">
							<label><?php echo $this->lang->line('email'); ?></label>
							<input value="<?php echo $this->db->get_where('admin', array('admin_id' => 1))->row()->email; ?>" class="form-control" type="email" name="email" placeholder="<?php echo $this->lang->line('ph_admin_email'); ?>" data-parsley-required="true" />
						</div>
						<div class="form-group">
							<label><?php echo $this->lang->line('existing_password'); ?></label>
							<input class="form-control" type="password" name="old_password" placeholder="<?php echo $this->lang->line('ph_admin_old_pw'); ?>" data-parsley-required="true" />
						</div>
						<div class="form-group">
							<label><?php echo $this->lang->line('new_password'); ?></label>
							<input class="form-control" type="password" name="new_password" placeholder="<?php echo $this->lang->line('ph_admin_new_pw'); ?>" data-parsley-required="true" />
						</div>

                        <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content
