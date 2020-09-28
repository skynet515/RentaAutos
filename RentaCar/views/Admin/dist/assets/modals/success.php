<style type="text/css">
	.modal-header {
		background-color: #5cb85c;
	}
</style>

<div class="container">
	<!-- The Modal -->
	<div class="modal fade" id="ModalSuccess">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Mensaje de confirmación.</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<h4>Solicitud realizada con éxito</h4>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" onclick="javascript:window.location.reload();" data-dismiss=" modal">Cerrar</button>
				</div>

			</div>
		</div>
	</div>

</div>
<script>
	$(document).ready(function() {
		// Show the Modal on load
		$("#ModalSuccess").modal("toggle");
	});
</script>