<?php
/**
* 
*/
class Mod_versolicitud extends CI_Model
{



public function getPost(){

	return $this->db->get('permiso','persona','pasante');



}

//$cat_carrera,$nombres,$apellidos
public function getPostByName()
{



		$this->db->select('f.fecha,f.cat_estado_per, c.cat_carrera, n.nombres,n.apellidos');
		$this->db->from('permiso f');
		$this->db->join('pasante c','f.id_pasante=c.id_pasante','inner');
		$this->db->join('persona n','n.id_persona=c.id_persona','inner');

		//$this->db->where('c.cat_carrera',$cat_carrera);
		//$this->db->where('n.nombres',$nombres);
		//$this->db->where('n.apellidos',$apellidos);


//$this->db->query("SELECT f.fecha,f.cat_estado_per, c.cat_carrera, n.nombres,n.apellidos
//FROM permiso f
//inner join pasante c on f.id_pasante=c.id_pasante
//inner join persona n on n.id_persona=c.id_persona
//WHERE c.cat_carrera = '".$cat_carrera."'
//WHERE n.nombres = '".$nombres."'
//WHERE n.apellidos = '".$apellidos"'

//");

return $result->row();

}



public function listarSolicitudes2 ($id_permiso)
	{
		$this->db->select('f.fecha,f.cat_estado_per, c.cat_carrera, n.nombres,n.apellidos');
		$this->db->from('permiso f, pasante c,persona n');
		$this->db->where('c.id_persona=n.id_persona');
		$this->db->where('c.id_pasante=f.id_pasante');		
		$this->db->where('f.id_permiso',$id_permiso);

		$resultado = $this->db->get();
		
		if ($resultado->num_rows()>0) {
			 return $resultado -> result();
		}
	}



}