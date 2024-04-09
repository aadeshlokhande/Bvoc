<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('contact_us'); ?> <small><?php echo $this->lang->line('contact_us_page'); ?></small></h1>
        </div>
    </div>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-6 offset-md-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php
                    $contact_us_settings_info = $this->security->xss_clean($this->db->get_where('contact_us_settings', array('contact_us_settings_id' => '1'))->result_array());
                    foreach ($contact_us_settings_info as $row) :
                    ?>
                        <?php echo form_open('admin/contact_us/update_part_1', array('data-parsley-validate' => 'true', 'name' => 'contact_us')); ?>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('association_name'); ?></label>
                            <input value="<?php echo $row['title']; ?>" class="form-control" type="text" name="title" placeholder="Type name of the association" data-parsley-required="true" />
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('address_line_1'); ?></label>
                            <input value="<?php echo $row['address_line_1']; ?>" class="form-control" type="text" name="address_line_1" placeholder="Type address line 1" data-parsley-required="true" />
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('address_line_2'); ?></label>
                            <input value="<?php echo $row['address_line_2']; ?>" class="form-control" type="text" name="address_line_2" placeholder="Type address line 2" data-parsley-required="true" />
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('telephone'); ?></label>
                            <input value="<?php echo $row['telephone']; ?>" class="form-control" type="text" name="telephone" placeholder="Type telephone number" data-parsley-required="true" />
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('email'); ?></label>
                            <input value="<?php echo $row['email']; ?>" class="form-control" type="text" name="email" placeholder="Type email address" data-parsley-required="true" />
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('description'); ?></label>
                            <textarea style="resize: none" rows="4" maxlength="222" class="form-control" type="text" name="description" placeholder="Type a little description" data-parsley-required="true"><?php echo $row['description']; ?></textarea>
                        </div>

                        <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
                        <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-6 offset-md-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open('admin/contact_us/update_part_2', array('data-parsley-validate' => 'true', 'name' => 'contact_us')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('twitter'); ?></label>
                        <input value="<?php echo $row['twitter']; ?>" class="form-control" type="text" name="twitter" placeholder="Type twitter link" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('facebook'); ?></label>
                        <input value="<?php echo $row['facebook']; ?>" class="form-control" type="text" name="facebook" placeholder="Type facebook link" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('linkedin'); ?></label>
                        <input value="<?php echo $row['linkedin']; ?>" class="form-control" type="text" name="linkedin" placeholder="Type linkedin link" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('youtube'); ?></label>
                        <input value="<?php echo $row['youtube']; ?>" class="form-control" type="text" name="youtube" placeholder="Type youtube link" data-parsley-required="true" />
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('google_map'); ?></label>
                        <textarea style="resize: none" rows="8" class="form-control" type="text" name="google_map" placeholder="Type google map link" data-parsley-required="true"><?php echo $row['google_map']; ?></textarea>
                    </div>

                    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                <?php endforeach; ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->