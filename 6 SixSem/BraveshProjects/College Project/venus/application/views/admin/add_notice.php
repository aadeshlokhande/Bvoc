<!-- begin #content -->
<div id="content" class="content">
	<h1 class="page-header"><?php echo $this->lang->line('notice_board'); ?> <small><?php echo $this->lang->line('add_notice_page'); ?></small></h1>

	<!-- begin row -->
	<div class="row">
        <!-- begin col-6 -->
	    <div class="col-lg-6 offset-lg-3">
	        <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
					<?php echo form_open('admin/notices/add', array('data-parsley-validate' => 'true', 'name' => 'update_text')); ?>
						<div class="form-group">
							<label><?php echo $this->lang->line('title'); ?></label>
							<input class="form-control" type="text" name="title" placeholder="<?php echo $this->lang->line('ph_notice_title'); ?>" data-parsley-required="true" />
						</div>
						<div class="form-group">
                            <label><?php echo $this->lang->line('description'); ?></label>
                            <textarea rows="10" style="resize: none" class="form-control" type="text" name="description" placeholder="<?php echo $this->lang->line('ph_notice_description'); ?>" data-parsley-required="true"></textarea>
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
<!-- end #content
