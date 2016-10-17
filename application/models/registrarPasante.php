<?php
/**
* 
*/
class RegistrarPasante extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param){
		$campos = array(
			'cat_carrera' =>$param['cat_carrera'] ,
			'id_persona' =>$param['id_persona'] 
			);

		$this ->db->insert('pasante',$campos);
		
	}
}

?>
	