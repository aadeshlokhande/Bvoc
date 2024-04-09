<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="<?php echo $this->db->get_where('setting', array('name' => 'font_src'))->row()->content; ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/css/selectize.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/css/vanillabox/vanillabox.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/css/vanillabox/vanillabox.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/css/style.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/alumni/css/bootstrap-datepicker.css" type="text/css">

<style>
    .btn-scroll-to-top {
        position: fixed;
        bottom: 25px;
        right: 25px;
        z-index: 1020;
        font-size: 23px!important;
        width: 40px!important;
        height: 40px!important;
        line-height: 40px!important;
        /* -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .26);
        box-shadow: 0 2px 5px rgba(0, 0, 0, .26); */
        background: transparent !important;
    }
    .btn-scroll-to-top i {
        line-height: 40px
    }
    .page-with-right-sidebar .btn-scroll-to-top {
        left: 25px;
        right: auto
    }
</style>

<style>
    body {
        font-family: <?php echo $this->db->get_where('setting', array('name' => 'font_family'))->row()->content; ?>;
    }

    .ie8 body {
        font-family: <?php echo $this->db->get_where('setting', array('name' => 'font_family'))->row()->content; ?>;
    }
</style>