<?php


class Pasante extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('pasante/pasante');
		$this->load->view('pooter');
	}
}
