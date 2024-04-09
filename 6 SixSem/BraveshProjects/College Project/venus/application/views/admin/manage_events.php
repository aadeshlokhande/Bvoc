<!-- begin #content -->
<div id="content" class="content">
    <h1 class="page-header"><?php echo $this->lang->line('events'); ?> <small><?php echo $this->lang->line('event_management_page'); ?></small></h1>

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
                                <th class="text-nowrap"><?php echo $this->lang->line('yes'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('no'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('maybe'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('volunteers'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('added_on'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $count = 1;
                            $events_management_info = $this->security->xss_clean($this->db->get('event_management')->result_array());
                            foreach($events_management_info as $row):
                        ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $this->db->get_where('event', array('event_id' => $row['event_id']))->row()->name; ?></td>
                                <td>
                                    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_show_rsvp_alumni/<?php echo $row['event_id']; ?>/yes');">
                                        <?php echo $row['yes']; ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_show_rsvp_alumni/<?php echo $row['event_id']; ?>/no');">
                                        <?php echo $row['no']; ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_show_rsvp_alumni/<?php echo $row['event_id']; ?>/maybe');">
                                        <?php echo $row['maybe']; ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_show_event_volunteers/<?php echo $row['event_management_id']; ?>');">
                                        <?php
                                            $volunteer_count = 0;

                                            if ($row['volunteers']) {
                                                foreach (explode(",", $row['volunteers']) as $volunteer)
                                                {
        											$volunteer_count++;
        										}
                                            }

                                            echo $volunteer_count;
                                        ?>
                                    </a>
                                </td>
                                <td><?php echo date('d M, Y', $row['timestamp']); ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-white btn-xs">Action</button>
                                        <button type="button" class="btn btn-white btn-xs dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_event_management/<?php echo $row['event_management_id']; ?>');" >
                                                <?php echo $this->lang->line('edit'); ?>
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
