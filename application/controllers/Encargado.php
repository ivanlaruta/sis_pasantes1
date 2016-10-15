<?php


class Encargado extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/encargado');
		$this->load->view('pooter');

	}
}
