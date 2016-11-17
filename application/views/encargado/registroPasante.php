<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	
	 	
	<form action="<?php echo base_url();?>index.php/registroPasante/guardar" method="POST">
		<div align="center">
			<table >
				<tr>
					<td colspan="2">
						<center><h3>Registro de Pasantes</h3></center>
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
					<td><input type="password" class="form-control" name="password"></td>
				</tr>

				
				<tr>
					<td><label>Carrera</label></td>
					<td>
                     <select name="cat_carrera">
                                <?php 
                                    
                                    foreach ($resultado as $row) {
                                        
                                            ?>
                                            <option  value=<?php echo $row->key;?> >
                                            	<?php echo $row->key;?>
                                            </option>
                                            <?php
                                       
                                    }
                                ?>
                      </select>
						</td>
						
				</tr>
				<tr>
				...
				</tr>
				<tr>

					<td><input type="submit" value="Guardar" class="btn btn-primary" style='width:120px'></td>
					<td><a href="<?php echo base_url();?>index.php/ControlPasantes" class="btn btn-primary"  style='width:120px'>Cancelar</a></td>
										
				</tr>
			</table>
		</div>
	</form>
</body>