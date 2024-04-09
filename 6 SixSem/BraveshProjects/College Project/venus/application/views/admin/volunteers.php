<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('volunteer'); ?> <small><?php echo $this->lang->line('volunteer_page'); ?></small></h1>
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
                                <th class="text-nowrap"><?php echo $this->lang->line('name'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('username'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('email'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('mobile'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('batch'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('profession'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('status'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('registered_on'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $this->db->order_by('timestamp', 'desc');
                            $volunteer_info = $this->security->xss_clean($this->db->get('volunteer')->result_array());
                            foreach ($volunteer_info as $row) :
                            ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php if ($row['batch']) echo $row['batch']; ?></td>
                                    <td><?php if ($row['profession_id']) echo $this->db->get_where('profession', array('profession_id' => $row['profession_id']))->row()->name; ?></td>
                                    <td>
                                        <?php if ($row['status'] == 0) : ?>
                                            <span class="badge badge-warning"><?php echo 'Pending'; ?></span>
                                        <?php elseif ($row['status'] == 1) : ?>
                                            <span class="badge badge-success"><?php echo 'Active'; ?></span>
                                        <?php elseif ($row['status'] == 2) : ?>
                                            <span class="badge badge-inverse"><?php echo 'Cancelled'; ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo date('d M, Y', $row['timestamp']); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-white btn-xs">Action</button>
                                            <button type="button" class="btn btn-white btn-xs dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_volunteer/<?php echo $row['volunteer_id']; ?>');">
                                                    <?php echo $this->lang->line('edit'); ?>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>admin/volunteers/delete/<?php echo $row['volunteer_id']; ?>');">
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