<?php
/**
* 
*/
class RegistrarEncargado extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param)
	{
		$campos = array(
			'titulo' =>$param['titulo'] ,
			'cat_turno' =>$param['cat_turno'] ,
			'id_persona' =>$param['id_persona'] 
			);
		$this ->db->insert('encargado',$campos);
	}
}
?>
	