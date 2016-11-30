<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class horarios extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("modelohorario");
	}

	function index()
	{
		$this->load->view('header');
		$this->load->view('pasante/horarios');
		$this->load->view('footer');
	}

	function guardar(){
		
		if ($this->input->is_ajax_request()) {
			$nombres = $this->input->post("pasante");
			$dia = $this->input->post("dia");
			$horai = $this->input->post("hora_inicio");
			$horaf = $this->input->post("hora_fin");
			

			
			if($this->modelohorario->guardar($datos)==true)
				echo "Registro Guardado";
			else
				echo "No se pudo guardar los datos";
		}
		else
		{
			show_404();
		}


	}

	function mostrar(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscar");
			$datos = $this->modelohorario->mostrar($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	

	function eliminar(){
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("id");
			if($this->modelohorario->eliminar($idsele) == true)
				echo "Registro Eliminado";
			else
				echo "No se pudo eliminar los datos";
			
		}
		else
		{
			show_404();
		}
	}

}

