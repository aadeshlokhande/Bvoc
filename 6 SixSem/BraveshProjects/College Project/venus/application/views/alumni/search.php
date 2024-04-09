<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('alumni'); ?></li>
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
                        <header><h1><?php echo $this->lang->line('alumni'); ?></h1></header>
                        <section id="event-search">
                            <div class="search-box">
								<?php echo form_open('search/alumni', array('method' => 'post', 'class' => 'form-inline', 'id' => 'event-search-form')); ?>
                                    <div class="from-row">
                                        <div class="form-group">
                                            <label for="course-type"><?php echo $this->lang->line('batch'); ?></label>
                                            <select name="batch" id="course-type">
                                                <option value=""><?php echo $this->lang->line('select_class'); ?></option>
                                            <?php for ($start_year = date('Y'); $start_year >= 1900; $start_year--): ?>
												<option value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
		                                    <?php endfor; ?>
                                            </select>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="full-text"><?php echo $this->lang->line('name'); ?></label>
                                            <input name="name" id="full-text" placeholder="<?php echo $this->lang->line('ph_alumni_name'); ?>" type="text">
                                        </div><!-- /.form-group -->
                                    </div>
                                    <button type="submit" class="btn pull-right"><?php echo $this->lang->line('search'); ?></button>
                                <?php echo form_close(); ?>
                            </div><!-- /.search-box -->
                        </section>
                        <section id="our-speakers">
                            <div class="row">
                                <div class="col-md-12">
								<?php
									if ($alumni):
										foreach($alumni as $alumnus): 
								?>
                                    <div class="col-md-6">
                                        <div class="author-block course-speaker">
                                            <a href="member-detail.html">
                                                <figure class="author-picture">
                                                <?php if ($alumnus['image_link']): ?>
													<img src="<?php echo base_url(); ?>uploads/alumni/<?php echo $alumnus['image_link']; ?>" alt="">
												<?php else: ?>
													<img src="<?php echo base_url(); ?>assets/dummy.png" alt="">
												<?php endif; ?>
                                                </figure>
                                            </a>
                                            <article class="paragraph-wrapper">
                                                <div class="inner">
                                                    <header>
                                                        <a href="<?php echo base_url(); ?>alumnus/<?php echo $alumnus['alumnus_id']; ?>">
															<?php echo $alumnus['name']; ?>
                                                        </a>
                                                    </header>
                                                    <figure>
														<?php echo $alumnus['position']; ?>
                                                    </figure>
                                                    <a href="<?php echo base_url(); ?>alumnus/<?php echo $alumnus['alumnus_id']; ?>" class="btn btn-framed btn-small btn-color-grey">Full Bio</a>
                                                </div>
                                            </article>
                                        </div><!-- /.author -->
                                    </div>
                                <?php 
										endforeach;
									else:
                                ?>
                                <h4><?php echo $this->lang->line('no_serach_result'); ?></h4>
                                <?php endif; ?>
                                </div>
                            </div>
                        </section><!-- /#our-speakers -->
                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header><h2><?php echo $this->lang->line('mose_read_stories'); ?></h2></header>
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
                        </div>
                    </aside><!-- /.news-small -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<script>
	// alert('HEY!');
</script>
