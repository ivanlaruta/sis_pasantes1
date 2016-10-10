<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Jefe extends CI_Controller {

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('jefe.php');
		$this->load->view('pooter.php');
	}
}
