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
			'descripcion' => $param['descripcion'],
			'cat_estado_per' => $param['cat_estado_per'],
			'fecha'=>$param['fecha'],
			'id_pasante'=>$param['id_pasante']

			);
		$this->db->insert('permiso',$campos);
	}



}