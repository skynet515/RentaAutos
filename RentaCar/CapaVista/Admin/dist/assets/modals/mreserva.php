<style type="text/css">
	#color {
		background-color: #594d99;
		color: white;
	}
</style>

<!-- Modal -->
<div class="modal fade" id="mdres" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div id="color" class="modal-header">
				<h4 class="modal-title">Modificar Reserva</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>

			</div>
			<div class="modal-body">


				<div class="card-box">
					<form action="#" method="post" class="parsley-examples">
						<u>
							<h4 class="header-title mb-3">Inicio de reserva</h4>
						</u>
						<div class="form-group">
							<label for="date">Fecha:<span class="text-danger">*</span></label>
							<input class="form-control" type="date" id="date" required name="date" id="date">
						</div>

						<div class="form-group">
							<label for="time">Hora:<span class="text-danger">*</span></label>
							<input required value="15:29" class="form-control" type="time" id="time" name="time">
						</div>

						<div class="form-group">
							<label for="dir">Dirección:<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="dir" required placeholder="1234 Main St">
						</div>
						</br>
						<u>
							<h4 class="header-title mb-3">Fin de reserva</h4>
						</u>
						<div class="form-group">
							<label for="date">Fecha:<span class="text-danger">*</span></label>
							<input class="form-control" type="date" id="date" required name="date" id="date">
						</div>

						<div class="form-group">
							<label for="time">Hora:<span class="text-danger">*</span></label>
							<input required value="15:29" class="form-control" type="time" id="time" name="time">
						</div>

						<div class="form-group">
							<label for="dir">Dirección:<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="dir" required placeholder="1234 Main St">
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