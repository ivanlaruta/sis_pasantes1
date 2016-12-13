


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

		$this->db->select('ap.id_actividad, a.actividad, ap.fecha');
		$this->db->from('actividad_pasante ap');
		$this->db->join('pasante p','ap.id_pasante = p.id_pasante');
		$this->db->join('actividad a', 'ap.id_actividad = a.id_actividad');
		$this->db->where('p.id_pasante', $identificador);
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
	