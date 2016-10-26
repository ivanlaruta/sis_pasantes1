<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Principal extends CI_Controller {


	public function _construct(){
		parent::_construct(); 
	} 

	public function index()
	{

		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');

		if ($this->session->userdata('usuario')) {
			//redirect('Encargado');
			$idrol=$this->session->userdata('id_rol');
				if($idrol==3)
				{
					$this->session->set_userdata('usuario', $_POST['usuario']);
					redirect('Pasante');
				}
				if($idrol==2)
				{
					$this->session->set_userdata('usuario', $_POST['usuario']);
					redirect('Encargado');
				}
				if($idrol==1)
				{
					$this->session->set_userdata('usuario', $_POST['usuario']);
					redirect('jefe');
				}
		}

		if (isset($_POST['password'])) {
			
		$this->load->model('login_model');
			if($this->login_model->login($_POST['usuario'],$_POST['password']))
			{	
				$idrol=$this->session->userdata('id_rol');
				if($idrol==3)
				{
					$this->session->set_userdata('usuario', $_POST['usuario']);
					redirect('Pasante');
				}
				if($idrol==2)
				{
					$this->session->set_userdata('usuario', $_POST['usuario']);
					redirect('Encargado');
				}
				if($idrol==1)
				{
					$this->session->set_userdata('usuario', $_POST['usuario']);
					redirect('jefe');
				}
			}
			else
			{
				//redirect('welcome');
				echo "<script type='text/javascript'>
				alert('Datos incorrectos, intente de nuevo');
				</script>";
			}
		}		
		$this->load->view('Principal.php');

	} 

	public function logout(){
		$this->session->sess_destroy();
		redirect('Principal');
	}
}
