<?php

include_once('../../../CapaNegocios/NReservaAd.php');
include('men.php');
$NReser = new NReservaAd();
?>
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Historial de reserva</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!--INICIO DE TARJETAS-->

            <div class="row">
                <?php
                $lista = $NReser->Mostrar();
                foreach ($lista as $reserva => $data) {
                ?>
                    <div class="col-md-6 col-xl-3">
                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data['marca'] ?> <?= $data['modelo'] ?></h5>
                                <p class="card-text"><b>Fecha de reserva:</b><br>
                                    <?= $data['f_recogida'] ?></p>
                                <p class="card-text"><b>Fecha de finalización:</b><br>
                                    <?= $data['f_entrega'] ?></p>
                                <?php $idauto = $data['idautos'];
                                $estado = $data['estadoa']; ?>
                                <div class="button-list">
                                    <button type="submit" name="conf" class="btn btn-primary btn-block waves-effect waves-light width-lg"><b>Confirmar Reserva</b></button>

                                </div>
                                <?php
                                if ($data['estadoa'] == '1') {
                                ?>
                                    <?php $req = $NReser->Activar($idauto, $estado);
                                
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>




        </div> <!-- container-fluid -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    2020 &copy; Cabezas Rent a Car
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- KNOB JS -->
<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
<!-- Chart JS -->
<script src="assets/libs/chart-js/Chart.bundle.min.js"></script>

<!-- Jvector map -->
<script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/libs/jqvmap/jquery.vmap.usa.js"></script>

<!-- Datatable js -->
<script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
<script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

<!-- Dashboard Init JS -->
<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>


</body>

</html>