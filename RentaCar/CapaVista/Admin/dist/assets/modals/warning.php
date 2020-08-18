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
					<h4 class="modal-title">¡Confirmar!</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<h4>¿Está seguro que desea cancelar esta reserva?</h4>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<form action="#" method="post">
						<button type="submit" name="cancel" class="btn">Confirmar</button>
						<?php $req = $reserva->nconf($data['idreserva']); ?>
						<button type="submit" class="btn" data-dismiss="modal">Cancelar</button>
					</form>
				</div>

			</div>
		</div>
	</div>

</div>