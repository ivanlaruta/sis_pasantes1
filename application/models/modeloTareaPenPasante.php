


<?php
/**
* 
*/
class modeloTareaPenPasante extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function listarTareas(){

		$this->db->select('ap.id_actividad, ap.fecha, ap.id_encargado, a.actividad');
		$this->db->from('actividad_pasante ap');
		$this->db->join('pasante p','ap.id_pasante = p.id_pasante');
		$this->db->join('actividad a', 'ap.id_actividad = a.id_actividad');
	

		
		$resultados = $this->db->get();
		if ($resultados->num_rows()>0) {
			return $resultados -> result();
		}
	}

	public function listarTareas3($identificador){

		//select ap.fecha, ap.cat_estado_act, a.actividad, ap.id_encargado
//from actividad a, actividad_pasante ap, pasante pa, persona pe
//where pa.id_persona = pe.id_persona
//and ap.id_pasante = pa.id_pasante
//and ap.id_actividad = a.id_actividad

		$this->db->select('ap.id_actividad, ap.fecha, ap.cat_estado_act, a.actividad, ap.id_encargado');
		$this->db->from('actividad a, actividad_pasante ap, pasante pa, persona pe');
		//$this->db->join('pasante p','ap.id_pasante = p.id_pasante');
		//$this->db->join('actividad a', 'ap.id_actividad = a.id_actividad');
		$this->db->where('pa.id_persona = pe.id_persona');
		$this->db->where('ap.id_pasante = pa.id_pasante');
		$this->db->where('ap.id_actividad = a.id_actividad');
		$this->db->where('pe.id_persona', $identificador);
		//$this->db->where($identificador, $this->session->userdata('idusuario'));
		//$this->session->set_userdata('idusuario', $identificador);

		
		$resultados = $this->db->get();
		if ($resultados->num_rows()>0) {
			return $resultados -> result();

			//redirect('controlEliminarPasante');
		}
	}

	public function editar(){
		$sql = "select p.id_pasante, ap.id_actividad, ap.fecha_inicio, ap.id_encargado, a.actividad
			from (pasante p
			inner join actividad_pasante ap
			on p.id_pasante = ap.id_pasante)
			inner join actividad a
			on ap.id_actividad = ?";
		$sql = $this->db->query($sql, $_GET('a.id_actividad'));
		return $sql->result();

	}

}

?>
	