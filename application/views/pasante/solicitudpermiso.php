


<body >	

 <div class="login-card2" align="center">

<table border="0">
				
						<center> <h2><b>SOLICITUD DE PERMISOS ESPECIALES</b></h2></center>
								
<div id=contenedor>
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
