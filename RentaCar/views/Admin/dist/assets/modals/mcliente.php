<style type="text/css">
	#color {
		background-color: #594d99;
		color: white;
	}
</style>

<!-- Modal -->
<div class="modal fade" id="mdcliente" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div id="color" class="modal-header">
				<h4 class="modal-title">Modificar Cliente</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>

			</div>
			<div class="modal-body">


				<div class="card-box">
					<form action="#" method="post" class="parsley-examples">

						<div class="form-group">
							<label for="Name">Nombre cliente<span class="text-danger">*</span></label>
							<input type="text" value="<?= $data['nombre']; ?>" name="nombre" parsley-trigger="change" required placeholder="Ingrese un nombre" class="form-control" id="Name">
						</div>


						<div class="form-group">
							<label for="emailAddress">Correo Electrónico<span class="text-danger">*</span></label>
							<input type="email" name="correo" value="<?= $data['correo']; ?>" parsley-trigger="change" required placeholder="ingrese un correo" class="form-control" id="emailAddress">
						</div>

						<div class="form-group">

							<div>
								<label for="tel">Teléfono<span class="text-danger">*</span></label>
								<input data-parsley-type="tel" value="<?= $data['tel']; ?>" parsley-trigger="change" name="tel" type="tel" class="form-control" required placeholder="Ingrese un número de teléfono." id="tel" />
							</div>
						</div>
						<div class="form-group">
							<label for="userCountry">País<span class="text-danger">*</span></label>
							<input type="text" name="pais" value="<?= $data['pais']; ?>" parsley-trigger="change" required placeholder="Ingrese un pais" class="form-control" id="userCountry">
						</div>

						<div class="form-group text-right mb-0">
							<button id='mc' name="mclien" class="btn btn-primary waves-effect waves-light mr-1" type="submit">Modificar</button>
							<?php $req = $reserva->nclien($data['idcliente']); ?>
					</form>
				</div>

			</div> <!-- end card-box -->

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

</div>
</div>