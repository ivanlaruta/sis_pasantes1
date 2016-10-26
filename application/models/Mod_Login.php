<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
* 
*/
class Mod_Login extends CI_Model
{
	private $table = "persona";
	private $_data = array();

	public function validate()
	{
		$usuario=$this->input->post('usuario');
		$password=$this->input->post('password');



		$this->db->where("usuario",$usuario);

		$query = $this->db->get($this->table);


		if ($query->num_rows()) 
		{
			$row = $query->row_array();
		
			if ($row['password'] == $password) 
			{
				unset($row['password']);
				$this->_data=$row;
					return ERR_NONE;
			}


			return ERR_INVALID_PASSWORD;

		}

		else
		{
			return ERR_INVALID_USERNAME;

		}


	}

	public function get_data()
	{
		return $this->_data;
	}


}