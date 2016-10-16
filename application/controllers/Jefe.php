<?php


class Jefe extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('jefe/jefe');
		$this->load->view('pooter');
	}
		
}
