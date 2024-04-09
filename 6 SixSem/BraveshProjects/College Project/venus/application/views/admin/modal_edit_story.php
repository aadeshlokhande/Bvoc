<?php
    $story_info = $this->security->xss_clean($this->db->get_where('story', array('story_id' => $param2))->result_array());
    foreach ($story_info as $row):
?>
<?php echo form_open_multipart('admin/stories/edit/' . $row['story_id'], array('data-parsley-validate' => 'true', 'name' => 'story')); ?>
	<div class="form-group">
		<label><?php echo $this->lang->line('title'); ?></label>
	    <input value="<?php echo $row['title']; ?>" class="form-control" type="text" name="title" placeholder="<?php echo $this->lang->line('ph_story_title'); ?>" data-parsley-required="true" />
	</div>
	<div class="form-group">
		<label><?php echo $this->lang->line('permalink'); ?></label>
	    <input readonly value="<?php echo $row['permalink']; ?>" class="form-control" type="text" name="permalink" placeholder="<?php echo $this->lang->line('ph_story_permalink'); ?>" data-parsley-required="true" />
	</div>
    <div class="form-group">
        <label><?php echo $this->lang->line('author_name'); ?></label>
        <input value="<?php echo $row['written_by']; ?>" class="form-control" type="text" name="written_by" placeholder="<?php echo $this->lang->line('ph_story_author'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('paragraph_1'); ?></label>
        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_1" placeholder="<?php echo $this->lang->line('ph_story_paragraph_1'); ?>" data-parsley-required="true"><?php echo $row['paragraph_1']; ?></textarea>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('paragraph_2'); ?></label>
        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_2" placeholder="<?php echo $this->lang->line('ph_story_paragraph_2'); ?>" data-parsley-required="true"><?php echo $row['paragraph_2']; ?></textarea>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('paragraph_3'); ?></label>
        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_3" placeholder="<?php echo $this->lang->line('ph_story_paragraph_3'); ?>" data-parsley-required="true"><?php echo $row['paragraph_3']; ?></textarea>
    </div>

    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>
<?php endforeach; ?>
