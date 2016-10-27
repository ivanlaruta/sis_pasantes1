<?php
/**
* 
*/
class mTarea extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param)
	{
		$campos = array(
			'actividad' =>$param['actividad'] 
			);
		$this ->db->insert('actividad',$campos);

		return $this ->db -> insert_id();
	}

}

?>
	