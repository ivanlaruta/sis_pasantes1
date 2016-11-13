


<body >	

 <div class="login-card2" align="center">

<table border="0">
				
						<center> <h2><b>SOLICITUD DE PERMISOS ESPECIALES</b></h2></center>
				
				
<div id=contenedor>	

		<tr>		<td><p><label>Asunto </label></p></td>
				<td><p></p><select> <option> Ausencia </option> <option> Viaje </option></select></p></td> 

</tr>
<tr>
<td><p><label>Fecha Solicitud </label></p></td>
<td><input type="date" name="solicitud" step="1" min="2016-01-01" max="2019-12-31" value="<?php echo date("Y-d-m");?>"></td>
</tr>
<tr>	<td><p><label>Destinario</label></p></td><br>
					<td><p><input type="text" class="form-control" name="direccion" style="height: 30px;width: 500px" ></p></td>
				
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
