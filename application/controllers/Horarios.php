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
         
        //compruebo si se a enviado submit
        if($this->input->post("submit")){
         
        //llamo al metodo add
        $add=$this->modelohorario->add(
                $this->input->post("pasante"),
                $this->input->post("dia"),
                $this->input->post("hora_inicio"),
                $this->input->post("hora_fin")
                );
        }
        if($add==true){
            //Sesion de una sola ejecución
            $this->session->set_flashdata('correcto', 'Usuario añadido correctamente');
        }else{
            $this->session->set_flashdata('incorrecto', 'Usuario añadido correctamente');
        }
         
        //redirecciono la pagina a la url por defecto
        redirect(base_url());
    }
     //Controlador para eliminar
    public function eliminar($id){
        if(is_numeric($id)){
          $eliminar=$this->modelohorario->eliminar($id);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'Usuario eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'Usuario eliminado correctamente');
          }
          redirect(base_url());
        }else{
          redirect(base_url());
        }
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

