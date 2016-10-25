<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controlAsignacionHorario extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/asignacionHorario');
		$this->load->view('footer');

	}
}
