	<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
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