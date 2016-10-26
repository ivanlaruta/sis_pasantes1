<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
* 
*/
class Con_Login extends MY_Controller {

	public function logged_in_check()	
	
	{



		if ($this->session->userdata("logged_in")) 
		{
			redirect("principal");	
		}



	}


	public function index()

	{
		$this->logged_in_check();

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules("usuario", "Usuario", "trim|required");
		$this->form_validation->set_rules("password","Password","trim|required");

		if ($this->form_validation->run() == true) 
			{
				$this->load->model('mod_login','auth');

				$status = $this->auth->validate();

					if ($status == ERR_INVALID_USERNAME) {
						$this->session->set_flashdata("error","Usuario Invalido");

					}

					elseif ($status == ERR_INVALID_PASSWORD) {
							$this->session->set_flashdata("error","Contraseña Incorrecta");
						}	

					else{

						$this->session->set_userdata($this->auth->get_data());

						$this->session->set_userdata("logged_in",true);

						redirect("principal");
					}		


			}		

		
			$this->load->view("header");
			$this->load->view("vis_login");
			$this->load->view("footer");




	}


	public function logout()
	{

		$this->session->unset_userdata("logged_in");
		$this->session->sess_destroy();
		redirect("con_login");
	}
}

