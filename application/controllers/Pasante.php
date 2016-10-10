<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pasante extends CI_Controller {

	public function index()
	{
		$this->load->view('pasante.php');
	}
}
