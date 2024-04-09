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
            <div class="col-md-8">
                <div id="page-main">
                    <section id="members">
                        <header><h1><?php echo $this->lang->line('alumni'); ?></h1></header>
                        <section id="event-search">
                            <div class="search-box">
								<?php echo form_open('search/alumni', array('method' => 'post', 'class' => 'form-inline', 'id' => 'event-search-form')); ?>
                                    <div class="from-row">
                                        <div class="form-group">
                                            <label><?php echo $this->lang->line('batch'); ?></label>
                                            <select name="batch">
                                                <option value=""><?php echo $this->lang->line('select_class'); ?></option>
                                            <?php for ($start_year = date('Y'); $start_year >= 1900; $start_year--): ?>
												<option value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
		                                    <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><?php echo $this->lang->line('name'); ?></label>
                                            <input name="name"placeholder="<?php echo $this->lang->line('ph_alumni_name'); ?>" type="text">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn pull-right"><?php echo $this->lang->line('search'); ?></button>
                                <?php echo form_close(); ?>
                            </div>
                        </section>
                        <section id="our-speakers">
                            <div class="row">
                                <div class="col-md-12">
								<?php
									if (isset($alumni)):
										foreach($alumni as $alumnus): 
								?>
                                    <div class="col-md-6">
                                        <div class="author-block course-speaker">
                                            <a href="<?php echo base_url(); ?>alumnus/<?php echo $alumnus['alumnus_id']; ?>">
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
                                                    <p><?php echo $alumnus['short_bio']; ?></p>
                                                    <a href="<?php echo base_url(); ?>alumnus/<?php echo $alumnus['alumnus_id']; ?>" class="btn btn-framed btn-small btn-color-grey"><?php echo $this->lang->line('full_bio'); ?></a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                <?php 
										endforeach;
									endif;
                                ?>
                                </div>
                            </div>
                        </section>
                        <div class="center">
	                        <ul class="pagination">
	                        <?php foreach ($pages as $page) {
	                            echo "<li>" . $page ." </li>";
	                        } ?>
	                        </ul>
	                    </div>
                    </section>
                </div>
            </div>

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
