<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('stories'); ?></li>
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
                            <h1><?php echo $this->lang->line('stories'); ?></h1>
                        </header>
                        <div class="row">
                            <?php
                            if (isset($stories)) :
                                foreach ($stories as $story) :
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
                                            <div class="description">
                                                <p><?php echo $story['paragraph_1']; ?></p>
                                            </div>
                                            <a href="<?php echo base_url(); ?>story/<?php echo $story['permalink']; ?>" class="read-more stick-to-bottom"><?php echo $this->lang->line('read_more'); ?></a>
                                        </aside>
                                    </article>
                                </div>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </section>
                    <div class="center">
                        <ul class="pagination">
                            <?php foreach ($pages as $page) {
                                echo "<li>" . $page . " </li>";
                            } ?>
                        </ul>
                    </div>
                </div>
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
                                        <i class="fa fa-calendar"></i>
                                        <?php echo date('m-d-Y', $most_story['timestamp']); ?>
                                    </figure>
                                    <header>
                                        <a href="<?php echo base_url(); ?>story/<?php echo $most_story['permalink']; ?>">
                                            <?php echo $most_story['title']; ?>
                                        </a>
                                    </header>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Page Content -->