<?php


class Versolicitud extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		//$this->load->model('../models/modelosolicitud');
	}
	public function index()
	{
		
		$result=$this->db->get('permiso');
		$data=array('consulta'=>$result);
		$this->load->view('header');
		$this->load->view('encargado/versolicitud2',$data);
		$this->load->view('footer');
		//$datos['arrProfesiones'] = $this->modelosolicitud->get_permisos();
    }

    public function editar(){
		$this->load->model('Mod_versolicitud');
		$data['consulta']=$this->Mod_versolicitud->editar();
		$this->load->view('header');
		$this->load->view('encargado/versolicitud2', $data);
		$this->load->view('footer');
	}

	
}
//$datos