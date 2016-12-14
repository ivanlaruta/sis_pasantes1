<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/






class Pendientes extends CI_Controller
{
	
	public function index(){

	
		$result=$this->db->get('permiso','persona','pasante');
		$data=array('consulta'=>$result);
		$this->load->view('header');
		$this->load->view('encargado/pendientes',$data);
		$this->load->view('footer');
	}

	
	
}