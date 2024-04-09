<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('home'); ?></a></li>
        <li class="active"><?php echo $this->lang->line('gallery'); ?></li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-12">
                <div id="page-main">
                    <section class="blog-listing">
                        <header><h1><?php echo $this->lang->line('gallery'); ?></h1></header>
                        <div class="row">
                            <?php
								if (isset($gallery)):
									foreach ($gallery as $album): 
                            ?>
                            <div class="col-md-12 col-sm-12">
                                <section id="gallery">
                                    <header>
                                        <h2><?php echo $album['name']; ?></h2>
                                    </header>
                                    <div class="section-content">
                                        <ul class="gallery-list">
                                            <?php
                                                $gallery_photos = $this->security->xss_clean($this->db->get_where('gallery', array('album_id' => $album['album_id']))->result_array());
                                                foreach ($gallery_photos as $gallery_photo): 
                                            ?>
                                            <li>
                                                <a href="<?php echo base_url(); ?>uploads/gallery/<?php echo $gallery_photo['image_link']; ?>" class="image-popup">
                                                    <img src="<?php echo base_url(); ?>uploads/gallery/<?php echo 'thumb_' . $gallery_photo['image_link']; ?>" alt="">
                                                </a>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <?php 
									endforeach;
								endif; 
                            ?>
                        </div><!-- /.row -->
                    </section><!-- /.blog-listing -->
                    <div class="center">
                        <ul class="pagination">
                        <?php foreach ($pages as $page) {
                            echo "<li>" . $page ." </li>";
                        } ?>
                        </ul>
                    </div>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->
