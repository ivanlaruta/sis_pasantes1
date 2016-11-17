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
 			<td><label>C.I  </label></td>
 			<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('id_rol');?>"></td>
 		</tr>
				<tr>
 			<td><label>Nombre  </label></td>
 			<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('nombrerol');?>"></td>
 		</tr>

				
				<tr>
 			<td><label>Apellido  </label></td>
 			<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('nombrerol');?>"></td>
 		</tr>
				<tr>
 			<td><label>Direccion </label></td>
 			<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('direccion');?>"></td>
 		</tr>

				<tr>
 			<td><label>Telefono </label></td>
 			<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('nom');?>"></td>
 		</tr>

				<tr>
 			<td><label>Email </label></td>
 			<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('email');?>"></td>
 		</tr>

				<tr>
 			<td><label>Fecha nacimiento </label></td>
 			<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('nom');?>"></td>
 		</tr>
<tr>
 			<td><label>Usuario </label></td>
 			<td><input type="text" class="form-control" value="<?php echo $this->session->userdata('nom');?>"></td>
 		</tr>

				<tr>
					<td><label>password</label></td>
					<td><input type="password" class="form-control" value="<?php echo $this->session->userdata('nom');?>"></td>
				</tr>

				<tr>
					<td><input type="submit" value="Guardar" class="btn btn-primary" ></td>
					<td><input type="submit" value="Cancelar" class="btn btn-primary"></td>
										
				</tr>
			
</table>
</div>
</form>
</body>
