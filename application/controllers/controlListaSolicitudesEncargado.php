<?php


class controlListaSolicitudesEncargado extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this ->load->model('modelosolicitud');
	}
	
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
		$this ->load->model('modelosolicitud');
		$data = array();
		$data["listarSolicitudes"] = $this -> modelosolicitud -> listarSolicitudes($session_data);


		$this->load->view('header');
		$this->load->view('encargado/listaSolicitudes',$data,FALSE);
		$this->load->view('footer');
	}
}
