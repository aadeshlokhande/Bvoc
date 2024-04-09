<!-- begin #content -->
<div id="content" class="content">
	<div class="row">
		<div class="col-md-6">
			<h1 class="page-header"><?php echo $this->lang->line('module'); ?> <small><?php echo $this->lang->line('permission_requests'); ?></small></h1>
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
                                <th class="text-nowrap"><?php echo $this->lang->line('alumnus'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('module'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('request'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('has_permission'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('updated_on'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $count = 1;
                            $permission_requests = $this->security->xss_clean($this->db->get('permission_request')->result_array());
                            foreach($permission_requests as $permission_request):
                        ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $this->db->get_where('alumnus', array('alumnus_id' => $permission_request['person_id']))->row()->name; ?></td>
                                <td><?php echo $permission_request['module']; ?></td>
                                <td>
                                    <?php
                                        if ($permission_request['status'])
                                            echo $this->lang->line('i_want_story_permission');
                                        else
                                            echo $this->lang->line('i_do_not_want_story_permission');
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if ($this->db->get_where('alumnus', array('alumnus_id' => $permission_request['person_id']))->row()->story_permission)
                                            echo '<span class="badge badge-success">' . $this->lang->line('yes') . '</span>';
                                        else
                                            echo '<span class="badge badge-warning">' . $this->lang->line('no') . '</span>';
                                    ?>
                                </td>
                                <td><?php echo date('d M, Y', $permission_request['timestamp']); ?></td>
                                <td>
									<div class="btn-group">
                                        <button type="button" class="btn btn-white btn-xs">Action</button>
                                        <button type="button" class="btn btn-white btn-xs dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_permission_request/<?php echo $permission_request['permission_request_id']; ?>');" >
                                                <?php echo $this->lang->line('edit'); ?>
                                            </a>
                                            <div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>admin/permission_requests/delete/<?php echo $permission_request['permission_request_id']; ?>');" >
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
