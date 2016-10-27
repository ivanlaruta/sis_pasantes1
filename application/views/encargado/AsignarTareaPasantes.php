<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>

<div align="center">
<br>
 	<h4>lista pasantes:</h4>
 	<br>

</div>


<div align="center">
		<table class="table">
			
				<thead>
					<th>Nombres</th>
					<th>Apelidos</th>
					<th>Carrera</th>
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
	<a href="<?php echo base_url();?>index.php/Jefe" class="btn btn-primary" style='width:160px'>aceptar</a>
</div>
</body>
