<script type="text/javascript">
	function showAjaxModal(url) {
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
		<div class="modal-content">
			<div class="modal-body" style="overflow:hidden;"></div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function confirm_modal(delete_url) {
		jQuery('#modal_delete').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link').setAttribute('href' , delete_url);
	}
</script>

<!-- Delete modal -->
<div class="modal fade" id="modal_delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?php echo $this->lang->line('modal_delete_title'); ?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-danger" id="delete_link"><?php echo $this->lang->line('delete'); ?></a>
				<a href="javascript:;" class="btn btn-info" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function confirm_finish_modal(finish_url) {
		jQuery('#modal_finish').modal('show', {backdrop: 'static'});
		document.getElementById('finish_link').setAttribute('href' , finish_url);
	}
</script>

<!-- Delete modal -->
<div class="modal fade" id="modal_finish">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?php echo $this->lang->line('modal_upload_title'); ?>?</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-danger" id="finish_link"><?php echo $this->lang->line('finished'); ?></a>
				<a href="javascript:;" class="btn btn-info" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></a>
			</div>
		</div>
	</div>
</div>
