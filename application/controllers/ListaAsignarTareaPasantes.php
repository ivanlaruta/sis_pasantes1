<?php


class ListaAsignarTareaPasantes extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this ->load->model('mPasante');
	}
	public function index()
	{
		$this ->load->model('mPasante');
		$data = array();
		$data["listarPasantes"] = $this -> mPasante -> listarPasantes();

		$this->load->view('header');
		$this->load->view('encargado/AsignarTareaPasantes',$data,FALSE);
		$this->load->view('footer');
	}
}
