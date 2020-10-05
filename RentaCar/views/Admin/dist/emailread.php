        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8" />
            <title>Administración RC</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta content="Administración Cabezas-RentaCar" name="description" />
            <meta content="RentaCar" name="Cabezas-RentaCar" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/users/use.png">

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
        include('../../../CapaNegocios/Nreadmail.php');

        $reserva = new Nreadmail();
        $idr = $_GET['id'];
        //$idr = 4;
        if (!is_numeric($idr)) {
        ?>
            <script>
                window.location.replace('email-inbox.php');
            </script>
            <?php
        } else {
            $data = $reserva->ndetalle($idr);
            $img = $reserva->listarimages($data['idautos'], $data['idrentacar']);
            if ($data != null) {

                date_default_timezone_set("America/El_Salvador");

                if (date('d-m-Y') == $data['$f']) {
                    $val = $data['$h'];
                } else {
                    $val = $data['$f'] . "  " . $data['$h'];
                }

                include('assets/modals/mcliente.php');
                include('assets/modals/mreserva.php');



                // asignacion de imagenes en caso sea del otro rentacar

                if ($data['idrentacar'] == 1) {
                    foreach ($img as $list => $lista) {
                        $listImg[$list] = $lista['img'];
                    }
                } else {

                    for ($x = 0; $x < 3; $x++) {
                        foreach ($img as $list => $lista) {
                            $listImg[$x] = $lista['img'];
                        }
                    }
                }

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
                                        <h4 class="page-title">Reservación Sin Confirmar</h4>
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
                                                <h4>Reserva Auto: <?= $data['marca'] . " " . $data['modelo'] . "."; ?></h4>

                                                <hr />

                                                <div class="media mb-4 mt-1">
                                                    <img class="d-flex mr-3 rounded-circle avatar-sm" src="assets/images/users/use.png" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <span class="float-right"><?= $val ?></span>
                                                        <h4 class="m-0"></h4>
                                                        <h5 class="text-muted">Enviado: <?= $data['correo']; ?></h5>
                                                    </div>
                                                </div>
                                                <!------------------------------------------>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 class="my-3">Detalle Renta</h5>
                                                        <div class="card-group">
                                                            <div class="card">

                                                                <img class="card-img-top img-fluid" src="assets/images/small/<?= $listImg[0] ?>" alt="Card image cap">
                                                                <div class="card-body">
                                                                    <h3 class="card-title">Detalle Reserva</h3>
                                                                    <h4>Fecha de solicitud:</h4>
                                                                    <p class="card-text"><?= $data['f_solicitud']; ?></p>
                                                                    <h4>Cantidad de días:</h4>
                                                                    <p class="card-text"><?= $data['cant_dia']; ?></p>
                                                                    <h4>Total a pagar:</h4>
                                                                    <p class="card-text"><?= $data['total']; ?></p>

                                                                    <strong>
                                                                        <u>
                                                                            <h4>Datos inicio de reserva.</h4>
                                                                        </u>
                                                                    </strong>
                                                                    <h4>Fecha:</h4>
                                                                    <p class="card-text"><?= $data['f_recogida']; ?></p>
                                                                    <h4>Hora:</h4>
                                                                    <p class="card-text"><?= $data['H_recogida']; ?></p>
                                                                    <h4>Dirección:</h4>
                                                                    <p class="card-text"><?= $data['direc_recogida']; ?></p>

                                                                    <strong>
                                                                        <u>
                                                                            <h4>Datos Finalización de reserva.</h4>
                                                                        </u>
                                                                    </strong>
                                                                    <h4>Fecha:</h4>
                                                                    <p class="card-text"><?= $data['f_entrega']; ?></p>
                                                                    <h4>Hora:</h4>
                                                                    <p class="card-text"><?= $data['H_entrega']; ?></p>
                                                                    <h4>Dirección:</h4>
                                                                    <p class="card-text"><?= $data['direc_entrega']; ?></p>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <img class="card-img-top img-fluid" src="assets/images/small/<?= $listImg[1] ?>" alt="Card image cap">
                                                                <div class="card-body">
                                                                    <h3 class="card-title">Detalle Automovil</h3>
                                                                    <h4>Modelo:</h4>
                                                                    <p class="card-text"><?= $data['modelo']; ?></p>
                                                                    <h4>Marca:</h4>
                                                                    <p class="card-text"><?= $data['marca']; ?></p>
                                                                    <h4>Motor:</h4>
                                                                    <p class="card-text"><?= $data['motor']; ?></p>
                                                                    <h4>Matricula:</h4>
                                                                    <p class="card-text"><?= $data['matricula']; ?></p>
                                                                    <h4>Precio:</h4>
                                                                    <p class="card-text"><?= $data['precio']; ?></p>

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
                                                            </div>

                                                            <div class="card">
                                                                <img class="card-img-top img-fluid" src="assets/images/small/<?= $listImg[2] ?>" alt="Card image cap">
                                                                <div class="card-body">
                                                                    <h3 class="card-title">Detalle Cliente</h3>
                                                                    <h4>Nombre Cliente:</h4>
                                                                    <p class="card-text"><?= $data['nombre']; ?></p>
                                                                    <h4>Correo electrónico:</h4>
                                                                    <p class="card-text"><?= $data['correo']; ?></p>
                                                                    <h4>Teléfono:</h4>
                                                                    <p class="card-text"><?= $data['tel']; ?></p>
                                                                    <h4>País:</h4>
                                                                    <p class="card-text"><?= $data['pais']; ?></p>

                                                                </div>
                                                            </div>

                                                        </div> <!-- end card-group-->
                                                    </div> <!-- end col-->
                                                </div>
                                                <!-- end row -->
                                                <form action="#" method="post">
                                                    <div class="btn-group-vertical mb-2">
                                                        <button type="button" class="btn btn-purple dropdown-toggle waves-effect waves-light width-md" data-toggle="dropdown" aria-expanded="false"> Editar <i class="mdi mdi-chevron-down"></i> </button>
                                                        <div class="dropdown-menu">
                                                            <button type="button" class="btn btn-purple dropdown-item" data-toggle="modal" data-target="#mdcliente">Editar Cliente </button>
                                                            <button type="button" class="btn btn-purple dropdown-item" data-toggle="modal" data-target="#mdres">Edita Reserva</button>
                                                        </div>
                                                    </div>
                                                    <?php $req = $reserva->nconf($data['idreserva'], $data['idautos']);  ?>
                                                    </br>
                                                    <!-- BOTON CANCELAR -->
                                                    <?php if ($data['estado'] == '0') { ?>
                                                        <button type="button" id="can" class="btn btn-danger waves-effect waves-light width-md">Cancelar Reservas</button>
                                                    <?php

                                                    } ?>
                                            </div>

                                            <br>

                                            <?php
                                            if ($data['estado'] == '0') {
                                            ?>
                                                <!-- BUTTON CONFIRMAR-->
                                                <div class="button-list">
                                                    <button type="submit" name="conf" class="btn btn-primary btn-block waves-effect waves-light width-lg"><b>Comfirmar Reserva</b></button>
                                                    <?php $req = $reserva->nconf($data['idreserva'], $data['idautos']); ?>
                                                </div>
                                            <?php
                                                include('assets/modals/warning.php');
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
                window.location.replace('email-inbox.php');
            </script>
        <?php
            }
        } ?>