<?php


class ListaEncargado extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/listaEncargado');
		$this->load->view('footer');
	}
}
