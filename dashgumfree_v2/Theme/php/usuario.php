<?php
	include('conexion.php');

	/**
	* 
	*/
	class Usuario
	{
		public $model;

		public $usuario;
		public $password;
		public $nombre;
		public $apellido;
		public $telefono;
		public $correo;
		
		function __construct($usuario, $password, $nombre, $apellido, $telefono, $correo) 
		{
			$this->usuario = $usuario;
			$this->password = $password;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->telefono = $telefono;
			$this->correo = $correo;

			$this->model = new Modelo();
		}

		function registrarUsuario() {
			$this->model->crearConexion();
			$result = pg_query($this->model->cnx, "INSERT INTO public.usuario(\"user\", pass, nombre, apellido, telefono, correo) VALUES ('".$this->usuario."','".$this->password."','".$this->nombre."','".$this->apellido."','".$this->telefono."','".$this->correo."')");

			if (!$result) {
				echo "Query: error presenciado";
			}

			$this->model->cerrarConexion();

			return 0;
		}
	}
?>