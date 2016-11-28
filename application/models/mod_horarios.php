<?php
class Mod_horarios extends CI_Model{
    
    function get_dias(){

    // armamos la consulta
    $query = $this->db-> query('SELECT id_horario,dia FROM horario');

    // si hay resultados
    if ($query->num_rows() > 0) {
        
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_horario, ENT_QUOTES)] = 
htmlspecialchars($row->dia, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
}
}