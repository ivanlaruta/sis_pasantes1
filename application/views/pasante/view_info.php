<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
 <thead class="thead-inverse">
                    <tr>
                        <td colspan="2">Pasante</td>
                        <td colspan="2">Dia</td>
                        <td colspan="1">Hora Inicio</td>
                         <td colspan="1">Hora Fin</td>
                          <td colspan="3">Opcion</td>

                    </tr>
            </thead>
    	<?php
			foreach($results as $row){
			$fname = $row->pasante;
			$dia = $row->dia;
			$horainicio = $row->hora_inicio;
            $horafin = $row->hora_fin;
			
		?>
        <tbody>
        	<tr>
            	<td colspan="2"><?php echo $fname; ?></td>
                <td colspan="2"><?php echo $dia; ?></td>
                <td colspan="1"><?php echo $horainicio; ?></td>
                <td colspan="1" ><?php echo $horafin; ?></td>
                <td colspan="2">
 
        <a onclick="if(confirma() == false) return false" href="<?php echo base_url();?>index.php/Horarios/delete/<?=$row->id?>"> Eliminar</a></td>
            
        </td>
 <td><a href="<?php echo base_url();?>pasante/edit/<?=$row->id?>"></a>  </td>
            </tr></tbody>
  
       <?php } ?>
      
        </table>