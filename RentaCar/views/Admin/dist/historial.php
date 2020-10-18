<?php

include_once('../../../CapaNegocios/NHistorial.php');


include('men.php');
$NReserva = new NHistorial();

$n = ($_GET['id']);
?>


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Historial</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <!-- Right Sidebar -->
                <div class="col-lg-12">
                    <div class="card-box">
                        <!-- Left sidebar -->


                        <div class="inbox-bar">

                            <div class="mt-4">

                                <ul class="message-list">
                                    <!--Esto es lo que se repite-->

                                    <?php
                                    $numR = $NReserva->contar();
                                    $totR = (int)$numR['numR'];
                                    $numXpagina = 20;
                                    $desde = ($n - 1) * $numXpagina;
                                    $totPag = ceil($totR / $numXpagina);


                                    $lista = $NReserva->listarReserva($desde, $numXpagina);

                                    if ($lista > 0) {

                                        foreach ($lista as $reserva => $data) {

                                    ?>
                                            <li class="unread">
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk1">
                                                        <label for="chk1" class="toggle"></label>
                                                    </div>
                                                    <a href="emailread.php?id=<?php echo $data['idreserva']; ?>" class="title"><?= $data['nombre']; ?></a>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="emailread.php?id=<?php echo $data['idreserva']; ?>" class="subject"><?= $data['nombre']; ?> solicitó una reserva de <?php echo $data['marca']; ?> <?php echo $data['modelo']; ?> &nbsp;&ndash;&nbsp;
                                                        <!--<span class="teaser">@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>-->
                                                    </a>
                                                    <div class="date"><?= $data['f_solicitud']; ?></div>
                                                </div>
                                            </li>

                                    <?php }
                                    } ?>
                                </ul>

                            </div>
                            <!-- end .mt-4 -->


                            <div class="row">
                                <div class="col-7">

                                    <?php
                                    if ($n != 1) {
                                    ?>

                                        <a href="historial.php?id=<?= ($n - 1) ?>"><button type="button" class="btn btn-light btn-sm"><i class="mdi mdi-chevron-left"></i></button></a>


                                        <?php
                                    }
                                    for ($j = 1; $j <= $totPag; $j++) {
                                        if ($j == $n) {
                                        ?>
                                            <a href="historial.php?id=<?= $j ?>"><button type="button" class="btn btn-info btn-sm"><?= $j ?></i></button></a>

                                        <?php
                                        } else {
                                        ?>
                                            <a href="historial.php?id=<?= $j ?>"><button type="button" class="btn btn-light btn-sm"><?= $j ?></i></button></a>

                                    <?php
                                        }
                                    }
                                    ?>

                                    <?php
                                    if ($n != $totPag && !empty($lista)) {
                                    ?>
                                        <a href="historial.php?id=<?= $n + 1 ?>"><button type="button" class="btn btn-light btn-sm"><i class="mdi mdi-chevron-right"></i></button></a>
                                    <?php
                                    }
                                    ?>
                                </div> <!-- end col-->

                            </div>
                            <!-- end row-->
                        </div>
                        <!-- end inbox-rightbar-->

                        <div class="clearfix"></div>
                    </div> <!-- end card-box -->

                </div> <!-- end Col -->

            </div><!-- End row -->

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

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>

</html>