<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controlListaTarea extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/listaTarea');
		$this->load->view('footer');

	}
}
