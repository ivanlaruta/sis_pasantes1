<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Encargado extends CI_Controller {

	public function index()
	{
		$this->load->view('headerPrincipal');
		$this->load->view('encargado/encargado');
		$this->load->view('footer');

	}
}
