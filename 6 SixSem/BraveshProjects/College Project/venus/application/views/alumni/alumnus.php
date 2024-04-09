<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li><a href="<?php echo base_url(); ?>alumni"><?php echo $this->lang->line('alumni'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('alumnus_details'); ?></li>
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
                    <section id="members">
                        <header>
                            <h1><?php echo $this->lang->line('alumnus_details'); ?></h1>
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
                        <?php endif; ?>
                        <div class="author-block member-detail">
                            <?php
                            $alumnus_details = $this->security->xss_clean($this->db->get_where('alumnus', array('alumnus_id' => $alumnus_id))->result_array());
                            foreach ($alumnus_details as $alumnus_detail) :
                            ?>
                                <figure class="author-picture">
                                    <?php if ($alumnus_detail['image_link']) : ?>
                                        <img src="<?php echo base_url(); ?>uploads/alumni/<?php echo $alumnus_detail['image_link']; ?>" alt="">
                                    <?php else : ?>
                                        <img src="<?php echo base_url(); ?>assets/dummy.png" alt="">
                                    <?php endif; ?>
                                    <?php if ($this->session->userdata('alumnus_id') == $alumnus_detail['alumnus_id']) : ?>
                                        <a style="margin-top: 7%" onclick="showAjaxModal('<?php echo base_url(); ?>modal/fopup/modal_change_alumnus_image/<?php echo $alumnus_detail['alumnus_id']; ?>');" href="javascript:;" class="btn btn-framed btn-block">
                                            <i class="fa fa-image"> <span style="font-family: 'Ubuntu', sans-serif;"><?php echo $this->lang->line('change_image'); ?></span></i>
                                        </a>
                                    <?php endif; ?>
                                </figure>
                                <article class="paragraph-wrapper">
                                    <div class="inner">
                                        <header>
                                            <h2><?php echo $alumnus_detail['name']; ?></h2>
                                            <?php if ($this->session->userdata('alumnus_id') == $alumnus_detail['alumnus_id']) : ?>
                                                <a href="<?php echo base_url(); ?>edit_alumnus" class="btn btn-framed pull-right">
                                                    <i class="fa fa-pencil"> <span style="font-family: 'Ubuntu', sans-serif;"><?php echo $this->lang->line('edit_profile'); ?></span></i>
                                                </a>
                                            <?php endif; ?>
                                        </header>
                                        <figure><?php if ($alumnus_detail['deceased']) echo $this->lang->line('deceased'); ?></figure>
                                        <hr>
                                        <figure>
                                            <?php
                                            if ($alumnus_detail['position'])
                                                echo $alumnus_detail['position'];
                                            else
                                                echo 'N/A';
                                            ?>
                                        </figure>
                                        <hr>
                                        <p class="quote">
                                            <?php
                                            if ($alumnus_detail['short_bio'])
                                                echo $alumnus_detail['short_bio'];
                                            else
                                                echo 'N/A';
                                            ?>
                                        </p>
                                        <hr>
                                        <div class="contact">
                                            <strong><?php echo $this->lang->line('social_links'); ?></strong>
                                            <div class="icons">
                                                <?php if ($alumnus_detail['twitter']) : ?>
                                                    <a href="<?php echo $alumnus_detail['twitter']; ?>" target="_blank">
                                                        <i class="fa fa-twitter" style="color: #55acee"></i>
                                                    </a>
                                                <?php endif;
                                                if ($alumnus_detail['facebook']) : ?>
                                                    <a href="<?php echo $alumnus_detail['facebook']; ?>" target="_blank">
                                                        <i class="fa fa-facebook" style="color: #3b5998"></i>
                                                    </a>
                                                <?php endif;
                                                if ($alumnus_detail['linkedin']) : ?>
                                                    <a href="<?php echo $alumnus_detail['linkedin']; ?>" target="_blank">
                                                        <i class="fa fa-linkedin" style="color: #007bb5"></i>
                                                    </a>
                                                <?php endif;
                                                if ($alumnus_detail['youtube']) : ?>
                                                    <a href="<?php echo $alumnus_detail['youtube']; ?>" target="_blank">
                                                        <i class="fa fa-youtube-play" style="color: #bb0000"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div><!-- /.icons -->
                                        </div>
                                        <h3><?php echo $this->lang->line('details'); ?></h3>
                                        <div class="table-responsive">
                                            <table class="table course-list-table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="course-title"><?php echo $this->lang->line('class'); ?></td>
                                                        <td>
                                                            <?php
                                                            if ($alumnus_detail['batch']) {
                                                                echo $alumnus_detail['batch'];
                                                            } else {
                                                                echo 'N/A';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="course-title"><?php echo $this->lang->line('email'); ?></td>
                                                        <td>
                                                            <?php
                                                            if ($alumnus_detail['email']) {
                                                                echo $alumnus_detail['email'];
                                                            } else {
                                                                echo 'N/A';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="course-title"><?php echo $this->lang->line('mobile'); ?></td>
                                                        <td>
                                                            <?php
                                                            if ($alumnus_detail['mobile_number']) {
                                                                echo $alumnus_detail['mobile_number'];
                                                            } else {
                                                                echo 'N/A';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="course-title"><?php echo $this->lang->line('website'); ?></td>
                                                        <td>
                                                            <?php if ($alumnus_detail['website']) : ?>
                                                                <a href="<?php echo $alumnus_detail['website']; ?>" target="_blank">
                                                                    <?php echo $alumnus_detail['website']; ?>
                                                                </a>
                                                            <?php else : echo 'N/A';
                                                            endif; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="course-title"><?php echo $this->lang->line('location'); ?></td>
                                                        <td>
                                                            <?php
                                                            if ($this->db->get_where('location', array('location_id' => $alumnus_detail['location_id']))->row()) {
                                                                echo $this->db->get_where('location', array('location_id' => $alumnus_detail['location_id']))->row()->name;
                                                            } else {
                                                                echo 'N/A';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="course-title"><?php echo $this->lang->line('profession'); ?></td>
                                                        <td>
                                                            <?php
                                                            if ($this->db->get_where('profession', array('profession_id' => $alumnus_detail['profession_id']))->row()) {
                                                                echo $this->db->get_where('profession', array('profession_id' => $alumnus_detail['profession_id']))->row()->name;
                                                            } else {
                                                                echo 'N/A';
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="course-title"><?php echo $this->lang->line('blood_group'); ?></td>
                                                        <td><?php echo $alumnus_detail['blood_group']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div><!-- /.author -->
                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

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
                        </div>
                    </aside><!-- /.news-small -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content