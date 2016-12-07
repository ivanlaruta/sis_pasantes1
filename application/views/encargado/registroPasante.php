<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>
<div class="error">
	<?php echo validation_errors(); ?>
</div>	
	 	
	<form action="<?php echo base_url();?>index.php/registroPasante/nuevo_pasante" method="POST">

		<div align="center">
			<table >
				<tr>
					<td colspan="2">
						<center><h3>Registro de Pasantes</h3></center>
					</td>
				</tr>
				<tr>
				<? php echo form_error('nombre');?>
					<td><label>C.I.</label></td>
					<td><input type="text" class="form-control" name="carnet_identidad" value="<?php echo set_value('carnet_identidad');?>" ></td>
					
				</tr>
				
				<tr>
					<td><label>Nombres</label></td>
					<td><input type="text" class="form-control" name="nombres" value="<?php echo set_value('nombres');?>"></td>
				</tr>
				
				<tr>
					<td><label>Apellidos</label></td>
					<td><input type="text" class="form-control" name="apellidos" value="<?php echo set_value('apellidos');?>"></td>
				</tr>

				<tr>
					<td><label>Direccion</label></td>
					<td><input type="text" class="form-control" name="direccion" value="<?php echo set_value('direccion');?>"></td>
				</tr>

				<tr>
					<td><label>Telefono</label></td>
					<td><input type="text" class="form-control" name="telefono" value="<?php echo set_value('telefono');?>"></td>
				</tr>

				<tr>
					<td><label>Correo</label></td>
					<td><input type="text" class="form-control" name="email" value="<?php echo set_value('email');?>"></td>
				</tr>

				<tr>
					<td><label>fecha de nacimiento</label></td>
					<td><input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo set_value('fecha_nacimiento');?>"></td>
				</tr>

				<tr>
					<td><label>Usuario</label></td>
					<td><input type="text" class="form-control" name="usuario" value="<?php echo set_value('usuario');?>"></td>
				</tr>

				<tr>
					<td><label>Password</label></td>
					<td><input type="password" class="form-control" name="password" value="<?php echo set_value('password');?>"></td>
				</tr>

				
				<tr>
					<td><label>Carrera</label></td>
					<td>
                     <select name="cat_carrera" value="<?php echo set_value('cat_carrera');?>">
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