<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('events'); ?> <small><?php echo $this->lang->line('event_page'); ?></small></h1>
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
                                <th class="text-nowrap"><?php echo $this->lang->line('event_date'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('event_time'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('venue'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('added_on'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $events_info = $this->security->xss_clean($this->db->get('event')->result_array());
                            foreach ($events_info as $row) :
                            ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo date('d M, Y', $row['event_date']); ?></td>
                                    <td><?php echo $row['event_time']; ?></td>
                                    <td><?php echo $row['venue']; ?></td>
                                    <td><?php echo date('d M, Y', $row['timestamp']); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-white btn-xs">Action</button>
                                            <button type="button" class="btn btn-white btn-xs dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_show_event/<?php echo $row['event_id']; ?>');">
                                                    <?php echo $this->lang->line('details'); ?>
                                                </a>
                                                <a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_event/<?php echo $row['event_id']; ?>');">
                                                    <?php echo $this->lang->line('edit'); ?>
                                                </a>
                                                <a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_change_event_image/<?php echo $row['event_id']; ?>');">
                                                    <?php echo $this->lang->line('change_image'); ?>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>admin/events/delete/<?php echo $row['event_id']; ?>');">
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