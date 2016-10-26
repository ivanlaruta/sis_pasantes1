<?php
/**
* 
*/
class mPasante extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardarPasante($param)
	{
		$campos = array(
			'cat_carrera' =>$param['cat_carrera'] ,
			'id_persona' =>$param['id_persona'] 
			);
		$this ->db->insert('pasante',$campos);
	}




	public function listarPasantes ()
	{
		$this->db->select('pe.*, pa.*');
		$this->db->from('persona pe ,pasante pa');
		$this->db->where('pe.id_persona = pa.id_persona');
		$this->db->where('pe.id_rol', 3);		

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			return $resultado -> result();
		}
		return FALSE;
	}
}

?>
	