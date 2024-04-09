<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="t1m9m">
    <meta name="description" content="Alumni, Venus, University, Association">

    <?php include 'includes_top.php'; ?>

    <title><?php echo $this->db->get_where('about_us', array('about_us_id' => '1'))->row()->title; ?> | <?php echo $this->lang->line($page_name); ?></title>

    <link href="<?php echo base_url(); ?>uploads/logos/<?php echo $this->db->get_where('setting', array('setting_id' => 7))->row()->content; ?>" rel="icon" type="image/*">
    <?php date_default_timezone_set($this->db->get_where('setting', array('setting_id' => 12))->row()->content); ?>
</head>

<body class="<?php echo $body_class; ?> page-my-account">
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Header -->
        <div class="navigation-wrapper">
            <?php include 'header.php'; ?>
            <?php include 'navbar.php'; ?>
            <div class="background">
                <img src="<?php echo base_url(); ?>assets/alumni/img/background-city.png" alt="background">
            </div>
        </div>
        <!-- end Header -->
        <?php include 'modal.php'; ?>
        <!-- Page Content -->
        <?php include $page_name . '.php'; ?>
        <!-- end Page Content -->
        <?php include 'footer.php'; ?>
    </div>
    <!-- end Wrapper -->
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