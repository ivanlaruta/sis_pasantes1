<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	
	 	
	<form action="<?php echo base_url();?>index.php/RegistroTareaPasante/guardar" method="POST">
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h4>Registro de Tarea</h4></center>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center><h5>Porfavor ingrese la descripcion de la tarea nueva y asignela a un pasantes.</h5></center>
					</td>
				</tr>

				<tr>	
					<td><p><label>Descrpcion:</label></p></td><br>
					<td><p><input type="textarea" class="form-control" name = "actividad" placeholder=" Describa la tarea" style="height: 50px;width: 500px"></textarea></p></td>
				

					<td>.</td>							
				</tr>
			</table>
		</div>
		<div align="center">
			<table border="0">
			<tr>
					<td colspan="2">
						<center><h4>Asignacion de pasantes</h4></center>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center><h5>Porfavor seleccione a los pasantes para la tarea.</h5></center>
					</td>
				</tr>

			</table>
			</div>
		
				<div class="container">
				  <table class="table table-bordered">
				 <thead>
				<tr>
					<td>ID</td>>
					<td>PASANTES DISPONIBLES:</td>
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
                                                	<!--<input type="checkbox" name="id" value=<?php echo $row->id_persona;?> <br>-->
                                                	<input type="submit" value="<?php echo $row->id_persona;?>" class="btn btn-primary" style='width:120px'>
                                                </td>
                                            <tr>
                                            <?php
                                       
                                    }
                                ?> 
                </tbody>
                </table>

		</div>

<!--
		<div align="center">

                     <select name="type">
                                <?php 
                                    
                                    foreach ($resultado as $row) {
                                        
                                            ?>
                                            <option  value=<?php echo $row->nombres;?> >
                                            	<?php echo $row->nombres;?>
                                                <?php echo $row->apellidos;?>
                                            </option>
                                            <?php
                                       
                                    }
                                ?>
                      </select>
		</div>

 -->
		<div align="center">
					<input type="submit" value="Guardar" class="btn btn-primary" style='width:120px'>
					<a href="<?php echo base_url();?>index.php/ControlPasantes" class="btn btn-primary"  style='width:120px'>Cancelar</a>
		</div>							
		
		
	</form>
</body>