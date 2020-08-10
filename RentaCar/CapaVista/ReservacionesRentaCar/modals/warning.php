<script>
	$(document).ready(function() {
		// Show the Modal on load
		$("#ModalWarning").modal("show");
	});
</script>


<style type="text/css">
	.modal-header {
		background-color: #e0a800;
		color: black;
	}
</style>

<div class="container">

	<!-- The Modal -->
	<div class="modal fade" id="ModalWarning">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">¡Error de Reserva!</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					Completa todos los campos del formulario con valores válidos.
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
				</div>

			</div>
		</div>
	</div>

</div>