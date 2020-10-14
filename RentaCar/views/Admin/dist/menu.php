<?php include_once('../../../CapaNegocios/restriccion.php');
$name = $_SESSION['nombre'] . " " . $_SESSION['apellido'];

?>

<body class="left-side-menu-dark">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/use.PNG" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            <?= $name; ?> <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h6 class="m-0">
                                ¡Bienvenido!
                            </h6>
                        </div>

                        <!-- item-->
                        <a href="account.php" class="dropdown-item notify-item">
                            <i class="dripicons-user"></i>
                            <span>Mi Cuenta</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <form action="#" method="POST">
                            <button type="submit" name="cerrar" class="dropdown-item notify-item"><i class="dripicons-power">
                                </i><span>Cerrar Sessión</span>
                            </button>
                            <?php $req = close(); ?>
                        </form>


                    </div>
                </li>

            </ul>

            <ul class="list-unstyled menu-left mb-0">
                <li class="float-left">
                    <a href="index.php" class="logo">
                        <span class="logo-lg">
                            <img src="assets/images/users/Logo.png" alt="" height="22">
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/users/use.PNG" alt="" height="24">
                        </span>
                    </a>
                </li>
                <li class="float-left">
                    <a class="button-menu-mobile navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="index.php">
                                <i class="dripicons-meter"></i>
                                <span> Inicio</span>
                            </a>
                        </li>

                        <li>
                            <a href="email-inbox.php">
                                <i class="dripicons-mail"></i>
                                <span> Reservas </span>

                            </a>
                        </li>



                        <li>
                            <a href="historial.php">
                                <i class="dripicons-meter"></i>
                                <span>Historial de reservas </span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->
        </div>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
    </div>