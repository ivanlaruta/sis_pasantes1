<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>
	<form action="<?php echo base_url();?>index.php/controlModificarPasante" method="POST">
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h3>Modificar datos de Pasante</h3></center>
					</td>
				</tr>
				<tr>
					<td><label>C.I.</label></td>
					<td><input type="text" class="form-control" name="carnet_identidad" maxlength="8"></td>
				</tr>
				
				<tr>
					<td><label>Nombres</label></td>
					<td><input type="text" class="form-control" name="nombres"></td>
				</tr>
				
				<tr>
					<td><label>Apellidos</label></td>
					<td><input type="text" class="form-control" name="apellidos"></td>
				</tr>

				<tr>
					<td><label>Direccion</label></td>
					<td><input type="text" class="form-control" name="direccion"></td>
				</tr>

				<tr>
					<td><label>Telefono</label></td>
					<td><input type="text" class="form-control" name="telefono"></td>
				</tr>

				<tr>
					<td><label>Correo</label></td>
					<td><input type="text" class="form-control" name="email"></td>
				</tr>

				<tr>
					<td><label>fecha de nacimiento</label></td>
					<td><input type="date" class="form-control" name="fecha_nacimiento"></td>
				</tr>

				<tr>
					<td><label>Usuario</label></td>
					<td><input type="text" class="form-control" name="usuario"></td>
				</tr>

				<tr>
					<td><label>password</label></td>
					<td><input type="text" class="form-control" name="password"></td>
				</tr>

				<tr>
					<td><label>carrera</label></td>
					<td><input type="text" class="form-control" name="cat_carrera"></td>
				</tr>

				<tr>
					<td>.</td>							
				</tr>
				<tr>
					<td><input type="submit" value="Modificar" class="btn btn-primary" ></td>
					<td><input type="submit" value="Cancelar" class="btn btn-primary"></td>
										
				</tr>
			</table>
		</div>
	</form>
</body>