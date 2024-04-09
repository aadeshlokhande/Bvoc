<p style="font-size: 13px">
	<?php echo $this->security->xss_clean($this->db->get_where('job', array('job_id' => $param2) )->row()->description); ?>
</p>
