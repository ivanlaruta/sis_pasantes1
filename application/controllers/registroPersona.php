<?php
/**
* 
*/
class RegistroPersona extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
	}

	public function index(){
		$this->load->view('header');
		$this -> load-> view ('jefe/registroPersona');
		$this->load->view('pooter');
	}
	public function guardar(){
		echo"entro al metodo guardar";
	}
}