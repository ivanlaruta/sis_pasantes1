
<?php
/**
* 
*/
class mPendientes extends CI_Model
{




public function listarsolicitudes ()
	{
		$this->db->select('cat_tipo_permiso,cat_estado_per,fecha,descripcion');
		$this->db->from('permiso');
			

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			 return $resultado -> result();
		}
	}

}