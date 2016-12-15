<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>

<div align="center">
<br>
 	<h4>Lista de tareas:</h4>
 	<br>

</div>


<div align="center">
		<table class="table table-bordered">
			
				<thead>
					<th>Numero</th>
					<th>Actividad</th>
					<th>Fecha</th>
					<th>Estado</th>
					<th>Encargado</th>
					<th>Editar</th>					
					
				</thead>

				<tbody>
					<?php
					if(is_array($listarTareas) && !empty($listarTareas))
					{
						foreach ($listarTareas as $up ) 
						{
						?>
						
						<tr>
							<td><?php echo $up -> id_actividad ?></td>
							<td><?php echo $up -> actividad ?></td>
							<td><?php echo $up -> fecha ?></td>
							<td><?php echo $up -> cat_estado_act ?></td>
							<td><?php echo $up -> id_encargado ?></td>
							<td><a href="<?php echo base_url('index.php/controlIngresarEstadoPasante/editar').'?id_actividad='.$up->id_actividad;?>" class="btn btn-primary" style='width:160px'>Editar</a></td>
							
					<br>
				</td>
						</tr>
						<?php
						}
					}

					?>
				</tbody>
				
		</table>

</div>

<div align="center">
	<a href="<?php echo base_url();?>index.php/Pasante" class="btn btn-primary" style='width:160px'>aceptar</a>
</div>
</body>
