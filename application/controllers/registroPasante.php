<?php
/**
* 
*/
class RegistroPasante extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('modeloRegistroPersona');
		$this -> load -> model('registrarPasante');
		$this -> load->library('encrypt');
		$this -> load->model('mCatalogo');
	}

	public function index(){

		$datos['resultado'] = $this->mCatalogo->listarCarreras();
		$this->load->view('header');
		$this -> load-> view ('encargado/RegistroPasante', $datos);
		$this->load->view('footer');
	}
	public function guardar(){
		#persona
		$param['carnet_identidad'] = $this -> input -> post('carnet_identidad');
		$param['nombres'] =$this -> input -> post('nombres');
		$param['apellidos'] =$this -> input -> post('apellidos');
		$param['direccion'] =$this -> input -> post('direccion');
		$param['telefono'] =$this -> input -> post('telefono');
		$param['email'] =$this -> input -> post('email');
		$param['fecha_nacimiento'] =$this -> input -> post('fecha_nacimiento');
		$param['usuario'] =$this -> input -> post('usuario');
		#$param['password'] =$this -> encrypt ->encode($this -> input -> post('password'));
		$param['password'] =$this -> input -> post('password');
		$param['id_rol'] =3;
		#pasante
		$paramusu['cat_carrera'] =$this -> input -> post('cat_carrera');
		
		$lastId = $this->modeloRegistroPersona->guardar($param);
		if($lastId > 0){
			$paramusu['id_persona'] = $lastId;
			$this -> registrarPasante -> guardar($paramusu);
				echo "<script type='text/javascript'>
				alert('guardado correcto');
				</script>";

						$this->load->view('header');
						$this -> load-> view ('encargado/controlPasantes');
						$this->load->view('footer');
		}



	}
}