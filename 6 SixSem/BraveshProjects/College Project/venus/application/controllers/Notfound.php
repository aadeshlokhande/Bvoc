<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notfound extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->output->set_header("X-Frame-Options: sameorigin");
        $this->output->set_header("X-XSS-Protection: 1; mode=block");
        $this->output->set_header("X-Content-Type-Options: nosniff");
        $this->output->set_header("Strict-Transport-Security: max-age=31536000");

        $this->lang->load('vasha', $this->db->get_where('setting', array('setting_id' => 10))->row()->content);
    }

    public function index()
    {
        $page_data['page_name']  = '404';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }
}
