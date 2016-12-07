<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>

<div align="center">
<br>
 	<h4>Lista de permisos:</h4>
 	<br>

</div>


<div align="center">
		<table class="table table-bordered">
			
				<thead>
					<th>Numero</th>
					<th>Nombre</th>
					<th>Fecha de solicitud</th>
					<th>Fecha de permiso</th>
					<th>Descripcion</th>
					<th>Editar</th>
				</thead>

				<tbody>
					<?php
					if(is_array($listarSolicitudes) && !empty($listarSolicitudes))
					{
						foreach ($listarSolicitudes as $up ) 
						{
						?>
						
						<tr>
							<td><?php echo $up -> id_permiso ?></td>
							<td><?php echo $up -> nombre ?></td>
							<td><?php echo $up -> fecha_actual ?></td>
							<td><?php echo $up -> fecha_solicitud ?></td>
							<td><?php echo $up -> descripcion ?></td>
							<td><a href="<?php echo base_url();?>index.php/controlListaSolicitudesEncargado" class="btn btn-primary" style='width:160px'>editar</a></td>
							
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
	<a href="<?php echo base_url();?>index.php/Encargado" class="btn btn-primary" style='width:160px'>aceptar</a>
</div>
</body>
