<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li><a href="<?php echo base_url(); ?>events"><?php echo $this->lang->line('events'); ?></a></li>
        <li class="active"><?php echo $this->db->get_where('event', array('permalink' => $permalink))->row()->name; ?></li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <?php
            $event_details = $this->security->xss_clean($this->db->get_where('event', array('permalink' => $permalink))->result_array());
            foreach ($event_details as $event):
        ?>
        <header><h1><?php echo $event['name']; ?></h1></header>
        <div class="row">
            <!-- Course Image -->
            <div class="col-md-2 col-sm-3">
                <figure class="event-image">
                    <div class="image-wrapper">
                        <img src="<?php echo base_url(); ?>uploads/events/<?php echo $event['image_link']; ?>">
                    </div>
                </figure>
            </div><!-- end Course Image -->
            <!--MAIN Content-->
            <div class="col-md-6 col-sm-9">
                <div id="page-main">
                    <section id="event-detail">
                        <article class="event-detail">
                            <section id="event-header">
                                <header>
                                    <h2 class="event-date"><?php echo date('l F d, Y', $event['event_date']); ?></h2>
                                </header>
                                <hr>
                                <div class="course-count-down" id="course-count-down">
                                    <figure class="course-start"><?php echo $this->lang->line('event_starts_in'); ?></figure>
                                    <!-- /.course-start-->

                                    <div class="count-down-wrapper">
                                        <script type="text/javascript">
                                            var _date = "<?php echo date('M d, Y ', $event['event_date']) . explode(" ", $event['event_time'])[0]; ?>";
                                        </script>
                                    </div><!-- /.count-down-wrapper -->

                                </div><!-- /.course-count-down -->
                                <hr>
                                <figure>
                                    <span class="course-summary"><i class="fa fa-map-marker"></i><?php echo $event['venue']; ?></span>
                                    <span class="course-summary"><i class="fa fa-hashtag"></i><?php echo $event['hashtag']; ?></span>
                                    <span class="course-summary"><i class="fa fa-clock-o"></i><?php echo $event['event_time']; ?></span>
                                </figure>
                            </section><!-- /#course-header -->

                            <?php if ($this->session->flashdata('success')): ?>
							<div class="alert alert-success alert-dismissible fade in" role="alert" id="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
								<?php echo $this->session->flashdata('success'); ?>
							</div>
							<?php endif; ?>
							<?php if ($this->session->flashdata('error')): ?>
							<div class="alert alert-danger alert-dismissible fade in" role="alert" id="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
								<?php echo $this->session->flashdata('error'); ?>
							</div>
							<?php endif; ?>

                            <section id="course-info">
                                <header><h2><?php echo $this->lang->line('event_details'); ?></h2></header>
                                <p><?php echo $event['paragraph_1']; ?></p>
                                <p><?php echo $event['paragraph_2']; ?></p>
                                <p><?php echo $event['paragraph_3']; ?></p>
                            </section>

                            <?php if (time() < $event['event_date'] && $this->session->userdata('auth_type') == 'alumnus'): ?>
                            <section>
								<header><h2>RSVP</h2></header>
								<?php echo form_open('rsvp/' . $this->db->get_where('event', array('permalink' => $permalink))->row()->event_id . '/yes/' . $this->session->userdata('alumnus_id'), array('method' => 'post')); ?>
								<button style="float: left; margin-right: 10px;" type="submit" class="btn btn-framed btn-color-grey btn-small"><?php echo $this->lang->line('yes') . ' (' . $this->db->get_where('event_management', array('event_id' => $event['event_id']))->row()->yes . ')'; ?></button>
								<?php echo form_close(); ?>
								<?php echo form_open('rsvp/' . $this->db->get_where('event', array('permalink' => $permalink))->row()->event_id . '/maybe/' . $this->session->userdata('alumnus_id'), array('method' => 'post')); ?>
								<button style="float: left; margin-right: 10px;" type="submit" class="btn btn-framed btn-color-grey btn-small"><?php echo $this->lang->line('maybe') . ' (' . $this->db->get_where('event_management', array('event_id' => $event['event_id']))->row()->maybe . ')'; ?></button>
								<?php echo form_close(); ?>
								<?php echo form_open('rsvp/' . $this->db->get_where('event', array('permalink' => $permalink))->row()->event_id . '/no/' . $this->session->userdata('alumnus_id'), array('method' => 'post')); ?>
								<button style="float: left;" type="submit" class="btn btn-framed btn-color-grey btn-small"><?php echo $this->lang->line('no') . ' (' . $this->db->get_where('event_management', array('event_id' => $event['event_id']))->row()->no . ')'; ?></button>
								<?php echo form_close(); ?>
							</section>
							<?php endif; ?>

                            <section id="map">
                                <header><h2><?php echo $this->lang->line('place_on_map'); ?></h2></header>
                                <div class="map-wrapper">
                                    <iframe src="<?php echo $event['google_map']; ?>" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                </div>
                            </section><!-- /#map -->

                            <?php if ($this->session->userdata('auth_type')): ?>
							<section id="course-list">
								<header><h2><?php echo $this->lang->line('event_volunteers'); ?></h2></header>
	                            <div class="table-responsive">
	                                <table class="table table-hover course-list-table">
	                                    <thead>
		                                    <tr>
		                                        <th><?php echo $this->lang->line('name'); ?></th>
		                                        <th><?php echo $this->lang->line('email'); ?></th>
		                                        <th><?php echo $this->lang->line('batch'); ?></th>
		                                        <th><?php echo $this->lang->line('profession'); ?></th>
		                                    </tr>
	                                    </thead>
	                                    <tbody>
	                                    <?php
											$event_volunteers = $this->db->get_where('event_management', array('event_management_id' => $event['event_id']))->row()->volunteers;
											foreach (explode(",", $event_volunteers) as $key => $value):
                                                if ($value > 0):
	                                    ?>
		                                    <tr>
		                                        <th><?php echo $this->db->get_where('volunteer', array('volunteer_id' => $value))->row()->name; ?></th>
		                                        <th><?php echo $this->db->get_where('volunteer', array('volunteer_id' => $value))->row()->email; ?></th>
		                                        <th><?php echo $this->db->get_where('volunteer', array('volunteer_id' => $value))->row()->batch; ?></th>
		                                        <th><?php echo $this->db->get_where('profession', array('profession_id' => $this->db->get_where('volunteer', array('volunteer_id' => $value))->row()->profession_id))->row()->name; ?></th>
		                                    </tr>
		                                <?php
                                            endif; 
                                            endforeach; 
                                        ?>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </section>
	                        <?php endif; ?>
                        </article><!-- /.course-detail -->
                    </section><!-- /.course-detail -->
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
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
        <?php endforeach; ?>
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
