<!-- begin #content -->
<div id="content" class="content">
	<div class="row">
		<div class="col-md-6">
			<h1 class="page-header"><?php echo $this->lang->line('about_us'); ?> <small><?php echo $this->lang->line('about_us_page'); ?></small></h1>
		</div>
	</div>

	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-md-6 offset-md-3">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-body">
					<?php echo form_open('admin/about_us/update_text', array('data-parsley-validate' => 'true', 'name' => 'update_text')); ?>
					<div class="form-group">
						<label><?php echo $this->lang->line('title'); ?></label>
						<input value="<?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->title; ?>" class="form-control" type="text" name="title" placeholder="<?php echo $this->lang->line('ph_about_us_title'); ?>" data-parsley-required="true" />
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('tagline'); ?></label>
						<input value="<?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->tagline; ?>" class="form-control" type="text" name="tagline" placeholder="<?php echo $this->lang->line('ph_about_us_tagline'); ?>" data-parsley-required="true" />
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('description'); ?></label>
						<textarea style="resize: none" rows="10" maxlength="222" class="form-control" type="text" name="description" placeholder="<?php echo $this->lang->line('ph_about_us_description'); ?>" data-parsley-required="true"><?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->description; ?></textarea>
					</div>

					<button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
					<?php echo form_close(); ?>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end panel -->
	</div>
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-md-6 offset-md-3">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-body">
					<?php echo form_open_multipart('admin/about_us/update_image', array('data-parsley-validate' => 'true', 'name' => 'update_image')); ?>
					<div class="form-group">
						<label><?php echo $this->lang->line('preview'); ?></label>
						<img width="100%" src="<?php echo base_url(); ?>uploads/about_us/<?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->image_link; ?>" alt="" class="media-object" width="100%">
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('image'); ?></label>
						<div class="note note-info" align="center">
							<?php echo $this->lang->line('image_size_suggestion'); ?> 360 &times; 118
						</div>
						<span class="btn btn-success fileinput-button">
							<i class="fa fa-plus"></i>
							<span><?php echo $this->lang->line('add_image'); ?></span>
							<input type="file" name="image_link" data-parsley-required="true">
						</span>
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

	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-md-6 offset-md-3">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-body">
					<?php echo form_open_multipart('admin/about_us/update_tc', array('data-parsley-validate' => 'true', 'name' => 'update_image')); ?>
					<div class="form-group">
						<label><?php echo $this->lang->line('terms_and_conditions'); ?></label>
						<textarea class="ckeditor" id="editor1" name="terms_and_conditions"><?php echo $this->db->get_where('about_us', array('about_us_id' => 1))->row()->terms_and_conditions; ?></textarea>
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
<!-- end #content -->