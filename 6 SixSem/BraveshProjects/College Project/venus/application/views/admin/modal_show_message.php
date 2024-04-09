<p style="font-size: 13px">
	<?php echo $this->security->xss_clean($this->db->get_where('contact_us_message', array('contact_us_message_id' => $param2) )->row()->message); ?>
</p>
