<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	
	 	
	<form action="<?php echo base_url();?>index.php/RegistroTareaEncargado/guardar" method="POST">
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h4>Registro de Tarea</h4></center>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center><h5>Porfavor ingrese la descripcion de la tarea nueva y pulse siguiente para asignarla a pasantes.</h5></center>
					</td>
				</tr>

				<tr>	
					<td><p><label>Descrpcion:</label></p></td><br>
					<td><p><input type="textarea" class="form-control" name = "actividad" placeholder=" Describa la tarea" style="height: 150px;width: 500px"></textarea></p></td>
				
				</tr>

				<tr>
					<td>.</td>							
				</tr>
			</table>
		</div>
		<div align="center">
					<input type="submit" value="siguiente" class="btn btn-primary" style='width:120px'>
					<a href="<?php echo base_url();?>index.php/ControlPasantes" class="btn btn-primary"  style='width:120px'>Cancelar</a>
		</div>							
		
		
	</form>
</body>