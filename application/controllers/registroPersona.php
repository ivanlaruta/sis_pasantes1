<?php
/**
* 
*/
class RegistroPersona extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('modeloRegistroPersona');
	}

	public function index(){
		$this->load->view('header');
		$this -> load-> view ('jefe/registroPersona');
		$this->load->view('footer');
	}
	public function guardar(){
		
		$param['carnet_identidad'] = $this -> input -> post('carnet_identidad');
		$param['nombres'] =$this -> input -> post('nombres');
		$param['apellidos'] =$this -> input -> post('apellidos');
		$param['direccion'] =$this -> input -> post('direccion');
		$param['telefono'] =$this -> input -> post('telefono');
		$param['email'] =$this -> input -> post('email');
		$param['fecha_nacimiento'] =$this -> input -> post('fecha_nacimiento');
		$param['usuario'] =$this -> input -> post('usuario');
		$param['password'] =$this -> input -> post('password');
		$param['id_rol'] =$this -> input -> post('id_rol');

		$this->modeloRegistroPersona->guardar($param);
	}
}