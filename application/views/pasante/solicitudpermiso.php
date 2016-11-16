


<body >	
 
 	<div class="row-fluid">

 	<form action="con_permisos/enviar" method="POST">
 	<table class="table table-bordered">
		<tr>
			<td colspan="2"><legend>Solicitud de Permisos</legend></td>
 		</tr>

 		<tr>
 			<td><label>Nombre del Pasante: </label></td>
 			<td><p id="usuario"> <?php echo $this->session->userdata('nombrerol');?></p></td>
 		</tr>

 		<tr>
 			<td><label>Fecha Actual: </label></td>
 			<td><p id="fechaactual"><?php echo date("Y-d-m");?></p></td>
 		</tr>

 		<tr>
 			<td><label>Fecha para la Solicitud:</label></td>
 			<td><input type="date" name="fechasol"></td>
 		</tr>

 		<tr>
 			<td><label>Descripción:</label></td>
 			<td><textarea name="solicitud" placeholder="Ingresa la descripcion de tu solicitud" style="height: 200px;width: 500px"></textarea></td>
 		</tr>

 		<tr>
 			<td><input type="hidden" name="estado" value="Pendiente"></td>
 		</tr>

 		<tr>
 			<td><input type="hidden" name="fechaactual" value="<?php echo date("Y-m-d");?>"></td>
 			<td><input type="hidden" name="usuario" value="<?php echo $this->session->userdata('idusuario');?>"></td>
 		</tr>

 		<tr>
 			<td colspan="2"><center><input type="submit" class="btn btn-success" value="Enviar Solicitud" align="center"></center></td>
 			
 		</tr>
 	</table>
 	</form>
 	</div>


<table border="1">
				
						<center> <h2><b>SOLICITUD DE PERMISOS ESPECIALES</b></h2></center>
								
<div id="contenedor">
<tr>	<td><p><label>Pasante: </label></p></td><br>
		<td><p> <?php echo $this->session->userdata('nombrerol');?></p></td>
				
</tr>

		
<tr>
<td><p><label>Fecha Solicitud: </label></p></td>
<td><p><?php echo date("Y-d-m");?></p></td>


</tr>

			
				<tr>	<td><p><label>Mensaje</label></p></td><br>
					<td><p><textarea name="text" placeholder=" Describe tu solicitud" style="height: 450px;width: 500px"></textarea></p></td>
				
</tr>
				
				<tr>
					<td><p><input type="submit" value="Enviar" class="btn btn-primary" ></p></td> <br>
					<td><p><input type="submit" value="Cancelar" class="btn btn-primary"></p></td>
										
				</tr> 
	</div>		
</table>
</div>

</body>
