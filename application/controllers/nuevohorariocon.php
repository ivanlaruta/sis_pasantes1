<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nuevohorariocon extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();

		$this -> load -> model('nuevohorario');
		$this -> load->library('encrypt');
		$this -> load->model('mCatalogo');
	    
	   
	}

	public function index($offset=0){
  
 $datos['resultado'] = $this->mCatalogo->listarPasante();
		$this->load->helper('form');
		$this->load->view('header');
		$this -> load-> view ('encargado/nuevohorarioview', $datos);
		//$this -> load-> view ('encargado/RegistroPasante');
		$this->load->view('footer');


	}
	//controlador para añadir
    public function add(){
        $param['id_pasante'] = $this -> input -> post('id_pasante');
        $param['pasante'] = $this -> input -> post('pasante');
		$param['dia'] =$this -> input -> post('dia');
		$param['hora_inicio'] =$this -> input -> post('hora_inicio');
		$param['hora_fin'] =$this -> input -> post('hora_fin');
		

		$this->nuevohorario->nuevo_horario($param);
		redirect('encargado');
    }

	
}

