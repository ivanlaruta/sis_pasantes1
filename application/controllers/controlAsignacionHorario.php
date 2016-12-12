<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlAsignacionHorario extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("asignacionhorarios");
	    $this->load->library("pagination");
	}

	public function index($offset=0){
  
  $config['total_rows'] = $this->asignacionhorarios->total();
  
  $config['base_url'] = base_url()."index.php/controlAsignacionHorario";
  $config['per_page'] = 4;
  $config['uri_segment'] = '4';

  
  $this->pagination->initialize($config);
   

  $query = $this->asignacionhorarios->gethorario(4,$this->uri->segment(4));

  
  $data['result'] = null;
  
  if($query){
   $data['result'] =  $query;
  }

  
       
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
function display_info(){
		$this->load->model('asignacionhorarios');
		
		$data['results'] = $this->asignacionhorarios->get_info();
		
		$this->load->view('encargado/view_info', $data);
	}
	function search_name(){
		if(isset($_GET['name'])){
			$name=$_GET['name'];
		}
		$this->load->model('asignacionhorarios');
		
		$data['results'] = $this->asignacionhorarios->searchbyname($name);
		
		$this->load->view('encargado/view_info', $data);
	}
	

	
}

