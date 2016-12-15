<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controlTareas extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/tareas');
		$this->load->view('footer');

	}
}
