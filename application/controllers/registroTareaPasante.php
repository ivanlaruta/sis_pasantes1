<?php
/**
* 
*/
class RegistroTareaPasante extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();

		$this -> load -> model('mTarea');
		$this -> load -> model('mPasante');
		$this -> load -> model('mEncargado');
		//$this -> load -> model('registrarPasante');
		$this -> load->library('encrypt');
	

	}

	public function index(){

	$datos['resultado'] = $this->mPasante->listarPasantes2();
    
		$this->load->view('header');
		$this -> load-> view ('encargado/RegistroTarea', $datos);
		$this->load->view('footer');
	}

	
	public function guardar(){
		#desc


		$param['actividad'] = $this -> input -> post('actividad');
		$lastId = $this->mTarea->guardar($param);


		$datos['resultado'] = $this->mPasante->listarPasantes2();
		$datos2['resultado2'] = $this->mEncargado->listarEncargado($_POST['encargado']);
		$idtarea['idtareas'] = $lastId;
		/*echo "<script type='text/javascript'>
				alert('guardado correcto');
				</script>";*/

						$this->load->view('header',$idtarea);
					
						$this -> load-> view ('encargado/registroTareaPasantes', $datos);
						$this->load->view('footer');


	}
}