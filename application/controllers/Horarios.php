<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class horarios extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("modelohorario");
	}

	function index()
	{
		//array asociativo con la llamada al metodo
        //del modelo
        $usuarios["ver"]=$this->modelohorario->ver();
         
       
		$this->load->view('header');
		$this->load->view('pasante/horarios',$usuarios);
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
			$datos = $this->modelohorario->mostrar($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

		public function editform($id)
   {

   $this->load->model('modelohorario');
   $data["user"]=$this->modelohorario->getDataByID($id);
  
   }
   public function edit_data()
  {
  $id=$this->input->post['id'];
  $data['pasante']=$this->input->post('Pasante');
  $data['dia']=$this->input->post('Dia');
   $data['hora_inicio']=$this->input->post('Hora Inicio');
    $data['hora_fin']=$this->input->post('Hora Fin');
  echo $id.",".$data['pasante'].",". $data['dia'].",". $data['hora_incio'].",". $data['hora_fin'];
  $this->db->where('id',$id);
  $this->db->update('horario',$data);  
  redirect('horarios');
  } 
function display_info(){
		$this->load->model('modelohorario');
		
		$data['results'] = $this->modelohorario->get_info();
		
		$this->load->view('pasante/view_info', $data);
	}
	function search_name(){
		if(isset($_GET['name'])){
			$name=$_GET['name'];
		}
		$this->load->model('modelohorario');
		
		$data['results'] = $this->modelohorario->searchbyname($name);
		
		$this->load->view('pasante/view_info', $data);
	}
	
}

