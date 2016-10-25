<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controlModificarPasante extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/modificarPasante');
		$this->load->view('footer');

	}
}
