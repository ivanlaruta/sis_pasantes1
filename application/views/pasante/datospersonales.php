<body >	

<form id ="form" name="form" action="<?=base_url()?>index.php/Datospersonales/mostrar/" method="POST">
	<div align="center">
		<table border="0">
				<tr>
					<td colspan="2">
						<center> <h2><b>DATOS ADICIONALES DE LA PERSONA</b></h2></center>
					</td>
				</tr>
				<tr>
					<td><label>C.I.</label></td>
					<td><input type="text" class="form-control" name="carnet_identidad" id="carnet_identidad" maxlength="8" value="<?=$carnet_identidad?>"></td>
				</tr>
				
				<tr>
					<td><label>Nombres</label></td>
					<td><input type="text" class="form-control" name="nombres" name="nombres" value="<?=$nombres?> placeholder=" Juaj"></td>
				</tr>
				
				<tr>
					<td><label>Apellidos</label></td>
					<td><input type="text" class="form-control" name="apellidos" id="apellidos" placeholder=" Perez"></td>
				</tr>

				<tr>
					<td><label>Direccion</label></td>
					<td><input type="text" class="form-control" name="direccion" id="direccion" placeholder=" Sopocachi"></td>
				</tr>

				<tr>
					<td><label>Telefono</label></td>
					<td><input type="text" class="form-control" name="telefono" id="telefono" placeholder="2220616"></td>
				</tr>

				<tr>
					<td><label>Email</label></td>
					<td><input type="text" class="form-control" name="email" id="email" placeholder="usuario@gmail.com"></td>
				</tr>

				<tr>
					<td><label>fecha de nacimiento</label></td>
					<td><input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="09/06/1990"></td>
				</tr>

				<tr>
					<td><label>usuario</label></td>
					<td><input type="text" class="form-control" name="usuario" id="usuario" placeholder="mariela"></td>
				</tr>

				<tr>
					<td><label>password</label></td>
					<td><input type="password" class="form-control" name="password" id="password" placeholder="******"></td>
				</tr>

				<tr>
					<td><input type="submit" value="Guardar" class="btn btn-primary" ></td>
					<td><input type="submit" value="Cancelar" class="btn btn-primary"></td>
										
				</tr>
			
</table>
</div>
</form>
</body>
