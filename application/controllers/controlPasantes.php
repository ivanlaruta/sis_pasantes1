<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class controlPasantes extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('encargado/controlPasantes');
		$this->load->view('footer');

	}
}
