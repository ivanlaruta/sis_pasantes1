<?php
/**
* 
*/
class ModeloRegistroPersona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param){
		$campos = array(
			'carnet_identidad' =>$param['carnet_identidad'] ,
			'nombres' =>$param['nombres'] , 
			'apellidos' =>$param['apellidos'] ,
			'direccion' =>$param['direccion'] ,
			'telefono' =>$param['telefono'] ,
			'email' =>$param['email'] ,
			'fecha_nacimiento' =>$param['fecha_nacimiento'] ,
			'usuario' =>$param['usuario'] ,
			'password' =>$param['password'] ,
			'id_rol' =>$param['id_rol'] 
			);
		
		$this ->db->insert('persona',$campos);
		return $this ->db -> insert_id();
	}
}

?>
		