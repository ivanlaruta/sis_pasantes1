<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* '*' = representa a todos los usuarios registrados en la base de datos sin importar su rol de pasante,encargado, o jefe
* '@' = representa a un usuario ya validado
*/

class MY_Controller extends CI_Controller
{

	
	protected $access="*";

	public function __construct()
	{
		parent::__construct();

		$this->login_check();
	}


	public function login_check()

	{

		if ($this->access != "*") 
		{
			if (! $this->permission_check()) 
			{
				$this->load->view("adver");
			}

		if (! $this->session->userdata("logged_in")) {
			redirect("vis_login");
		}


		}




	}



	public function permission_check()

	{

		if ($this->access=="@") 
		{
			return true;
		}

		else
		{
			$access=is_array($this->access) ?
				$this->access :
				explode(",", $this->access);
			if (in_array($this->session->userdata("id_rol"), array_map("trim", $access))) 
			{
				return true;

			}

				return false;
		}

	}






}



