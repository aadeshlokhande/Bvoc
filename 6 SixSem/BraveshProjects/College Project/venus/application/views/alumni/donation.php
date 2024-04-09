<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('donation'); ?></li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div id="page-main">
                <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="account-block">
                                <header>
                                    <h2><?php echo $this->lang->line('my_donation'); ?></h2>
                                </header>
                                <?php echo form_open('donation/add', array('data-parsley-validate' => 'true')); ?>
                                <div class="col-md-6 col-md-offset-3" style="margin-bottom: 40px">
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('amount'); ?> (<?php echo $this->db->get_where('setting', array('setting_id' => 11))->row()->content; ?>)</label>
                                        <input name="amount" type="text" class="form-control" placeholder="<?php echo $this->lang->line('amount_input_field'); ?>" data-parsley-required="true" data-parsley-type="digits">
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo $this->lang->line('donation_purpose'); ?></label>
                                        <select name="donation_purpose_id" data-parsley-required="true">
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
                                        <input name="via" type="text" class="form-control" placeholder="<?php echo $this->lang->line('donation_via_field'); ?>" data-parsley-required="true">
                                    </div>

                                    <div align="right">
                                        <button type="submit" class="btn"><?php echo $this->lang->line('submit'); ?></button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </section>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->