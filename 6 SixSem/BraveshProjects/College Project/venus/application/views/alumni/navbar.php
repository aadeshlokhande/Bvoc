<div class="primary-navigation-wrapper">
    <header class="navbar" id="top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand nav" id="brand">
                    <a href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url(); ?>uploads/logos/<?php echo $this->db->get_where('setting', array('setting_id' => 5))->row()->content; ?>" alt="Venus">
                    </a>
                </div>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="<?php if ($page_name == 'home') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>">
                            <?php echo $this->lang->line('home'); ?>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'alumni' || $page_name == 'alumnus'  || $page_name == 'batchmates' || $page_name == 'chat' || $page_name == 'deceased') echo 'active'; ?>">
                        <a class="has-child no-link" href="#">
                            <?php echo $this->lang->line('alumni'); ?>
                        </a>
                        <ul class="list-unstyled child-navigation">
                            <li><a href="<?php echo base_url(); ?>alumni"><?php echo $this->lang->line('all'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>batchmates"><?php echo $this->lang->line('batchmates'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>chat"><?php echo $this->lang->line('chat'); ?></a></li>
                            <li><a href="<?php echo base_url(); ?>deceased"><?php echo $this->lang->line('deceased'); ?></a></li>
                        </ul>
                    </li>
                    <li class="<?php if ($page_name == 'donation') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>donation">
                            <?php echo $this->lang->line('donation'); ?>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'events' || $page_name == 'event') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>events">
                            <?php echo $this->lang->line('events'); ?>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'stories' || $page_name == 'story' || $page_name == 'archive_stories') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>stories">
                            <?php echo $this->lang->line('stories'); ?>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'gallery') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>gallery">
                            <?php echo $this->lang->line('gallery'); ?>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'volunteers') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>volunteers">
                            <?php echo $this->lang->line('volunteers'); ?>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'jobs') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>jobs">
                            <?php echo $this->lang->line('jobs'); ?>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'notices') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>notices">
                            <?php echo $this->lang->line('notice_board'); ?>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'contact_us') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>contact_us">
                            <?php echo $this->lang->line('contact_us'); ?>
                        </a>
                    </li>
                </ul>
            </nav><!-- /.navbar collapse-->
        </div><!-- /.container -->
    </header><!-- /.navbar -->
</div><!-- /.primary-navigation -->