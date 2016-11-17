


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


}

?>
	