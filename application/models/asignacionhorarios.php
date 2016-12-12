<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asignacionhorarios extends CI_Model {
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
    function obtener($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('horario');
        $fila = $query->row();
        return $fila;
    }
 
    function actualizar($id, $pasante, $dia, $horainicio, $horafin) {
        $data = array(
            'pasante' => $pasante,
            'dia' => $dia,
            'hora_inicio' => $horainicio,
            'hora_fin' => $horafin
        );
        $this->db->where('id', $id);
        return $this->db->update('horario', $data);
    }


     function gethorario($limit=null,$offset=NULL){
  $this->db->select("*");
  $this->db->from('horario');
  $this->db->limit($limit, $offset);
  $query = $this->db->get();
  return $query->result();
 }

 function total(){
  return $this->db->count_all_results('horario');
 }
 function get_info(){
        $query = $this->db->query("SELECT * FROM horario");
        return $query->result();
    }
    function searchbyname($name){
        $query = $this->db->query("SELECT * FROM horario WHERE pasante LIKE ('$name%')");
        return $query->result();
    }
}