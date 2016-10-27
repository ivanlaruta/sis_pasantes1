<?php


class TareaPasante extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('pasante/tareapasante');
		$this->load->view('footer');
	}
}