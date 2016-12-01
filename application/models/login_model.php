<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class login_model extends CI_Model
{
	public $variable;

	public function _construct(){
		parent::_construct(); 
	}

	public function login ($usuario,$password)
	{
		$this->db->select('p.id_persona, p.nombres, p.apellidos, r.rol,r.id_rol, p.carnet_identidad, p.direccion, p.telefono, p.email, p.fecha_nacimiento, p.usuario, p.password');
		$this->db->from('persona p');
		$this->db->join('rol r','p.id_rol = r.id_rol');
		
		$this->db->where('p.usuario', $usuario);
		$this->db->where('p.password', $password);		


		$resultados = $this->db->get();
		if ($resultados->num_rows()==1) {
			$r = $resultados -> row(); 

			$nombre = array(
				'idusuario' => $r->id_persona,
				'nombre'=>$r->nombres." ".$r->apellidos,
				'nombrerol' => $r->nombres." ".$r->apellidos,
				'nombres' => $r->nombres,
				'apellidos' => $r->apellidos,
				'id_rol'=> $r->id_rol,
				'carnet_identidad'=> $r->carnet_identidad,
				'direccion' => $r->direccion,
				'telefono' => $r->telefono,
				'email' => $r->email,
				'fecha_nacimiento' => $r->fecha_nacimiento,
				'usuario' => $r->usuario,
				'password' => $r->password

				);
			$this->session->set_userdata($nombre);
			return TRUE;
		} else {
			//$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			//redirect(base_url().'index.php/Principal','refresh');
			return false;
		}
		
	}

	public function idpasante ($usuario)
	{
		$this->db->select('pa.id_pasante');
		$this->db->from('persona p , pasante pa');
		$this->db->where('p.id_persona', 'pa.id_persona');
		$this->db->where('p.id_persona', $usuario);


		$resultados = $this->db->get();
		if ($resultados->num_rows()==1) {
			$r = $resultados -> row(); 

			$idpa = array(
				'idpasante' => $r->id_persona,
				);

			return $idpa -> result();

		} else {
			//$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			//redirect(base_url().'index.php/Principal','refresh');
			return false;
		}
		
	}
}