<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>
<div class="error">
	<!--<?php echo validation_errors(); ?>-->
</div>
	 	
	<form action="<?php echo base_url();?>index.php/registroPasante/validar" method="POST">

		<div align="center">
			<table border="0" width="400" >
				<tr>
					<td colspan="2" align="center">
						<legend>Registro de Pasantes</legend>
					</td>
				</tr>
				<? echo form_error('carnet_identidad'); ?>
				<tr>
				<!--<? php echo form_error('nombre');?>-->
					<td><label>C.I.</label></td>
					<td><input type="text" class="form-control" name="carnet_identidad" placeholder="Carnet de Identidad" value="<?php echo set_value('carnet_identidad');?>" ><?php echo form_error('carnet_identidad'); ?></td>
					
					
				</tr>
				
				<tr>
					<td><label>Nombres</label></td>
					<td><input type="text" class="form-control" name="nombres" placeholder="Ingresar Nombres" value="<?php echo set_value('nombres');?>"><?php echo form_error('nombres'); ?></td>
				</tr>
				
				<tr>
					<td><label>Apellidos</label></td>
					<td><input type="text" class="form-control" name="apellidos" placeholder="Ingresar Apellidos" value="<?php echo set_value('apellidos');?>"><?php echo form_error('apellidos'); ?></td>
				</tr>

				<tr>
					<td><label>Direccion</label></td>
					<td><input type="text" class="form-control" name="direccion" placeholder="Ingresar Direccion" value="<?php echo set_value('direccion');?>"><?php echo form_error('direccion'); ?></td>
				</tr>

				<tr>
					<td><label>Telefono</label></td>
					<td><input type="text" class="form-control" name="telefono" placeholder="Telefono o Celular" value="<?php echo set_value('telefono');?>"><?php echo form_error('telefono'); ?></td>
				</tr>

				<tr>
					<td><label>Correo</label></td>
					<td><input type="text" class="form-control" name="email" placeholder="email Valido" value="<?php echo set_value('email');?>"><?php echo form_error('email'); ?></td>
				</tr>

				<tr>
					<td><label>Fecha de Nacimiento</label></td>
					<td><input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo set_value('fecha_nacimiento');?>"><?php echo form_error('fecha_nacimiento'); ?></td>
				</tr>

				<tr>
					<td><label>Usuario</label></td>
					<td><input type="text" class="form-control" name="usuario" placeholder="Nombre de Usuario" value="<?php echo set_value('usuario');?>"><?php echo form_error('usuario'); ?></td>
				</tr>

				<tr>
					<td><label>Password</label></td>
					<td><input type="password" class="form-control" name="password" placeholder="Contraseña" value="<?php echo set_value('password');?>"><?php echo form_error('password'); ?></td>
					
				</tr>

				
				<!--<tr>
					<td><label for="password2">Confirmar Password</label></td>
					<td><input type="password" class="form-control" id="password2" name="password2" placeholder="Confirmar Contraseña" value="<?php echo set_value('password2');?>"></td>
				</tr>
				-->
				
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