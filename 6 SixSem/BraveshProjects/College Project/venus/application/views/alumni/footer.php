<!-- Footer -->
<footer id="page-footer">
    <section id="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <aside class="logo">
                        <img src="<?php echo base_url(); ?>uploads/logos/<?php echo $this->db->get_where('setting', array('setting_id' => 6))->row()->content; ?>" class="vertical-center">
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
					<?php
                        $contact_us_settings_info = $this->security->xss_clean($this->db->get_where('contact_us_settings', array('contact_us_settings_id' => '1'))->result_array());
                        foreach ($contact_us_settings_info as $row):
                    ?>
                        <header><h4><?php echo $this->lang->line('contact_us'); ?></h4></header>
                        <address>
                            <strong><?php echo $row['title']; ?></strong>
                            <br><br>
                            <span><?php echo $row['address_line_1']; ?></span>
                            <br>
                            <span><?php echo $row['address_line_2']; ?></span>
                            <br>
                            <abbr title="Telephone Number"><?php echo $this->lang->line('telephone'); ?>:</abbr> <?php echo $row['telephone']; ?>
                            <br>
                            <abbr title="Email Address"><?php echo $this->lang->line('email'); ?>:</abbr> <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                        </address>
                    <?php endforeach; ?>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4><?php echo $this->lang->line('important_links'); ?></h4></header>
                        <ul class="list-links">
							<li><a href="<?php echo base_url(); ?>contact_us"><?php echo $this->lang->line('contact_us'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>alumni"><?php echo $this->lang->line('alumni'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>notices"><?php echo $this->lang->line('notice_board'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>events"><?php echo $this->lang->line('events'); ?></a></li>
                        </ul>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4><?php echo $this->lang->line('about'); ?> <?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->title; ?></h4></header>
                        <p><?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->description; ?></p>
                    </aside>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="background"><img src="<?php echo base_url(); ?>assets/alumni/img/background-city.png" class="" alt=""></div>
    </section><!-- /#footer-content -->

    <section id="footer-bottom">
        <div class="container">
            <div class="footer-inner">
                <div class="copyright" align="center">
                    <a href="<?php echo base_url(); ?>admin" target="_blank"><?php echo $this->lang->line('admin_panel'); ?></a>
                    <br>
                    &copy; 2017 - <?php echo date('Y'); ?> <a href="<?php echo $this->db->get_where('setting', array('setting_id' => 9))->row()->content; ?>" target="_blank"><?php echo $this->db->get_where('setting', array('setting_id' => 3))->row()->content;; ?></a>, All rights reserved.                     
                </div>
            </div>
        </div>
    </section>
</footer>
