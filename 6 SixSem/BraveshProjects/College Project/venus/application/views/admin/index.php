<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title><?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->title; ?> | <?php echo $page_title; ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="Alumni Association" name="description" />
    <meta content="t1m9m" name="author" />

    <link href="<?php echo base_url(); ?>uploads/logos/<?php echo $this->db->get_where('setting', array('setting_id' => 7))->row()->content; ?>" rel="icon" type="image/*">

    <?php date_default_timezone_set($this->db->get_where('setting', array('name' => 'timezone'))->row()->content); ?>

    <?php include 'includes_top.php'; ?>
</head>

<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <div class="material-loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
            </svg>
            <div class="message">Loading...</div>
        </div>
    </div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">

        <?php include 'header.php'; ?>
        <?php include 'navbar.php'; ?>
        <?php include $page_name . '.php'; ?>
        <?php include 'modal.php'; ?>
        <?php include 'toastr.php'; ?>

        <div id="footer" class="footer" align="center">
            <a href="<?php echo base_url(); ?>" target="_blank"><?php echo $this->lang->line('alumni_website'); ?></a>
            <br>
            &copy; 2017 - <?php echo date('Y'); ?> <a href="<?php echo $this->db->get_where('setting', array('setting_id' => 9))->row()->content; ?>" target="_blank"><?php echo $this->db->get_where('setting', array('setting_id' => 3))->row()->content;; ?></a>, All rights reserved. 
        </div>
    </div>
    <!-- end page container -->

    <?php include 'includes_bottom.php'; ?>

    <script type="text/javascript">
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").slideUp(1000, function() {
                    $(this).remove();
                });
            }, 5000);
        });
    </script>
</body>

</html>