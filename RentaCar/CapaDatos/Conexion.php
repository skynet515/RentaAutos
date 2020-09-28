<?php
class Conexion
{
	private $host = "den1.mysql1.gear.host";
	private $db = "bdrentacar";
	private $user = "bdrentacar";
	private $passw = "car123#";

	private static $conexion = null;
	private $con;

	private function __construct()
	{
		try {
			$this->con = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->passw);
		} catch (PDOException $e) {
			echo "Error: " . $e;
		}
	}

	public static function 	getInstance()
	{
		if (!self::$conexion) {
			self::$conexion = new Conexion();
		}
		return self::$conexion;
	}

	public function getPrepareStatement($sql)
	{
		return $this->con->prepare($sql);
	}
}
