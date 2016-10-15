<?php


class Jefe extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('jefe/jefe');
		$this->load->view('pooter');
	}
		
}
