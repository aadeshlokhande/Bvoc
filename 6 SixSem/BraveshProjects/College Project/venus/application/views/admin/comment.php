<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->lang->line('comment'); ?> <small><?php echo $this->lang->line('comment_page'); ?></small></h1>
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
                                <th class="text-nowrap"><?php echo $this->lang->line('story'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('commentator'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('status'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('on'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $this->db->order_by('timestamp', 'desc');
                            $comments = $this->security->xss_clean($this->db->get('comment')->result_array());
                            foreach ($comments as $row) :
                            ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $this->db->get_where('story', array('story_id' => $row['story_id']))->row()->title; ?></td>
                                    <td><?php echo $this->db->get_where('alumnus', array('alumnus_id' => $row['alumnus_id']))->row()->name; ?></td>
                                    <td>
                                        <?php if ($row['status'] == '0') : ?>
                                            <span class="badge badge-default"><?php echo $this->lang->line('pending'); ?></span>
                                        <?php elseif ($row['status'] == '1') : ?>
                                            <span class="badge badge-success"><?php echo $this->lang->line('accepted'); ?></span>
                                        <?php elseif ($row['status'] == '2') : ?>
                                            <span class="badge badge-warning"><?php echo $this->lang->line('rejected'); ?></span>
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
                                                <a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_comment/<?php echo $row['comment_id']; ?>');">
                                                    <?php echo $this->lang->line('edit'); ?>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>admin/comment/delete/<?php echo $row['comment_id']; ?>');" >
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