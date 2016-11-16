<?php
/**
* 
*/
class modelosolicitud extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	
	}

	function get_permisos(){

    // armamos la consulta
    $query = $this->db-> query('SELECT id_permiso,cat_tipo_permiso FROM public.permiso');

    // si hay resultados
    if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_permiso, ENT_QUOTES)] = 
htmlspecialchars($row->cat_tipo_permiso, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
}
}

?>
	