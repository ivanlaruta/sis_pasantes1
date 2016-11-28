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

     function devolver_horas($id_dia)

	{
		$sql = $this->db->select('id_horario, hora_fin')
						->where('id_dia', $iddia)
						->get('horario');

		foreach ($sql->result_array() as $reg) {
			$data[$reg['id_horario']]=$reg['hora_fin'];
		}

		echo json_encode($data);
     }




}
