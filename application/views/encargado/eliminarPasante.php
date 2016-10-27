<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>		 	
	<form action="<?php echo base_url();?>index.php/controlEliminarPasante" method="POST">
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h3>Eliminar un pasante de la lista</h3></center>
					</td>
				</tr>
				</table>
				</div>

				<div class="container">
				  <table class="table table-bordered">
				    <thead>
				      <tr>
				      	<th>Numero</th> 
				        <th>Nombre del pasante</th>        
				        <th>Accion</th>
				      </tr>
				    </thead>

				    <tbody>
				      <td>1</td>        
				        <td>Mariela</td>
						<td><input type="submit" value="Eliminar" class="btn btn-primary" ></td>
				    </tbody>

				  </table>
				</div>
	</form>
</body>