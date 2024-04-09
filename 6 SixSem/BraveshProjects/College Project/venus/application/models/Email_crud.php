<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email_crud extends CI_Model
{
    
    function contact_email($subject, $page_name, $from, $message, $name)
    {
        $data['title']          = $this->db->get_where('setting', array('setting_id' => 1))->row()->content;
        $data['message']        = $message;
        $data['url']            = base_url();
        $data['copyright']      = $this->db->get_where('setting', array('setting_id' => 3))->row()->content;
        
        $body = $this->load->view('email/' . $page_name, $data, TRUE);

        $config['smtp_user']    =     $this->db->get_where('setting', array('setting_id' => 13))->row()->content;
        $config['smtp_pass']    =     $this->db->get_where('setting', array('setting_id' => 14))->row()->content;

        $this->email->initialize($config);
        
        $this->email->from($from, $name)->reply_to($from)->to($this->db->get_where('contact_us_settings', array('contact_us_settings_id' => '1'))->row()->email)->subject($subject)->message($body)->send();
    }
    
    function send_email($subject, $page_name, $to, $message, $name)
    {
        $data['title']          = $this->db->get_where('setting', array('setting_id' => 1))->row()->content;
        $data['name']           = $name;
        $data['message']        = $message;
        $data['url']            = base_url();
        $data['copyright']      = $this->db->get_where('setting', array('setting_id' => 3))->row()->content;
        
        $body = $this->load->view('email/' . $page_name, $data, TRUE);

        $config['smtp_user']    =     $this->db->get_where('setting', array('setting_id' => 13))->row()->content;
        $config['smtp_pass']    =     $this->db->get_where('setting', array('setting_id' => 14))->row()->content;

        $this->email->initialize($config);
        
        $this->email->from($this->db->get_where('contact_us_settings', array('contact_us_settings_id' => '1'))->row()->email, $this->db->get_where('about_us', array('about_us_id' => 1))->row()->title)->reply_to($this->db->get_where('contact_us_settings', array('contact_us_settings_id' => '1'))->row()->email)->to($to)->subject($subject)->message($body)->send();
    }
}
