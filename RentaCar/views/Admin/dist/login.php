<?php
error_reporting(0);
include_once('../../../CapaNegocios/NLogin.php');
$login = new NLogin();

session_start();
if (isset($_SESSION['user_id'])) {
    header("location: ../../Admin/dist/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login Administrador RC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Administración Cabezas-RentaCar" name="description" />
    <meta content="RentaCar" name="Cabezas-RentaCar" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/users/use.png">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

    <div class="home-btn d-none d-sm-block">
        <a href="../../re/index.php"><i class="fas fa-home h2 text-white"></i></a>
    </div>

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <strong>
                                <h1 style="font-size: 13px; color: white; "><?php

                                                                            //include('validar.php');	  

                                                                            ?></h1>
                            </strong>

                            <div class="text-center mb-4">
                                <a href="../../re/index.php">
                                    <span><img src="assets/images/users/Logo.png" alt="" height="28"></span>
                                </a>
                            </div>

                            <form class="pt-2" method="post">
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Correo electrónico</label>
                                    <input class="form-control" type="email" name="user" id="user" required="" placeholder="Escriba su nombre de usuario">
                                </div>

                                <div class="form-group mb-3">
                                    <!--   <a href="auth-recoverpassword.html" class="text-muted float-right"><small>Forgot your password?</small></a>-->
                                    <label for="password">Contraseña</label>
                                    <input class="form-control" type="password" required="" name="password" id="password" placeholder="Escriba su contraseña">
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                    <label class="custom-control-label" for="checkbox-signin">Recordarme</label>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit">Iniciar Sesión</button>
                                    <?php $req = $login->log() ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
</body>

</html>