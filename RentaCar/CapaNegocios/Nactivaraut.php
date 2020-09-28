<?php
include_once('../../../CapaDatos/DReservaAd.php');
include_once('../../../CapaDatos/Drenta.php');


class NactivarAut
{
	private $activar;
	private $dauto;
	public function __construct()
	{
		$this->activar = new DReservaAd();
		$this->dauto = new Drenta();
	}

	//metodo cargar datos de la vista detalle Reactivar auto
	public function detalleReacAuto($id)
	{
		return $this->dauto->detalleReacAuto($id);
	}

	public function listarimages($id)
	{
		return $this->dauto->images($id);
	}

	public function ActivarAuto($id)
	{
		if (isset($_POST['conf'])) {
			$list = $this->activar->ActivarAuto($id);
			if ($list) {
				include('assets/modals/success.php');
			} else include('assets/modals/error.php');
		} else include('assets/modals/error.php');
	}
}
