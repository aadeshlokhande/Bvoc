<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('login_or_register'); ?></li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div id="page-main">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <section id="account-sign-in" class="account-block">
                                <header>
                                    <h2><?php echo $this->lang->line('have_an_account'); ?>?</h2>
                                </header>
                                <?php if ($this->session->flashdata('info')) : ?>
                                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <?php echo $this->session->flashdata('info'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('warning')) : ?>
                                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <?php echo $this->session->flashdata('warning'); ?>
                                    </div>
                                <?php endif; ?>

                                <?php echo form_open('auth/website_login', array('class' => 'clearfix', 'data-parsley-validate' => 'true')); ?>
                                <div class="form-group">
                                    <label for="email"><?php echo $this->lang->line('email'); ?></label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="<?php echo $this->lang->line('ph_alumni_email'); ?>" data-parsley-required="true">
                                </div>
                                <div class="form-group">
                                    <label for="password"><?php echo $this->lang->line('password'); ?></label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="<?php echo $this->lang->line('ph_alumni_password'); ?>" data-parsley-required="true">
                                </div>
                                <div class="">
                                    <div class="radio">
                                        <label><input type="radio" value="alumnus" name="auth_type" checked><?php echo $this->lang->line('login_as_alumnus'); ?></label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" value="volunteer" name="auth_type"><?php echo $this->lang->line('login_as_volunteer'); ?></label>
                                    </div>
                                </div>
                                <button type="submit" class="btn pull-right"><?php echo $this->lang->line('sign_in'); ?></button>
                                <?php echo form_close(); ?>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <section class="account-block">
                                <header>
                                    <h2><?php echo $this->lang->line('create_new_alumni_account'); ?></h2>
                                </header>
                                <?php echo form_open('register/alumuns', array('data-parsley-validate' => 'true', 'style' => 'margin: 0 0 40px 0')); ?>
                                <div class="form-group">
                                    <label><?php echo $this->lang->line('name'); ?></label>
                                    <input name="name" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_full_name'); ?>" data-parsley-required="true">
                                </div>
                                <div class="form-group">
                                    <label><?php echo $this->lang->line('class'); ?></label>
                                    <select name="batch" data-parsley-required="true">
                                        <option value=""><?php echo $this->lang->line('select_class'); ?></option>
                                        <?php for ($start_year = date('Y'); $start_year >= 1900; $start_year--) : ?>
                                            <option value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><?php echo $this->lang->line('email'); ?></label>
                                    <input name="email" type="email" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_email'); ?>" data-parsley-required="true">
                                </div>
                                <div class="form-group">
                                    <label><?php echo $this->lang->line('mobile_number'); ?></label>
                                    <input name="mobile_number" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_mobile'); ?>" data-parsley-required="true">
                                </div>
                                <div class="form-group">
                                    <label><?php echo $this->lang->line('profession'); ?></label>
                                    <select name="profession_id" data-parsley-required="true">
                                        <option value=""><?php echo $this->lang->line('select_profession'); ?></option>
                                        <?php
                                        $professions_info = $this->security->xss_clean($this->db->get('profession')->result_array());
                                        foreach ($professions_info as $profession) :
                                        ?>
                                            <option value="<?php echo $profession['profession_id']; ?>"><?php echo $profession['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><?php echo $this->lang->line('linkedin'); ?></label>
                                    <input name="linkedin" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_linkedin'); ?>" data-parsley-required="true">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="terms" data-parsley-required="true"><?php echo $this->lang->line('i_understand'); ?>
                                        <a onclick="showAjaxModal('<?php echo base_url(); ?>modal/fopup/modal_show_terms_and_conditions');" href="javascript:;">
                                            <?php echo $this->lang->line('terms_and_conditions'); ?>
                                        </a>
                                    </label>
                                </div>
                                <button style="margin: 6% 0 10% 0" type="submit" class="btn pull-right"><?php echo $this->lang->line('create_new_account'); ?></button>
                                <?php echo form_close(); ?>
                            </section><!-- /#account-block -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->