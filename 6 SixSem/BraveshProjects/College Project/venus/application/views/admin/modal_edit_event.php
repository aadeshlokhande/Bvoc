<?php
    $event_info = $this->security->xss_clean($this->db->get_where('event', array('event_id' => $param2))->result_array());
    foreach ($event_info as $row):
?>
<?php echo form_open_multipart('admin/events/edit/' . $row['event_id'], array('data-parsley-validate' => 'true', 'name' => 'event')); ?>
    <div class="form-group">
        <label><?php echo $this->lang->line('event_title'); ?></label>
        <input value="<?php echo $row['name']; ?>" class="form-control" type="text" name="name" placeholder="<?php echo $this->lang->line('ph_event_title'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
		<label><?php echo $this->lang->line('permalink'); ?></label>
		<input readonly value="<?php echo $row['permalink']; ?>" class="form-control" type="text" name="permalink" placeholder="<?php echo $this->lang->line('ph_event_permalink'); ?>" data-parsley-required="true" />
	</div>
    <div class="form-group">
        <label><?php echo $this->lang->line('event_date'); ?></label>
        <input value="<?php echo date('m/d/Y', $row['event_date']); ?>" class="form-control" type="text" id="datepicker-autoClose" name="event_date" placeholder="<?php echo $this->lang->line('ph_event_date'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('event_time'); ?></label>
        <div class="input-group bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="fa fa-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="fa fa-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="fa fa-chevron-up"></i></a></td></tr><tr><td><inputtype="text" name="hour" class="bootstrap-timepicform-control" maxlength="2"></td> <td class="separator">:</td><td><input type="text" name="minute" class="bootstrap-timepicker-minute form-control" maxlength="2"></td> <td class="separator">&nbsp;</td><td><input type="text" name="meridian" class="bootstrap-timepicker-meridian form-control" maxlength="2"></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="fa fa-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="fa fa-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="fa fa-chevron-down"></i></a></td></tr></tbody></table></div>
            <input value="<?php echo $row['event_time']; ?>" name="event_time" id="timepicker" type="text" placeholder="<?php echo $this->lang->line('ph_event_time'); ?>" class="form-control" data-parsley-required="true" />
            <span class="input-group-addon"><i class="fa fa-clock"></i></span>
        </div>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('venue'); ?></label>
        <input value="<?php echo $row['venue']; ?>" class="form-control" type="text" name="venue" placeholder="<?php echo $this->lang->line('ph_event_venue'); ?>" data-parsley-required="true" />
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('paragraph_1'); ?></label>
        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_1" placeholder="<?php echo $this->lang->line('ph_event_paragraph_1'); ?>" data-parsley-required="true"><?php echo $row['paragraph_1']; ?></textarea>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('paragraph_2'); ?></label>
        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_2" placeholder="<?php echo $this->lang->line('ph_event_paragraph_2'); ?>" data-parsley-required="true"><?php echo $row['paragraph_2']; ?></textarea>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('paragraph_3'); ?></label>
        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_3" placeholder="<?php echo $this->lang->line('ph_event_paragraph_3'); ?>" data-parsley-required="true"><?php echo $row['paragraph_3']; ?></textarea>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('google_map'); ?></label>
        <textarea style="resize: none" rows="8" class="form-control" type="text" name="google_map" placeholder="<?php echo $this->lang->line('ph_event_google_map'); ?>" data-parsley-required="true"><?php echo $row['google_map']; ?></textarea>
    </div>
    <div class="form-group">
        <label><?php echo $this->lang->line('hashtag'); ?></label>
        <input value="<?php echo $row['hashtag']; ?>" class="form-control" type="text" name="hashtag" placeholder="<?php echo $this->lang->line('ph_event_hashtag'); ?>" data-parsley-required="true" />
    </div>

    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>
<?php endforeach; ?>

<script>
    $(document).ready(function() {
        App.init();
        FormPlugins.init();
    });
</script>
