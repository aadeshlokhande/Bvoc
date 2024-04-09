<!-- begin #content -->
<div id="content" class="content">
	<div class="row">
		<div class="col-md-6">
			<h1 class="page-header"><?php echo $this->lang->line('settings'); ?> <small><?php echo $this->lang->line('website_settings_header'); ?></small></h1>
		</div>
	</div>

	<!-- begin row -->
	<div class="row">
		<div class="col-lg-6 offset-lg-3">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title"><?php echo $this->lang->line('website_settings'); ?></h4>
				</div>
				<!-- end panel-heading -->
				<div class="panel-body">
					<?php echo form_open('admin/website_settings/update', array('data-parsley-validate' => 'true', 'name' => 'update_text')); ?>
					<div class="form-group">
						<label><?php echo $this->lang->line('website_title'); ?></label>
						<input value="<?php echo $this->db->get_where('setting', array('setting_id' => 1))->row()->content; ?>" class="form-control" type="text" name="frontend_title" placeholder="<?php echo $this->lang->line('ph_website_title'); ?>" data-parsley-required="true" />
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('admin_title'); ?></label>
						<input value="<?php echo $this->db->get_where('setting', array('setting_id' => 2))->row()->content; ?>" class="form-control" type="text" name="backend_title" placeholder="<?php echo $this->lang->line('ph_admin_title'); ?>" data-parsley-required="true" />
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('copyright_name'); ?></label>
						<input value="<?php echo $this->db->get_where('setting', array('setting_id' => 3))->row()->content; ?>" class="form-control" type="text" name="copyright" placeholder="<?php echo $this->lang->line('ph_copyright_name'); ?>" data-parsley-required="true" />
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('copyright_url'); ?></label>
						<input value="<?php echo $this->db->get_where('setting', array('setting_id' => 9))->row()->content; ?>" class="form-control" type="text" name="copyright_url" placeholder="<?php echo $this->lang->line('ph_copyright_url'); ?>" data-parsley-required="true" />
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('call_us'); ?></label>
						<input value="<?php echo $this->db->get_where('setting', array('setting_id' => 4))->row()->content; ?>" class="form-control" type="text" name="call_us" placeholder="<?php echo $this->lang->line('ph_call_us'); ?>" data-parsley-required="true" />
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('system_font'); ?></label>
						<select class="combobox" name="font">
							<option value=""><?php echo $this->lang->line('select_font'); ?></option>
							<option <?php if ('PT Sans Narrow' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="PT Sans Narrow">PT Sans Narrow</option>
							<option <?php if ('Josefin Sans' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Josefin Sans">Josefin Sans</option>
							<option <?php if ('Titillium Web' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Titillium Web">Titillium Web</option>
							<option <?php if ('Mukta' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Mukta">Mukta</option>
							<option <?php if ('PT Sans' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="PT Sans">PT Sans</option>
							<option <?php if ('Rubik' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Rubik">Rubik</option>
							<option <?php if ('Oswald' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Oswald">Oswald</option>
							<option <?php if ('Poppins' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Poppins">Poppins</option>
							<option <?php if ('Open Sans' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Open Sans">Open Sans</option>
							<option <?php if ('Cantarell' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Cantarell">Cantarell</option>
							<option <?php if ('Ubuntu' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Ubuntu">Ubuntu</option>
						</select>
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('website_language'); ?> (Website Language)</label>
						<select class="combobox" name="language">
							<option value=""><?php echo $this->lang->line('select_language'); ?></option>
							<option <?php if ($this->db->get_where('setting', array('setting_id' => 10))->row()->content == 'english') echo 'selected'; ?> value="english">English</option>
							<option <?php if ($this->db->get_where('setting', array('setting_id' => 10))->row()->content == 'french') echo 'selected'; ?> value="french">French</option>
							<option <?php if ($this->db->get_where('setting', array('setting_id' => 10))->row()->content == 'german') echo 'selected'; ?> value="german">German</option>
						</select>
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('currency'); ?></label>
						<select class="combobox" name="currency">
							<option value=""><?php echo $this->lang->line('select_currency'); ?></option>
							<?php
							$currencies = $this->db->get('currency')->result_array();
							foreach ($currencies as $currency) :
							?>
								<option <?php if ($this->db->get_where('setting', array('setting_id' => 11))->row()->content == $currency['code']) echo 'selected'; ?> value="<?php echo html_escape($currency['code']); ?>"><?php echo html_escape($currency['name']); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label><?php echo $this->lang->line('timezone'); ?></label>
						<select class="combobox" name="timezone">
							<option value=""><?php echo $this->lang->line('select_timezone'); ?></option>
							<?php
							$timezones =  DateTimeZone::listIdentifiers(DateTimeZone::ALL);
							foreach ($timezones as $timezone) :
							?>
								<option <?php if ($this->db->get_where('setting', array('setting_id' => 12))->row()->content == $timezone) echo 'selected'; ?> value="<?php echo html_escape($timezone); ?>"><?php echo html_escape($timezone); ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('update'); ?></button>
					<?php echo form_close(); ?>
				</div>
			</div>
			<!-- end panel -->
		</div>
	</div>
	<!-- end row -->
</div>
<!-- end #content