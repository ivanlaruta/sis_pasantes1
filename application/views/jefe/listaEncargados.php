<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	
	 	
		
		<div align="center">
			<table border="0">
			<tr>
					<td colspan="2">
						<center><h4>Lista de encargados</h4></center>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center><h5></h5></center>
					</td>
				</tr>

			</table>
			</div>
		
				<div class="container">
				  <table class="table table-bordered">
				 <thead>
				<tr>
					<td>ID</td>
					<td>NOMBRES:</td>
					<td>DIRECCION</td>
					<td>TELEFONO</td>
					<td>EMAIL:</td>
					<td>FECHA NAACIMINETO</td>
					<td>CARRERA:</td>
					<td>TURNO:</td>
					
					<td>OPCION</td>
				</tr>
				</thead>
				<tbody>
				<?php  foreach ($resultado as $row) { ?>
                                            <tr> 
                                            	<td>
                                            	<?php echo $row->id_persona;?>
                                            	</td>
                                                <td>
                                            	<?php echo $row->nombres;?>
                                                <?php echo $row->apellidos;?>
                                 
                                                </td>
                                                <td>
                                            	<?php echo $row->direccion;?>
                                            	</td>
                                            	<td>
                                            	<?php echo $row->telefono;?>
                                            	</td>
                                            	<td>
                                            	<?php echo $row->email;?>
                                            	</td>
                                            	<td>
                                            	<?php echo $row->fecha_nacimiento;?>
                                            	</td>
                                            	<td>
                                            	<?php echo $row->titulo;?>
                                            	</td>
                                            	<td>
                                            	<?php echo $row->cat_turno;?>
                                            	</td>
                                                <td>
                                                	<!--<input type="checkbox" name="id" value=<?php echo $row->id_persona;?> <br>-->
                                                	<a href="" class="btn btn-primary"  style='width:120px'>Modificar</a>
                                                    <a href="" class="btn btn-primary"  style='width:120px'>Eliminar</a>
                                                </td>
                                            <tr>
                                            <?php
                                       
                                    }
                                ?> 
                </tbody>
                </table>

		</div>

							
	
</body>