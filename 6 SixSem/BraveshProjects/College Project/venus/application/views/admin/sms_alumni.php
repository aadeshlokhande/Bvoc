<!-- begin #content -->
<div id="content" class="content">
    <h1 class="page-header"><?php echo $this->lang->line('alumni'); ?> <small><?php echo $this->lang->line('sms_alumni_page'); ?></small></h1>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title"><?php echo $this->lang->line('sms_alumni_page'); ?></h4>
				</div>
				<!-- end panel-heading -->
                <div class="panel-body">
					<?php echo form_open('admin/send_text/all', array('data-parsley-validate' => 'true', 'name' => 'sms_alumni')); ?>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('message'); ?></label>
                            <textarea style="resize: none" class="form-control" rows="5" type="text" name="message" placeholder="<?php echo $this->lang->line('ph_alumni_sms_body'); ?>" data-parsley-required="true"></textarea>
                        </div>

                        <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('send'); ?></button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <div class="col-lg-6">
            <div class="panel panel-inverse">
				<!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title"><?php echo $this->lang->line('twilio_settings'); ?></h4>
				</div>
				<!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
					<div class="note note-yellow m-b-15">
                        <ul style="margin-bottom: 0">
                            <li><?php echo $this->lang->line('twilio_note_1'); ?></li>
                            <li><?php echo $this->lang->line('twilio_note_2'); ?>: <a href="https://www.twilio.com/" target="_blank">twilio.com <i class="fa fa-external-link-alt"></i></a></li>
                            <li><?php echo $this->lang->line('twilio_note_3'); ?></li>
                        </ul>
                    </div>
                    <?php echo form_open('admin/website_settings/update_twilio', array('method' => 'post', 'data-parsley-validate' => 'true')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('twilio_account_sid'); ?></label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'account_sid'))->row()->content); ?>" type="text" name="account_sid" placeholder="<?php echo $this->lang->line('twilio_account_sid_ph'); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('twilio_auth_token'); ?></label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'auth_token'))->row()->content); ?>" type="password" name="auth_token" placeholder="<?php echo $this->lang->line('twilio_auth_token_ph'); ?>" class="form-control">
                    </div>
					<div class="form-group">
                        <label><?php echo $this->lang->line('twilio_number'); ?></label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'number'))->row()->content); ?>" type="text" name="number" placeholder="<?php echo $this->lang->line('twilio_number_ph'); ?>" class="form-control">
                    </div>                    

                    <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                    <hr>
                    <?php echo form_open('admin/website_settings/delete_twilio', array('method' => 'post')); ?>
                    <button type="submit" class="mb-sm btn btn-warning"><?php echo $this->lang->line('remove'); ?></button>
                    <?php echo form_close(); ?>
                </div>
                <!-- end panel-body -->
            </div>
        </div>
    </div>
    <!-- end row -->

    <hr>

    <h1 class="page-header"><?php echo $this->lang->line('alumni'); ?> <small><?php echo $this->lang->line('sms_alumni_page_class_wise'); ?></small></h1>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title"><?php echo $this->lang->line('sms_alumni_page_class_wise'); ?></h4>
				</div>
				<!-- end panel-heading -->
                <div class="panel-body">
					<?php echo form_open('admin/send_text/batch', array('data-parsley-validate' => 'true', 'name' => 'sms_alumni_to_class')); ?>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('class'); ?></label>
                            <select class="combobox" name="batch">
                                <option value=""><?php echo $this->lang->line('select_class'); ?></option>
                                <?php for ($start_year = date('Y'); $start_year >= 1900; $start_year--) : ?>
                                    <option value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('message'); ?></label>
                            <textarea style="resize: none" class="form-control" rows="5" type="text" name="message" placeholder="<?php echo $this->lang->line('ph_alumni_sms_body'); ?>" data-parsley-required="true"></textarea>
                        </div>

                        <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('send'); ?></button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end #content
