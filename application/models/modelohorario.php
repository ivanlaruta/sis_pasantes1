<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelohorario extends CI_Model {
	 public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct(); 
         
        //cargamos la base de datos
        $this->load->database();
    }

	function nuevo_horario($param)
    {
       $campos = array(
        'id_pasante' =>$param['id_pasante'] ,
			'pasante' =>$param['pasante'] ,
			'dia' =>$param['dia'] , 
			'hora_inicio' =>$param['hora_inicio'] ,
			'hora_fin' =>$param['hora_fin'] ,
			
			);
		
		$this ->db->insert('horario',$campos);
		
    }
	public function ver(){
       
        $consulta=$this->db->query("SELECT * FROM horario;");
     
        return $consulta->result();
    }
    
    
	 function delete($id){
		$this->db->where('id',$id);
		return $this->db->delete('horario');
	}
	function obtener($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('horario');
        $fila = $query->row();
        return $fila;
    }
 
	  public function getDataByID($id)
 { 
 $query=$this->db->get_where('horario',array('id'=>$id));
 return $query->row_array();
 }
 function get_info(){
        $query = $this->db->query("SELECT * FROM horario");
        return $query->result();
    }
    function searchbyname($name){
        $query = $this->db->query("SELECT * FROM horario WHERE dia LIKE ('$name%')");
        return $query->result();
    }
}