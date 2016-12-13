<?php
/**
* 
*/
class mTareaPasante extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function guardar($param)
	{
		$campos = array(
			'id_pasante' =>$param['id_pasante'] ,
			'id_actividad' =>$param['id_actividad'] ,
			'fecha' =>$param['fecha'] ,
			'cat_estado_act' =>$param['cat_estado_act'] ,
			'id_encargado' =>$param['id_encargado'] ,
			
			);
		$this ->db->insert('actividad_pasante',$campos);
	}



	public function listar ()
	{
/*select pe.nombres,pe.apellidos, ac.actividad,acp.fecha,acp.cat_estado_act,en.nombres,en.apellidos
from persona pe, persona en, actividad ac, actividad_pasante acp, pasante pa , encargado enc
where pe.id_persona = pa.id_persona
and   pa.id_pasante = acp.id_pasante
and   en.id_persona = enc.id_persona
and   enc.id_encargado = acp.id_encargado
and   ac.id_actividad = acp.id_actividad*/
		

		$this->db->select(' pe.nombres,pe.apellidos, ac.actividad,acp.fecha,acp.cat_estado_act');
		$this->db->from(' persona pe, persona en, actividad ac, actividad_pasante acp, pasante pa , encargado enc');
		$this->db->where('pe.id_persona = pa.id_persona');
		$this->db->where('pa.id_pasante = acp.id_pasante');
		$this->db->where('en.id_persona = enc.id_persona');
		$this->db->where('enc.id_encargado = acp.id_encargado');
		$this->db->where('ac.id_actividad = acp.id_actividad');


		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			return $resultado -> result();
		}
		return FALSE;
	}
}
?>
	