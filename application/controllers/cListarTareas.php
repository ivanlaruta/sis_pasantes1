<?php
/**
* 
*/
class cListarTareas extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();

		$this -> load -> model('mTarea');
		$this -> load -> model('mTareaPasante');
		//$this -> load -> model('registrarPasante');
		$this -> load->library('encrypt');
	

	}

	public function index(){

	$datos['resultado'] = $this->mTareaPasante->listar();
    
		$this->load->view('header');
		$this -> load-> view ('encargado/listaTareas', $datos);
		$this->load->view('footer');
	}

	
	
}