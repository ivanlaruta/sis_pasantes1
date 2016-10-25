<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	
	 	<div align="center">
	 		<h2><b>BIENVENIDO: <?php echo $this->session->userdata('nombrerol');?> </b></h2>
		</div>
	<form action="<?php echo base_url();?>index.php/controlHorarioPasante" method="POST">
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h3>Horarios del Pasante</h3></center>
					</td>
				</tr>

				<div class="container">
				  <table class="table table-bordered">
				    <thead>
				      <tr>
				      	<th>Horas</th> 
				        <th>Lunes</th>        
				        <th>Martes</th>
				        <th>Miercoles</th>
				        <th>Jueves</th>
				        <th>Viernes</th>
				      </tr>
				    </thead>

				    <tbody>
				      	<td>8:30-9:30</td>        
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>				      	
				    </tbody>

				    <tbody>
				      	<td>8:30-9:30</td>        
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>				      
				    </tbody>

				    <tbody>
				      	<td>9:30-10:30</td>        
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>				      	
				    </tbody>

				    <tbody>
				      	<td>10:30-11:30</td>        
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>				      	
				    </tbody>

				    <tbody>
				      	<td>11:30-12:30</td>        
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>				     
				    </tbody>

				    <tbody>
				      	<td>16:30-17:30</td>        
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>				     
				    </tbody>

				    <tbody>
				      	<td>17:30-18:30</td>        
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>				      
				    </tbody>

				    <tbody>
				      	<td>18:30-19:30</td>        
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>				     
				    </tbody>

				    <tbody>
				      	<td>19:30-20:30</td>        
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>
				      	<td><input type="checkbox" name="tema[]" value=""></td>				      
				    </tbody>

				    
				  </table>
				</div>

			</table>
				<tr>
					<td><input type="submit" value="Asignar" class="btn btn-primary" ></td>
					<td><input type="submit" value="Cancelar" class="btn btn-primary"></td>
										
				</tr>
		</div>
	</form>
</body>