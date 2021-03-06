


<?php
/**
* 
*/
class mPasante extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardarPasante($param)
	{
		$campos = array(
			'cat_carrera' =>$param['cat_carrera'] ,
			'id_persona' =>$param['id_persona'] 
			);
		$this ->db->insert('pasante',$campos);
	}

	public function listarPasantes ()
	{
		$this->db->select('pe.*, pa.*');
		$this->db->from('persona pe ,pasante pa');
		$this->db->where('pe.id_persona = pa.id_persona');
		$this->db->where('pe.id_rol', 3);		

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			return $resultado -> result();
		}
		return FALSE;
	}

	public function listarPasantes2 ()
	{
		$this->db->select('pe.id_persona,pe.nombres, pe.apellidos, pa.id_pasante');
		$this->db->from('persona pe ,pasante pa');
		$this->db->where('pe.id_persona = pa.id_persona');
		$this->db->where('pe.id_rol', 3);		

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			 return $resultado -> result();
		}
	}

	public function getIdPasante ($idusuario)
	{
		$this->db->select('pa.id_pasante');
		$this->db->from('persona pe ,pasante pa');
		$this->db->where('pe.id_persona = pa.id_persona');
		$this->db->where('pe.id_persona', $idusuario);		

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			 return $resultado -> result();
		}
		print_r($result);
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
				'nom' => $r->usuario,
'direccion' => $r->direccion,
				'nombrerol' => $r->nombres." ".$r->apellidos,
			
				'id_rol'=> $r->id_rol,
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

	public function eliminar($id){
		//$this->db->where('id_persona', $id);		
		//$this->db->delete('persona');
		$this->db->where('id_pasante', $id);		
		$this->db->delete('pasante');
		if ($this->db->affected_rows() > 0) {
			echo "<script type='text/javascript'>
				alert('se elimino correctamente');
				</script>";
			redirect('controlEliminarPasante');
		}
		else{
			echo "hecho";;
		}

	}
}

?>
	