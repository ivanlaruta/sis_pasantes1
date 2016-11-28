<?php
class Mod_horarios extends CI_Model{
    
    function devolver_dias()
    {
        $sql = $this->db->query('SELECT id_dia, dias FROM dias');
        foreach ($sql->result() as $reg) {
            $data[$reg->id_dia] = $reg->dias;
        }
        return $data;
     }
}
