<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('volunteer'); ?> <small><?php echo $this->lang->line('add_volunteer_page'); ?></small></h1>
        </div>
    </div>

    <!-- begin row -->
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open('admin/volunteers/add', array('data-parsley-validate' => 'true', 'name' => 'add_volunteer')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('name'); ?></label>
                        <input class="form-control" type="text" name="name" placeholder="<?php echo $this->lang->line('ph_volunteer_name'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('username'); ?></label>
                        <input class="form-control" type="text" name="username" placeholder="<?php echo $this->lang->line('ph_volunteer_username'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('email'); ?></label>
                        <input class="form-control" type="text" name="email" placeholder="<?php echo $this->lang->line('ph_volunteer_email'); ?>" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('password'); ?></label>
                        <input type="text" name="password" id="password-indicator-visible" class="form-control m-b-5" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('mobile'); ?></label>
                        <input class="form-control" type="text" name="mobile" placeholder="<?php echo $this->lang->line('ph_volunteer_mobile'); ?>" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('class'); ?></label>
                        <select class="combobox" name="batch">
                            <option value=""><?php echo $this->lang->line('select_class'); ?></option>
                            <?php for ($start_year = date('Y') + 5; $start_year >= 1900; $start_year--) : ?>
                                <option value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
                            <?php endfor; ?>
                        </select>
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
                        <label><?php echo $this->lang->line('status'); ?></label>
                        <select class="combobox" name="status" data-parsley-required="true">
                            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
                            <option value="0"><?php echo $this->lang->line('pending'); ?></option>
                            <option value="1"><?php echo $this->lang->line('active'); ?></option>
                        </select>
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