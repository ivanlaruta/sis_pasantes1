<?php


class ListaEncargado extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/listaEncargado');
		$this->load->view('pooter');
	}
}
