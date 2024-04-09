<!-- begin #sidebar -->
<div id="sidebar" class="sidebar" data-disable-slide-animation="true">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="text-center">
					<div class="cover with-shadow"></div>
					<div class="image">
						<img align="middle" src="<?php echo base_url(); ?>uploads/logos/<?php echo $this->db->get_where('setting', array('setting_id' => 7))->row()->content; ?>" alt="" />
					</div>
					<div class="info">
						<?php 
							if ($this->session->userdata('auth_kind') == 'admin')
								echo $this->lang->line('admin');
							else
								echo $this->db->get_where('alumnus', array('alumnus_id' => $this->session->userdata('admin_id')))->row()->name; 
						?>
						<small><?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->title; ?></small>
					</div>
				</div>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li class="nav-header">Navigation</li>

			<?php if ($this->session->userdata('auth_kind') == 'admin'): ?>
			<!-- Dashboard -->
			<li class="<?php if ($page_name == 'dashboard') echo 'active'; ?>">
				<a href="<?php echo base_url(); ?>admin">
					<i class="fa fa-laptop"></i>
					<span><?php echo $this->lang->line('dashboard'); ?></span>
				</a>
			</li>
			<!-- Alumni -->
			<li class="has-sub <?php if ($page_name == 'add_alumnus' || $page_name == 'alumni' || $page_name == 'email_alumni' || $page_name == 'sms_alumni') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-user"></i>
					<span><?php echo $this->lang->line('alumnus'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_alumnus') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/add_alumnus"><?php echo $this->lang->line('add_alumnus'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'alumni') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/alumni"><?php echo $this->lang->line('alumni'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'email_alumni') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/email_alumni"><?php echo $this->lang->line('email_to_alumni'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'sms_alumni') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/sms_alumni"><?php echo $this->lang->line('sms_to_alumni'); ?></a>
					</li>
				</ul>
			</li>
			<!-- Slides -->
			<li class="has-sub <?php if ($page_name == 'add_slide' || $page_name == 'slides') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-image"></i>
					<span><?php echo $this->lang->line('slider'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_slide') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/add_slide"><?php echo $this->lang->line('add_slide'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'slides') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/slides"><?php echo $this->lang->line('slides'); ?></a>
					</li>
				</ul>
			</li>
			<!-- About Us -->
			<li class="<?php if ($page_name == 'about_us') echo 'active'; ?>">
				<a href="<?php echo base_url(); ?>admin/about_us">
					<i class="fa fa-info-circle"></i>
					<span><?php echo $this->lang->line('about_us'); ?></span>
				</a>
			</li>
			<!-- Events -->
			<li class="has-sub <?php if ($page_name == 'add_event' || $page_name == 'manage_events' || $page_name == 'events') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-calendar-alt"></i>
					<span><?php echo $this->lang->line('event'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_event') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/add_event"><?php echo $this->lang->line('add_event'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'manage_events') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/manage_events"><?php echo $this->lang->line('manage_events'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'events') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/events"><?php echo $this->lang->line('events'); ?></a>
					</li>
				</ul>
			</li>
			<?php endif; ?>
			
			<!-- Stories -->
			<li class="has-sub <?php if ($page_name == 'add_story' || $page_name == 'stories') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-book"></i>
					<span><?php echo $this->lang->line('story'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_story') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/add_story"><?php echo $this->lang->line('add_story'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'stories') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/stories"><?php echo $this->lang->line('stories'); ?></a>
					</li>
				</ul>
			</li>

			<?php if ($this->session->userdata('auth_kind') == 'admin'): ?>
			<!-- Comments -->
			<li class="<?php if ($page_name == 'comment') echo 'active'; ?>">
				<a href="<?php echo base_url(); ?>admin/comment">
					<i class="fa fa-comments"></i>
					<span><?php echo $this->lang->line('comments'); ?></span>
				</a>
			</li>
			<!-- Gallery -->
			<li class="has-sub <?php if ($page_name == 'add_album' || $page_name == 'add_gallery' || $page_name == 'edit_gallery' || $page_name == 'albums') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-camera-retro"></i>
					<span><?php echo $this->lang->line('gallery'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_album' || $page_name == 'add_gallery' || $page_name == 'edit_gallery') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/add_album"><?php echo $this->lang->line('add_album'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'albums') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/albums"><?php echo $this->lang->line('albums'); ?></a>
					</li>
				</ul>
			</li>
			<!-- Volunteers -->
			<li class="has-sub <?php if ($page_name == 'add_volunteer' || $page_name == 'volunteers') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-life-ring"></i>
					<span><?php echo $this->lang->line('volunteer'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_volunteer') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/add_volunteer"><?php echo $this->lang->line('add_volunteer'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'volunteers') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/volunteers"><?php echo $this->lang->line('volunteers'); ?></a>
					</li>
				</ul>
			</li>
			<!-- Contact Us -->
			<li class="<?php if ($page_name == 'contact_us') echo 'active'; ?>">
				<a href="<?php echo base_url(); ?>admin/contact_us">
					<i class="fa fa-university"></i>
					<span><?php echo $this->lang->line('contact_us'); ?></span>
				</a>
			</li>
			<!-- Notices -->
			<li class="has-sub <?php if ($page_name == 'add_notice' || $page_name == 'notices') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-podcast"></i>
					<span><?php echo $this->lang->line('notice_board'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_notice') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/add_notice"><?php echo $this->lang->line('add_notice'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'notices') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/notices"><?php echo $this->lang->line('notices'); ?></a>
					</li>
				</ul>
			</li>
			<!-- Donations -->
			<li class="has-sub <?php if ($page_name == 'add_donation' || $page_name == 'manage_donation_purposes' || $page_name == 'donations') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-credit-card"></i>
					<span><?php echo $this->lang->line('donation'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_donation') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/add_donation"><?php echo $this->lang->line('add_donation'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'manage_donation_purposes') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/manage_donation_purposes"><?php echo $this->lang->line('manage_donation_purposes'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'donations') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/donations"><?php echo $this->lang->line('donations'); ?></a>
					</li>
				</ul>
			</li>
			<!-- Messages -->
			<li class="<?php if ($page_name == 'message') echo 'active'; ?>">
				<a href="<?php echo base_url(); ?>admin/message">
					<i class="fa fa-envelope"></i>
					<span><?php echo $this->lang->line('message'); ?></span>
				</a>
			</li>
			<!-- Notices -->
			<li class="has-sub <?php if ($page_name == 'add_job' || $page_name == 'jobs') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-lock"></i>
					<span><?php echo $this->lang->line('job'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'add_job') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/add_job"><?php echo $this->lang->line('add_job'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'jobs') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/jobs"><?php echo $this->lang->line('jobs'); ?></a>
					</li>
				</ul>
			</li>
			<!-- Settings -->
			<li class="has-sub <?php if ($page_name == 'permission_requests' || $page_name == 'website_settings' || $page_name == 'profession_settings' || $page_name == 'admin_settings' || $page_name == 'logo_settings' || $page_name == 'bg_settings') echo 'active'; ?>">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-cog"></i>
					<span><?php echo $this->lang->line('settings'); ?></span>
				</a>
				<ul class="sub-menu">
					<li class="<?php if ($page_name == 'website_settings') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/website_settings"><?php echo $this->lang->line('website_settings'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'profession_settings') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/profession_settings"><?php echo $this->lang->line('profession_settings'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'logo_settings') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/logo_settings"><?php echo $this->lang->line('logo_settings'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'bg_settings') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/bg_settings"><?php echo $this->lang->line('login_bg_settings'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'admin_settings') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/admin_settings"><?php echo $this->lang->line('admin_settings'); ?></a>
					</li>
					<li class="<?php if ($page_name == 'permission_requests') echo 'active'; ?>">
						<a href="<?php echo base_url(); ?>admin/permission_requests"><?php echo $this->lang->line('permission_requests'); ?></a>
					</li>
				</ul>
			</li>
			<?php endif; ?>
			<!-- Support -->
			<li class="">
                <a href="https://support.t1m9m.com" target="_blank">
                    <i class="fa fa-question-circle"></i>
                    <span><?php echo $this->lang->line('support'); ?></span>
                </a>
            </li>
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar