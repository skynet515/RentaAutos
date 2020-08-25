<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
} else {
}

function close()
{
    if (isset($_POST['cerrar'])) {
        // session_start();
        session_destroy();
        header("Location: ../../Admin/dist/login.php");
    }
}
