<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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

    // Website Login
    function website_login()
    {
        if ($this->input->post('auth_type') == "alumnus") {

            // Alumnus Login
            $email    = $this->input->post('email');
            $password = $this->input->post('password');
            $query    = $this->db->get_where('alumnus', array('email' => $email, 'status' => 1));

            // checking with db alumnus table
            if ($query->num_rows() > 0) {
                $db_password    =    $query->row()->password;

                if (password_verify($password, $db_password)) {
                    $alumnus_row = $query->row();

                    $this->session->set_userdata('alumnus_id', $alumnus_row->alumnus_id);
                    $this->session->set_userdata('step', $alumnus_row->step);
                    $this->session->set_userdata('auth_type', 'alumnus');

                    redirect(base_url() . 'alumnus/' . $alumnus_row->alumnus_id, 'refresh');
                } else {
                    $this->session->set_flashdata('warning', $this->lang->line('incorrect_alumnus'));
                    redirect(base_url() . 'login', 'refresh');
                }
            } else {
                $this->session->set_flashdata('warning', $this->lang->line('incorrect_alumnus'));
                redirect(base_url() . 'login', 'refresh');
            }
        } elseif ($this->input->post('auth_type') == "volunteer") {

            // Volunteer Login
            $email    = $this->input->post('email');
            $password = $this->input->post('password');
            $query    = $this->db->get_where('volunteer', array('email' => $email, 'status' => 1));

            // checking with db volunteer table
            if ($query->num_rows() > 0) {
                $db_password    =    $query->row()->password;

                if (password_verify($password, $db_password)) {
                    $volunteer_row = $query->row();

                    $this->session->set_userdata('volunteer_id', $volunteer_row->volunteer_id);
                    $this->session->set_userdata('step', $volunteer_row->step);
                    $this->session->set_userdata('auth_type', 'volunteer');

                    $volunteer_username = $this->db->get_where('volunteer', array(
                        'volunteer_id' => $volunteer_row->volunteer_id
                    ))->row()->username;

                    redirect(base_url() . 'volunteer/' . $volunteer_username, 'refresh');
                } else {
                    $this->session->set_flashdata('warning', $this->lang->line('incorrect_volunteer'));
                    redirect(base_url() . 'login', 'refresh');
                }
            } else {
                $this->session->set_flashdata('warning', $this->lang->line('incorrect_volunteer'));
                redirect(base_url() . 'login', 'refresh');
            }
        }
    }


    // Admin Login
    function admin_login()
    {
        $email    = $this->input->post('email');
        $password = $this->input->post('password');
        $query    = $this->db->get_where('admin', array('email' => $email));

        // checking with db admin table
        if ($query->num_rows() > 0) {
            $db_password    =    $query->row()->password;

            if (password_verify($password, $db_password)) {                
                if ($query->row()->admin_type == 'admin') {
                    $this->session->set_userdata('admin_id', $query->row()->admin_id);
                    $this->session->set_userdata('auth_kind', $query->row()->admin_type);

                    redirect(base_url('admin'), 'refresh');
                } elseif ($query->row()->admin_type == 'alumnus') {
                    $this->session->set_userdata('admin_id', $query->row()->person_id);
                    $this->session->set_userdata('auth_kind', $query->row()->admin_type);

                    redirect(base_url('admin/add_story'), 'refresh');
                }                
            } else {
                $this->session->set_flashdata('warning', $this->lang->line('incorrect_admin'));
                redirect(base_url() . 'admin/login', 'refresh');
            }
        } else {
            $this->session->set_flashdata('warning', $this->lang->line('incorrect_admin'));
            redirect(base_url() . 'admin/login', 'refresh');
        }
    }

    // Website Logout
    function website_logout()
    {
        if ($this->session->userdata('auth_type') == "alumnus") {

            // Alumnus Logout
            $this->session->unset_userdata('alumnus_id');
            $this->session->unset_userdata('step');
            $this->session->unset_userdata('auth_type');

            $this->session->unset_userdata('batch');
            $this->session->unset_userdata('alumni_count');
            $this->session->unset_userdata('alumni');

            $this->session->unset_userdata('alumnus');
            $this->session->unset_userdata('message');

            $this->session->set_flashdata('success', $this->lang->line('logout_alumnus'));

            redirect(base_url() . 'login', 'refresh');
        } elseif ($this->session->userdata('auth_type') == "volunteer") {

            // Volunteer Logout
            $this->session->unset_userdata('volunteer_id');
            $this->session->unset_userdata('step');
            $this->session->unset_userdata('auth_type');

            $this->session->set_flashdata('success', $this->lang->line('logout_volunteer'));

            redirect(base_url() . 'login', 'refresh');
        }
    }

    // Admin Logout
    function admin_logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('auth_kind');

        $this->session->set_flashdata('success', $this->lang->line('logout_admin'));

        redirect(base_url() . 'admin/login', 'refresh');
    }
}
