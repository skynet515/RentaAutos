<script>
	$(document).ready(function() {
		// Show the Modal on load
		$("#ModalError").modal("show");
	});
</script>

<style type="text/css">
	.modal-header {
		background-color: #dc3545;
		color: white;
	}
</style>

<div class="container">

	<!-- The Modal -->
	<div class="modal fade" id="ModalError">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">¡Error de Reserva!</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					Hemos tenido problemas con tu reserva. Por favor, intentalo nuevamente.
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>

			</div>
		</div>
	</div>

</div>