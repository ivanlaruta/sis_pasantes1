<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	

<?php
foreach ($registros as $fila) {
    
}
?>
	<form action="<?php echo base_url('index.php/controlIngresarEstadoPasante/actualizar')?>" method="POST">
		<div align="center">
			<table border="0">
				<tr>
					<td colspan="2">
						<center><h4>Registro de Tarea</h4></center>
					</td>
				</tr>
				<tr>
									<td colspan="2">
						<center><h5>Ingrese el estado de la tarea, alguna observación y la fecha en que finalizo</h5></center>
					</td>

				</tr>

				<tr>
					<td>.</td>							
				</tr>

				<tr>
					<td><label>Numero</label></td>
					<td><input type="text" class="form-control" name="id_actividad_pasante" value="<?php echo $fila->id_actividad_pasante?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td><label>Pasante asignado</label></td>
					<td><input type="text" class="form-control" name="nombres" value="<?php echo $fila->nombres?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td>.</td>							
				</tr>

				<tr>
					<td><label>Fecha inicio:</label></td>
					<td><input type="text" class="form-control" name="fecha" value="<?php echo $fila->fecha?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td>.</td>							
				</tr>

				<tr>
					<td><label>C.I.</label></td>
					<td><input type="text" class="form-control" name="carnet_identidad" value="<?php echo $fila->carnet_identidad?>" readonly="readonly"></td>
				</tr>

				<tr>
					<td>.</td>							
				</tr>

				<tr>	
					<td><p><label>Tarea</label></p></td><br>
					<td><p><input type="textarea" class="form-control" name = "actividad" id="actividad" value="<?php echo $fila->actividad?>" readonly="readonly" style="height: 100px;width: 300px"></textarea></p></td>
				
				</tr>

				<tr>
					<td>.</td>							
				</tr>

				<!--<tr>	
					<td><p><label>Descripcion:</label></p></td><br>
					<td><p><input type="textarea" class="form-control" name = "descripcion" placeholder="Ingresa alguna observacion que tuviste en esta tarea" style="height: 100px;width: 450px"></textarea></p></td>
				
				</tr>

				<tr>
					<td><p><label>Estado:</label></p></td>
					<td>
                     <select name="cat_estado_act" value="<?php echo $fila->cat_estado_act?>">
                                <?php 
                                    
                                    foreach ($resultado as $row) {
                                        
                                            ?>
                                            <option  value=<?php echo $row->key;?> >
                                            	<?php echo $row->key;?>
                                            </option>
                                            <?php
                                       
                                    }
                                ?>
                      </select>
						</td>
						
				</tr>-->

				<tr>
					<td><label>Estado:</label></td>
					<td><input type="text" class="form-control" name="cat_estado_act" value="<?php echo $fila->cat_estado_act?>"></td>
				</tr>

			</table>
		</div>

		<div align="center">
			<input type="submit" value="Guardar" class="btn btn-primary" style='width:120px'>
			<a href="<?php echo base_url();?>index.php/ControlPasantes" class="btn btn-primary"  style='width:120px'>Cancelar</a>
		</div>	
	</form>

</body>