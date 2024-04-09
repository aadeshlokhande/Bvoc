<ul class="registered-users-list clearfix">
	<?php
		$album_info = $this->security->xss_clean($this->db->get_where('gallery', array('album_id' => $param2))->result_array());
		foreach ($album_info as $gallery):
	?>
	<li>
        <img src="<?php echo base_url(); ?>uploads/gallery/<?php echo 'thumb_' . $gallery['image_link']; ?>" alt="" />
    </li>
	<?php endforeach ;?>
</ul>

<script>
	$(document).ready(function() {
		App.init();
		Gallery.init();
	});
</script>
