<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class login_model extends CI_Model
{
	public $variable;

	public function _construct(){
		parent::_construct(); 
	}

	public function login ($usuario,$password)
	{
		$this->db->where('usuario', $usuario);
		$this->db->where('password', $password);		


		$resultados = $this->db->get('persona');
		if ($resultados->num_rows()>0) {
			return $resultados -> row(); 

			$nombre = array(
				'idusuario' => $r->id_persona,
				'nombre' => $r->nombres.",".$r->apellidos
				);
			$this->session->set_userdata($nombre);
			return TRUE;
		} else {
			return FALSE;
		}
		
	}
}