<?php
/**
* 
*/
class Mlogin extends CI_Model
{
	
	public function ingresar($usu,$pass){
		$this->db->select('b.id_rol, a.nombres,a.apellidos,b.rol');
		$this->db->from('rol b');
		$this->db->join('persona a','a.id_rol=b.id_rol');
		$this->db->where('a.usuario',$usu);
		$this->db->where('a.password',$pass);

		$resultado = $this->db->get();


		if ($resultado->num_rows() == 1) {
			$r = $resultado->row();

			$s_usuario = array(
				's_idusuario' => $r->id_rol,
				's_usuario'  => $r->nombres.", ".$r->apellidos. ", ".$r->rol
				);

			$this->session->set_userdata($s_usuario);
			return 1;
		}

		else{

			return 0;
		}



	}
}