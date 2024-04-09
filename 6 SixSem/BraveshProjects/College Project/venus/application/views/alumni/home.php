<div id="page-content">
    <!-- Slider -->
    <div id="homepage-carousel">
        <div class="container">
            <div class="homepage-carousel-wrapper">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="image-carousel">
                            <?php
                            $slider_info = $this->security->xss_clean($this->db->get_where('slide', array('status' => 'Show'))->result_array());
                            foreach ($slider_info as $slide) :
                            ?>
                                <div class="image-carousel-slide">
                                    <img src="uploads/slides/<?php echo $slide['image_link']; ?>" alt="<?php echo $slide['image_name']; ?>">
                                </div>
                            <?php endforeach; ?>
                        </div><!-- /.slider-image -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-5">
                        <div class="slider-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1><?php echo $this->lang->line('add_volunteer_header'); ?></h1>
                                    <?php echo form_open('register/volunteer', array('method' => 'post')); ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="name" placeholder="<?php echo $this->lang->line('name'); ?>" type="text" required>
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="email" id="slider-email" placeholder="<?php echo $this->lang->line('email'); ?>" type="email" required>
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <select class="has-dark-background" name="batch" id="slider-study-level" required>
                                                    <option value=""><?php echo $this->lang->line('class'); ?></option>
                                                    <?php for ($start_year = date('Y') + 5; $start_year >= 1900; $start_year--) : ?>
                                                        <option value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <select class="has-dark-background" name="profession_id" id="slider-course" required>
                                                    <option value=""><?php echo $this->lang->line('profession'); ?></option>
                                                    <?php
                                                    $professions_info = $this->security->xss_clean($this->db->get('profession')->result_array());
                                                    foreach ($professions_info as $profession) :
                                                    ?>
                                                        <option value="<?php echo $profession['profession_id']; ?>"><?php echo $profession['name']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <button type="submit" class="btn btn-framed pull-right"><?php echo $this->lang->line('submit'); ?></button>
                                    <div id="form-status"></div>
                                    <?php echo form_close(); ?>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.slider-content -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
                <div class="background"></div>
            </div><!-- /.slider-wrapper -->
            <div class="slider-inner"></div>
        </div><!-- /.container -->
    </div>
    <!-- end Slider -->

    <!-- News, Events, About -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <section class="news-small" id="news-small">
                        <header>
                            <h2><?php echo $this->lang->line('stories'); ?></h2>
                        </header>
                        <div class="section-content">
                            <?php
                            $this->db->order_by('timestamp', 'desc');
                            $this->db->limit(3);
                            $stories = $this->security->xss_clean($this->db->get('story')->result_array());
                            foreach ($stories as $story) :
                            ?>
                                <article>
                                    <figure class="date">
                                        <i class="fa fa-calendar"></i> <?php echo date('m-d-Y', $story['timestamp']); ?>
                                    </figure>
                                    <header>
                                        <a href="<?php echo base_url(); ?>story/<?php echo $story['permalink']; ?>"><?php echo $story['title'] ?></a>
                                    </header>
                                </article>
                            <?php endforeach; ?>
                        </div><!-- /.section-content -->
                        <!-- <a href="index.html" class="read-more stick-to-bottom">All News</a> -->
                    </section><!-- /.news-small -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <section class="events small" id="events-small">
                        <header>
                            <h2><?php echo $this->lang->line('events'); ?></h2>
                            <!-- <a href="index.html" class="link-calendar">Calendar</a> -->
                        </header>
                        <div class="section-content">
                            <?php
                            $this->db->order_by('timestamp', 'desc');
                            $this->db->limit(3);
                            $events = $this->security->xss_clean($this->db->get('event')->result_array());
                            foreach ($events as $event) :
                            ?>
                                <article class="event nearest">
                                    <figure class="date">
                                        <div class="month"><?php echo date('M', $event['event_date']); ?></div>
                                        <div class="day"><?php echo date('d', $event['event_date']); ?></div>
                                    </figure>
                                    <aside>
                                        <header>
                                            <a href="<?php echo base_url(); ?>event/<?php echo $event['permalink']; ?>">
                                                <?php echo $event['name']; ?>
                                            </a>
                                        </header>
                                        <div class="additional-info">#<?php echo $event['hashtag']; ?></div>
                                    </aside>
                                </article>
                            <?php endforeach; ?>
                        </div><!-- /.section-content -->
                    </section><!-- /.events-small -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-12">
                    <section id="about">
                        <header>
                            <h2><?php echo $this->lang->line('about'); ?> <?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->title; ?></h2>
                        </header>
                        <div class="section-content">
                            <img src="uploads/about_us/<?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->image_link; ?>" alt="" class="add-margin">
                            <p><?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->description; ?></p>
                        </div><!-- /.section-content -->
                    </section><!-- /.about -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end News, Events, About -->

    <!-- Our Professors, Gallery -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <section id="our-professors">
                        <header>
                            <h2><?php echo $this->lang->line('our_alumni'); ?></h2>
                        </header>
                        <div class="section-content">
                            <div class="professors">
                                <?php
                                $this->db->order_by('timestamp', 'desc');
                                $this->db->limit(2);
                                $alumni = $this->security->xss_clean($this->db->get_where('alumnus', array('status' => 1))->result_array());
                                foreach ($alumni as $alumnus) :
                                ?>
                                    <article class="professor-thumbnail">
                                        <figure class="professor-image">
                                            <a href="<?php echo base_url(); ?>alumnus/<?php echo $alumnus['alumnus_id']; ?>">
                                                <?php if ($alumnus['image_link']) : ?>
                                                    <img style="width: 80px !important" src="<?php echo base_url(); ?>uploads/alumni/<?php echo $alumnus['image_link']; ?>" alt="">
                                                <?php else : ?>
                                                    <img style="width: 80px !important" src="<?php echo base_url(); ?>assets/dummy.png" alt="">
                                                <?php endif; ?>
                                            </a>
                                        </figure>
                                        <aside>
                                            <header>
                                                <a href="<?php echo base_url(); ?>alumnus/<?php echo $alumnus['alumnus_id']; ?>">
                                                    <?php echo $alumnus['name']; ?>
                                                </a>
                                                <div class="divider"></div>
                                                <figure class="professor-description"><?php echo $alumnus['position'] ? $alumnus['position'] : 'N/A'; ?></figure>
                                            </header>
                                            <a href="<?php echo base_url(); ?>alumnus/<?php echo $alumnus['alumnus_id']; ?>" class="show-profile">
                                                Show Profile
                                            </a>
                                        </aside>
                                    </article>
                                <?php endforeach; ?>
                            </div><!-- /.professors -->
                        </div><!-- /.section-content -->
                    </section><!-- /.our-professors -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-8 col-sm-8">
                    <section id="gallery">
                        <header>
                            <h2><?php echo $this->lang->line('gallery'); ?></h2>
                        </header>
                        <div class="section-content">
                            <ul class="gallery-list">
                                <?php
                                $this->db->order_by('timestamp', 'desc');
                                $this->db->limit(14);
                                $images = $this->security->xss_clean($this->db->get('gallery')->result_array());
                                foreach ($images as $image) :
                                ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>uploads/gallery/<?php echo $image['image_link']; ?>" class="image-popup">
                                            <img src="<?php echo base_url(); ?>uploads/gallery/<?php echo 'thumb_' . $image['image_link']; ?>" alt="">
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- /.gallery -->
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Our Professors, Gallery -->
</div>