<?php
/* 

 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nuevohorario extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
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
   
      
    
}
?>