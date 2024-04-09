<!-- begin #content -->
<div id="content" class="content">
    <h1 class="page-header"><?php echo $this->lang->line('gallery'); ?> <small><?php echo $this->lang->line('add_album_page'); ?></small></h1>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-6 offset-md-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open('admin/albums/add', array('data-parsley-validate' => 'true', 'name' => 'album')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('album_title'); ?></label>
                        <input class="form-control" type="text" name="name" placeholder="<?php echo $this->lang->line('ph_album_title'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('description'); ?></label>
                        <textarea style="resize: none" class="form-control" rows="5" type="text" name="description" placeholder="<?php echo $this->lang->line('ph_album_description'); ?>"></textarea>
                    </div>

                    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('add'); ?></button>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end #content