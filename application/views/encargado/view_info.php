	<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    	<tr>
                        <th width="175">Pasante</th>
                        <th width="175">Dia</th>
                        <th width="226">Hora Inicio</th>
                         <th width="226">Hora Fin</th>
                    </tr>

        <?php
			foreach($results as $row){
			$fname = $row->pasante;
			$dia = $row->dia;
			$horainicio = $row->hora_inicio;
            $horafin = $row->hora_fin;
			
		?>
        	<tr>
            	<td><?php echo $fname; ?></td>
                <td><?php echo $dia; ?></td>
                <td><?php echo $horainicio; ?></td>
                <td><?php echo $horafin; ?></td>
            </tr>
  
       <?php } ?>
        </table>