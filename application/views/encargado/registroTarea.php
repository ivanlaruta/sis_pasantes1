<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	
	 	
	<form action="<?php echo base_url();?>index.php/RegistroTareaPasante/guardar" method="POST">
	<input type="hidden" name="encargado"  value="<?php echo $this->session->userdata('idusuario');?>"  />
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h4>Registro de Tarea</h4></center>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center><h5>Porfavor ingrese la descripcion de la tarea nueva y asignela a un pasantes.</h5></center>
					</td>
				</tr>

				<tr>	
					<td><p><label>Descrpcion:</label></p></td><br>
					<td><p><input type="textarea" class="form-control" name = "actividad" placeholder=" Describa la tarea" style="height: 50px;width: 500px"></textarea></p></td>
				

					<td>.</td>							
				</tr>
			</table>
		</div>
		
		<div align="center">
					<input type="submit" value="Siguiente" class="btn btn-primary" style='width:120px'>
					<a href="<?php echo base_url();?>index.php/ControlPasantes" class="btn btn-primary"  style='width:120px'>Cancelar</a>
		</div>							
		
		
	</form>
</body>