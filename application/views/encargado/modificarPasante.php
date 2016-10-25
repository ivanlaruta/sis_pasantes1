<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	
	 	<div align="center">
	 		<h2><b>BIENVENIDO: <?php echo $this->session->userdata('nombrerol');?> </b></h2>
		</div>
	<form action="<?php echo base_url();?>index.php/controlModificarPasante" method="POST">
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h3>Modificar datos de un pasante</h3></center>
					</td>
				</tr>

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
						<td><input type="submit" value="Modificar" class="btn btn-primary" ></td>
				    </tbody>

				  </table>
				</div>
			</table>
		</div>
	</form>
</body>