<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('archive_stories'); ?></li>
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
                    <section class="blog-listing" id="blog-listing">
                        <header>
                            <h1><?php echo $this->lang->line('archive_stories'); ?></h1>
                        </header>
                        <div class="row">
                            <?php
                            $this->db->order_by('timestamp', 'desc');
                            $month  = $this->db->get_where('story', array('story_id' => $story_id))->row()->month;
                            $year   = $this->db->get_where('story', array('story_id' => $story_id))->row()->year;
                            $stories_info = $this->security->xss_clean($this->db->get_where('story', array('month' => $month, 'year' => $year))->result_array());
                            foreach ($stories_info as $story) :
                            ?>
                                <div class="col-md-6 col-sm-6">
                                    <article class="blog-listing-post">
                                        <figure class="blog-thumbnail">
                                            <figure class="blog-meta">
                                                <span class="fa fa-clock-o"></span>
                                                <?php echo date('m-d-Y', $story['timestamp']); ?>
                                            </figure>
                                            <div class="image-wrapper">
                                                <a href="<?php echo base_url(); ?>story/<?php echo $story['permalink']; ?>">
                                                    <img src="<?php echo base_url(); ?>uploads/stories/<?php echo $story['image_link']; ?>">
                                                </a>
                                            </div>
                                        </figure>
                                        <aside>
                                            <header>
                                                <a href="<?php echo base_url(); ?>story/<?php echo $story['permalink']; ?>">
                                                    <h3><?php echo $story['title']; ?></h3>
                                                </a>
                                            </header>
                                        </aside>
                                    </article><!-- /article -->
                                </div><!-- /.col-md-6 -->
                            <?php endforeach; ?>
                        </div><!-- /.row -->
                    </section><!-- /.blog-listing -->
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
                    <aside id="archive">
                        <header>
                            <h2><?php echo $this->lang->line('archive'); ?></h2>
                            <ul class="list-links">
                                <?php
                                $this->db->order_by('timestamp', 'desc');
                                $this->db->group_by(array('month', 'year'));
                                $story_archive = $this->security->xss_clean($this->db->get('story')->result_array());
                                foreach ($story_archive as $archive) :
                                ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>archive_stories/<?php echo $archive['story_id']; ?>">
                                            <?php echo date('F Y', $archive['timestamp']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </header>
                    </aside><!-- /archive -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->