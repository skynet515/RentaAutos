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
				$req = $this->dmail->dclien($lista);
				if ($req) {
?>
					<script>
						alert("Cliente modificado con éxito");
						document.location.href = "emailread.php?id=<?= $id ?> ";
					</script>
				<?php
				}
				?>
				<script>
					alert("Error al modificar cliente");
				</script>
				<?php
			}
		}
	}

	public function nres($id, $precio)
	{

		if (
			isset($_POST['h_recogida']) &&
			isset($_POST['d_entrega']) &&
			isset($_POST['f_entrega']) &&
			isset($_POST['f_recogida']) &&
			isset($_POST['d_recogida']) &&
			isset($_POST['h_entrega'])
		) {
			if (
				!empty($_POST['h_recogida']) &&
				!empty($_POST['d_entrega']) &&
				!empty($_POST['f_entrega']) &&
				!empty($_POST['f_recogida']) &&
				!empty($_POST['d_recogida']) &&
				!empty($_POST['h_entrega'])
			) {
				$date1 = new DateTime($_POST['f_entrega']);
				$date2 = new DateTime($_POST['f_recogida']);
				$cant_dia = $date1->diff($date2);
				$total = ($cant_dia->days) * $precio;
				$lista = array(
					'cant_dia' => $cant_dia->days,
					'total' => $total,
					'd_recogida' => $_POST['d_recogida'],
					'f_recogida' => $_POST['f_recogida'],
					'h_recogida' => $_POST['h_recogida'],
					'd_entrega' => $_POST['d_entrega'],
					'f_entrega' => $_POST['f_entrega'],
					'h_entrega' => $_POST['h_entrega'],
					'id' => $id
				);
				$req = $this->dmail->dres($lista);
				if ($req) {
				?>
					<script>
						alert("Reserva modificada con éxito");
						document.location.href = "emailread.php?id=<?= $id ?> ";
					</script>
				<?php
				} else {
				?>
					<script>
						alert("Error al modifica la reserva");
					</script>
<?php
				}
			}
		}
	}
}
