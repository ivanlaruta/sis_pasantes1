<?php
/**
* 
*/
class ListaEncargados extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();

		$this -> load -> model('mTarea');
		$this -> load -> model('mEncargado');
		//$this -> load -> model('registrarPasante');
		$this -> load->library('encrypt');
	

	}

	public function index(){

	$datos['resultado'] = $this->mEncargado->listarEncargados();
    
		$this->load->view('header');
		$this -> load-> view ('jefe/listaEncargados', $datos);
		$this->load->view('footer');
	}

	
	
}