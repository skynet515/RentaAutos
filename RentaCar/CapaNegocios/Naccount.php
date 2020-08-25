<?php
include_once('../../../CapaDatos/Daccount.php');
class Naccount
{
	private $nadmin;
	public function __construct()
	{
		$this->nadmin = new Daccount();
	}
	public function selectAdmin()
	{
		$request = $this->nadmin->selectAdmin($_SESSION['user_id']);
		if ($request) {
			return $request;
		}
	}
	public function updateAdmin()
	{
		if (
			isset($_POST['dir']) &&
			isset($_POST['tel'])  &&
			isset($_POST['correo']) &&
			isset($_POST['passwold']) &&
			isset($_POST['passnew'])

		) {
			if (
				!empty($_POST['dir']) &&
				!empty($_POST['tel'])  &&
				!empty($_POST['correo']) &&
				!empty($_POST['passwold']) &&
				!empty($_POST['passnew'])
			) {

				$lista = array(
					'id' => $_SESSION['user_id'],
					'dir' => $_POST['dir'],
					'tel' => $_POST['tel'],
					'correo' => $_POST['correo'],
					'passwold' => $_POST['passwold'],
					'passnew' => $_POST['passnew']

				);
				$request = $this->nadmin->updateAdmin($lista);

				if ($request) {
?>
					<script>
						alert("Datos modificados con éxito");
						document.location.href = "account.php";
					</script>
				<?php
				} else {
				?>
					<script>
						alert("Error al modificar los datos");
					</script>
				<?php
				}
			} else {
				?>
				<script>
					alert("Error faltan campos que completar");
				</script>
<?php
			}
		}
	}
}
