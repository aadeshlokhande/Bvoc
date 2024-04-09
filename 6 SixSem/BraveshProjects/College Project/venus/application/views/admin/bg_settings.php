<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('settings'); ?> <small><?php echo $this->lang->line('bg_settings_page'); ?></small></h1>
        </div>
    </div>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-4 -->
        <div class="col-lg-6 offset-lg-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/bg_settings/update', array('data-parsley-validate' => 'true', 'name' => 'update_image')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('preview'); ?></label>
                        <img width="100%" src="<?php echo base_url(); ?>uploads/bg_wallpaper/<?php echo $this->db->get_where('setting', array('setting_id' => 8))->row()->content; ?>" alt="" class="img-responsive">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('background'); ?></label>
                        <div class="note note-info" align="center">
                            <?php echo $this->lang->line('image_size_suggestion'); ?> 1920 X 1280
                        </div>
                        <span class="btn btn-sm btn-success fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span><?php echo $this->lang->line('add_image'); ?></span>
                            <input type="file" name="login_bg" data-parsley-required="true">
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