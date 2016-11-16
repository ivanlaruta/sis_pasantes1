<?php
/**
* 
*/
class Mod_permiso extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function enviar($param)

	{

		$campos = array(
			'fecha_permiso' => $param['fecha_permiso'],
			'descripcion' => $param['descripcion']

			);
		$this->db->insert('permiso',$campos);
	}



}