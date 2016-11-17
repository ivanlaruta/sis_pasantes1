<?php
/**
* 
*/
class ListaPasantes extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();

		$this -> load -> model('mTarea');
		$this -> load -> model('mPasante');
		//$this -> load -> model('registrarPasante');
		$this -> load->library('encrypt');
	

	}

	public function index(){

	$datos['resultado'] = $this->mPasante->listarPasantes();
    
		$this->load->view('header');
		$this -> load-> view ('encargado/listaPasantes', $datos);
		$this->load->view('footer');
	}

	
	
}