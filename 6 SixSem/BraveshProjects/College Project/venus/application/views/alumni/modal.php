<script type="text/javascript">
	
	function showAjaxModal(url)
	{
		// Showing ajax perloader image
		//jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="assets/images/preloader.gif" /></div>');

		// Loading the ajax modal
		jQuery('#modal_ajax').modal('show', {backdrop: 'true'});

		//Show ajax response on request success
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#modal_ajax .modal-body').html(response);
			}
		});
	}

</script>

<!-- Ajax modal -->
<div class="modal fade" id="modal_ajax">
	<div class="modal-dialog">
		<div class="modal-content" style="margin-top: 22%;">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" align="center"><?php echo $this->db->get_where('setting', array('setting_id' => 1))->row()->content; ?></h4>
			</div>

			<div class="modal-body" style="height:420px; overflow:auto;">
				
			</div>

		</div>
	</div>
</div>


<script type="text/javascript">
	
	function confirm_modal(delete_url)
	{
		jQuery('#modal_delete').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link').setAttribute('href' , delete_url);
	} 

</script>

<!-- Delete modal -->
<div class="modal fade" id="modal_delete">
	<div class="modal-dialog">
		<div class="modal-content" style="margin-top: 222px;">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h4 class="modal-title" style="text-align:center;"><?php echo $this->lang->line('modal_delete_title'); ?>?</h4>
			</div>

			<div class="modal-footer" style="margin:0px; bordet-top:0px; text-align:center;">
				<a href="#" class="btn btn-danger" id="delete_link"><?php echo $this->lang->line('delete'); ?></a>
				<button type="button" class="btn btn-success" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
			</div>
			
		</div>
	</div>
</div>


<script type="text/javascript">
	
	function confirm_finish_modal(finish_url)
	{
		jQuery('#modal_finish').modal('show', {backdrop: 'static'});
		document.getElementById('finish_link').setAttribute('href' , finish_url);
	} 

</script>

<!-- Delete modal -->
<div class="modal fade" id="modal_finish">
	<div class="modal-dialog">
		<div class="modal-content" style="margin-top: 222px;">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h4 class="modal-title" style="text-align:center;"><?php echo $this->lang->line('modal_upload_title'); ?>?</h4>
			</div>

			<div class="modal-footer" style="margin:0px; bordet-top:0px; text-align:center;">
				<a href="#" class="btn btn-primary" id="finish_link"><?php echo $this->lang->line('finished'); ?></a>
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
			</div>
			
		</div>
	</div>
</div>