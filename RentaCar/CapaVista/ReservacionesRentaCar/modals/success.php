<script>
	$(document).ready(function() {
		// Show the Modal on load
		$("#ModalSuccess").modal("show");
	});
</script>

<style type="text/css">
	.modal-header {
		background-color: #5cb85c;
		color: white;
	}
</style>
<div class="container">

	<!-- The Modal -->
	<div class="modal fade" id="ModalSuccess">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">¡Reserva Exitosa!</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					Gracias por preferirnos, su reserva está registrada;
					pronto nos prondemos en contacto con usted.
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
				</div>

			</div>
		</div>
	</div>

</div>