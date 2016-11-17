<?php
/**
* 
*/
class modelohorario extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function listarHorario ()
	{
		$this->db->select('*');
		$this->db->from('registrohorario');
		$resultado = $this->db->get();
		$i=0;
		$cell = array();
		$cellid = array();
			while($resultado = $query->fetch()){
			   $cell[$i] = $resultado['data'];
			   $cellid[$i] = $resultado['cell'];
			   $i++;
		if ($resultado->num_rows()>0) {
			return $resultado -> result();
		}
		return FALSE;
	}


}
?>