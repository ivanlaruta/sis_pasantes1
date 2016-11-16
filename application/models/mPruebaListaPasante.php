<?php
/**
* 
*/
class mPruebaListaPasante extends CI_Model
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

	public function mostrar(){
		$query = $this->db->get('persona');
		foreach ($query->result() as $fila) {
			$data[] = $fila;
		}
		//result $data;
	}

	public function obtener ($id){

/*		$this->db->select('pe.*, pa.*');
		$this->db->from('persona pe ,pasante pa');
		$this->db->where('pe.id_persona = pa.id_persona');
		$this->db->where('pe.id_rol', 3);*/
		$this->db->where('id_persona', $id);		

		$resultado = $this->db->get('persona');
		
		$fila = $query->row();
		return $fila;
	}

	public function actualizar_datos($id, $carnet_identidad, $nombres, $apellidos, $direccion, $telefono, $email, $fecha_nacimiento, $usuario, $password){
		$data = array(
				'carnet_identidad' => $carnet_identidad,
				'nombres'=>$nombres,
				'apellidos'=>$apellidos,
				'direccion'=>$direccion,
				'telefono'=>$telefono,
				'email'=>$email,
				'fecha_nacimiento'=>$fecha_nacimiento,
				'usuario'=>$usuario,
				'password'=>$password
				);
		$this->db->where('id_persona', $id);
		return $this->db->update('persona', $data);
	}

	public function listarPasantes (){
		
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
		$this->db->select('pe.nombres, pe.apellidos');
		$this->db->from('persona pe ,pasante pa');
		$this->db->where('pe.id_persona = pa.id_persona');
		$this->db->where('pe.id_rol', 3);		

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			 return $resultado -> result();
		}
	}
}

?>
	