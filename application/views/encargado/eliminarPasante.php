<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	
	 	
	<form action="<?php echo base_url();?>index.php/RegistroTareaPasante/guardar" method="POST">
		
		<div align="center">
			<table border="0">
			<tr>
					<td colspan="2">
						<center><h4>Lista de pasantes</h4></center>
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
					<td>FECHA NACIMIENTO</td>
					
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
                                            	<!--<td>
                                                	<input type="submit" value="Eliminar" class="btn btn-primary" style='width:120px'>
                                                </td>-->
                                                <td>
                                                	<?php echo "<a href=".base_url()."index.php/controlEliminarPasante/eliminar/".$row->id_persona.">Eliminar</a>";?>
                                                </td>
                                            <tr>
                                            <?php
                                       
                                    }
                                ?> 
                </tbody>
                </table>

		</div>

		<div align="center">
					<input type="submit" value="Guardar" class="btn btn-primary" style='width:120px'>
					<a href="<?php echo base_url();?>index.php/ControlPasantes" class="btn btn-primary"  style='width:120px'>Cancelar</a>
		</div>							
		
		
	</form>
</body>