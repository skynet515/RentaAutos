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
					<form action="#" method="POST" class="parsley-examples">
						<div class="form-group">
							<label for="userName">Nombre Cliente<span class="text-danger">*</span></label>
							<input type="text" name="nombre" value="<?= $data['nombre']; ?>" parsley-trigger="change" minlength="5" required="" placeholder="Ingrese nombre completo" class="form-control" id="userName">
						</div>

						<div class="form-group">
							<label for="emailAddress">Correo Electrónico<span class="text-danger">*</span></label>
							<input type="email" name="correo" value="<?= $data['correo']; ?>" parsley-trigger="change" required="" placeholder="Ingrese email" class="form-control" id="emailAddress">
						</div>


						<div class="form-group">
							<label>Teléfono</label>
							<input type="text" name="tel" onkeypress="return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 43)" value="<?= $data['tel']; ?>" class="form-control" data-toggle="input-mask" placeholder="Ingrese un número celular" data-mask-format="+000 0000-0000" minlength="5" maxlength="14">


						</div>

						<div class="form-group">
							<label for="userCountry">País<span class="text-danger">*</span></label>
							<input type="text" name="pais" value="<?= $data['pais']; ?>" parsley-trigger="change" required="" minlength="4" placeholder="Ingrese un pais" class="form-control" id="userCountry">
						</div>

						<div class="form-group text-right mb-0">
							<button type="submit" name="mclien" class="btn btn-primary waves-effect waves-light mr-1">Modificar</button> <?php $req = $reserva->nclien($data['idcliente']); ?>
						</div>

					</form>
				</div> <!-- end card-box -->

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>