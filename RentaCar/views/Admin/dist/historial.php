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

                        <h4 class="page-title">Reactivar Auto</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!--INICIO DE TARJETAS-->

            <div class="row">
                <?php
                $lista = $NReser->Mostrar();
                $id = 0;
                foreach ($lista as $reserva => $data) {
                ?>
                    <div class="col-md-6 col-xl-3">
                        <!-- Simple card -->
                        <a href="detalle.php?id=<?= $data['idautos']; ?>"><img class="card-img-top img-fluid" src="assets/images/small/<?= $data['img'] ?>" alt="Card image cap"></a>
                        <div class="card">
                            <a href="detalle.php?id=<?= $data['idautos']; ?>">
                                &nbsp;
                                <h3 align="center" center class="card-title"><?= $data['marca'] ?> <?= $data['modelo'] ?></h3>
                                <h5 align="center"><?= $data['rentacar'] ?></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
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