<?php echo form_open_multipart('alumnus/change_alumnus_image/' . $param2, array('class' => 'form-horizontal form-bordered', 'data-parsley-validate' => 'true', 'name' => 'change_alumnus_image')); ?>
	<div class="form-group">
        <label class="control-label col-md-3 col-sm-3"><?php echo $this->lang->line('preview'); ?></label>
        <div class="col-md-9 col-sm-9">
			<?php if ($this->db->get_where('alumnus', array('alumnus_id' => $param2))->row()->image_link): ?>
				<img width="50%" src="<?php echo base_url(); ?>uploads/alumni/<?php echo $this->db->get_where('alumnus', array('alumnus_id' => $param2))->row()->image_link; ?>" alt="" class="media-object">
			<?php else: ?>
				<img src="<?php echo base_url(); ?>assets/dummy.png" alt="">
			<?php endif; ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"><?php echo $this->lang->line('image'); ?></label>
        <div class="col-md-9 col-sm-9">
        	<div class="well well-sm m-b-15" align="center">
				<?php echo $this->lang->line('image_size_suggestion'); ?> 160 &times; 160
			</div>
			<div class="file-upload">
			    <label for="upload" class="file-upload__label"><i class="fa fa-plus"></i> <?php echo $this->lang->line('add_image'); ?></label>
			    <input id="upload" class="file-upload__input" type="file" name="image_link">
			</div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3"></label>
        <div class="col-md-9 col-sm-9">
            <button type="submit" class="btn"><?php echo $this->lang->line('update'); ?></button>
        </div>
    </div>
<?php echo form_close(); ?>

<style>
	.file-upload {
		position: relative;
		display: inline-block;
	}
	
	.file-upload__label {
	  display: block;
	  padding: 1em 2em;
	  color: #fff;
	  background: #222;
	  transition: background .3s;
	  
	  &:hover {
	     cursor: pointer;
	     background: #000;
	  }
	}
	    
	.file-upload__input {
	    position: absolute;
	    left: 0;
	    top: 0;
	    right: 0;
	    bottom: 0;
	    font-size: 1;
	    width:0;
	    height: 100%;
	    opacity: 0;
	}
</style>
