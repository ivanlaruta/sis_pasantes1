<?php


class controlPruebaListaPasante extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this ->load->model('mPruebaListaPasante');
	}

	public function index(){

		$data['titulo'] = 'Prueba de update';
		$data['persona'] = $this->mPruebaListaPasante->mostrar();
		$this->load->view('pasante/pruebaListaPasante',$data);
	}

	public function mostrar_datos(){
		$id = $this->input->post('id_persona');
		$edicion = $this->mPruebaListaPasante->obtener($id);

		$carnet_identidad = array(
			'name' => 'carnet_identidad',
			'id' => 'carnet_identidad',
			'value' => $edicion->carnet_identidad
			);

		$nombres = array(
			'name' => 'nombres',
			'id' => 'nombres',
			'value' => $edicion->nombres
			);

		$apellidos = array(
			'name' => 'apellidos',
			'id' => 'apellidos',
			'value' => $edicion->apellidos
			);

		$direccion = array(
			'name' => 'direccion',
			'id' => 'direccion',
			'value' => $edicion->direccion
			);

		$telefono = array(
			'name' => 'telefono',
			'id' => 'telefono',
			'value' => $edicion->telefono
			);

		$email = array(
			'name' => 'email',
			'id' => 'email',
			'value' => $edicion->email
			);

		$fecha_nacimiento = array(
			'name' => 'fecha_nacimiento',
			'id' => 'fecha_nacimiento',
			'value' => $edicion->fecha_nacimiento
			);

		$usuario = array(
			'name' => 'usuario',
			'id' => 'usuario',
			'value' => $edicion->usuario
			);

		$password = array(
			'name' => 'password',
			'id' => 'password',
			'value' => $edicion->password
			);

		$submit = array(
			'name' => 'editando',
			'id' => 'editando',
			'value' => 'Editar mensaje'
			);

		$oculto = array(
			'id_persona' => $id
			);

			?>
			<?= form_open(base_url(). 'controlPruebaListaPasante/actualizar_datos','', $oculto) ?>
			<?= form_label('Carnet identidad') ?>
			<?= form_input($carnet_identidad) ?>
			<?= form_label('Nombre') ?>
			<?= form_input($nombres) ?>
			<?= form_label('Apellido') ?>
			<?= form_input($apellidos) ?>
			<?= form_label('Direccion') ?>
			<?= form_input($direccion) ?>
			<?= form_label('Telefono') ?>
			<?= form_input($telefono) ?>
			<?= form_label('Email') ?>
			<?= form_input($email) ?>
			<?= form_label('Fecha de nacimiento') ?>
			<?= form_input($fecha_nacimiento) ?>
			<?= form_label('Usuario') ?>
			<?= form_input($usuario) ?>
			<?= form_label('Password') ?>
			<?= form_input($password) ?>

			<?= form_submit($submit) ?>
			<?php echo form_close() ?>
			<?php


	}

	public function actualizar_datos(){
		$id = $this->input->post('id_persona');
		$carnet_identidad = $this->input->post('carnet_identidad');
		$nombres = $this->input->post('nombres');
		$apellidos = $this->input->post('apellidos');
		$direccion = $this->input->post('direccion');
		$telefono = $this->input->post('telefono');
		$email = $this->input->post('email');
		$fecha_nacimiento = $this->input->post('fecha_nacimiento');
		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');

		$actualizar = $this->mPruebaListaPasante->actualizar_datos($id, $carnet_identidad, $nombres, $apellidos, $direccion, $telefono, $email, $fecha_nacimiento, $usuario, $password);

		if ($actualizar) {
			$this->session->set_flashdata('actualizado', 'El mensaje se actualizo correctamente');
			redirect ('../controlPruebaListaPasante', 'refresh');
		}

	}
/*	public function index()
	{

		
		$this ->load->model('mPruebaListaPasante');
		$data = array();
		$data["listarPasantes"] = $this -> mPruebaListaPasante -> listarPasantes();

		$this->load->view('header');
		$this->load->view('pasante/pruebaListaPasante',$data,FALSE);
		$this->load->view('footer');
	}*/
}
