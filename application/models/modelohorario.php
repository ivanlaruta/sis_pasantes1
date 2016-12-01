<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelohorario extends CI_Model {
	 public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct(); 
         
        //cargamos la base de datos
        $this->load->database();
    }

	function guardar($data){
		$this->db->insert("horario",$data);

		
	}
	public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM horario;");
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
    
        
	function actualizar($id,$data){
		$this->db->where('id_empleado', $id);
		$this->db->update('empleados', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	 public function eliminar($id){
       $consulta=$this->db->query("DELETE FROM horario WHERE id=$id");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
}