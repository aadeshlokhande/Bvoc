<?php echo form_open_multipart('admin/alumni/change_alumnus_image/' . $param2, array('data-parsley-validate' => 'true', 'name' => 'story')); ?>
	<div class="form-group">
        <label><?php echo $this->lang->line('preview'); ?></label>
		<?php if ($this->db->get_where('alumnus', array('alumnus_id' => $param2))->row()->image_link): ?>
			<img src="<?php echo base_url(); ?>uploads/alumni/<?php echo $this->db->get_where('alumnus', array('alumnus_id' => $param2))->row()->image_link; ?>" alt="" class="media-object" width="100%">
		<?php else: ?>
			<img src="<?php echo base_url(); ?>assets/dummy.png" alt="" width="100%">
		<?php endif; ?>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('image'); ?></label>
    	<div class="note note-info" align="center">
			<?php echo $this->lang->line('image_size_suggestion'); ?> 160 &times; 160
		</div>
        <span class="btn btn-success fileinput-button">
            <i class="fa fa-plus"></i>
            <span><?php echo $this->lang->line('add_image'); ?></span>
            <input type="file" name="image_link" data-parsley-required="true">
        </span>
    </div>

    <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>
