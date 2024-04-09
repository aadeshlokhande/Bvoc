<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('settings'); ?> <small><?php echo $this->lang->line('logo_settings_page'); ?></small></h1>
        </div>
    </div>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-md-6 offset-md-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/logo_settings/update_favicon', array('data-parsley-validate' => 'true', 'name' => 'update_image')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('preview'); ?></label>
                        <img width="100%" src="<?php echo base_url(); ?>uploads/logos/<?php echo $this->db->get_where('setting', array('setting_id' => 7))->row()->content; ?>" alt="" class="media-object">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('favicon'); ?></label>
                        <div class="note note-info" align="center">
                            <?php echo $this->lang->line('image_size_suggestion'); ?> 16 &times; 16
                        </div>
                        <span class="btn btn-sm btn-success fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span><?php echo $this->lang->line('add_image'); ?></span>
                            <input type="file" name="favicon" data-parsley-required="true">
                        </span>
                    </div>

                    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end col-4 -->
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-md-6 offset-md-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/logo_settings/update_header_logo', array('data-parsley-validate' => 'true', 'name' => 'update_image')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('preview'); ?></label>
                        <img width="100%" src="<?php echo base_url(); ?>uploads/logos/<?php echo $this->db->get_where('setting', array('setting_id' => 5))->row()->content; ?>" alt="" class="media-object">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('header_logo'); ?></label>
                        <div class="note note-info" align="center">
                            <?php echo $this->lang->line('image_size_suggestion'); ?> 360 &times; 88
                        </div>
                        <span class="btn btn-sm btn-success fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span><?php echo $this->lang->line('add_image'); ?></span>
                            <input type="file" name="header_logo" data-parsley-required="true">
                        </span>
                    </div>

                    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-md-6 offset-md-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/logo_settings/update_footer_logo', array('data-parsley-validate' => 'true', 'name' => 'update_image')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('preview'); ?></label>
                        <img width="100%" src="<?php echo base_url(); ?>uploads/logos/<?php echo $this->db->get_where('setting', array('setting_id' => 6))->row()->content; ?>" alt="" class="media-object">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('footer_logo'); ?></label>
                        <div class="note note-info" align="center">
                            <?php echo $this->lang->line('image_size_suggestion'); ?> 179 &times; 44
                        </div>
                        <span class="btn btn-sm btn-success fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span><?php echo $this->lang->line('add_image'); ?></span>
                            <input type="file" name="footer_logo" data-parsley-required="true">
                        </span>
                    </div>

                    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-4 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content