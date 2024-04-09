<!-- begin #content -->
<div id="content" class="content">
    <!-- begin page-header -->
    <h1 class="page-header">Welcome to <?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->title; ?> <small><?php echo date('d F, Y'); ?></small></h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon"><i class="fa fa-user"></i></div>
                <div class="stats-info">
                    <h4><b><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('caps_alumni'); ?></b></h4>
                    <p><?php echo $this->db->count_all('alumnus'); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>admin/alumni"><?php echo $this->lang->line('view_details'); ?> <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon"><i class="fa fa-image"></i></div>
                <div class="stats-info">
                    <h4><b><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('caps_slides'); ?></b></h4>
                    <p><?php echo $this->db->count_all('slide'); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>admin/slides"><?php echo $this->lang->line('view_details'); ?> <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon"><i class="fa fa-calendar-alt"></i></div>
                <div class="stats-info">
                    <h4><b><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('caps_events'); ?></b></h4>
                    <p><?php echo $this->db->count_all('event'); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>admin/events"><?php echo $this->lang->line('view_details'); ?> <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon"><i class="fa fa-book"></i></div>
                <div class="stats-info">
                    <h4><b><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('caps_stories'); ?></b></h4>
                    <p><?php echo $this->db->count_all('story'); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>admin/stories"><?php echo $this->lang->line('view_details'); ?> <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon"><i class="fa fa-camera-retro"></i></div>
                <div class="stats-info">
                    <h4><b><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('caps_albums'); ?></b></h4>
                    <p><?php echo $this->db->count_all('album'); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>admin/albums"><?php echo $this->lang->line('view_details'); ?> <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon"><i class="fa fa-envelope"></i></div>
                <div class="stats-info">
                    <h4><b><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('caps_messages'); ?></b></h4>
                    <p><?php echo $this->db->count_all('contact_us_message'); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>admin/message"><?php echo $this->lang->line('view_details'); ?> <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon"><i class="fa fa-life-ring"></i></div>
                <div class="stats-info">
                    <h4><b><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('caps_volunteers'); ?></b></h4>
                    <p><?php echo $this->db->count_all('volunteer'); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>admin/volunteers"><?php echo $this->lang->line('view_details'); ?> <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="widget widget-stats bg-teal">
                <div class="stats-icon"><i class="fa fa-podcast"></i></div>
                <div class="stats-info">
                    <h4><b><?php echo $this->lang->line('total'); ?> <?php echo $this->lang->line('caps_notices'); ?></b></h4>
                    <p><?php echo $this->db->count_all('notice'); ?></p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url(); ?>admin/notices"><?php echo $this->lang->line('view_details'); ?> <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end #content