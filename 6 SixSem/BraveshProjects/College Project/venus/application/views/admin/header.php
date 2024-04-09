<!-- begin #header -->
<div id="header" class="header navbar-default hidden-print">
    <!-- begin navbar-header -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed navbar-toggle-left" data-click="sidebar-minify">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="<?php echo base_url(); ?>admin" class="navbar-brand">
            <?php echo strtoupper($this->db->get_where('about_us', array('about_us_id' => '1'))->row()->title); ?>
        </a>
    </div>
    <!-- end navbar-header -->

    <!-- begin header-nav -->
    <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <span class="d-none d-md-inline">
                    Hi, 
                    <?php 
                        if ($this->session->userdata('auth_kind') == 'admin')
                            echo $this->lang->line('admin');
                        else
                            echo $this->db->get_where('alumnus', array('alumnus_id' => $this->session->userdata('admin_id')))->row()->name; 
                    ?>
                </span>
                <img src="<?php echo base_url(); ?>uploads/logos/<?php echo $this->db->get_where('setting', array('setting_id' => 7))->row()->content; ?>" alt="t1m9m" />
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="<?php echo base_url(); ?>admin/message" class="dropdown-item"><?php echo $this->lang->line('inbox'); ?></a>
                <a href="<?php echo base_url(); ?>admin/website_settings" class="dropdown-item"><?php echo $this->lang->line('website_settings'); ?></a>
                <a href="<?php echo base_url(); ?>admin/admin_settings" class="dropdown-item"><?php echo $this->lang->line('admin_settings'); ?></a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url(); ?>auth/admin_logout" class="dropdown-item"><?php echo $this->lang->line('logout'); ?></a>
            </div>
        </li>
    </ul>
    <!-- end header navigation right -->

    <div class="search-form">
        <button class="search-btn" type="submit"><i class="material-icons">search</i></button>
        <input type="text" class="form-control" placeholder="Search Something..." />
        <a href="#" class="close" data-dismiss="navbar-search"><i class="material-icons">close</i></a>
    </div>
</div>
<!-- end #header -->