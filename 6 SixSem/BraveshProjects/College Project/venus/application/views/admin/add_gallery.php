<!-- begin #content -->
<div id="content" class="content">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header"><?php echo $this->db->get_where('album', array('album_id' => $album_id))->row()->name; ?> <small><?php echo $this->lang->line('upload_photo_page'); ?></small></h1>
        </div>
    </div>

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/gallery/add/' . $album_id, array('data-parsley-validate' => 'true', 'name' => 'update_text')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('alnum_photo'); ?></label>
                        <span class="btn btn-success fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span><?php echo $this->lang->line('add_image'); ?></span>
                            <input type="file" name="image_link" data-parsley-required="true">
                        </span>
                    </div>

                    <button type="submit" class="md-sm btn btn-success"><?php echo $this->lang->line('upload'); ?></button>

                    <a onclick="confirm_finish_modal('<?php echo base_url(); ?>admin/albums');" href="javascript:;" class="btn btn-primary">
                        <?php echo $this->lang->line('finish'); ?>
                    </a>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <div class="col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <table id="data-table-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-nowrap"><?php echo $this->lang->line('image'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('name'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('option'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $gallery_photos = $this->db->get_where('gallery', array('album_id' => $this->db->get_where('album', array('album_id' => $album_id))->row()->album_id))->result_array();
                            foreach ($gallery_photos as $photo) :
                            ?>
                                <tr>
                                    <td><img width="100%" src="<?php echo base_url(); ?>uploads/gallery/<?php echo $photo['image_link']; ?>"></td>
                                    <td><?php echo $photo['image_link']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-white btn-xs">Action</button>
                                            <button type="button" class="btn btn-white btn-xs dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>admin/gallery/delete/<?php echo $photo['gallery_id']; ?>');">
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
        <!-- end col-6 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content