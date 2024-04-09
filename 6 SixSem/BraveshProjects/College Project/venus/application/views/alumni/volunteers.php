<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('volunteers'); ?></li>
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
                    <section class="course-listing" id="courses">
                        <header><h1><?php echo $this->lang->line('volunteers'); ?></h1></header>
                        <?php if ($this->session->flashdata('info')): ?>
						<div class="alert alert-info alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<?php echo $this->session->flashdata('info'); ?>
						</div>
						<?php endif; ?>
                        <section id="course-list">
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
										if (isset($volunteers)):
											foreach ($volunteers as $volunteer):
                                    ?>
	                                    <tr>
	                                        <th><?php echo $volunteer['name']; ?></th>
	                                        <th><?php echo $volunteer['email']; ?></th>
	                                        <th>
												<?php
													if ($volunteer['batch'])
														echo $volunteer['batch'];
												?>
	                                        </th>
	                                        <th>
												<?php
													if ($volunteer['profession_id'])
														echo $this->db->get_where('profession', array('profession_id' => $volunteer['profession_id']))->row()->name;
												?>
											</th>
	                                    </tr>
	                                <?php
											endforeach;
										endif;
	                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </section><!-- /.course-listing -->
                    <div class="center">
                        <ul class="pagination">
                        <?php foreach ($pages as $page) {
                            echo "<li>" . $page ." </li>";
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
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
