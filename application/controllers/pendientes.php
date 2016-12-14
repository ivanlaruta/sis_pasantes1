<?php
/**
* 
*/
class Pendientes extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();

		$this ->load-> model('mTarea');
		$this ->load-> model('mPendientes');
		//$this -> load -> model('registrarPasante');
		$this ->load->library('encrypt');
	

	}

	public function index(){

	$datos['resultado'] = $this->mPendientes->listarsolicitudes();
    
		$this->load->view('header');
		$this ->load->view ('encargado/pendientes');
		$this->load->view('footer');
	}

	
	
}