<?php
include_once('../../../CapaDatos/Dlogin.php');
class NLogin
{

    private $dlogin;
    private $user;
    private $pass;

    public function __construct()
    {
        $this->dlogin = new DLogin();
    }

    public function log()
    {
        if (isset($_POST["user"]) && isset($_POST["password"])) {
            $this->user = $_POST["user"];
            $this->pass = $_POST["password"];

            $request = $this->dlogin->VerificarUser($this->user, $this->pass);
            if ($request) {
                session_start();
                $_SESSION['user_id'] = $this->user;
                header("location: ../../Admin/dist/index.php");
                return $request;
            } else { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error, el usuario o la contraseña son incorrectos.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
<?php  }
        }
    }
}
?>