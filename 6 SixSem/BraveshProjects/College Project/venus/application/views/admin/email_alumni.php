<!-- begin #content -->
<div id="content" class="content">
    <h1 class="page-header"><?php echo $this->lang->line('alumni'); ?> <small><?php echo $this->lang->line('email_alumni_page'); ?></small></h1>

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
					<h4 class="panel-title"><?php echo $this->lang->line('email_alumni_page'); ?></h4>
				</div>
				<!-- end panel-heading -->
                <div class="panel-body">
					<?php echo form_open('admin/alumni/email', array('data-parsley-validate' => 'true', 'name' => 'email_alumni')); ?>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('subject'); ?></label>
                            <input class="form-control" type="text" name="subject" placeholder="<?php echo $this->lang->line('ph_alumni_email_subject'); ?>" data-parsley-required="true" />
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('message'); ?></label>
                            <textarea class="ckeditor" id="editor1" style="resize: none" class="form-control" rows="5" type="text" name="message" placeholder="<?php echo $this->lang->line('ph_alumni_email_body'); ?>"></textarea>
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
                    <h4 class="panel-title"><?php echo $this->lang->line('smtp_settings'); ?></h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <div class="note note-yellow">
                        <ul style="margin-bottom: 0">
                            <li><?php echo $this->lang->line('smtp_note_1'); ?></li>
                            <li><?php echo $this->lang->line('smtp_note_2'); ?>: <a href="https://myaccount.google.com/apppasswords" target="_blank"><?php echo $this->lang->line('smtp_link'); ?> <i class="fa fa-external-link-alt"></i></a></li>
                            <li><?php echo $this->lang->line('smtp_note_3'); ?></li>
                        </ul>
                    </div>
                    <?php echo form_open('admin/website_settings/update_smtp', array('method' => 'post')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('smtp_email'); ?></label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'smtp_user'))->row()->content); ?>" type="text" name="smtp_user" placeholder="<?php echo $this->lang->line('smtp_email_ph'); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('smtp_password'); ?></label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'smtp_pass'))->row()->content); ?>" type="password" name="smtp_pass" placeholder="<?php echo $this->lang->line('smtp_password_ph'); ?>" class="form-control">
                    </div>

                    <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                    <hr>
                    <?php echo form_open('admin/website_settings/delete_smtp', array('method' => 'post')); ?>
                    <button type="submit" class="mb-sm btn btn-warning"><?php echo $this->lang->line('remove'); ?></button>
                    <?php echo form_close(); ?>
                </div>
                <!-- end panel-body -->
            </div>
        </div>
    </div>
    <!-- end row -->

    <hr>

    <h1 class="page-header"><?php echo $this->lang->line('alumni'); ?> <small><?php echo $this->lang->line('email_alumni_page_class_wise'); ?></small></h1>

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
					<h4 class="panel-title"><?php echo $this->lang->line('email_alumni_page_class_wise'); ?></h4>
				</div>
				<!-- end panel-heading -->
                <div class="panel-body">
					<?php echo form_open('admin/alumni/email_to_class', array('data-parsley-validate' => 'true', 'name' => 'email_alumni')); ?>
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
                            <label><?php echo $this->lang->line('subject'); ?></label>
                            <input class="form-control" type="text" name="subject" placeholder="<?php echo $this->lang->line('ph_alumni_email_subject'); ?>" data-parsley-required="true" />
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('message'); ?></label>
                            <textarea class="ckeditor" id="editor2" style="resize: none" class="form-control" rows="5" type="text" name="message" placeholder="<?php echo $this->lang->line('ph_alumni_email_body'); ?>"></textarea>
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
