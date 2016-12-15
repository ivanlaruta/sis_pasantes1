<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controlIngresarEstadoPasante extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('pasante/ingresarEstadoTarea');
		$this->load->view('footer');

	}

	public function editar(){
		$this->load->model('modeloTareaPenPasante');
		$data['registros']=$this->modeloTareaPenPasante->editar();
		$this->load->view('header');
		$this->load->view('pasante/ingresarEstadoTarea', $data);
		$this->load->view('footer');
	}

	public function actualizar(){
		$this->load->model('modeloTareaPenPasante');
		$this->modeloTareaPenPasante->actualizar();
		$this->load->view('header');
		$this->load->view('pasante/pasante');
		$this->load->view('footer');
	}
}
