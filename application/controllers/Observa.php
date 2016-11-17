<?php


class Observa extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		//$this->load->model('../models/modelosolicitud');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/observa');
		$this->load->view('footer');
		//$datos['arrProfesiones'] = $this->modelosolicitud->get_permisos();
    
// cargamos  la interfaz y le enviamos los datos
//$this->load->view('encargado/observa');
	}

	
}
//$datos