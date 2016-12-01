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
			'pasante' =>$param['pasante'] ,
			'dia' =>$param['dia'] , 
			'hora_inicio' =>$param['hora_inicio'] ,
			'hora_fin' =>$param['hora_fin'] ,
			
			);
		
		$this ->db->insert('horario',$campos);
		
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