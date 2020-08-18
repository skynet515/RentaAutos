<?php
include_once('../../../CapaDatos/Dreadmail.php');

class Nreadmail
{
	private $dmail;

	public function __construct()
	{
		$this->dmail = new Dreadmail();
	}

	public function ndetalle($id)
	{
		return $this->dmail->detalleReserva($id);
	}
	public function nconf($id)
	{
		if (isset($_POST['conf'])) {
			$req = $this->dmail->dconf($id);
			if ($req) include('assets/modals/success.php');
			else include('assets/modals/error.php');
		}

		if (isset($_POST['cancel'])) {
			$req = $this->dmail->delete($id);
			if ($req) include('assets/modals/success.php');
			else include('assets/modals/error.php');
		}
		if (isset($_POST['edit'])) {
			include('assets/modals/error.php');
		}
	}
	public function nclien($id)
	{
		if (
			isset($_POST['nombre']) &&
			isset($_POST['tel']) &&
			isset($_POST['pais'])  &&
			isset($_POST['correo']) &&
			isset($_POST['mclien'])
		) {

			if (
				!empty($_POST['nombre']) &&
				!empty($_POST['tel']) &&
				!empty($_POST['pais'])  &&
				!empty($_POST['correo'])
			) {
				$lista = array(
					'id' => $id,
					'nombre' => $_POST['nombre'],
					'tel' => $_POST['tel'],
					'pais' => $_POST['pais'],
					'correo' => $_POST['correo']
				);
				/*?>
				<script>
					$(document).ready(function() {
						$("#mdcliente").modal('hide');
					});
				</script>
<?php*/
				$req = $this->dmail->dclien($lista);
				if ($req) include('assets/modals/success.php');
				else include('assets/modals/error.php');
			}
		}
	}
}
