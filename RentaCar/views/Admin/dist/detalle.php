<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Detalle de Reserva</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Summernote css -->
	<link href="assets/libs/summernote/summernote-bs4.css" rel="stylesheet" />

	<!-- Validation js (Parsleyjs) -->
	<script src="assets/libs/parsleyjs/parsley.min.js"></script>

	<!-- validation init -->
	<script src="assets/js/pages/form-validation.init.js"></script>

	<!-- App css -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<?PHP include('menu.php');
?>

<?php
error_reporting(0);


$idr = $_GET['id'];
//$idr = 4;
if (!is_numeric($idr)) {
?>
	<script>
		window.location.replace('historial.php');
	</script>
	<?php
} else {
	include('../../../CapaNegocios/Nactivaraut.php');

	$auto = new NactivarAut();

	$data = $auto->detalleReacAuto($idr);
	$img = $auto->listarimages($idr);

	if ($data != null) {
	?>


		<!-- End Sidebar -->

		<div class="clearfix"></div>

		</div>
		<!-- Sidebar -left -->
		</div>

		<!-- Left Sidebar End -->

		<!-- ============================================================== -->
		<!-- Start Page Content here -->
		<!-- ============================================================== -->

		<div class="content-page">
			<div class="content">

				<!-- Start Content-->
				<div class="container-fluid">

					<!-- start page title -->
					<div class="row">
						<div class="col-12">
							<div class="page-title-box">
								<div class="page-title-right">

								</div>
								<h4 class="page-title">Reactivar Automovil</h4>
							</div>
						</div>
					</div>
					<!-- end page title -->

					<!-- Right Sidebar -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card-box">

								<div class="inbox-bar">
									<div class="mt-2">
										<h3><?= $data['marca'] . " " . $data['modelo'] . "."; ?></h3>

										<hr />


										<!------------------------------------------>

										<div class="card-group">
											<div class="card">
												<?php
												foreach ($img as $list => $lista) {
													$listImg[$list] = $lista['img'];
												}
												?>
												<img class="card-img-top img-fluid" src="assets/images/small/<?= $listImg[0] ?>" alt="Card image cap">
												<div class="card-body">
													<h3 class="card-title">Detalle Automovil</h3>
													<h4>Modelo:</h4>
													<p class="card-text"><?= $data['modelo']; ?></p>
													<h4>Marca:</h4>
													<p class="card-text"><?= $data['marca']; ?></p>
													<h4>Color:</h4>
													<p class="card-text"><?= $data['color']; ?></p>
													<h4>Matricula:</h4>
													<p class="card-text"><?= $data['matricula']; ?></p>
													<h4>Precio:</h4>
													<p class="card-text"><?= $data['precio']; ?></p>

												</div>
											</div>

											<div class="card">
												<img class="card-img-top img-fluid" src="assets/images/small/<?= $listImg[1] ?>" alt="Card image cap">
												<div class="card-body">

													<h4>Transmisión:</h4>
													<p class="card-text"><?= $data['transmision']; ?></p>
													<h4>Año:</h4>
													<p class="card-text"><?= $data['anio']; ?></p>
													<h4>Capacidad:</h4>
													<p class="card-text"><?= $data['capacidad']; ?></p>
													<h4>Cantidad de puertas:</h4>
													<p class="card-text"><?= $data['cant_puertas']; ?></p>
													<h4>Cantidad Asientos:</h4>
													<p class="card-text"><?= $data['cant_asientos']; ?></p>
												</div>


											</div> <!-- end card-group-->
										</div> <!-- end col-->
									</div>
									<!-- end row -->
									<form action="#" method="post">
										</br>
								</div>

								<br>

								<?php
								if ($data['estado'] == '0') {
								?>
									<!-- BUTTON CONFIRMAR-->
									<div class="button-list">
										<button type="submit" name="conf" class="btn btn-primary btn-block waves-effect waves-light width-lg"><b>Activar Auto.</b></button>
										<?php $req = $auto->ActivarAuto($data['idautos']); ?>
									</div>
								<?php

								}

								?>
								<!------------------------------------------>
								</form>


							</div> <!-- card-box -->

							<div class="clearfix"></div>
						</div>

					</div> <!-- end Col -->

				</div><!-- End row -->

			</div> <!-- container-fluid -->

		</div> <!-- content -->

		<!-- Footer Start -->
		<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
						2020 &copy; Cabezas RentaCar <a href=""></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- end Footer -->

		</div>

		<!-- ============================================================== -->
		<!-- End Page content -->
		<!-- ============================================================== -->


		</div>
		<!-- END wrapper -->

		<!-- Right Sidebar -->
		<div class="right-bar">
			<div class="rightbar-title">
				<a href="javascript:void(0);" class="right-bar-toggle float-right">
					<i class="mdi mdi-close"></i>
				</a>
				<h5 class="m-0 text-white">Settings</h5>
			</div>
			<div class="slimscroll-menu">
				<!-- User box -->
				<div class="user-box">
					<div class="user-img">
						<img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
						<a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
					</div>

					<h5><a href="javascript: void(0);">Agnes Kennedy</a> </h5>
					<p class="text-muted mb-0"><small>Admin Head</small></p>
				</div>

				<!-- Settings -->
				<hr class="mt-0" />
				<h5 class="pl-3">Basic Settings</h5>
				<hr class="mb-0" />


				<div class="p-3">
					<div class="checkbox checkbox-primary mb-2">
						<input id="checkbox1" type="checkbox" checked>
						<label for="checkbox1">
							Notifications
						</label>
					</div>
					<div class="checkbox checkbox-primary mb-2">
						<input id="checkbox2" type="checkbox" checked>
						<label for="checkbox2">
							API Access
						</label>
					</div>
					<div class="checkbox checkbox-primary mb-2">
						<input id="checkbox3" type="checkbox">
						<label for="checkbox3">
							Auto Updates
						</label>
					</div>
					<div class="checkbox checkbox-primary mb-2">
						<input id="checkbox4" type="checkbox" checked>
						<label for="checkbox4">
							Online Status
						</label>
					</div>
					<div class="checkbox checkbox-primary mb-0">
						<input id="checkbox5" type="checkbox" checked>
						<label for="checkbox5">
							Auto Payout
						</label>
					</div>
				</div>


			</div> <!-- end slimscroll-menu-->
		</div>
		<!-- /Right-bar -->

		<!-- Right bar overlay-->
		<div class="rightbar-overlay"></div>

		<!-- Vendor js -->
		<script src="assets/js/vendor.min.js"></script>

		<!-- Validation js (Parsleyjs) -->
		<script src="assets/libs/parsleyjs/parsley.min.js"></script>

		<!-- validation init -->
		<script src="assets/js/pages/form-validation.init.js"></script>

		<!--Summernote js-->
		<script src="assets/libs/summernote/summernote-bs4.min.js"></script>

		<!-- App js -->
		<script src="assets/js/app.min.js"></script>


		<script>
			jQuery(document).ready(function() {
				$('.summernote').summernote({
					height: 180, // set editor height
					minHeight: null, // set minimum height of editor
					maxHeight: null, // set maximum height of editor
					focus: false // set focus to editable area after initializing summernote
				});
			});
		</script>
		<script>
			$(document).ready(function() {
				$("#can").click(function() {
					$("#ModalWarning").modal('show');
				});
			});
		</script>

		</body>

</html>
<?php } else {
?>
	<script>
		window.location.replace('historial.php');
	</script>
<?php
	}
} ?>