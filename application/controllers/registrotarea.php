<?php


class registrotarea extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('pasante/registrotarea');
		$this->load->view('footer');
	}
}