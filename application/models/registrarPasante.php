<?php
/**
* 
*/
class RegistrarPasante extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param)
	{
		$campos = array(
			'cat_carrera' =>$param['cat_carrera'] ,
			'id_persona' =>$param['id_persona'] 
			);
		$this ->db->insert('pasante',$campos);
	}

	public function actualizar($identificador){
		$data = array(
				'id' => $_POST('id_persona'),
				'carnet_identidad' => $_POST('carnet_identidad'),
				'nombres'=>$_POST('nombres'),
				'apellidos'=>$_POST('apellidos'),
				'direccion'=>$_POST('direccion'),
				'telefono'=>$_POST('telefono'),
				'email'=>$_POST('email'),
				'fecha_nacimiento'=>$_POST('fecha_nacimiento'),
				'usuario'=>$_POST('usuario'),
				'password'=>$_POST('password')
				);


		$this->db->where('id_persona', $identificador);
		$this->db->update('persona', $data);

	}
}

?>
	