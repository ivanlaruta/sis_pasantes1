<?php
/**
* 
*/
class RegistroTareaEncargado extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();

		$this -> load -> model('mTarea');
		//$this -> load -> model('registrarPasante');
		$this -> load->library('encrypt');
	

	}

	public function index(){
		$this->load->view('header');
		$this -> load-> view ('encargado/RegistroTarea');
		$this->load->view('footer');
	}

	
	public function guardar(){
		#desc
		$param['actividad'] = $this -> input -> post('actividad');

		$lastId = $this->mTarea->guardar($param);
		
		
		$this ->load->model('mPasante');
		$data = array();
		$data["listarPasantes"] = $this -> mPasante -> listarPasantes();

		$this->load->view('header');
		$this->load->view('encargado/AsignarTareaPasantes',$data,$lastId);
		$this->load->view('footer');

	}
}