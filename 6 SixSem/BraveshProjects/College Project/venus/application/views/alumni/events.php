<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('events'); ?></li>
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
                    <section class="events images" id="events">
                        <header><h1><?php echo $this->lang->line('events'); ?></h1></header>
                        <div class="section-content">
                            <?php
								if (isset($events)):
									foreach ($events as $event): 
                            ?>
                            <article class="event">
                                <div class="event-thumbnail">
                                    <figure class="event-image">
                                        <div class="image-wrapper">
                                            <img src="<?php echo base_url(); ?>uploads/events/<?php echo $event['image_link']; ?>">
                                        </div>
                                    </figure>
                                    <figure class="date">
                                        <div class="month"><?php echo date('M', $event['event_date']); ?></div>
                                        <div class="day"><?php echo date('d', $event['event_date']); ?></div>
                                    </figure>
                                </div>
                                <aside>
                                    <header>
                                        <a href="<?php echo base_url(); ?>event/<?php echo $event['permalink']; ?>">
                                            <?php echo $event['name']; ?>
                                        </a>
                                    </header>
                                    <div class="additional-info">
                                        <span class="fa fa-map-marker"></span> <?php echo $event['venue']; ?>
                                    </div>
                                    <div class="description">
                                        <p><?php echo $event['paragraph_1']; ?></p>
                                    </div>
                                    <a href="<?php echo base_url(); ?>event/<?php echo $event['permalink']; ?>" class="btn btn-framed btn-color-grey btn-small"><?php echo $this->lang->line('view_details'); ?></a>
                                </aside>
                            </article><!-- /.event -->
                            <?php 
									endforeach; 
								endif;
                            ?>
                        </div><!-- /.section-content -->
                    </section><!-- /.events-images -->
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
