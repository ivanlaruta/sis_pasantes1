<?php
/**
* 
*/
class Pendientes2 extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();

		$this ->load-> model('mPendientes');
		
	

	}

	public function index(){

	$datos['resultado'] = $this->mPendientes->listarSolicitudes();
    
		$this->load->view('header');
		$this ->load->view ('encargado/pendientes', $datos);
		$this->load->view('footer');
	}

	
	
}