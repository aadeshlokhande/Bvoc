<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('my_profile'); ?></li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header>
            <h1><?php echo $this->lang->line('my_account'); ?></h1>
        </header>
        <div class="row">
            <div class="col-md-8">
                <section id="my-account">
                    <ul class="nav nav-tabs" id="tabs">
                        <li class="active"><a href="#profile" data-toggle="tab"><?php echo $this->lang->line('profile'); ?></a></li>
                        <li><a href="#events" data-toggle="tab"><?php echo $this->lang->line('my_events'); ?></a></li>
                        <li><a href="#password" data-toggle="tab"><?php echo $this->lang->line('change_password'); ?></a></li>
                    </ul><!-- /#my-profile-tabs -->
                    <div class="tab-content my-account-tab-content">
                        <div class="tab-pane active" id="profile" style="margin-bottom: 100px">
                            <?php echo form_open('volunteer/edit/' . $this->session->userdata('volunteer_id')); ?>
                            <section id="my-profile">
                                <header>
                                    <h3><?php echo $this->lang->line('my_profile'); ?></h3>
                                </header>
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
                                    <hr>
                                <?php endif; ?>
                                <div class="row">
                                    <?php
                                    $volunteer_details = $this->security->xss_clean($this->db->get_where('volunteer', array('volunteer_id' => $this->session->userdata('volunteer_id')))->result_array());
                                    foreach ($volunteer_details as $volunteer_detail) :
                                    ?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name"><?php echo $this->lang->line('name'); ?></label>
                                                <input value="<?php echo $volunteer_detail['name']; ?>" type="text" class="form-control" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email"><?php echo $this->lang->line('email'); ?></label>
                                                <input value="<?php echo $volunteer_detail['email']; ?>" type="text" class="form-control" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="username"><?php echo $this->lang->line('username'); ?></label>
                                                <input readonly value="<?php echo $volunteer_detail['username']; ?>" type="text" class="form-control" name="username" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile"><?php echo $this->lang->line('mobile'); ?></label>
                                                <input value="<?php echo $volunteer_detail['mobile']; ?>" type="text" class="form-control" name="mobile" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="batch"><?php echo $this->lang->line('class'); ?></label>
                                                <select name="batch">
                                                    <option value=""><?php echo $this->lang->line('select_class'); ?></option>
                                                    <?php for ($start_year = date('Y') + 5; $start_year >= 1900; $start_year--) : ?>
                                                        <option <?php if ($start_year == $volunteer_detail['batch']) echo 'selected'; ?> value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="profession"><?php echo $this->lang->line('profession'); ?></label>
                                                <select name="profession_id">
                                                    <option value=""><?php echo $this->lang->line('profession'); ?></option>
                                                    <?php
                                                    $professions_info = $this->db->get('profession')->result_array();
                                                    foreach ($professions_info as $profession) :
                                                    ?>
                                                        <option <?php if ($profession['profession_id'] == $volunteer_detail['profession_id']) echo 'selected'; ?> value="<?php echo $profession['profession_id']; ?>"><?php echo $profession['name']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn pull-right"><?php echo $this->lang->line('save_changes'); ?></button>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </section>
                            <?php echo form_close(); ?>
                        </div><!-- /tab-pane -->
                        <div class="tab-pane" id="events">
                            <section id="course-list">
                                <header>
                                    <h3><?php echo $this->lang->line('events_assigned'); ?></h3>
                                </header>
                                <table class="table table-hover table-responsive course-list-table">
                                    <thead>
                                        <tr>
                                            <th><?php echo $this->lang->line('title'); ?></th>
                                            <th><?php echo $this->lang->line('on'); ?></th>
                                            <th><?php echo $this->lang->line('time'); ?></th>
                                            <th><?php echo $this->lang->line('venue'); ?></th>
                                            <th><?php echo $this->lang->line('hashtag'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $this->db->order_by('timestamp', 'desc');
                                        $assigned_events = $this->security->xss_clean($this->db->get('event_management')->result_array());
                                        foreach ($assigned_events as $assigned_event) :
                                            foreach (explode(",", $assigned_event['volunteers']) as $key => $value) :
                                                if ($value == $this->session->userdata('volunteer_id')) :
                                        ?>
                                                    <tr class="status-not-started">
                                                        <th>
                                                            <a href="<?php echo base_url() ?>event/<?php echo $this->db->get_where('event', array('event_id' => $assigned_event['event_id']))->row()->permalink; ?>">
                                                                <?php echo $this->db->get_where('event', array('event_id' => $assigned_event['event_id']))->row()->name; ?>
                                                            </a>
                                                        </th>
                                                        <th>
                                                            <?php echo date('d M, Y', $this->db->get_where('event', array('event_id' => $assigned_event['event_id']))->row()->event_date); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->db->get_where('event', array('event_id' => $assigned_event['event_id']))->row()->event_time; ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->db->get_where('event', array('event_id' => $assigned_event['event_id']))->row()->venue; ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->db->get_where('event', array('event_id' => $assigned_event['event_id']))->row()->hashtag; ?>
                                                        </th>
                                                    </tr>
                                        <?php
                                                endif;
                                            endforeach;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </section><!-- /#course-list -->
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="password">
                            <?php echo form_open('volunteer/password/' . $this->session->userdata('volunteer_id'), array('class' => 'clearfix')); ?>
                            <section id="password">
                                <header>
                                    <h3><?php echo $this->lang->line('update_password'); ?></h3>
                                </header>
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
                                    <hr>
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group">
                                            <label for="current-password"><?php echo $this->lang->line('current_password'); ?></label>
                                            <input type="password" class="form-control" name="current_password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="new-password"><?php echo $this->lang->line('new_password'); ?></label>
                                            <input type="password" class="form-control" name="new_password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="repeat-new-password"><?php echo $this->lang->line('repeat_new_password'); ?></label>
                                            <input type="password" class="form-control" name="repeat_new_password" required>
                                        </div>
                                        <button type="submit" class="btn pull-right"><?php echo $this->lang->line('update'); ?></button>
                                    </div>
                                </div>
                            </section>
                            <?php echo form_close(); ?>
                        </div>
                    </div><!-- /.tab-content -->
                </section>
            </div>

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2><?php echo $this->lang->line('most_read_stories'); ?></h2>
                        </header>
                        <div class="section-content">
                            <?php
                            $this->db->order_by('times', 'desc');
                            $this->db->limit('3');
                            $most_read_stories = $this->security->xss_clean($this->db->get('story')->result_array());
                            foreach ($most_read_stories as $most_story) :
                            ?>
                                <article>
                                    <figure class="date">
                                        <i class="fa fa-file-o"></i>
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
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<style type="text/css">
    .input-group {
        width: 50%;
    }
</style>