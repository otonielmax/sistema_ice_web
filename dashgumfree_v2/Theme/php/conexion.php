<?php
	class Modelo
	{
		public $usuario = 'postgres';
		public $pass = '21091361';
		public $baseDeDatos = 'sistema_ice';
		public $port = 5432;
		public $host = 'localhost';

		public $strConexion = null;
		public $cnx = null;

		public function crearConexion() {
			$this->strConexion = "host=$this->host port=$this->port dbname=$this->baseDeDatos user=$this->usuario password=$this->pass";
			$this->cnx = pg_connect($this->strConexion) or die("Error de conexion ".pg_last_error()); 
		}

		public function cerrarConexion() {
			pg_close($this->cnx);
		}
	}
?>