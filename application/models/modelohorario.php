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
       
        $consulta=$this->db->query("SELECT * FROM horario;");
     
        return $consulta->result();
    }
    
        
	

	 function delete($id){
		$this->db->where('id',$id);
		return $this->db->delete('horario');
	}
}