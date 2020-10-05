<?php

include_once('../../../CapaNegocios/NMReserva.php');
include('men.php');
$NReserva = new NMReserva();
?>


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Solicitudes de reserva</h4>
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
                                    $lista = $NReserva->listarReserva();
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
                                                <a href="emailread.php?id=<?php echo $data['idreserva']; ?>" class="subject"><?= $data['nombre']; ?> ha solicitado una reserva de <?php echo $data['marca']; ?> <?php echo $data['modelo']; ?> &nbsp;&ndash;&nbsp;
                                                    <!--<span class="teaser">@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>-->
                                                </a>
                                                <div class="date"><?= $data['f_solicitud']; ?></div>
                                            </div>
                                        </li>

                                    <?php } ?>
                                </ul>

                            </div>
                            <!-- end .mt-4 -->

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