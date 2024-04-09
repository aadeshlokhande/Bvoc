<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('jobs'); ?></li>
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
                    <section class="events" id="events">
                        <header><h1><?php echo $this->lang->line('jobs'); ?></h1></header>
                        <div class="section-content">
                            <?php
                                $jobs = $this->db->get('job')->result_array();
                                foreach ($jobs as $job):
                            ?>
                            <article class="event">
                                <figure class="date">
                                    <div class="month"><?php echo date('M', $job['deadline']); ?></div>
                                    <div class="day"><?php echo date('d', $job['deadline']); ?></div>
                                </figure>
                                <aside>
                                    <header>
                                        <a href="#"><?php echo $job['title']; ?></a>
                                    </header>
                                    <div class="additional-info"><span class="fa fa-map-marker"></span> <?php echo $job['not_remote'] ? $job['location'] : $this->lang->line('remote') ?></div>
                                    <div class="description">
                                        <p><?php echo $job['description']; ?></p>
                                    </div>
                                    <?php if ($job['position']): ?>
                                    <button class="btn btn-framed btn-color-grey btn-small">
                                        <?php echo $job['position']; ?>
                                    </button>
                                    <?php
                                        endif;
                                        if ($job['salary']):
                                    ?>
                                    <button class="btn btn-framed btn-color-grey btn-small">
                                    <?php echo $this->security->xss_clean($this->db->get_where('setting', array('name' => 'currency'))->row()->content) . ' '; ?><?php echo $job['salary']; ?>
                                    </button>
                                    <?php
                                        endif;
                                        if ($job['contact_email']):
                                    ?>
                                    <a href="mailto:<?php echo $job['contact_email']; ?>" class="btn btn-framed btn-color-grey btn-small">
                                        <i class="fa fa-envelope"></i> <?php echo $this->lang->line('email'); ?>
                                    </a>
                                    <?php
                                        endif;
                                        if ($job['contact_phone']):
                                    ?>
                                    <a href="tel:<?php echo $job['contact_phone']; ?>" class="btn btn-framed btn-color-grey btn-small">
                                        <i class="fa fa-phone"></i> <?php echo $this->lang->line('phone'); ?>
                                    </a>
                                    <?php
                                        endif;
                                        if ($job['website']):
                                    ?>
                                    <a href="<?php echo $job['website']; ?>" class="btn btn-framed btn-color-grey btn-small">
                                        <i class="fa fa-globe"></i> <?php echo $this->lang->line('website'); ?>
                                    </a>
                                    <?php endif; ?>
                                </aside>
                            </article>
                            <?php endforeach; ?>
                        </div><!-- /.section-content -->
                    </section><!-- /.events -->
                    <div class="center">
                        <ul class="pagination">
                        <?php foreach ($pages as $page) {
                            echo "<li>" . $page . " </li>";
                        } ?>
                        </ul>
                    </div>
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