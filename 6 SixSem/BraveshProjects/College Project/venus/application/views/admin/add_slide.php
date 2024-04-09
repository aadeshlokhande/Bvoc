<!-- begin #content -->
<div id="content" class="content">
    <h1 class="page-header"><?php echo $this->lang->line('slider'); ?> <small><?php echo $this->lang->line('add_slide_page'); ?></small></h1>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-6 offset-lg-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/slides/add', array('data-parsley-validate' => 'true', 'name' => 'slide')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('name'); ?></label>
                        <input class="form-control" type="text" name="image_name" placeholder="<?php echo $this->lang->line('ph_slide_name'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('image'); ?></label>
                        <div class="note note-info" align="center">
                            <?php echo $this->lang->line('image_size_suggestion'); ?> 555 &times; 320
                        </div>
                        <span class="btn btn-sm btn-success fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span><?php echo $this->lang->line('add_image'); ?></span>
                            <input type="file" name="image_link" data-parsley-required="true">
                        </span>
                    </div>

                    <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('submit'); ?></button>
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