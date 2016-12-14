<?php
/**
* 
*/
class RegistroEncargado extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('modeloRegistroPersona');
		$this -> load -> model('registrarEncargado');
		$this -> load->library('encrypt');
	}

	public function index(){
		$this->load->view('header');
		$this -> load-> view ('jefe/RegistroEncargado');
		$this->load->view('footer');
	}

	public function guardar(){

		$rules = array(
			array(

				'field' => 'carnet_identidad',
				'label' => 'C.I.',
				'rules' => 'required|integer'
			),

			array(

				'field' => 'nombres',
				'label' => 'Nombres',
				'rules' => 'required|alpha'
			),

			array(
				'field' => 'apellidos',
				'label' => 'Apellidos',
				'rules' => 'required|max_length[25]|alpha'
			),

			array(
				'field' => 'direccion',
				'label' => 'Direccion',
				'rules' => 'required'
			),

			array(
				'field' => 'telefono',
				'label' => 'Telefono',
				'rules' => 'required|min_length[7]|max_length[8]|integer'
			),

			array(
				'field' => 'email',
				'label' => 'Correo',
				'rules' => 'required|valid_email'
			),

			array(
				'field' => 'fecha_nacimiento',
				'label' => 'fecha de nacimiento',
				'rules' => 'required'
			),

			array(
				'field' => 'usuario',
				'label' => 'Usuario',
				'rules' => 'required|alpha'
			),

			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|alpha_numeric'
			),

			array(
				'field' => 'titulo',
				'label' => 'Titulo',
				'rules' => 'required'
			),

			array(
				'field' => 'cat_turno',
				'label' => 'Turno',
				'rules' => 'required'
			)


	);

		$this->form_validation->set_error_delimiters('<div style="color:Red">','</div>');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('integer', 'El campo %s deve poseer solo numeros enteros');
		$this->form_validation->set_message('is_unique', 'El campo %s ya esta registrado');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('max_length', 'El Campo %s debe tener un Maximo de %d Caracteres');


		$this->form_validation->set_rules($rules);
				








		if ($this->form_validation->run() === true) {

		#persona
		$param['carnet_identidad'] = $this -> input -> post('carnet_identidad');
		$param['nombres'] =$this -> input -> post('nombres');
		$param['apellidos'] =$this -> input -> post('apellidos');
		$param['direccion'] =$this -> input -> post('direccion');
		$param['telefono'] =$this -> input -> post('telefono');
		$param['email'] =$this -> input -> post('email');
		$param['fecha_nacimiento'] =$this -> input -> post('fecha_nacimiento');
		$param['usuario'] =$this -> input -> post('usuario');
		#$param['password'] =$this -> encrypt ->encode($this -> input -> post('password'));
		$param['password'] =$this -> input -> post('password');
		$param['id_rol'] =2;
		#encargado
		$paramenc['titulo'] =$this -> input -> post('titulo');
		$paramenc['cat_turno'] =$this -> input -> post('cat_turno');	
		$lastId = $this->modeloRegistroPersona->guardar($param);
		if($lastId > 0){
			$paramenc['id_persona'] = $lastId;
			$this -> registrarEncargado -> guardar($paramenc);

			echo "<script type='text/javascript'>
				alert('guardado correcto');
				</script>";
			}

		}

						$this->load->view('header');
						$this -> load-> view ('jefe/registroEncargado');
						$this->load->view('footer');
		

	}
}