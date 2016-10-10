<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Encargado extends CI_Controller {

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('encargado.php');
		$this->load->view('pooter.php');

	}
}
