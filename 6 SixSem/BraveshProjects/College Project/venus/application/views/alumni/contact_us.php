<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('contact_us'); ?></li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section id="contact">
                    <?php
                        $contact_us_settings_info = $this->security->xss_clean($this->db->get_where('contact_us_settings', array('contact_us_settings_id' => '1'))->result_array());
                        foreach ($contact_us_settings_info as $row):
                    ?>
                        <header><h1><?php echo $this->lang->line('contact_us'); ?></h1></header>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <h3><?php echo $row['title']; ?></h3>
                                    <br>
                                    <span><?php echo $row['address_line_1']; ?></span>
                                    <br>
                                    <span><?php echo $row['address_line_2']; ?></span>
                                    <br>
                                    <abbr title="Telephone"><?php echo $this->lang->line('telephone'); ?>:</abbr> <?php echo $row['telephone']; ?>
                                    <br>
                                    <abbr title="Email"><?php echo $this->lang->line('email'); ?>:</abbr> <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                                </address>
                                <div class="icons">
                                    <a href="<?php echo $row['twitter']; ?>" target="_blank">
                                        <i class="fa fa-twitter" style="color: #55acee"></i>
                                    </a>
                                    <a href="<?php echo $row['facebook']; ?>" target="_blank">
                                        <i class="fa fa-facebook" style="color: #3b5998"></i>
                                    </a>
                                    <a href="<?php echo $row['linkedin']; ?>" target="_blank">
                                        <i class="fa fa-linkedin" style="color: #007bb5"></i>
                                    </a>
                                    <a href="<?php echo $row['youtube']; ?>" target="_blank">
                                        <i class="fa fa-youtube-play" style="color: #bb0000"></i>
                                    </a>
                                </div><!-- /.icons -->
                                <hr>
                                <p><?php echo $row['description']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <div class="map-wrapper">
                                    <iframe src="<?php echo $row['google_map']; ?>" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </section>
                    <section id="contact-form" class="clearfix">
                        <header><h2><?php echo $this->lang->line('send_us_a_message'); ?></h2></header>
                        <?php if ($this->session->flashdata('info')): ?>
						<div class="alert alert-info alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<?php echo $this->session->flashdata('info'); ?>
						</div>
						<?php endif; ?>
						<?php echo form_open('send_message', array('method' => 'post', 'name' => 'contact_us', 'class' => 'contact-form', 'data-parsley-validate' => 'true')); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="name"><?php echo $this->lang->line('your_name'); ?></label>
                                            <input type="text" name="name" id="name" data-parsley-required="true">
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="email"><?php echo $this->lang->line('your_email'); ?></label>
                                            <input type="email" name="email" id="email" data-parsley-required="true">
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="message"><?php echo $this->lang->line('your_message'); ?></label>
                                            <textarea name="message" id="message" style="resize: none" maxlength="666" data-parsley-required="true"></textarea>
                                        </div><!-- /.controls -->
                                    </div><!-- /.control-group -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                            <div class="pull-right">
                                <input type="submit" class="btn btn-color-primary" id="submit" value="<?php echo $this->lang->line('send_us_a_message'); ?>">
                            </div><!-- /.form-actions -->
                        <?php echo form_close(); ?>
                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header><h2><?php echo $this->lang->line('most_read_stories'); ?></h2></header>
                        <div class="section-content">
                        <?php
                            $this->db->order_by('times', 'desc');
                            $this->db->limit('3');
                            $most_read_stories = $this->security->xss_clean($this->db->get('story')->result_array());
                            foreach ($most_read_stories as $most_story):
                        ?>
                            <article>
                                <figure class="date">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo date('m-d-Y', $most_story['timestamp']); ?>
                                </figure>
                                <header>
                                    <a href="<?php echo base_url(); ?>story/<?php echo $most_story['permalink']; ?>">
                                        <?php echo $most_story['title']; ?>
                                    </a>
                                </header>
                            </article><!-- /article -->
                        <?php endforeach; ?>
                        </div><!-- /.section-content -->
                        <!-- <a href="blog-detail.html" class="read-more">All News</a> -->
                    </aside><!-- /.news-small -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
