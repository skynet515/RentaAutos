<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: https://cabezasrentacar.com/views/Admin/dist/login.php');
    exit;
} else {
}

function close()
{
    if (isset($_POST['cerrar'])) {
        // session_start();
        session_destroy();
        header('Location: https://cabezasrentacar.com/views/Admin/dist/login.php');
        ?>
        <script>
                    location.reload();
                </script>
        <?php
    }
}
