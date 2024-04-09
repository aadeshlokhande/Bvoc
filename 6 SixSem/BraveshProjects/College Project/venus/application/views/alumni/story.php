<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li><a href="<?php echo base_url(); ?>stories"><?php echo $this->lang->line('stories'); ?></a></li>
        <li class="active"><?php echo $this->db->get_where('story', array('permalink' => $permalink))->row()->title; ?></li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main" style="margin-bottom: 100px">
                    <section id="blog-detail">
                    <?php
                        $story_info = $this->security->xss_clean($this->db->get_where('story', array('permalink' => $permalink))->result_array());
                        foreach ($story_info as $story):
                    ?>
                        <header><h1><?php echo $this->lang->line('story'); ?></h1></header>
                        <article class="blog-detail">
                            <header class="blog-detail-header">
                                <img src="<?php echo base_url(); ?>uploads/stories/<?php echo $story['image_link']; ?>">
                                <h2><?php echo $story['title']; ?></h2>
                                <div class="blog-detail-meta">
                                    <span class="date">
                                        <span class="fa fa-file-o"></span>
                                        <?php echo date('m-d-Y', $story['timestamp']); ?>
                                    </span>
                                    <span class="author">
                                        <span class="fa fa-user"></span>
                                        <?php echo $story['written_by']; ?>
                                    </span>
                                    <span class="comments">
                                        <span class="fa fa-comment-o"></span>
                                        <?php echo $this->db->get_where('comment', array('story_id' => $story['story_id'], 'status' => 1))->num_rows(); ?> comments
                                    </span>
                                </div>
                            </header>
                            <hr>
                            <p><?php echo $story['paragraph_1']; ?></p>
                            <p><?php echo $story['paragraph_2']; ?></p>
                            <p><?php echo $story['paragraph_3']; ?></p>
                        </article>
                    <?php endforeach; ?>
                    </section>
                    <hr>
                    <section id="discussion">
                        <header><h2><?php echo $this->lang->line('comments'); ?></h2></header>
                        <ul class="discussion-list">
						<?php
							$story_id = $this->db->get_where('story', array('permalink' => $permalink))->row()->story_id;
							$comments = $this->security->xss_clean($this->db->get_where('comment', array('story_id' => $story_id, 'status' => 1))->result_array());
							foreach ($comments as $comment):
						?>
                            <li class="author-block">
                                <figure class="author-picture">
								<?php if($this->db->get_where('alumnus', array('alumnus_id' => $comment['alumnus_id']))->row()->image_link): ?>
									<img src="<?php echo base_url(); ?>uploads/alumni/<?php echo $this->db->get_where('alumnus', array('alumnus_id' => $comment['alumnus_id']))->row()->image_link; ?>">
								<?php else: ?>
									<img src="<?php echo base_url(); ?>assets/dummy.png" alt="">
								<?php endif; ?>
								</figure>
                                <article class="paragraph-wrapper">
                                    <div class="inner">
                                        <header>
											<h5>
												<?php echo $this->db->get_where('alumnus', array('alumnus_id' => $comment['alumnus_id']))->row()->name; ?>
											</h5>
                                        </header>
                                        <p><?php echo $comment['content']; ?></p>
                                    </div>
                                    <div class="comment-controls">
                                        <span><?php echo date('d-m-Y', $comment['timestamp']); ?></span>
                                    </div>
                                </article>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </section>
                    <?php if ($this->session->userdata('auth_type') == 'alumnus'): ?>
                    <section id="leave-reply">
                        <header><h2><?php echo $this->lang->line('leave_a_comment'); ?></h2></header>
                        <?php if ($this->session->flashdata('info')): ?>
						<div class="alert alert-info alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<?php echo $this->session->flashdata('info'); ?>
						</div>
						<?php endif; ?>
                        <?php echo form_open('comment/' . $permalink, array('method' => 'post', 'class' => 'reply-form', 'data-parsley-validate' => 'true')); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="controls">
                                            <label for="comment"><?php echo $this->lang->line('your_comment'); ?></label>
                                            <textarea maxlength="333" rows="4" style="resize: none" name="comment" id="comment" data-parsley-required="true"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions pull-right">
                                <input type="submit" class="btn btn-color-primary" value="Submit">
                            </div>
                        <?php echo form_close(); ?>
                    </section>
                    <?php endif; ?>
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