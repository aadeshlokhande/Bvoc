<!-- begin #content -->
<div id="content" class="content">
	<div class="row">
		<div class="col-md-6">
			<h1 class="page-header"><?php echo $this->lang->line('jobs'); ?> <small><?php echo $this->lang->line('job_page'); ?></small></h1>
		</div>
	</div>

	<!-- begin row -->
	<div class="row">
	    <!-- begin col-12 -->
	    <div class="col-md-12">
	        <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <table id="data-table-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">#</th>
                                <th class="text-nowrap"><?php echo $this->lang->line('title'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('position'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('location'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('deadline'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('salary'); ?> (<?php echo $this->security->xss_clean($this->db->get_where('setting', array('name' => 'currency'))->row()->content); ?>)</th>
                                <th class="text-nowrap"><?php echo $this->lang->line('website'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('email'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('phone'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('posted_on'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $count = 1;
                            $job_circulars = $this->security->xss_clean($this->db->get('job')->result_array());
                            foreach($job_circulars as $row):
                        ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td>
                                    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_show_job_description/<?php echo $row['job_id']; ?>');">
                                        <?php echo $row['title']; ?>
                                    </a>
                                </td>
                                <td><?php echo $row['position']; ?></td>
                                <td><?php echo $row['not_remote'] ? $row['location'] : $this->lang->line('remote'); ?></td>
                                <td><?php echo date('d M, Y', $row['deadline']); ?></td>
                                <td><?php echo $row['salary'] ? $row['salary'] : '-'; ?></td>
                                <td><?php echo $row['website'] ? $row['website'] : '-'; ?></td>
                                <td><?php echo $row['contact_email']; ?></td>
                                <td><?php echo $row['contact_phone']; ?></td>
                                <td><?php echo date('d M, Y', $row['timestamp']); ?></td>
                                <td>
									<div class="btn-group">
                                        <button type="button" class="btn btn-white btn-xs">Action</button>
                                        <button type="button" class="btn btn-white btn-xs dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_job/<?php echo $row['job_id']; ?>');">
                                                <?php echo $this->lang->line('edit'); ?>
                                            </a>
                                            <div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>admin/jobs/delete/<?php echo $row['job_id']; ?>');">
                                                <?php echo $this->lang->line('remove'); ?>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->