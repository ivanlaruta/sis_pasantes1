<body >	

 <div align="center">

<table border="0">
				<tr>
					<td colspan="2">
						<center> <h2><b>DATOS ADICIONALES DE LA PERSONA</b></h2></center>
					</td>
				</tr>
				<tr>
					<td><label>C.I.</label></td>
					<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('carnet_identidad');?>" readonly="readonly"></td>
				</tr>
				
				<tr>
					<td><label>Nombres</label></td>
					<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('nombres');?>" readonly="readonly"></td>
				</tr>
				
				<tr>
					<td><label>Apellidos</label></td>
					<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('apellidos');?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td><label>Direccion</label></td>
					<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('direccion');?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td><label>Telefono</label></td>
					<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('telefono');?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td><label>Correo</label></td>
					<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('email');?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td><label>fecha de nacimiento</label></td>
					<td><input type="date" class="form-control" value="<?php echo $this->session->userdata('fecha_nacimiento');?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td><label>usuario</label></td>
					<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('usuario');?>"></td>
				</tr>

				<tr>
					<td><label>password</label></td>
					<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('password');?>"></td>
				</tr>

				<tr>
					<td><a href="<?php echo base_url();?>index.php/Datospersonales/actualizar" class="btn btn-primary" style='width:160px'>Editar</a></td>
					<td><input type="submit" value="Cancelar" class="btn btn-primary"></td>
										
				</tr>
			
</table>
</div>
</body>
