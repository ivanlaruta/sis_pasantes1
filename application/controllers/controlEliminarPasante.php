<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controlEliminarPasante extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/eliminarPasante');
		$this->load->view('footer');

	}
}