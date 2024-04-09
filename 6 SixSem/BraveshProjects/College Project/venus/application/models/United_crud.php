<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class United_crud extends CI_Model
{
    // This function gets all the alumni of a specific batch
    function get_alumni_batch($batch = '')
    {
        $data = [];
        if ($batch == 'all') {
            $alumni = $this->db->get_where('alumnus', array('status' => 1))->result_array();
        } else {
            $alumni = $this->db->get_where('alumnus', array('batch' => $batch, 'status' => 1))->result_array();
        }

        $count = sizeof($alumni);

        array_push($data, $alumni, $count);

        return $data;
    }

    // This function adds a donation
    function add_donation()
    {
        $data['alumnus_id']             =   $this->session->userdata('alumnus_id');
        $data['amount']                 =   $this->input->post('amount', TRUE);
        $data['status']                 =   0;
        $data['donation_purpose_id']    =   $this->input->post('donation_purpose_id', TRUE);
        $data['via']                    =   $this->input->post('via', TRUE);
        $data['timestamp']              =   time();

        $this->db->insert('donation', $data);

        $this->session->set_flashdata('success', $this->lang->line('donation_added'));

        redirect(base_url() . 'edit_alumnus', 'refresh');
    }

    // This function get all the chat history or not with another alumnus
    function select_alumnus_chat($alumnus_id = '')
    {
        $data = [];
        $chat = [];

        $queryChat1 = $this->db->get_where('chat', array('receiver_id' => $alumnus_id, 'sender_id' => $this->session->userdata('alumnus_id')));
        $queryChat2 = $this->db->get_where('chat', array('sender_id' => $alumnus_id, 'receiver_id' => $this->session->userdata('alumnus_id')));
        
        if ($queryChat1->num_rows() > 0) {
            $chat1 = $queryChat1->result_array();

            foreach ($chat1 as $cha1) {
                array_push($chat, $cha1);
            }
        }

        if ($queryChat2->num_rows() > 0) {
            $chat2 = $queryChat2->result_array();

            foreach ($chat2 as $cha2) {
                array_push($chat, $cha2);
            }
        }

        if (sizeof($chat) > 0) {
            $tempArr = $chat;

            foreach ($tempArr as $key => $row) {
                $volume[$key]  = $row['timestamp'];
            }

            array_multisort($volume, SORT_ASC, $tempArr);
            $chat = $tempArr;
        }

        array_push($data, $chat, $this->db->get_where('alumnus', array('alumnus_id' => $alumnus_id))->row()->name);

        return $data;
    }

    // This function saves messages during chat
    function save_message($alumnus_id = '')
    {
        $data['sender_id']        =    $this->session->userdata('alumnus_id');
        $data['receiver_id']    =    $alumnus_id;
        $data['message']        =    $this->input->post('message');
        $data['timestamp']        =    time();

        $this->db->insert('chat', $data);

        return $reponse = array(
            'csrfName' => $this->security->get_csrf_token_name(),
            'csrfHash' => $this->security->get_csrf_hash()
        );
    }

    // This function increases the story view count each time a story is viewed
    function story_view_count($param = '')
    {
        $times = $this->db->get_where('story', array(
            'permalink' => $param
        ))->row()->times;

        $data['times'] = $times + 1;

        $this->db->where('permalink', $param);
        $this->db->update('story', $data);
    }

    // This function comments on a specific story by alumnus only
    function comment($param = '')
    {
        $data['content']    =     $this->input->post('comment');
        $data['status']     =     0;
        $data['alumnus_id'] =     $this->session->userdata('alumnus_id');
        $data['story_id']   =     $this->db->get_where('story', array(
            'permalink' => $param
        ))->row()->story_id;
        $data['timestamp']  = time();

        $this->session->set_flashdata('info', $this->lang->line('comment_review'));

        $this->db->insert('comment', $data);

        redirect(base_url() . 'story/' . $param, 'refresh');
    }

    // This function updates the RSVP of an event
    function update_rsvp($event_id = '', $rsvp = '', $alumnus_id = '')
    {
        $permalink  =   $this->db->get_where('event', array('event_id' => $event_id))->row()->permalink;

        $query      =   $this->db->get_where('rsvp', array('event_id' => $event_id, 'alumnus_id' => $alumnus_id));

        if ($query->num_rows() > 0) {
            $db_rsvp    =   $query->row()->rsvp;

            if ($db_rsvp != $rsvp) {
                if ($db_rsvp == 'yes' && $rsvp == 'no') {
                    $data['yes']    =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->yes - 1;
                    $data['no']     =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->no + 1;
                } elseif ($db_rsvp == 'yes' && $rsvp == 'maybe') {
                    $data['yes']    =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->yes - 1;
                    $data['maybe']  =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->maybe + 1;
                } elseif ($db_rsvp == 'no' && $rsvp == 'maybe') {
                    $data['no']     =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->no - 1;
                    $data['maybe']  =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->maybe + 1;
                } elseif ($db_rsvp == 'no' && $rsvp == 'yes') {
                    $data['no']     =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->no - 1;
                    $data['yes']    =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->yes + 1;
                } elseif ($db_rsvp == 'maybe' && $rsvp == 'yes') {
                    $data['maybe']  =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->maybe - 1;
                    $data['yes']    =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->yes + 1;
                } elseif ($db_rsvp == 'maybe' && $rsvp == 'no') {
                    $data['maybe']  =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->maybe - 1;
                    $data['no']     =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->no + 1;
                }

                $this->db->where('event_id', $event_id);
                $this->db->update('event_management', $data);

                $rsvp_data['rsvp']  =   $rsvp;

                $this->db->where('event_id', $event_id);
                $this->db->update('rsvp', $rsvp_data);
            }

            $this->session->set_flashdata('success', $this->lang->line('rsvp_success'));

            redirect(base_url() . 'event/' . $permalink, 'refresh');
        } else {
            $rsvp_data['alumnus_id']    =   $alumnus_id;
            $rsvp_data['event_id']      =   $event_id;
            $rsvp_data['rsvp']          =   $rsvp;
            $rsvp_data['timestamp']     =   time();

            $this->db->insert('rsvp', $rsvp_data);

            if ($rsvp == 'yes') {
                $data['yes']    =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->yes + 1;
            } elseif ($rsvp == 'maybe') {
                $data['maybe']  =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->maybe + 1;
            } elseif ($rsvp == 'no') {
                $data['no']     =   $this->db->get_where('event_management', array('event_id' => $event_id))->row()->no + 1;
            }

            $this->db->where('event_id', $event_id);
            $this->db->update('event_management', $data);

            $this->session->set_flashdata('success', $this->lang->line('rsvp_success'));

            redirect(base_url() . 'event/' . $permalink, 'refresh');
        }
    }

    // This function sends message to the admin panel from contact us page
    function contact_us_message()
    {
        $data['name']      = $this->input->post('name');
        $data['email']     = $this->input->post('email');
        $data['message']   = $this->input->post('message');
        $data['timestamp'] = time();

        $this->db->insert('contact_us_message', $data);

        $this->session->set_flashdata('info', $this->lang->line('message_received'));

        $this->email_crud->contact_email($this->lang->line('contact_us_email_subject') . ' ' . $this->db->get_where('about_us', array(
            'about_us_id' => 1
        ))->row()->title, 'contact', $data['email'], $this->input->post('message'), $data['name']);

        redirect(base_url() . 'contact_us', 'refresh');
    }

    // This function paginates the events in events page
    function paginate($page_name, $db_name, $per_page)
    {
        $config['base_url']      = base_url() . $page_name;
        $config['total_rows']    = $this->db->get($db_name)->num_rows();
        $config['per_page']      = $per_page;
        $config['uri_segment']   = 2;
        $config['cur_tag_open']  = '&nbsp;<a class="active" style="color: #FFF">';
        $config['cur_tag_close'] = '</a>';
        $config['num_links']     = round($config['total_rows'] / $config['per_page']);
        $config['next_link']     = $this->lang->line('next');
        $config['prev_link']     = $this->lang->line('previous');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $this->db->limit($config['per_page'], $page);
        $this->db->order_by('timestamp', 'desc');
        $events_info = $this->db->get($db_name);
        if ($events_info->num_rows() > 0) {
            foreach ($events_info->result_array() as $row) {
                $data[] = $row;
            }
            $page_data[$page_name] = $this->security->xss_clean($data);
        }

        $str_pages               = $this->pagination->create_links();
        $page_data['pages']      = explode('&nbsp;', $str_pages);
        $page_data['page_name']  = $page_name;
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function paginates the alumni in alumni page
    function paginate_alumni()
    {
        $config['base_url']      = base_url() . "alumni";
        $config['total_rows']    = $this->db->get_where('alumnus', array(
            'status' => 1
        ))->num_rows();
        $config['per_page']      = 4; // Number of alumnus showing per page
        $config['uri_segment']   = 2;
        $config['cur_tag_open']  = '&nbsp;<a class="active" style="color: #FFF">';
        $config['cur_tag_close'] = '</a>';
        $config['num_links']     = round($config['total_rows'] / $config['per_page']);
        $config['next_link']     = $this->lang->line('next');
        $config['prev_link']     = $this->lang->line('previous');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $this->db->limit($config['per_page'], $page);
        $this->db->order_by('timestamp', 'desc');
        $alumni_info = $this->db->get_where('alumnus', array(
            'status' => 1
        ));
        if ($alumni_info->num_rows() > 0) {
            foreach ($alumni_info->result_array() as $row) {
                $data[] = $row;
            }
            $page_data['alumni'] = $this->security->xss_clean($data);
        }

        $str_pages               = $this->pagination->create_links();
        $page_data['pages']      = explode('&nbsp;', $str_pages);
        $page_data['page_name']  = 'alumni';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function paginates the batchmates in batchmates page
    function paginate_batchmates()
    {
        $batch                   = $this->db->get_where('alumnus', array('alumnus_id' => $this->session->userdata('alumnus_id')))->row()->batch;

        $config['base_url']      = base_url() . "batchmates";
        $config['total_rows']    = $this->db->get_where('alumnus', array('batch' => $batch))->num_rows();
        $config['per_page']      = 4; // Number of batchmates showing per page
        $config['uri_segment']   = 2;
        $config['cur_tag_open']  = '&nbsp;<a class="active" style="color: #FFF">';
        $config['cur_tag_close'] = '</a>';
        $config['num_links']     = round($config['total_rows'] / $config['per_page']);
        $config['next_link']     = $this->lang->line('next');
        $config['prev_link']     = $this->lang->line('previous');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $this->db->limit($config['per_page'], $page);
        $this->db->order_by('timestamp', 'desc');
        $batchmates_info = $this->db->get_where('alumnus', array('batch' => $batch));
        if ($batchmates_info->num_rows() > 0) {
            foreach ($batchmates_info->result_array() as $row) {
                $data[] = $row;
            }
            $page_data['batchmates'] = $this->security->xss_clean($data);
        }

        $str_pages               = $this->pagination->create_links();
        $page_data['pages']      = explode('&nbsp;', $str_pages);
        $page_data['page_name']  = 'batchmates';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function paginates the deceased in deceased page
    function paginate_deceased()
    {
        $config['base_url']      = base_url() . "deceased";
        $config['total_rows']    = $this->db->get_where('alumnus', array('deceased' => 1))->num_rows();
        $config['per_page']      = 4; // Number of deceased showing per page
        $config['uri_segment']   = 2;
        $config['cur_tag_open']  = '&nbsp;<a class="active" style="color: #FFF">';
        $config['cur_tag_close'] = '</a>';
        $config['num_links']     = round($config['total_rows'] / $config['per_page']);
        $config['next_link']     = $this->lang->line('next');
        $config['prev_link']     = $this->lang->line('previous');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $this->db->limit($config['per_page'], $page);
        $this->db->order_by('timestamp', 'desc');
        $deceased_info = $this->db->get_where('alumnus', array('deceased' => 1));
        if ($deceased_info->num_rows() > 0) {
            foreach ($deceased_info->result_array() as $row) {
                $data[] = $row;
            }
            $page_data['deceased'] = $this->security->xss_clean($data);
        }

        $str_pages               = $this->pagination->create_links();
        $page_data['pages']      = explode('&nbsp;', $str_pages);
        $page_data['page_name']  = 'deceased';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    function search_alumni()
    {
        $batch = $this->input->post('batch');
        $name  = $this->input->post('name');

        if (!$batch && $name) {
            $this->db->like('name', $name);
            $page_data['alumni'] = $this->db->get('alumnus')->result_array();
        } elseif ($batch && !$name) {
            $this->db->like('batch', $batch);
            $page_data['alumni'] = $this->db->get('alumnus')->result_array();
        } elseif ($batch && $name) {
            $array = array(
                'batch' => $batch,
                'name' => $name
            );
            $this->db->like($array);
            $page_data['alumni'] = $this->db->get_where('alumnus', array(
                'batch' => $batch
            ))->result_array();
        }

        $page_data['page_name']  = 'search';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function paginates the volunteers in volunteers page
    function paginate_volunteers()
    {
        $config['base_url']      = base_url() . "volunteers";
        $config['total_rows']    = $this->db->get_where('volunteer', array(
            'status' => 1
        ))->num_rows();
        $config['per_page']      = 10; // Number of volunteer showing per page
        $config['uri_segment']   = 2;
        $config['cur_tag_open']  = '&nbsp;<a class="active" style="color: #FFF">';
        $config['cur_tag_close'] = '</a>';
        $config['num_links']     = round($config['total_rows'] / $config['per_page']);
        $config['next_link']     = $this->lang->line('next');
        $config['prev_link']     = $this->lang->line('previous');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $this->db->limit($config['per_page'], $page);
        $this->db->order_by('timestamp', 'desc');
        $volunteers_info = $this->db->get_where('volunteer', array(
            'status' => 1
        ));
        if ($volunteers_info->num_rows() > 0) {
            foreach ($volunteers_info->result_array() as $row) {
                $data[] = $row;
            }
            $page_data['volunteers'] = $this->security->xss_clean($data);
        }

        $str_pages               = $this->pagination->create_links();
        $page_data['pages']      = explode('&nbsp;', $str_pages);
        $page_data['page_name']  = 'volunteers';
        $page_data['body_class'] = 'page-sub-page';

        $this->load->view('alumni/index', $page_data);
    }

    // This function adds a new volunteer without reviewing of the admin
    function add_volunteer()
    {
        $volunteers = $this->db->get('volunteer')->result_array();
        foreach ($volunteers as $volunteer) {
            if ($volunteer['email'] == $this->input->post('email')) {
                $this->session->set_flashdata('warning', $this->input->post('email') . ' ' . $this->lang->line('email_already_in_use'));

                redirect(base_url() . 'volunteers', 'refresh');
            }
        }

        $data['name']          = $this->input->post('name');
        $data['email']         = $this->input->post('email');
        $data['batch']         = $this->input->post('batch');
        $data['profession_id'] = $this->input->post('profession_id');
        $data['status']        = 0;
        $data['step']          = 1;
        $data['timestamp']     = time();

        $this->db->insert('volunteer', $data);

        $this->session->set_flashdata('info', $this->lang->line('volunteer_confirmation'));

        redirect(base_url() . 'volunteers', 'refresh');
    }

    // This function edits volunteer
    function edit_volunteer($param = '')
    {
        $db_email       =   $this->db->get_where('volunteer', array('volunteer_id' => $param))->row()->email;

        if ($db_email != $this->input->post('email')) {
            $volunteers =   $this->db->get('volunteer')->result_array();
            foreach ($volunteers as $volunteer) {
                if ($volunteer['email'] == $this->input->post('email')) {
                    $this->session->set_flashdata('warning', $this->input->post('email') . ' ' . $this->lang->line('email_already_in_use'));

                    redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                        'volunteer_id' => $this->session->userdata('volunteer_id')
                    ))->row()->username, 'refresh');
                }
            }
        }

        $data['name']          = $this->input->post('name');
        $data['email']         = $this->input->post('email');
        $data['batch']         = $this->input->post('batch');
        $data['mobile']        = $this->input->post('mobile');
        $data['profession_id'] = $this->input->post('profession_id');
        $data['step']          = 2;

        $this->db->where('volunteer_id', $param);
        $this->db->update('volunteer', $data);

        $this->session->set_userdata('step', 2);

        $this->session->set_flashdata('success', $this->lang->line('frt_volunteer_updated'));

        redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
            'volunteer_id' => $this->session->userdata('volunteer_id')
        ))->row()->username, 'refresh');
    }

    // This function updates volunteer password
    function update_volunteer_password($param = '')
    {
        $current_password    = $this->input->post('current_password');
        $new_password        = $this->input->post('new_password');
        $repeat_new_password = $this->input->post('repeat_new_password');
        $db_password         = $this->db->get_where('volunteer', array('volunteer_id' => $this->session->userdata('volunteer_id')))->row()->password;

        if (password_verify($current_password, $db_password)) {
            if ($new_password == $repeat_new_password) {
                $data['password'] = password_hash($new_password, PASSWORD_DEFAULT);

                $this->db->where('volunteer_id', $param);
                $this->db->update('volunteer', $data);

                $this->session->set_flashdata('success', $this->lang->line('volunteer_pwd'));

                redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                    'volunteer_id' => $this->session->userdata('volunteer_id')
                ))->row()->username, 'refresh');
            } else {
                $this->session->set_flashdata('warning', $this->lang->line('volunteer_pwd_match1'));

                redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                    'volunteer_id' => $this->session->userdata('volunteer_id')
                ))->row()->username, 'refresh');
            }
        } else {
            $this->session->set_flashdata('warning', $this->lang->line('volunteer_pwd_match2'));

            redirect(base_url() . 'volunteer/' . $this->db->get_where('volunteer', array(
                'volunteer_id' => $this->session->userdata('volunteer_id')
            ))->row()->username, 'refresh');
        }
    }

    // This function adds a new alumnus without reviewing of the admin
    function add_alumnus()
    {
        $alumni = $this->db->get('alumnus')->result_array();
        foreach ($alumni as $alumnus) {
            if ($alumnus['email'] == $this->input->post('email')) {
                $this->session->set_flashdata('warning', $this->input->post('email') . ' ' . $this->lang->line('email_already_in_use'));

                redirect(base_url() . 'login', 'refresh');
            }
        }

        $data['name']          = $this->input->post('name');
        $data['batch']         = $this->input->post('batch');
        $data['email']         = $this->input->post('email');
        $data['mobile_number'] = $this->input->post('mobile_number');
        $data['profession_id'] = $this->input->post('profession_id');
        $data['linkedin']      = $this->input->post('linkedin');
        $data['status']        = 0;
        $data['step']          = 1;
        $data['timestamp']     = time();

        $this->db->insert('alumnus', $data);

        $this->session->set_flashdata('info', $this->lang->line('alumnus_confirmation'));

        redirect(base_url() . 'login', 'refresh');
    }

    // This function changes alumnus profile image
    function change_alumnus_image($param = '')
    {
        $ext = pathinfo($_FILES['image_link']['name'], PATHINFO_EXTENSION);

        if ($ext == 'jpeg' || $ext == 'jpg' || $ext == 'png' || $ext == 'JPEG' || $ext == 'JPG' || $ext == 'PNG') {
            $image_link = $this->db->get_where('alumnus', array(
                'alumnus_id' => $param
            ))->row()->image_link;
            if (isset($image_link))
                unlink('uploads/alumni/' . $image_link);

            $data['image_link'] = $_FILES['image_link']['name'];

            $this->db->where('alumnus_id', $param);
            $this->db->update('alumnus', $data);

            move_uploaded_file($_FILES['image_link']['tmp_name'], 'uploads/alumni/' . $data['image_link']);

            $this->load->library('image_lib');

            $img_cfg['image_library']  = 'gd2';
            $img_cfg['source_image']   = './uploads/alumni/' . $data['image_link'];
            $img_cfg['maintain_ratio'] = FALSE;
            $img_cfg['create_thumb']   = FALSE;
            $img_cfg['new_image']      = './uploads/alumni/' . $data['image_link'];
            $img_cfg['width']          = 160;
            $img_cfg['height']         = 160;
            $img_cfg['quality']        = 100;

            $this->image_lib->clear();
            $this->image_lib->initialize($img_cfg);
            $this->image_lib->resize();

            $this->session->set_flashdata('success', $this->lang->line('image_updated'));

            redirect(base_url() . 'alumnus/' . $param, 'refresh');
        } else {
            $this->session->set_flashdata('warning', $this->lang->line('image_not_updated'));

            redirect(base_url() . 'alumnus/' . $param, 'refresh');
        }
    }

    // This function updates alumnus profile
    function edit_alumnus($param = '')
    {
        $db_email       =   $this->db->get_where('alumnus', array('alumnus_id' => $param))->row()->email;

        if ($db_email != $this->input->post('email')) {
            $alumni     =   $this->db->get('alumnus')->result_array();
            foreach ($alumni as $alumnus) {
                if ($alumnus['email'] == $this->input->post('email')) {
                    $this->session->set_flashdata('warning', $this->input->post('email') . ' ' . $this->lang->line('email_already_in_use'));

                    redirect(base_url() . 'edit_alumnus', 'refresh');
                }
            }
        }

        $data['name']          = $this->input->post('name');
        $data['email']         = $this->input->post('email');
        $data['mobile_number'] = $this->input->post('mobile_number');
        $data['location_id']   = $this->input->post('location_id');
        $data['website']       = $this->input->post('website');
        $data['dob']           = strtotime($this->input->post('dob'));
        $data['batch']         = $this->input->post('batch');
        $data['position']      = $this->input->post('position');
        $data['profession_id'] = $this->input->post('profession_id');
        $data['short_bio']     = $this->input->post('short_bio');
        $data['blood_group']   = $this->input->post('blood_group');
        $data['facebook']      = $this->input->post('facebook');
        $data['twitter']       = $this->input->post('twitter');
        $data['linkedin']      = $this->input->post('linkedin');
        $data['youtube']       = $this->input->post('youtube');
        $data['step']          = 2;

        $this->db->where('alumnus_id', $param);
        $this->db->update('alumnus', $data);

        $this->session->set_userdata('step', 2);

        $this->session->set_flashdata('success', $this->lang->line('frt_alumnus_updated'));

        redirect(base_url() . 'edit_alumnus', 'refresh');
    }

    // This function updates alumnus password
    function update_alumnus_password($param = '')
    {
        $current_password    = $this->input->post('current_password', TRUE);
        $new_password        = $this->input->post('new_password', TRUE);
        $repeat_new_password = $this->input->post('repeat_new_password', TRUE);
        $db_password         = $this->db->get_where('alumnus', array('alumnus_id' => $this->session->userdata('alumnus_id')))->row()->password;

        if (password_verify($current_password, $db_password)) {
            if ($new_password == $repeat_new_password) {
                $data['password'] = password_hash($new_password, PASSWORD_DEFAULT);

                $this->db->where('alumnus_id', $param);
                $this->db->update('alumnus', $data);

                $this->session->set_flashdata('success', $this->lang->line('alumnus_pwd'));

                redirect(base_url() . 'edit_alumnus', 'refresh');
            } else {
                $this->session->set_flashdata('warning', $this->lang->line('volunteer_pwd_match1'));

                redirect(base_url() . 'edit_alumnus', 'refresh');
            }
        } else {
            $this->session->set_flashdata('warning', $this->lang->line('volunteer_pwd_match2'));

            redirect(base_url() . 'edit_alumnus', 'refresh');
        }
    }

    function update_alumnus_miscellaneous_public($param = '')
    {
        $data['public']             =   $this->input->post('public', TRUE);

        $this->db->where('alumnus_id', $param);
        $this->db->update('alumnus', $data);

        $this->session->set_flashdata('success', $this->lang->line('frt_alumnus_updated'));

        redirect(base_url() . 'edit_alumnus', 'refresh');
    }

    function update_alumnus_miscellaneous_permissions($param = '')
    {        
        $data['person_id']          =   $this->session->userdata('alumnus_id');
        $data['user_type']          =   'alumnus';
        $data['module']             =   $this->lang->line('story');
        $data['status']             =   $this->input->post('story_permission', TRUE);
        $data['timestamp']          =   time();

        $this->db->insert('permission_request', $data);

        $this->session->set_flashdata('success', $this->lang->line('story_permission_request_successful'));

        redirect(base_url() . 'edit_alumnus', 'refresh');
    }
}
