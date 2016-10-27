<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controlModificarPasante2 extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/modificarPasante2');
		$this->load->view('footer');

	}
}