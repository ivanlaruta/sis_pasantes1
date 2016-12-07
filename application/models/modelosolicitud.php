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


public function listarSolicitudes($identificador){

        $this->db->select('p.id_permiso, pe.nombres, p.fecha_solicitud, p.descripcion, p.fecha_actual');
        $this->db->from('permiso p');
        $this->db->join('pasante pa','p.id_pasante = pa.id_pasante');
        $this->db->join('persona pe', 'pe.id_persona = pa.id_persona');
        $this->db->where('pe.id_persona', $identificador);
        //$this->db->where($identificador, $this->session->userdata('idusuario'));
        //$this->session->set_userdata('idusuario', $identificador);

        
        $resultados = $this->db->get();
        if ($resultados->num_rows()>0) {
            return $resultados -> result();

            //redirect('controlEliminarPasante');
        }
    }
}

?>
	