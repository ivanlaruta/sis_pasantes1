<?php
/**
* 
*/
class mTareaPasante extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function guardar($param)
	{
		$campos = array(
			'id_pasante' =>$param['id_pasante'] ,
			'id_actividad' =>$param['id_actividad'] ,
			'fecha' =>$param['fecha'] ,
			'cat_estado_act' =>$param['cat_estado_act'] ,
			'id_encargado' =>$param['id_encargado'] ,
			'descripcion' =>$param['descripcion'] 
			);
		$this ->db->insert('actividad_pasante',$campos);
	}
}
?>
	