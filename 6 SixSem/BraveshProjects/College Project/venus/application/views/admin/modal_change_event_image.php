<?php echo form_open_multipart('admin/events/change_event_image/' . $param2, array('data-parsley-validate' => 'true', 'name' => 'event')); ?>
	<div class="form-group">
        <label><?php echo $this->lang->line('preview'); ?></label>
        <img width="100%" src="<?php echo base_url(); ?>uploads/events/<?php echo $this->db->get_where('event', array('event_id' => $param2))->row()->image_link; ?>" alt="" class="media-object">
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('image'); ?></label>
        <div class="note note-info" align="center">
            <?php echo $this->lang->line('image_size_suggestion'); ?> 236 &times; 236
        </div>
        <span class="btn btn-success fileinput-button">
            <i class="fa fa-plus"></i>
            <span><?php echo $this->lang->line('add_image'); ?></span>
            <input type="file" name="image_link" data-parsley-required="true">
        </span>
    </div>

    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>
