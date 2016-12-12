<?php
/**
* 
*/
class RegistroPasante extends CI_Controller



{
	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('modeloRegistroPersona');
		$this -> load -> model('registrarPasante');
		$this -> load->library('encrypt');
		$this -> load->model('mCatalogo');
	}

	public function index(){

		$datos['resultado'] = $this->mCatalogo->listarCarreras();
		$this->load->helper('form');
		$this->load->view('header');
		$this -> load-> view ('encargado/RegistroPasante', $datos);
		//$this -> load-> view ('encargado/RegistroPasante');
		$this->load->view('footer');
	}
	//public function guardar(){
		#persona
	//	$param['carnet_identidad'] = $this -> input -> post('carnet_identidad');
	//	$param['nombres'] =$this -> input -> post('nombres');
	//	$param['apellidos'] =$this -> input -> post('apellidos');
	//	$param['direccion'] =$this -> input -> post('direccion');
	//	$param['telefono'] =$this -> input -> post('telefono');
	//	$param['email'] =$this -> input -> post('email');
	//	$param['fecha_nacimiento'] =$this -> input -> post('fecha_nacimiento');
	//	$param['usuario'] =$this -> input -> post('usuario');
		#$param['password'] =$this -> encrypt ->encode($this -> input -> post('password'));
	//	$param['password'] =$this -> input -> post('password');
	//	$param['id_rol'] =3;
	//	#pasante
	#	$paramusu['cat_carrera'] =$this -> input -> post('cat_carrera');
		
	#	$lastId = $this->modeloRegistroPersona->guardar($param);
	#	if($lastId > 0){
	#		$paramusu['id_persona'] = $lastId;
	#		$this -> registrarPasante -> guardar($paramusu);
	#			echo "<script type='text/javascript'>
	#			alert('guardado correcto');
	#			</script>";

	#					$this->load->view('header');
	#					$this -> load-> view ('encargado/controlPasantes');
	#					$this->load->view('footer');
	#	}
	#}

	public function validar(){

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
				'field' => 'cat_carrera',
				'label' => 'Carrera',
				'rules' => 'required'
			)


	);

		$this->form_validation->set_error_delimiters('<div style="color:Red">','</div>');

		$this->form_validation->set_rules($rules);

		//$this->load->helper('form');
		//$this->load->library('form_validation');
		//$this->form_validation->set_rules('carnet_identidad', 'carnet_identidad', 'required|min_length[5]|max_length[12]');
		//$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		//$this->form_validation->set_rules('nombres', 'nombres', 'required|min_length[5]|max_length[12]|alphaNumeric');
		//$this->form_validation->set_rules('apellidos', 'apellidos', 'required|min_length[5]|max_length[12]');
		//$this->form_validation->set_rules('direccion', 'direccion',  'required|min_length[5]|max_length[12]');
		//$this->form_validation->set_rules('telefono', 'telefono', 'required|min_length[5]|max_length[12]');
		//$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		//$this->form_validation->set_rules('fecha_nacimiento', 'fecha de nacimiento', 'required|min_length[5]|max_length[12]');
		//$this->form_validation->set_rules('usuario', 'usuario', 'required|min_length[5]|max_length[12]');
		//$this->form_validation->set_rules('password', 'password', 'password', 'required');
		//$this->form_validation->set_rules('cat_carrera', 'cat_carrera', 'required|min_length[5]|max_length[12]');

		if ($this->form_validation->run() === true) {
			
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
			$param['id_rol'] =3;
			#pasante
			$paramusu['cat_carrera'] =$this -> input -> post('cat_carrera');
			
			$lastId = $this->modeloRegistroPersona->guardar($param);
			if($lastId > 0){
				$paramusu['id_persona'] = $lastId;
				$this -> registrarPasante -> guardar($paramusu);
					echo "<script type='text/javascript'>
					alert('guardado correcto');
					</script>";

					$this->load->view('header');
		$this->load->view('encargado/encargado');
		$this->load->view('footer');
							
			}

		} 
		else
		{
		$datos['resultado'] = $this->mCatalogo->listarCarreras();
		$this->load->helper('form');
		$this->load->view('header');
		$this -> load-> view ('encargado/RegistroPasante', $datos);
		//$this -> load-> view ('encargado/RegistroPasante');
		$this->load->view('footer');
		}
	}
}



