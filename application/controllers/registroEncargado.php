<?php
/**
* 
*/
class RegistroEncargado extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('modeloRegistroPersona');
		$this -> load -> model('registrarEncargado');
		$this -> load->library('encrypt');
	}

	public function index(){
		$this->load->view('header');
		$this -> load-> view ('jefe/RegistroEncargado');
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
		$param['id_rol'] =2;
		#encargado
		$paramenc['titulo'] =$this -> input -> post('titulo');
		$paramenc['cat_turno'] =$this -> input -> post('cat_turno');	
		$lastId = $this->modeloRegistroPersona->guardar($param);
		if($lastId > 0){
			$paramenc['id_persona'] = $lastId;
			$this -> registrarEncargado -> guardar($paramenc);
		}

	}
}