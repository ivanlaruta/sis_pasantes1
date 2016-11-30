<?php


class controlListaTareaPasante extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this ->load->model('mPasante');
	}
	public function index()
	{
		$this ->load->model('mPasante');
		$data = array();
		$data["listarTareas"] = $this -> mPasante -> listarTareas();

		$this->load->view('header');
		$this->load->view('pasante/listaTareas',$data,FALSE);
		$this->load->view('footer');
	}
	public function listar($a)
	{
		$this ->load->model('mPasante');
		$data = array();
		$data["listarTareas"] = $this -> mPasante -> listarTareas3($a);

		$this->load->view('header');
		$this->load->view('pasante/listaTareas',$data,FALSE);
		$this->load->view('footer');
	}
}
