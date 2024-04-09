<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('donations'); ?> <small><?php echo $this->lang->line('donation_page'); ?></small></h1>
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
                                <th class="text-nowrap"><?php echo $this->lang->line('amount'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('status'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('donation_purpose'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('donation_via'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $notices_info = $this->security->xss_clean($this->db->get('donation')->result_array());
                            foreach ($notices_info as $row) :
                            ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $this->db->get_where('alumnus', array('alumnus_id' => $row['alumnus_id']))->row()->name; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                    <td>
                                        <?php if ($row['status'] == 0) : ?>
                                            <span class="badge badge-warning"><?php echo $this->lang->line('due'); ?></span>
                                        <?php elseif ($row['status'] == 1) : ?>
                                            <span class="badge badge-success"><?php echo $this->lang->line('donated'); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if (isset($this->db->get_where('donation_purpose', array('donation_purpose_id' => $row['donation_purpose_id']))->row()->name))
                                            echo $this->db->get_where('donation_purpose', array('donation_purpose_id' => $row['donation_purpose_id']))->row()->name;
                                        else echo 'N/A';
                                        ?>
                                    </td>
                                    <td><?php echo $row['via']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-white btn-xs">Action</button>
                                            <button type="button" class="btn btn-white btn-xs dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_donation/<?php echo $row['donation_id']; ?>');">
                                                    <?php echo $this->lang->line('edit'); ?>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>admin/donations/delete/<?php echo $row['donation_id']; ?>');">
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