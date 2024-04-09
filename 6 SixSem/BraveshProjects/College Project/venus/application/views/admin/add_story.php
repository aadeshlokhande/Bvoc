<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('story'); ?> <small><?php echo $this->lang->line('add_story_page'); ?></small></h1>
        </div>
    </div>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-6 offset-lg-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/stories/add', array('data-parsley-validate' => 'true', 'name' => 'story')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('title'); ?></label>
                        <input class="form-control" type="text" name="title" placeholder="<?php echo $this->lang->line('ph_story_title'); ?>" data-parsley-required="true">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('permalink'); ?></label>
                        <input class="form-control" type="text" name="permalink" placeholder="<?php echo $this->lang->line('ph_story_permalink'); ?>" data-parsley-required="true" v>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('image'); ?></label>
                        <div class="note note-info" align="center">
                            <?php echo $this->lang->line('image_size_suggestion'); ?> 750 &times; 350
                        </div>
                        <span class="btn btn-sm btn-success fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span><?php echo $this->lang->line('add_image'); ?></span>
                            <input type="file" name="image_link" data-parsley-required="true">
                        </span>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('author_name'); ?></label>
                        <input class="form-control" type="text" name="written_by" placeholder="<?php echo $this->lang->line('ph_story_author'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('paragraph_1'); ?></label>
                        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_1" placeholder="<?php echo $this->lang->line('ph_story_paragraph_1'); ?>" data-parsley-required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('paragraph_2'); ?></label>
                        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_2" placeholder="<?php echo $this->lang->line('ph_story_paragraph_2'); ?>" data-parsley-required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('paragraph_3'); ?></label>
                        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_3" placeholder="<?php echo $this->lang->line('ph_story_paragraph_3'); ?>" data-parsley-required="true"></textarea>
                    </div>

                    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('submit'); ?></button>
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