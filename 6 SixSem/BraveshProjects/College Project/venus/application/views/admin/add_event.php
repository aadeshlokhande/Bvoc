<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('event'); ?> <small><?php echo $this->lang->line('add_event_page'); ?></small></h1>
        </div>
    </div>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-6 offset-lg-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/events/add', array('data-parsley-validate' => 'true', 'name' => 'event')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('event_title'); ?></label>
                        <input class="form-control" type="text" name="name" placeholder="<?php echo $this->lang->line('ph_event_title'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('permalink'); ?></label>
                        <input class="form-control" type="text" name="permalink" placeholder="<?php echo $this->lang->line('ph_event_permalink'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('event_image'); ?></label>
                        <div class="note note-info" align="center">
                            <?php echo $this->lang->line('image_size_suggestion'); ?> 236 &times; 236
                        </div>
                        <span class="btn btn-sm btn-success fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span><?php echo $this->lang->line('add_image'); ?></span>
                            <input type="file" name="image_link" data-parsley-required="true">
                        </span>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('event_date'); ?></label>
                        <input class="form-control" type="text" id="datepicker-autoClose" name="event_date" placeholder="<?php echo $this->lang->line('ph_event_date'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('event_time'); ?></label>
                        <div class="input-group bootstrap-timepicker">
                            <div class="bootstrap-timepicker-widget dropdown-menu">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" data-action="incrementHour"><i class="fa fa-chevron-up"></i></a></td>
                                            <td class="separator">&nbsp;</td>
                                            <td><a href="#" data-action="incrementMinute"><i class="fa fa-chevron-up"></i></a></td>
                                            <td class="separator">&nbsp;</td>
                                            <td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="fa fa-chevron-up"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="hour" class="bootstrap-timepicker-hour form-control" maxlength="2"></td>
                                            <td class="separator">:</td>
                                            <td><input type="text" name="minute" class="bootstrap-timepicker-minute form-control" maxlength="2"></td>
                                            <td class="separator">&nbsp;</td>
                                            <td><input type="text" name="meridian" class="bootstrap-timepicker-meridian form-control" maxlength="2"></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-action="decrementHour"><i class="fa fa-chevron-down"></i></a></td>
                                            <td class="separator"></td>
                                            <td><a href="#" data-action="decrementMinute"><i class="fa fa-chevron-down"></i></a></td>
                                            <td class="separator">&nbsp;</td>
                                            <td><a href="#" data-action="toggleMeridian"><i class="fa fa-chevron-down"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <input name="event_time" id="timepicker" type="text" placeholder="<?php echo $this->lang->line('ph_event_time'); ?>" class="form-control" data-parsley-required="true" />
                            <span class="input-group-addon"><i class="fa fa-clock"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('venue'); ?></label>
                        <input class="form-control" type="text" name="venue" placeholder="<?php echo $this->lang->line('ph_event_venue'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('paragraph_1'); ?></label>
                        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_1" placeholder="<?php echo $this->lang->line('ph_event_paragraph_1'); ?>" data-parsley-required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('paragraph_2'); ?></label>
                        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_2" placeholder="<?php echo $this->lang->line('ph_event_paragraph_2'); ?>" data-parsley-required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('paragraph_3'); ?></label>
                        <textarea style="resize: none" rows="10" class="form-control" type="text" name="paragraph_3" placeholder="<?php echo $this->lang->line('ph_event_paragraph_3'); ?>" data-parsley-required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('google_map'); ?></label>
                        <textarea style="resize: none" rows="8" class="form-control" type="text" name="google_map" placeholder="<?php echo $this->lang->line('ph_event_google_map'); ?>" data-parsley-required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('hashtag'); ?></label>
                        <input class="form-control" type="text" name="hashtag" placeholder="<?php echo $this->lang->line('ph_event_hashtag'); ?>" data-parsley-required="true" />
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