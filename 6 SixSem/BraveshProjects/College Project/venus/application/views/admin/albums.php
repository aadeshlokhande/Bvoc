<!-- begin #content -->
<div id="content" class="content">
	<div class="row">
		<div class="col-md-6">
			<h1 class="page-header"><?php echo $this->lang->line('gallery'); ?> <small><?php echo $this->lang->line('album_page'); ?></small></h1>
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
                                <th class="text-nowrap"><?php echo $this->lang->line('description'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('photos'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('uploaded_on'); ?></th>
                                <th class="text-nowrap">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $count = 1;
                            $albums_info = $this->security->xss_clean($this->db->get('album')->result_array());
                            foreach($albums_info as $row):
                        ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td>
                                    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_show_album/<?php echo $row['album_id']; ?>');">
                                        <?php echo $this->db->get_where('gallery', array('album_id' => $row['album_id']))->num_rows(); ?>
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
											<a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/bopup/modal_edit_album/<?php echo $row['album_id']; ?>');" >
                                                <?php echo $this->lang->line('edit_details'); ?>
                                            </a>
                                            <a class="dropdown-item" href="<?php echo base_url(); ?>admin/edit_gallery/<?php echo $row['album_id']; ?>">
                                                <?php echo $this->lang->line('edit_gallery'); ?>
                                            </a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>admin/albums/delete/<?php echo $row['album_id']; ?>');" >
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
