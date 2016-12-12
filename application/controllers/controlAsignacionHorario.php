<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlAsignacionHorario extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("asignacionhorarios");
	    $this->load->library("pagination");
	}

	function index()

	{

        
       
		$config["base_url"] = base_url().'controlAsignacionHorario/index/';

		$config["total_rows"] = $this->asignacionhorarios->record_count();
		$config["per_page"] = 4;
		$config["uri_segment"] = 2;
 
		$this->pagination->initialize($config);
 
		$page = ($this->uri->segment(2))? $this->uri->segment(2) : 0;
		$data["results"] = $this->asignacionhorarios
			->get_horario($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
 
		
        //array asociativo con la llamada al metodo
        //del modelo
       // $usuarios["ver"]=$this->asignacionhorarios->ver();
         
       
		$this->load->view('header');
		$this->load->view('encargado/asignacionHorario',$data);
		$this->load->view('footer');

	}

	//controlador para añadir
    public function add(){
         
        $param['pasante'] = $this -> input -> post('pasante');
		$param['dia'] =$this -> input -> post('dia');
		$param['hora_inicio'] =$this -> input -> post('hora_inicio');
		$param['hora_fin'] =$this -> input -> post('hora_fin');
		

		$this->modelohorario->nuevo_horario($param);
		redirect('horarios');
    }
     //Controlador para eliminar
   function delete(){
	$id = $this->uri->segment(3);
		$delete = $this->modelohorario->delete($id);
		redirect('horarios');
		
	}

	function mostrar(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscar");
			$datos = $this->asignacionhorarios->mostrar($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	

	
}

