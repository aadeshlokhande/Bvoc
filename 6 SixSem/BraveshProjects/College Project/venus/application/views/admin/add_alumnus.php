<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('alumnus'); ?> <small><?php echo $this->lang->line('add_alumnus_page'); ?></small></h1>
        </div>
    </div>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-6 offset-lg-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/alumni/add', array('data-parsley-validate' => 'true', 'name' => 'alumnus')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('name'); ?></label>
                        <input class="form-control" type="text" name="name" placeholder="<?php echo $this->lang->line('ph_alumnus_name'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('username'); ?></label>
                        <input class="form-control" type="text" name="username" placeholder="<?php echo $this->lang->line('ph_alumnus_username'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('image'); ?></label>
                        <div class="note note-info" align="center">
                            <?php echo $this->lang->line('image_size_suggestion'); ?> 160 &times; 160
                        </div>
                        <span class="btn btn-sm btn-success fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span><?php echo $this->lang->line('add_image'); ?></span>
                            <input type="file" name="image_link">
                        </span>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('email'); ?></label>
                        <input class="form-control" type="text" name="email" placeholder="<?php echo $this->lang->line('ph_alumnus_email'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('password'); ?></label>
                        <input type="text" name="password" id="password-indicator-visible" class="form-control m-b-5" data-parsley-required="true">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('date_of_birth'); ?></label>
                        <input type="text" name="dob" class="form-control" id="datepicker-default" placeholder="mm/dd/yyyy" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('class'); ?></label>
                        <select class="combobox" name="batch">
                            <option value=""><?php echo $this->lang->line('select_class'); ?></option>
                            <?php for ($start_year = date('Y'); $start_year >= 1900; $start_year--) : ?>
                                <option value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('mobile_number'); ?></label>
                        <input class="form-control" type="text" name="mobile_number" placeholder="<?php echo $this->lang->line('ph_alumnus_mobile'); ?>" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('location'); ?></label>
                        <select class="combobox" name="location_id">
                            <option value=""><?php echo $this->lang->line('select_location'); ?></option>
                            <?php
                            $location_info = $this->db->get('location')->result_array();
                            foreach ($location_info as $location) :
                            ?>
                                <option value="<?php echo $location['location_id']; ?>"><?php echo $location['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('personal_website'); ?></label>
                        <input class="form-control" type="text" name="website" placeholder="<?php echo $this->lang->line('ph_alumnus_webstie'); ?>" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('short_biography'); ?></label>
                        <textarea maxlength="181" style="resize: none" rows="3" class="form-control" type="text" name="short_bio" placeholder="<?php echo $this->lang->line('ph_alumnus_short_bio'); ?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('profession'); ?></label>
                        <select class="combobox" name="profession_id">
                            <option value=""><?php echo $this->lang->line('select_profession'); ?></option>
                            <?php
                            $professions_info = $this->db->get('profession')->result_array();
                            foreach ($professions_info as $profession) :
                            ?>
                                <option value="<?php echo $profession['profession_id']; ?>"><?php echo $profession['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('position'); ?></label>
                        <input class="form-control" type="text" name="position" placeholder="<?php echo $this->lang->line('ph_alumnus_position'); ?>" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('blood_group'); ?></label>
                        <select class="combobox" name="blood_group">
                            <option value=""><?php echo $this->lang->line('select_blood_group'); ?></option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('facebook'); ?></label>
                        <input class="form-control" type="text" name="facebook" placeholder="<?php echo $this->lang->line('ph_alumnus_facebook'); ?>" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('twitter'); ?></label>
                        <input class="form-control" type="text" name="twitter" placeholder="<?php echo $this->lang->line('ph_alumnus_twitter'); ?>" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('linkedin'); ?></label>
                        <input class="form-control" type="text" name="linkedin" placeholder="<?php echo $this->lang->line('ph_alumnus_linkedin'); ?>" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('youtube'); ?></label>
                        <input class="form-control" type="text" name="youtube" placeholder="<?php echo $this->lang->line('ph_alumnus_youtube'); ?>" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('status'); ?></label>
                        <select class="combobox" name="status" data-parsley-required="true">
                            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
                            <option value="0"><?php echo $this->lang->line('pending'); ?></option>
                            <option value="1"><?php echo $this->lang->line('active'); ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('deceased'); ?></label>
                        <select class="combobox" name="deceased" data-parsley-required="true">
                            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
                            <option value="0"><?php echo $this->lang->line('no'); ?></option>
                            <option value="1"><?php echo $this->lang->line('yes'); ?></option>
                        </select>
                    </div>

                    <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('add'); ?></button>
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