<?php


class Pasante extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}
	public function index()
	{
		$this->load->view('headerPrincipal');
		$this->load->view('pasante/pasante');
		$this->load->view('footer');
	}
}
