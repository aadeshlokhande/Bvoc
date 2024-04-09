<!-- begin #content -->
<div id="content" class="content">
    <h1 class="page-header"><?php echo $this->lang->line('donation'); ?> <small><?php echo $this->lang->line('add_donation_page'); ?></small></h1>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-6 offset-lg-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open('admin/donations/add', array('data-parsley-validate' => 'true', 'name' => 'add_donations')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('alumnus'); ?></label>
                        <select class="combobox" name="alumnus_id" data-parsley-required="true">
                            <option value=""><?php echo $this->lang->line('select_alumnus'); ?></option>
                            <?php
                            $alumni = $this->security->xss_clean($this->db->get('alumnus')->result_array());
                            foreach ($alumni as $alumnus) :
                            ?>
                                <option value="<?php echo $alumnus['alumnus_id']; ?>"><?php echo $alumnus['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('amount'); ?></label>
                        <input class="form-control" name="amount" placeholder="<?php echo $this->lang->line('amount_input_field'); ?>" data-parsley-required="true" data-parsley-type="digits" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('donation_purpose'); ?></label>
                        <select class="combobox" name="donation_purpose_id" data-parsley-required="true">
                            <option value=""><?php echo $this->lang->line('select_donation_purpose'); ?></option>
                            <?php
                            $donation_purposes = $this->security->xss_clean($this->db->get_where('donation_purpose', array('status', 1))->result_array());
                            foreach ($donation_purposes as $donation_purpose) :
                            ?>
                                <option value="<?php echo $donation_purpose['donation_purpose_id']; ?>"><?php echo $donation_purpose['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('donation_via'); ?></label>
                        <input class="form-control" name="via" placeholder="<?php echo $this->lang->line('donation_via_field'); ?>" data-parsley-required="true" data-parsley-type="text" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('status'); ?></label>
                        <select class="combobox" name="status" data-parsley-required="true">
                            <option value=""><?php echo $this->lang->line('select_status'); ?></option>
                            <option value="0"><?php echo $this->lang->line('due'); ?></option>
                            <option value="1"><?php echo $this->lang->line('donated'); ?></option>
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