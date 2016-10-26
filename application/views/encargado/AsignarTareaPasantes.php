

<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>

<div align="center">
<br>
 	<h4>Seleccione a los Pasantes que seran asiganados a la tarea:</h4>
 	<br>

</div>



<div align="center">
		<table class="table">
			
				<thead>
					<th>Nombres</th>
					<th>Apelidos</th>
					<th>Carrera</th>
					<th>Asignar Tarea</th>
				</thead>

				<tbody>
					<?php
					if(is_array($listarPasantes) && !empty($listarPasantes))
					{
						foreach ($listarPasantes as $up ) 
						{
						?>
						<tr>
							<td><?php echo $up -> nombres ?></td>
							<td><?php echo $up -> apellidos ?></td>
							<td><?php echo $up -> cat_carrera ?></td>
							<td height="60"><a href="" class="btn btn-primary" style='width:110px'>Asignar</a>
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
	<a href="" class="btn btn-primary" style='width:160px'>FInalizar</a>&nbsp;<a href="" class="btn btn-primary" style='width:160px'>Cancelar</a>
</div>
</body>
