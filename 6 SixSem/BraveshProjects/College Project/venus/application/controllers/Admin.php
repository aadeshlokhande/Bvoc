<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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

    // Showing the dashboard
    public function index()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']     =    'dashboard';
        $page_data['page_title']    =    $this->lang->line('dashboard');
        $this->load->view('admin/index', $page_data);
    }

    // Admin Panel Login Page
    function login()
    {
        $this->load->view('admin/login');
    }

    // Showing the slide add page
    function add_slide()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']     =     'add_slide';
        $page_data['page_title']    =    $this->lang->line('add_slide');
        $this->load->view('admin/index', $page_data);
    }

    // Showing all the slides
    function slides($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for adding, editing and deleting slide of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_slide();
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_slide($param2);
        } elseif ($param1 == 'change_slide_image') {
            $this->admin_crud->change_slide_image($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_slide($param2);
        }

        $page_data['page_name']     =     'slides';
        $page_data['page_title']    =    $this->lang->line('slides');
        $this->load->view('admin/index', $page_data);
    }

    // About us section in the home page
    function about_us($param = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for updating about_us of admin_crud model
        if ($param == 'update_text') {
            $this->admin_crud->update_about_us_text();
        } elseif ($param == 'update_image') {
            $this->admin_crud->update_about_us_image();
        } elseif ($param == 'update_tc') {
            $this->admin_crud->update_terms_and_conditions();
        }

        $page_data['page_name']        =     'about_us';
        $page_data['page_title']    =    $this->lang->line('about_us');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the alumnus add page
    function add_alumnus()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']     =     'add_alumnus';
        $page_data['page_title']    =    $this->lang->line('add_alumnus');
        $this->load->view('admin/index', $page_data);
    }

    // Showing all the alumni
    function alumni($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        // Calling method for adding, editing. deleting and emailing alumnus of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_alumnus();
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_alumnus($param2);
        } elseif ($param1 == 'change_alumnus_image') {
            $this->admin_crud->change_alumnus_image($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_alumnus($param2);
        } elseif ($param1 == 'email') {
            $this->admin_crud->email_alumni();
        } elseif ($param1 == 'email_to_class') {
            $this->admin_crud->email_alumni_class();
        }

        $page_data['page_name']     =     'alumni';
        $page_data['page_title']    =    $this->lang->line('alumni');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the alumni email page
    function email_alumni()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']     =     'email_alumni';
        $page_data['page_title']    =    $this->lang->line('email_to_alumni');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the alumni sms page
    function sms_alumni()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']     =     'sms_alumni';
        $page_data['page_title']    =    $this->lang->line('sms_to_alumni');
        $this->load->view('admin/index', $page_data);
    }
    
    function send_text($param = '')
    {
        if ($param == 'all') {
            $this->admin_crud->sms_alumni();
        } else if ($param == 'batch') {
            $this->admin_crud->sms_alumni_batch();
        }
	}

    // Showing the event add page
    function add_event()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']     =     'add_event';
        $page_data['page_title']    =    $this->lang->line('add_event');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the event management page
    function manage_events($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for editing event management of admin_crud model
        if ($param1 == 'edit') {
            $this->admin_crud->edit_event_managment($param2);
        }

        $page_data['page_name']     =     'manage_events';
        $page_data['page_title']    =    $this->lang->line('manage_events');
        $this->load->view('admin/index', $page_data);
    }

    // Showing all the events
    function events($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for adding, editing and deleting event of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_event();
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_event($param2);
        } elseif ($param1 == 'change_event_image') {
            $this->admin_crud->change_event_image($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_event($param2);
        }

        $page_data['page_name']     =     'events';
        $page_data['page_title']    =    $this->lang->line('events');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the story add page
    function add_story()
    {
        if ($this->session->userdata('auth_kind') != 'admin' && $this->session->userdata('auth_kind') != 'alumnus')
            redirect(base_url('admin/login'), 'refresh');
        
        if ($this->session->userdata('auth_kind') == 'alumnus') {
            $has_story_permission       =   $this->db->get_where('alumnus', array('alumnus_id' => $this->session->userdata('admin_id')))->row()->story_permission;

            if ($has_story_permission) {
                $page_data['page_name']     =    'add_story';
                $page_data['page_title']    =    $this->lang->line('add_story');
                
                $this->load->view('admin/index', $page_data);
            } else {
                $page_data['page_title']	=	'Permission Denied';
                $page_data['page_name'] 	= 	'permission_denied';
    
                $this->load->view('admin/index', $page_data);
            }
        } else {
            $page_data['page_name']     =    'add_story';
            $page_data['page_title']    =    $this->lang->line('add_story');
        
            $this->load->view('admin/index', $page_data);
        }
    }

    // Showing all the stories
    function stories($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin' && $this->session->userdata('auth_kind') != 'alumnus')
            redirect(base_url('admin/login'), 'refresh');

        if ($this->session->userdata('auth_kind') == 'alumnus') {
            $has_story_permission       =   $this->db->get_where('alumnus', array('alumnus_id' => $this->session->userdata('admin_id')))->row()->story_permission;

            if ($has_story_permission) {
                if ($param1 == 'add') { $this->admin_crud->add_story(); } 
                elseif ($param1 == 'edit') { $this->admin_crud->edit_story($param2); } 
                elseif ($param1 == 'change_story_image') { $this->admin_crud->change_story_image($param2); } 
                elseif ($param1 == 'delete') { $this->admin_crud->delete_story($param2); }
        
                $page_data['page_name']     =    'stories';
                $page_data['page_title']    =    $this->lang->line('stories');
    
                $this->load->view('admin/index', $page_data);
            } else {
                $page_data['page_title']	=	'Permission Denied';
                $page_data['page_name'] 	= 	'permission_denied';
    
                $this->load->view('admin/index', $page_data);
            }
        } else {
            if ($param1 == 'add') { $this->admin_crud->add_story(); } 
            elseif ($param1 == 'edit') { $this->admin_crud->edit_story($param2); } 
            elseif ($param1 == 'change_story_image') { $this->admin_crud->change_story_image($param2); } 
            elseif ($param1 == 'delete') { $this->admin_crud->delete_story($param2); }

            $page_data['page_name']     =    'stories';
            $page_data['page_title']    =    $this->lang->line('stories');

            $this->load->view('admin/index', $page_data);
        }        
    }

    function permission_requests($param1 = '', $param2 = '')
    {
        if ($param1 == 'edit') {
            $this->admin_crud->edit_permission_request($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_permission_request($param2);
        }
        $page_data['page_name']     =    'permission_requests';
        $page_data['page_title']    =    $this->lang->line('permission_requests');
        $this->load->view('admin/index', $page_data);
    }

    // Showing all the comments
    function comment($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        if ($param1 == 'edit') {
            $this->admin_crud->edit_comment($param2);
        } else if ($param1 == 'delete') {
            $this->admin_crud->delete_comment($param2);
        }

        $page_data['page_name']     =     'comment';
        $page_data['page_title']    =    $this->lang->line('comments');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the add album page
    function add_album()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']     =     'add_album';
        $page_data['page_title']    =    $this->lang->line('add_album');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the albums page
    function albums($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for adding, editing and deleting album of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_album();
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_album($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_album($param2);
        }

        $page_data['page_name']     =   'albums';
        $page_data['page_title']    =   $this->lang->line('albums');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the add photos page
    function add_gallery($album_id = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['album_id']      =   $album_id;
        $page_data['page_name']     =   'add_gallery';
        $page_data['page_title']    =   $this->lang->line('gallery');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the edit gallery page
    function edit_gallery($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
            
        if ($param1 == 'upload') {
            $page_data['album_id'] = $param2;
        } else {
            $page_data['album_id'] = $param1;
        }

        $page_data['page_name']     =   'edit_gallery';
        $page_data['page_title']    =   $this->lang->line('gallery');
        $this->load->view('admin/index', $page_data);
    }

    // Uploading photos for specific album
    function gallery($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for adding, editing and deleting gallery of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_gallery($param2);
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_gallery($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_gallery($param2);
        }
    }

    // Showing the add volunteer page
    function add_volunteer()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']     =     'add_volunteer';
        $page_data['page_title']    =    $this->lang->line('add_volunteer');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the volunteers page
    function volunteers($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for adding, editing and deleting volunteer of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_volunteer();
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_volunteer($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_volunteer($param2);
        }

        $page_data['page_name']     =     'volunteers';
        $page_data['page_title']    =    $this->lang->line('volunteers');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the add notice page
    function add_notice()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']        =     'add_notice';
        $page_data['page_title']    =    $this->lang->line('add_notice');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the notices page
    function notices($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for adding, editing and deleting notice of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_notice();
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_notice($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_notice($param2);
        }

        $page_data['page_name']     =   'notices';
        $page_data['page_title']    =   $this->lang->line('notices');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the add donation page
    function add_donation()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']     =   'add_donation';
        $page_data['page_title']    =   $this->lang->line('add_donation');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the donation purpose management page
    function manage_donation_purposes($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for editing donation purpose management of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_donation_purpose();
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_donation_purpose($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_donation_purpose($param2);
        }

        $page_data['page_name']     =   'manage_donation_purposes';
        $page_data['page_title']    =   $this->lang->line('manage_donation_purposes');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the donation page
    function donations($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for adding, editing and deleting donation of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_donation();
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_donation($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_donation($param2);
        }

        $page_data['page_name']     =   'donations';
        $page_data['page_title']    =   $this->lang->line('donations');
        $this->load->view('admin/index', $page_data);
    }

    // Contact Us page loads
    function contact_us($param = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for updating contact us page settings of admin_crud model
        if ($param == 'update_part_1') {
            $this->admin_crud->update_contact_us_part_1();
        } elseif ($param == 'update_part_2') {
            $this->admin_crud->update_contact_us_part_2();
        }

        $page_data['page_name']     =     'contact_us';
        $page_data['page_title']    =    $this->lang->line('contact_us');
        $this->load->view('admin/index', $page_data);
    }

    // Showing all the messages from contact us form
    function message($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        if ($param1 == 'delete') {
            $this->admin_crud->delete_message($param2);
        }

        $page_data['page_name']     =     'message';
        $page_data['page_title']    =    $this->lang->line('message');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the add job page
    function add_job()
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');

        $page_data['page_name']        =     'add_job';
        $page_data['page_title']    =    $this->lang->line('add_job');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the jobs page
    function jobs($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for adding, editing and deleting job of admin_crud model
        if ($param1 == 'add') {
            $this->admin_crud->add_job();
        } elseif ($param1 == 'edit') {
            $this->admin_crud->edit_job($param2);
        } elseif ($param1 == 'delete') {
            $this->admin_crud->delete_job($param2);
        }

        $page_data['page_name']     =   'jobs';
        $page_data['page_title']    =   $this->lang->line('jobs');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the website settings page
    function website_settings($param = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for updating the website settings
        if ($param == 'update') {
            $this->admin_crud->update_website_settings();
        } elseif ($param == 'update_smtp') {
            $this->admin_crud->update_website_smtp();
        } elseif ($param == 'delete_smtp') {
            $this->admin_crud->delete_website_smtp();
        } elseif ($param == 'update_twilio') {
            $this->admin_crud->update_website_twilio();
        } elseif ($param == 'delete_twilio') {
            $this->admin_crud->delete_website_twilio();
        }

        $page_data['page_name']     =     'website_settings';
        $page_data['page_title']    =    $this->lang->line('website_settings');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the profession settings page
    function profession_settings($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for updating the profession settings
        if ($param1 == 'add') $this->admin_crud->add_profession();
		elseif ($param1 == 'update') $this->admin_crud->update_profession($param2);

        $page_data['page_name']     =    'profession_settings';
        $page_data['page_title']    =    $this->lang->line('profession_settings');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the logo settings page
    function logo_settings($param = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for updating the favicon, header logo and footer logo
        if ($param == 'update_favicon') {
            $this->admin_crud->update_favicon();
        } elseif ($param == 'update_header_logo') {
            $this->admin_crud->update_header_logo();
        } elseif ($param == 'update_footer_logo') {
            $this->admin_crud->update_footer_logo();
        }

        $page_data['page_name']        =     'logo_settings';
        $page_data['page_title']    =    $this->lang->line('logo_settings');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the admin panel login background settings page
    function bg_settings($param = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for updating the admin settings, email and password
        if ($param == 'update') {
            $this->admin_crud->update_bg_settings();
        }

        $page_data['page_name']     =     'bg_settings';
        $page_data['page_title']    =    $this->lang->line('login_bg_settings');
        $this->load->view('admin/index', $page_data);
    }

    // Showing the admin settings page
    function admin_settings($param = '')
    {
        if ($this->session->userdata('auth_kind') != 'admin')
            redirect(base_url() . 'admin/login', 'refresh');
        // Calling method for updating the admin settings, email and password
        if ($param == 'update') {
            $this->admin_crud->update_admin_settings();
        }

        $page_data['page_name']     =     'admin_settings';
        $page_data['page_title']    =    $this->lang->line('admin_settings');
        $this->load->view('admin/index', $page_data);
    }
}
