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
           $param['id_pasante'] = $this -> input -> post('id_pasante');
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

    public function edit()
    {
        $id = $this->uri->segment(3);
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a news item';        
        $data['news_item'] = $this->modelohorario->get_news_by_id($id);
        
        $this->form_validation->set_rules('pasante', 'pasante', 'required');
        $this->form_validation->set_rules('dia', 'dia', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('header');
		$this->load->view('pasante/Horarios/edit',$data);
		$this->load->view('footer');
 
        }
        else
        {
            $this->modelohorario->set_news($id);
            //$this->load->view('news/success');
            redirect('horarios');
        }
    }    

	 
}

