<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controlIngresarEstadoPasante extends CI_Controller {

	public function index()
	{
		$this->load->view('headerPrincipal');
		$this->load->view('pasante/ingresarEstadoTarea');
		$this->load->view('footer');

	}
}