<?php
/**
* 
*/
class Mod_versolicitud extends CI_Model
{



public function getPost(){

	return $this->db->get('permiso');



}

//$cat_carrera,$nombres,$apellidos
public function getPostByName($name='')
{

$this->db->query("SELECT * FROM permiso  WHERE id_permiso='1',$name");




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



}