<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	

<?php
foreach ($consulta as $fila) {
    
}
?>
	<form action="<?php echo base_url('index.php/controlIngresarEstadoPasante/actualizar')?>" method="POST">
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h4>Registro de Permiso</h4></center>
					</td>
				</tr>
				<tr>
									<td colspan="2">
						<center><h5>Ingrese el estado de la tarea, alguna observación y la fecha en que finalizo</h5></center>
					</td>

				</tr>

				<tr>
					<td>.</td>							
				</tr>

				<tr>
					<td><label>Fecha inicio:</label></td>
					<td><input type="text" class="form-control" name="fecha" value="<?php echo $fila->fecha?>" readonly="readonly"></td>
				</tr>


				<tr>
					<td>.</td>							
				</tr>

				<tr>
					<td><label>Numero</label></td>
					<td><input type="text" class="form-control" name="id_permiso" value="<?php echo $fila->id_permiso?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td>.</td>							
				</tr>

				<tr>	
					<td><p><label>Permiso</label></p></td><br>
					<td><p><input type="textarea" class="form-control" name = "descripcion" id="descripcion" value="<?php echo $fila->descripcion?>" readonly="readonly" style="height: 100px;width: 300px"></textarea></p></td>
				
				</tr>

				<tr>
					<td>.</td>							
				</tr>

				<tr>
					<td><label>Estado:</label></td>
					<td><input type="text" class="form-control" name="cat_estado_per" value="<?php echo $fila->cat_estado_per?>"></td>
				</tr>

			</table>
		</div>

		<div align="center">
			<input type="submit" value="Guardar" class="btn btn-primary" style='width:120px'>
			<a href="<?php echo base_url();?>index.php/ControlPasantes" class="btn btn-primary"  style='width:120px'>Cancelar</a>
		</div>	
	</form>

</body>