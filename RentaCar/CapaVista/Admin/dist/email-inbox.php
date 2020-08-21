<?php
include_once('../../../CapaNegocios/restriccion.php');
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
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Greeva</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                <li class="breadcrumb-item active">Inbox</li>
                            </ol>
                        </div>
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

                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-archive font-18 vertical-middle"></i></button>
                                <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-alert-octagon font-18 vertical-middle"></i></button>
                                <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-delete-variant font-18 vertical-middle"></i></button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-folder font-18 vertical-middle"></i>
                                    <i class="mdi mdi-chevron-down font-14 ml-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-header">Move to</span>
                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-label font-18 vertical-middle"></i>
                                    <i class="mdi mdi-chevron-down font-14 ml-1"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-header">Label as:</span>
                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                </div>
                            </div>



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
                                                <span class="star-toggle far fa-star text-warning"></span>
                                                <a href="emailread.php?id=<?php echo $data['idreserva']; ?>" class="title"><?=$data['nombre']; ?></a>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <a href="emailread.php?id=<?php echo $data['idreserva']; ?>" class="subject"><?=$data['nombre']; ?> ha solicitado una reserva de <?php echo $data['marca']; ?> <?php echo $data['modelo']; ?> &nbsp;&ndash;&nbsp;
                                                    <!--<span class="teaser">@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>-->
                                                </a>
                                                <div class="date"><?=$data['f_solicitud']; ?></div>
                                            </div>
                                        </li>

                                    <?php } ?>
                                </ul>

                            </div>
                            <!-- end .mt-4 -->

                            <div class="row">
                                <div class="col-7">
                                    Showing 1 - 20 of 289
                                </div> <!-- end col-->
                                <div class="col-5">
                                    <div class="btn-group float-right">
                                        <button type="button" class="btn btn-light btn-sm"><i class="mdi mdi-chevron-left"></i></button>
                                        <button type="button" class="btn btn-info btn-sm"><i class="mdi mdi-chevron-right"></i></button>
                                    </div>
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
                    2018 - 2019 &copy; Greeva theme by <a href="">Coderthemes</a>
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

        <!-- Timeline -->
        <hr class="mt-0" />
        <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
        <hr class="mb-0" />
        <div class="p-3">
            <div class="inbox-widget">
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Chadengle</a></p>
                    <p class="inbox-item-text">Hey! there I'm available...</p>
                    <p class="inbox-item-date">13:40 PM</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                    <p class="inbox-item-text">I've finished it! See you so...</p>
                    <p class="inbox-item-date">13:34 PM</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                    <p class="inbox-item-text">This theme is awesome!</p>
                    <p class="inbox-item-date">13:17 PM</p>
                </div>

                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                    <p class="inbox-item-text">Nice to meet you</p>
                    <p class="inbox-item-date">12:20 PM</p>

                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                    <p class="inbox-item-text">Hey! there I'm available...</p>
                    <p class="inbox-item-date">10:15 AM</p>

                </div>
            </div> <!-- end inbox-widget -->
        </div> <!-- end .p-3-->

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>

</html>