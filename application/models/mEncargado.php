


<?php
/**
* 
*/
class mEncargado extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	
	public function listarEncargados ()
	{
		$this->db->select('pe.*, pa.*');
		$this->db->from('persona pe ,encargado pa');
		$this->db->where('pe.id_persona = pa.id_persona');
		$this->db->where('pe.id_rol', 2);		

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			return $resultado -> result();
		}
		return FALSE;
	}

	public function guardarEncargados($param)
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
	