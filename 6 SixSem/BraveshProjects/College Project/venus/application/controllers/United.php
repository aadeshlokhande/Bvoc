<?php
defined('BASEPATH') or exit('No direct script access allowed');

class United extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->lang->load('vasha', $this->db->get_where('setting', array('setting_id' => 10))->row()->content);
    }

    // This function loads the Home page
    public function index()
    {
        if ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $page_data['page_name']  = 'home';
        $page_data['body_class'] = 'page-homepage-carousel';

        $this->load->view('alumni/index', $page_data);
    }

    // This function loads the Login page
    function login()
    {
        $page_data['page_name']  = 'login';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function loads the Jobs page
    function jobs()
    {
        $this->united_crud->paginate('jobs', 'job', '4');
    }

    // This function registers Volunteer & Alumnus
    function register($param = '')
    {
        if ($param == 'volunteer') {
            $this->united_crud->add_volunteer();
        } elseif ($param == 'alumuns') {
            $this->united_crud->add_alumnus();
        }
    }

    // This function loads the Alumni page
    function alumni()
    {
        if ($this->session->userdata('auth_type') != 'alumnus') {
            $this->session->set_flashdata('info', $this->lang->line('not_alumni'));
            redirect(base_url() . 'login', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $this->united_crud->paginate_alumni();
    }

    // This function loads the Batchmates page
    function batchmates()
    {
        if ($this->session->userdata('auth_type') != 'alumnus') {
            $this->session->set_flashdata('info', $this->lang->line('not_alumni'));
            redirect(base_url() . 'login', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        } elseif ($this->session->userdata('step') > 1 && $this->session->userdata('auth_type') == 'alumnus') {
            $this->united_crud->paginate_batchmates();
        } else {
            redirect(base_url('notfound', 'refresh'));
        }
    }

    // This function takes you to alumni chat
    function chat()
    {
        if ($this->session->userdata('auth_type') != 'alumnus') {
            $this->session->set_flashdata('info', $this->lang->line('not_alumni'));
            redirect(base_url() . 'login', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }

        $page_data['page_name']  = 'alumni_chat';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function loads the Deceased page
    function deceased()
    {
        if ($this->session->userdata('auth_type') != 'alumnus') {
            $this->session->set_flashdata('info', $this->lang->line('not_alumni'));
            redirect(base_url() . 'login', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        } elseif ($this->session->userdata('step') > 1 && $this->session->userdata('auth_type') == 'alumnus') {
            $this->united_crud->paginate_deceased();
        } else {
            redirect(base_url('notfound', 'refresh'));
        }
    }

    // This function takes you to donation
    function donation($param = '')
    {
        if ($this->session->userdata('auth_type') != 'alumnus') {
            $this->session->set_flashdata('info', $this->lang->line('not_alumni'));
            redirect(base_url() . 'login', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }

        if ($param == 'add') {
            $this->united_crud->add_donation($param);
        }

        $page_data['page_name']  = 'donation';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function to chat with
    function chat_actions($param1 = '', $param2 = '')
    {
        if ($param1 == 'get_alumni') {
            $alumni = $this->united_crud->get_alumni_batch($param2);
            $this->_setOutput($alumni);
        } elseif ($param1 == 'select_alumnus') {
            $messages = $this->united_crud->select_alumnus_chat($param2);
            $this->_setOutput($messages);
        } elseif ($param1 == 'message') {
            $sent = $this->united_crud->save_message($param2);
            $this->_setOutput($sent);
        }
    }

    private function _setOutput($data)
    {
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');

        echo json_encode($data);
    }

    // This function search for alumni
    function search($param = '')
    {
        if ($this->session->userdata('auth_type') != 'alumnus') {
            $this->session->set_flashdata('info', $this->lang->line('not_alumni'));
            redirect(base_url() . 'login', 'refresh');
        }

        if ($param == 'alumni') {
            $this->united_crud->search_alumni();
        }
    }

    // This function loads the Alumnus page
    function alumnus($param1 = '', $param2 = '')
    {
        $query    = $this->db->get_where('alumnus', array('username' => $param1));

        if ($query->num_rows() > 0) {
            if ($query->row()->public) {
                $page_data['alumnus_id']    =   $query->row()->alumnus_id;
                $page_data['page_name']     =   'alumnus';
                $page_data['body_class']    =   'page-sub-page';

                $this->load->view('alumni/index', $page_data);
            } else {
                $this->session->set_flashdata('info', $this->lang->line('not_alumni'));
                redirect(base_url() . 'login', 'refresh');
            }
        } else {
            if ($this->session->userdata('auth_type') != 'alumnus') {
                $this->session->set_flashdata('info', $this->lang->line('not_alumni'));
                redirect(base_url() . 'login', 'refresh');
            }
    
            if ($param1 == 'change_alumnus_image') {
                $this->united_crud->change_alumnus_image($param2);
            } else if ($param1 == 'edit') {
                $this->united_crud->edit_alumnus($param2);
            } else if ($param1 == 'password') {
                $this->united_crud->update_alumnus_password($param2);
            } else if ($param1 == 'miscellaneous_public') {
                $this->united_crud->update_alumnus_miscellaneous_public($param2);
            } else if ($param1 == 'miscellaneous_permissions') {
                $this->united_crud->update_alumnus_miscellaneous_permissions($param2);
            }
    
            $page_data['alumnus_id']    =   $param1;
            $page_data['page_name']     =   'alumnus';
            $page_data['body_class']    =   'page-sub-page';
    
            $this->load->view('alumni/index', $page_data);
        }
    }

    // This function loads the Alumnus edit page
    function edit_alumnus()
    {
        if ($this->session->userdata('auth_type') != 'alumnus') {
            $this->session->set_flashdata('info', $this->lang->line('not_alumni'));
            redirect(base_url() . 'login', 'refresh');
        }
        $page_data['alumnus_id'] = $this->session->userdata('alumnus_id');
        $page_data['page_name']  = 'edit_alumnus';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function loads the Events page
    function events()
    {
        if ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $this->united_crud->paginate('events', 'event', '4');
    }

    // This function loads the Events page
    function event($param = '')
    {
        if ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $page_data['permalink']  = $param;
        $page_data['page_name']  = 'event';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function update RSVP of an event
    function rsvp($param1 = '', $param2 = '', $param3 = '')
    {
        $this->united_crud->update_rsvp($param1, $param2, $param3);
    }

    // This function loads the Stories page with pagination
    function stories()
    {
        if ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $this->united_crud->paginate('stories', 'story', '4');
    }

    // This function loads the stories from archive
    function archive_stories($param = '')
    {
        if ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $page_data['story_id']   = $param;
        $page_data['page_name']  = 'archive_stories';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function loads the single Story page
    function story($param = '')
    {
        if ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $this->united_crud->story_view_count($param);

        $page_data['permalink']  = $param;
        $page_data['page_name']  = 'story';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function comments on a stroy
    function comment($param = '')
    {
        if ($this->session->userdata('auth_type') != 'alumnus') {
            $this->session->set_flashdata('info', $this->lang->line('not_comment'));
            redirect(base_url() . 'login', 'refresh');
        }
        $this->united_crud->comment($param);
    }

    // This function loads the Gallery page
    function gallery()
    {
        if ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $this->united_crud->paginate('gallery', 'album', '2');
    }

    // This function loads the Volunteers page
    function volunteers()
    {
        if ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $this->united_crud->paginate_volunteers();
    }

    // This function loads the Volunteer profile page
    function volunteer($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_type') != 'volunteer') {
            $this->session->set_flashdata('info', $this->lang->line('not_volunteer'));
            redirect(base_url() . 'login', 'refresh');
        }
        if ($param1 == 'edit') {
            $this->united_crud->edit_volunteer($param2);
        } elseif ($param1 == 'password') {
            $this->united_crud->update_volunteer_password($param2);
        }

        $page_data['username']   = $param1;
        $page_data['page_name']  = 'volunteer';
        $page_data['body_class'] = 'page-sub-page page-contact';

        $this->load->view('alumni/index', $page_data);
    }

    // This function loads the Notice Board page
    function notices()
    {
        if ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'alumnus') {
            redirect(base_url() . 'edit_alumnus', 'refresh');
        } elseif ($this->session->userdata('step') == 1 && $this->session->userdata('auth_type') == 'volunteer') {
            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
        $this->united_crud->paginate('notices', 'notice', '4');
    }

    // This function loads the Contact Us page
    function contact_us()
    {
        $page_data['page_name']  = 'contact_us';
        $page_data['body_class'] = 'page-sub-page page-contact';

        $this->load->view('alumni/index', $page_data);
    }

    // This function sends message to the admin panel from contact us page
    function send_message()
    {
        $this->united_crud->contact_us_message();
    }
}
