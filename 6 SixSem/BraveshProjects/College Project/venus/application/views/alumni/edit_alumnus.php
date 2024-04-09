<!-- Breadcrumb -->
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
		<li class="active"><?php echo $this->lang->line('edit_alumnus_profile'); ?></li>
	</ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
	<div class="container">
		<header>
			<h1><?php echo $this->lang->line('update_your_alumni_account'); ?></h1>
		</header>
		<div class="row">
			<div class="col-md-8">
				<section id="my-account">
					<ul class="nav nav-tabs" id="tabs">
						<li class="active"><a href="#profile" data-toggle="tab"><?php echo $this->lang->line('profile'); ?></a></li>
						<li><a href="#donations" data-toggle="tab"><?php echo $this->lang->line('my_donation'); ?></a></li>
						<li><a href="#password" data-toggle="tab"><?php echo $this->lang->line('change_password'); ?></a></li>
						<li><a href="#miscellaneous" data-toggle="tab"><?php echo $this->lang->line('miscellaneous'); ?></a></li>
					</ul><!-- /#my-profile-tabs -->
					<div class="tab-content my-account-tab-content">
						<div class="tab-pane active" id="profile">
							<?php echo form_open('alumnus/edit/' . $alumnus_id, array('style' => 'margin: 0 0 40px 0', 'data-parsley-validate' => 'true')); ?>
							<section id="my-profile">
								<header>
									<h3>
										<?php echo $this->lang->line('update_your_account_details'); ?> |
										<?php echo $this->lang->line('username') . ': ' . $this->db->get_where('alumnus', array('alumnus_id' => $alumnus_id))->row()->username; ?>
									</h3>
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
									<hr>
								<?php endif; ?>
								<div class="row">
									<?php
									$alumnus_info = $this->security->xss_clean($this->db->get_where('alumnus', array('alumnus_id' => $alumnus_id))->result_array());
									foreach ($alumnus_info as $alumnus) :
									?>
										<div class="col-md-6">
											<div class="form-group">
												<label><?php echo $this->lang->line('name'); ?></label>
												<input value="<?php echo $alumnus['name']; ?>" name="name" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_full_name'); ?>" data-parsley-required="true">
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('class'); ?></label>
												<select name="batch" data-parsley-required="true">
													<option value=""><?php echo $this->lang->line('select_class'); ?></option>
													<?php for ($start_year = date('Y'); $start_year >= 1900; $start_year--) : ?>
														<option <?php if ($start_year == $alumnus['batch']) echo 'selected'; ?> value="<?php echo $start_year; ?>"><?php echo $start_year; ?></option>
													<?php endfor; ?>
												</select>
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('email'); ?></label>
												<input value="<?php echo $alumnus['email']; ?>" name="email" type="email" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_email'); ?>" data-parsley-required="true">
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('mobile_number'); ?></label>
												<input value="<?php echo $alumnus['mobile_number']; ?>" name="mobile_number" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_mobile'); ?>" data-parsley-required="true">
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('location'); ?></label>
												<select name="location_id" data-parsley-required="true">
													<option value=""><?php echo $this->lang->line('select_location'); ?></option>
													<?php
													$location_info = $this->db->get('location')->result_array();
													foreach ($location_info as $location) :
													?>
														<option <?php if ($location['location_id'] == $alumnus['location_id']) echo 'selected'; ?> value="<?php echo $location['location_id']; ?>"><?php echo $location['name']; ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('website'); ?></label>
												<input value="<?php echo $alumnus['website']; ?>" name="website" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_website'); ?>">
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('short_biography'); ?></label>
												<textarea placeholder="<?php echo $this->lang->line('ph_alumni_short_bio'); ?>" name="short_bio" rows="5" style="resize:none" data-parsley-required="true"><?php echo $alumnus['short_bio']; ?></textarea>
											</div>
										</div>
										<!-- col-md-6 up & down -->
										<div class="col-md-6">
											<div class="form-group">
												<label><?php echo $this->lang->line('date_of_birth'); ?></label>
												<div class="input-group date" data-provide="datepicker">
													<input type="text" name="dob" class="form-control" value="<?php if ($alumnus['dob']) echo date('m/d/Y', $alumnus['dob']); ?>">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-th"></span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('profession'); ?></label>
												<select name="profession_id" data-parsley-required="true">
													<option value=""><?php echo $this->lang->line('select_profession'); ?></option>
													<?php
													$professions_info = $this->db->get('profession')->result_array();
													foreach ($professions_info as $profession) :
													?>
														<option <?php if ($profession['profession_id'] == $alumnus['profession_id']) echo 'selected'; ?> value="<?php echo $profession['profession_id']; ?>"><?php echo $profession['name']; ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('position'); ?></label>
												<input value="<?php echo $alumnus['position']; ?>" name="position" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_position'); ?>" data-parsley-required="true">
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('linkedin'); ?></label>
												<input value="<?php echo $alumnus['linkedin']; ?>" name="linkedin" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_linkedin'); ?>" data-parsley-required="true">
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('blood_group'); ?></label>
												<select name="blood_group" data-parsley-required="true">
													<option value=""><?php echo $this->lang->line('select_blood_group'); ?></option>
													<option <?php if ($alumnus['blood_group'] == 'O+') echo 'selected'; ?> value="O+">O+</option>
													<option <?php if ($alumnus['blood_group'] == 'O-') echo 'selected'; ?> value="O-">O-</option>
													<option <?php if ($alumnus['blood_group'] == 'A+') echo 'selected'; ?> value="A+">A+</option>
													<option <?php if ($alumnus['blood_group'] == 'A-') echo 'selected'; ?> value="A-">A-</option>
													<option <?php if ($alumnus['blood_group'] == 'B+') echo 'selected'; ?> value="B+">B+</option>
													<option <?php if ($alumnus['blood_group'] == 'B-') echo 'selected'; ?> value="B-">B-</option>
													<option <?php if ($alumnus['blood_group'] == 'AB+') echo 'selected'; ?> value="AB+">AB+</option>
													<option <?php if ($alumnus['blood_group'] == 'AB-') echo 'selected'; ?> value="AB-">AB-</option>
												</select>
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('facebook'); ?></label>
												<input value="<?php echo $alumnus['facebook']; ?>" name="facebook" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_facebook'); ?>">
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('twitter'); ?></label>
												<input value="<?php echo $alumnus['twitter']; ?>" name="twitter" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_twitter'); ?>">
											</div>
											<div class="form-group">
												<label><?php echo $this->lang->line('youtube'); ?></label>
												<input value="<?php echo $alumnus['youtube']; ?>" name="youtube" type="text" class="form-control" placeholder="<?php echo $this->lang->line('ph_alumni_youtube'); ?>">
											</div>
											<button type="submit" class="btn pull-right"><?php echo $this->lang->line('save_changes'); ?></button>
										</div>
								</div>
							<?php endforeach; ?>
							</section>
							<?php echo form_close(); ?>
						</div><!-- /tab-pane -->
						<div class="tab-pane" id="donations">
							<section id="course-list">
								<header>
									<h3><?php echo $this->lang->line('donations_status'); ?></h3>
								</header>
								<table class="table table-hover table-responsive course-list-table">
									<thead>
										<tr>
											<th><?php echo $this->lang->line('updated_on'); ?></th>
											<th><?php echo $this->lang->line('amount'); ?> (<?php echo $this->db->get_where('setting', array('setting_id' => 11))->row()->content; ?>)</th>
											<th><?php echo $this->lang->line('donation_purpose'); ?></th>
											<th><?php echo $this->lang->line('donation_via'); ?></th>
											<th><?php echo $this->lang->line('status'); ?></th>
										</tr>
									</thead>
									<tbody>
										<?php
										$this->db->order_by('timestamp', 'desc');
										$donations = $this->security->xss_clean($this->db->get_where('donation', array('alumnus_id' => $this->session->userdata('alumnus_id')))->result_array());
										foreach ($donations as $donation) :
										?>
											<tr class="status-not-started">
												<th><?php echo date('d M, Y', $donation['timestamp']); ?></th>
												<th><?php echo $donation['amount']; ?></th>
												<th>
													<?php
													if (isset($this->db->get_where('donation_purpose', array('donation_purpose_id' => $donation['donation_purpose_id']))->row()->name))
														echo $this->db->get_where('donation_purpose', array('donation_purpose_id' => $donation['donation_purpose_id']))->row()->name;
													else echo 'N/A';
													?>
												</th>
												<th><?php echo $donation['via']; ?></th>
												<td>
													<?php if ($donation['status'] == 0) : ?>
														<span class="badge" style="background-color: #FF9800"><?php echo $this->lang->line('due'); ?></span>
													<?php elseif ($donation['status'] == 1) : ?>
														<span class="badge" style="background-color: #009688"><?php echo $this->lang->line('donated'); ?></span>
													<?php endif; ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</section><!-- /#course-list -->
						</div><!-- /.tab-pane -->
						<div class="tab-pane" id="password">
							<?php echo form_open('alumnus/password/' . $this->session->userdata('alumnus_id'), array('class' => 'clearfix')); ?>
							<section id="password">
								<header>
									<h3><?php echo $this->lang->line('update_password'); ?></h3>
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
									<hr>
								<?php endif; ?>
								<div class="row">
									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<label for="current-password"><?php echo $this->lang->line('current_password'); ?></label>
											<input type="password" class="form-control" name="current_password" required>
										</div>
										<div class="form-group">
											<label for="new-password"><?php echo $this->lang->line('new_password'); ?></label>
											<input type="password" class="form-control" name="new_password" required>
										</div>
										<div class="form-group">
											<label for="repeat-new-password"><?php echo $this->lang->line('repeat_new_password'); ?></label>
											<input type="password" class="form-control" name="repeat_new_password" required>
										</div>
										<button type="submit" class="btn pull-right"><?php echo $this->lang->line('update'); ?></button>
									</div>
								</div>
							</section>
							<?php echo form_close(); ?>
						</div>
						<div class="tab-pane" id="miscellaneous">
							
							<section id="miscellaneous">
								<header>
									<h3><?php echo $this->lang->line('update_miscellaneous'); ?></h3>
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
									<hr>
								<?php endif; ?>
								<div class="row">									
									<?php $alumnus_single_info = $this->db->get_where('alumnus', array('alumnus_id' => $alumnus_id))->row(); ?>
									<div class="col-md-12">
										<?php echo form_open('alumnus/miscellaneous_public/' . $this->session->userdata('alumnus_id'), array('class' => 'clearfix')); ?>
										<div class="form-group">
											<label><?php echo $this->lang->line('public_profile_label'); ?></label>
											<div class="radio">
												<label><input class="custom_radio" type="radio" value="1" name="public" <?php if ($alumnus_single_info->public) echo 'checked'; ?>><?php echo $this->lang->line('make_my_profile_public'); ?></label>
											</div>
											<div class="radio">
												<label><input class="custom_radio" type="radio" value="0" name="public" <?php if (!($alumnus_single_info->public)) echo 'checked'; ?>><?php echo $this->lang->line('do_not_make_my_profile_public'); ?></label>
											</div>
										</div>
										<p>
											<?php echo $this->lang->line('public_profile_line'); ?>
											<a target="_blank" href="<?php echo base_url('alumnus/' . $alumnus_single_info->username); ?>">
												<?php echo base_url('alumnus/' . $alumnus_single_info->username); ?>
											</a>
										</p>
										<button type="submit" class="btn pull-right"><?php echo $this->lang->line('submit'); ?></button>
										<?php echo form_close(); ?>
										<hr>
										<?php echo form_open('alumnus/miscellaneous_permissions/' . $this->session->userdata('alumnus_id'), array('class' => 'clearfix')); ?>
										<div class="form-group">
											<label><?php echo $this->lang->line('story_permission'); ?></label>
											<div class="radio">
												<label><input class="custom_radio" type="radio" value="1" name="story_permission" <?php if ($alumnus_single_info->story_permission) echo 'checked'; ?>><?php echo $this->lang->line('i_want_story_permission'); ?></label>
											</div>
											<div class="radio">
												<label><input class="custom_radio" type="radio" value="0" name="story_permission" <?php if (!($alumnus_single_info->story_permission)) echo 'checked'; ?>><?php echo $this->lang->line('i_do_not_want_story_permission'); ?></label>
											</div>
										</div>
										<?php if ($alumnus_single_info->story_permission == 0): ?>
										<p><?php echo $this->lang->line('do_not_have_story_permission'); ?></p>
										<?php else: ?>
										<p>
											<?php echo $this->lang->line('have_story_permission'); ?>
											<a target="_blank" href="<?php echo base_url('admin'); ?>"><?php echo base_url('admin'); ?></a>
										</p>
										<?php endif; ?>
										<button type="submit" class="btn pull-right"><?php echo $this->lang->line('submit'); ?></button>
										<?php echo form_close(); ?>
									</div>
								</div>
							</section>							
						</div>
					</div><!-- /.tab-content -->
				</section>
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
				</div><!-- /#sidebar -->
			</div><!-- /.col-md-4 -->
			<!-- end SIDEBAR Content-->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div>
<!-- end Page Content -->

<style>
	.custom_radio {
		margin-left: unset !important;
		margin-right: 10px !important;
	}
</style>

<script>
	$('.datepicker').datepicker({
		format: 'mm/dd/yyyy'
	});
</script>