<?php


class Datospersonales extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('pasante/datospersonales');
		$this->load->view('footer');
	}

	public function mostrar(){

		$id = $this->uri->segment(3);
		$obtenerEnlace = $this->mPasante->obtenerEnlace($id);

		if ($obtenerEnlace != FALSE) {
			foreach ($obtenerEnlace->result() as $row) {
				$carnet_identidad = $row->carnet_identidad;
				$nombres = $row->nombres;
				$apellidos = $row->apellidos;
				$direccion = $row->direccion;
				$telefono = $row->telefono;
				$email = $row->email;
				$fecha_nacimiento = $row->fecha_nacimiento;
				$usuario = $row->usuario;
				$password = $row->password;
				
			}
			$data = array(
				'id' => $id_persona,
				'carnet_identidad' => $carnet_identidad,
				'nombres'=>$nombres,
				'apellidos'=>$apellidos,
				'direccion'=>$direccion,
				'telefono'=>$telefono,
				'email'=>$email,
				'fecha_nacimiento'=>$fecha_nacimiento,
				'usuario'=>$usuario,
				'password'=>$password
				);
		} else {
			$data = '';
			return FALSE;
		}		

		$this->load->view('header');
		$this->load->view('pasante/datospersonales', $data);
		$this->load->view('footer');	
	}
}
