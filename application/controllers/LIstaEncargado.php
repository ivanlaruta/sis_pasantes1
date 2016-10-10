<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ListaEncargado extends CI_Controller {

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('listaEncargado.php');
		$this->load->view('pooter.php');
	}
}
