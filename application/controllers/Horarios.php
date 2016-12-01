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
		

		$lastId =$this->modelohorario->nuevo_horario($param);
		if($lastId > 0){
			$paramusu['id'] = $lastId;
			$this -> Horario -> guardar($paramusu);
				echo "<script type='text/javascript'>
				alert('guardado correcto');
				</script>";

						$this->load->view('header');
						$this -> load-> view ('pasante/horarios');
						$this->load->view('footer');
		}
    }
     //Controlador para eliminar
    public function delete($id)
    {
     
        $this->db->where('id', $id);
        $this->db->delete('horario');
        redirect('Horarios/index');
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

	

	
}

