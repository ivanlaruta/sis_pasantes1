<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>		 	
	<form action="<?php echo base_url();?>index.php/controlModificarPasante" method="POST">
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h3>Modificar datos de un pasante</h3></center>
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
						<td height="60"><a href="<?php echo base_url();?>index.php/controlModificarPasante2" class="btn btn-primary" style='width:170px'>Modificar</a></td>
				    </tbody>

				  </table>
				</div>
			
	</form>
</body>