<?php


class Pasante extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('pasante/pasante');
		$this->load->view('pooter');
	}
}
