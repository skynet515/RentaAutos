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

	<!-- App css -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<?PHP include('menu.php');
//include('assets/modals/mcliente.php');
//include('assets/modals/mreserva.php');
?>

<?php
//error_reporting(0);
include_once('../../../CapaNegocios/Naccount.php');
$account = new Naccount();
$data = $account->selectAdmin();

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
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">Administrador</a></li>
								<li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
								<li class="breadcrumb-item active">Email Read</li>
							</ol>
						</div>
						<h4 class="page-title">Email Read</h4>
					</div>
				</div>
			</div>
			<!-- end page title -->

			<!-- Right Sidebar -->
			<div class="row">
				<div class="col-lg-12">
					<div class="card-box">
						<h4 class="header-title">Información del Administrador</h4>
						<p class="sub-header"></p>

						<form action="#" class="parsley-examples" method="POST" novalidate="">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="nombre">Nombre<span class="text-danger">*</span></label>
									<input type="text" name="nombre" value='<?= $data['nombre'] ?>' readonly parsley-trigger="change" required="" placeholder="Ingrese nombre" class="form-control" id="nombre">
								</div>
								<div class="form-group col-md-6">
									<label for="apellido">Apellido<span class="text-danger">*</span></label>
									<input type="text" name="apellido" value='<?= $data['apellido'] ?>' readonly parsley-trigger="change" required="" placeholder="Ingrese apellido" class="form-control" id="apellido">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="direc">Dirección<span class="text-danger">*</span></label>
									<input type="text" name="dir" class="form-control" value='<?= $data['direccion'] ?>' id="inputAddress" placeholder="1234 Main St" required>
								</div>
								<div class="form-group col-md-6">
									<label for="apellido">Teléfono<span class="text-danger">*</span></label>
									<input type="tel" name="tel" value='<?= $data['telefono'] ?>' class="form-control" data-toggle="input-mask" maxlength="9" required>

								</div>
							</div>
							<div class="form-group">
								<label for="DUI">DUI<span class="text-danger"> Guión*</span></label>
								<input type="text" name="dui" minlength="9" value='<?= $data['dui'] ?>' class="form-control" readonly data-toggle="input-mask" data-mask-format="0000000-0" maxlength="10" required>

								<p class="sub-header"></p>
								<h4 class="header-title">Datos de la Cuenta.</h4>
								<p class="sub-header"></p>
							</div>
							<div class="form-group">
								<label for="emailAddress">Correo Electrónico<span class="text-danger">*</span></label>
								<input type="email" name="correo" minlength="15" name="email" value='<?= $data['correo'] ?>' parsley-trigger="change" required="" readonly placeholder="Enter email" class="form-control" id="emailAddress">
							</div>

							<div class="form-group">
								<label for="actual">Contraseña Actual<span class="text-danger">*</span></label>
								<input id="actual" name="passwold" minlength="8" type="password" placeholder="Password" required="" class="form-control">
							</div>
							<div class="form-group">
								<label for="pass1">Nueva Contraseña<span class="text-danger">*</span></label>
								<input id="pass1" name="passnew" type="password" minlength="8" placeholder="Password" required="" class="form-control">
							</div>
							<div class="form-group">
								<label for="passWord2">Confirmar Contraseña <span class="text-danger">*</span></label>
								<input data-parsley-equalto="#pass1" name="passnew1" type="password" required="" placeholder="Password" class="form-control" id="passWord2">
							</div>

							<div class="form-group text-right mb-0">
								<button name="mod" class="btn btn-primary waves-effect waves-light mr-1" type="submit">
									Modificar datos
								</button>
								<?php $req = $account->updateAdmin(); ?>
							</div>
						</form>
					</div>




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

<!-- Mask input -->
<script src="assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
<!-- Init js-->
<script src="assets/js/pages/form-advanced.init.js"></script>
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