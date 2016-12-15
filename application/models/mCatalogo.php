


<?php
/**
* 
*/
class mCatalogo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function listarCarreras ()
	{
		$this->db->select('key');
		$this->db->from('catalogo');
		$this->db->where('catalogo.catalogo','carrera');		

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			return $resultado -> result();
		}
		return FALSE;
	}

public function listarPasante ()
	{
		$this->db->select('nombres,apellidos');
		$this->db->from('persona');
		$this->db->where('persona.id_rol','3');	
				

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			return $resultado -> result();
		}
		return FALSE;
	}
}

?>
	