<?php


class C_horario extends CI_Controller {

	function __construct()
	{

		parent:: __construct();
		$this->load->model('mod_horarios');
	//	parent:: __construct();
	//	$this->load->model('../models/modelosolicitud');
	}
	public function index()
	{
		
		$this->load->view('header');
		$data['dias']=$this->mod_horarios->devolver_dias();
		$this->load->view('pasante/registrarhorario', $data);

		$this->load->view('footer');
		
    	
    
// cargamos  la interfaz y le enviamos los datos
//$this->load->view('pasante/solicitudpermiso', $datos);
	}


	function ini()
	{
		$id_dia = $this->input->get('id_horario');
		$this->mod_horarios->devolver_horas($id_dia);


	}

	
} 