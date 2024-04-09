<!-- begin #content -->
<div id="content" class="content">
    <h1 class="page-header"><?php echo $this->lang->line('manage_donation_purposes'); ?> <small><?php echo $this->lang->line('manage_donation_purposes_sub'); ?></small></h1>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-9 -->
        <div class="col-md-9">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <table id="data-table-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">#</th>
                                <th class="text-nowrap"><?php echo $this->lang->line('name'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('status'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('updated_on'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $donation_purposes = $this->security->xss_clean($this->db->get('donation_purpose')->result_array());
                            foreach ($donation_purposes as $row) :
                            ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td>
                                        <?php if ($row['status'] == 0) : ?>
                                            <span class="badge badge-warning"><?php echo $this->lang->line('inactive'); ?></span>
                                        <?php elseif ($row['status'] == 1) : ?>
                                            <span class="badge badge-success"><?php echo $this->lang->line('active'); ?></span>
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
                                                <a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_donation_purpose_management/<?php echo $row['donation_purpose_id']; ?>');">
                                                    <?php echo $this->lang->line('edit'); ?>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>admin/manage_donation_purposes/delete/<?php echo $row['donation_purpose_id']; ?>');">
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
        <!-- end col-9 -->
        <!-- begin col-3 -->
        <div class="col-md-3">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-body -->
                <div class="panel-body">
                    <?php echo form_open('admin/manage_donation_purposes/add', array('method' => 'post', 'data-parsley-validate' => 'true')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('name'); ?></label>
                        <input type="text" name="name" placeholder="<?php echo $this->lang->line('donation_purpose_input'); ?>" class="form-control" data-parsley-required="true">
                    </div>
                    <div class="form-group row m-b-20">
                        <label class="col-md-12"><?php echo $this->lang->line('status'); ?></label>
                        <div class="col-md-12">
                            <div class="radio radio-css radio-inline">
                                <input type="radio" name="status" id="active" value="1" checked />
                                <label for="active"><?php echo $this->lang->line('active'); ?></label>
                            </div>
                            <div class="radio radio-css radio-inline">
                                <input type="radio" name="status" id="inactive" value="0" />
                                <label for="inactive"><?php echo $this->lang->line('inactive'); ?></label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="mb-sm btn btn-success"><?php echo $this->lang->line('add'); ?></button>
                    <?php echo form_close(); ?>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-3 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->