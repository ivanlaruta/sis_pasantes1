<?php


class controlListaTareaPasante extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this ->load->model('modeloTareaPenPasante');
	}
	//public function index()
	//{
	//	$this ->load->model('mPasante');
	//	$data = array();
	//	$data["listarTareas"] = $this -> mPasante -> listarTareas();

	//	$this->load->view('header');
	//	$this->load->view('pasante/listaTareas',$data,FALSE);
	//	$this->load->view('footer');
	//}
	
	public function listar()
	{
		//$id = 'nol';		
		//$ide = array();
        //$ide['id'] = $this->session->userdata('idusuario');
        
        $session_data = $this->session->userdata('idusuario');

		//echo '<pre>';
		//print_r($session_data);
		//$ide = $this->session->userdata('idusuario');
		//echo $ide;
		//$this ->load->model('modeloTareaPenPasante');
		$data = array();
		$data["listarTareas"] = $this -> modeloTareaPenPasante -> listarTareas3($session_data);


		$this->load->view('header');
		$this->load->view('pasante/listaTareasPendientes',$data, FALSE);
		$this->load->view('footer');
	}

	#public function editar(){
	#	$this->load->model('modeloTareaPenPasante');
	#	$data['registro']=$this->modeloTareaPenPasante->editar();
	#	$this->load->view('pasante/controlIngresarEstadoPasante', $data);
	#}
}
