<?php
/**
* 
*/
class modeloDatosPersonales extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function mostrar(){

		$query=$this->db->get('persona');
		foreach ($query->result() as $fila) {
			$data[] = $fila;
		}
		return $data;
	}

	public function obtener($id){
		$this->db->where('id_persona', $id);
		$query 
	}

	public function mostrarDatos(){
		$this->db->select('pe.*, pa.*');
		$this->db->from('persona pe ,pasante pa');
		$this->db->where('pe.id_persona = pa.id_persona');
		$this->db->where('pe.usuario', $usuario);
		$this->db->where('pe.password', $password);

		$resultados = $this->db->get();
		if ($resultados->num_rows()==1) {
			$r = $resultados -> row(); 

			$nombre = array(
				'idusuario' => $r->id_persona,
				'nombrerol' => $r->nombres." ".$r->apellidos.','.$r->rol,
				'id_rol'=> $r->id_rol
				);
			$this->session->set_userdata($nombre);
			return TRUE;
		} else {
		
			return false;
		}

	}



	public function obtenerEnlace($id){
	//	$this->db->select('pe.*, pa.*');
	//	$this->db->from('persona pe ,pasante pa');
	//	$this->db->where('pe.id_persona = pa.id_persona');
	//	$this->db->where('pe.usuario', $usuario);
	//	$this->db->where('pe.password', $password);
		//$this->db->where('id_persona', $id);
		$this->db->where('id_persona', 3);
		$query = $this->db->get('persona');
		if ($query->num_rows()>0) {
			return $query;
		}else{
			return FALSE;
		}
	}
}

?>
	