<div class="row-fluid">

 	<form action="con_permisos/enviar" method="POST">
 	<table class="table table-bordered">
		<tr>
			<td colspan="2"><legend>Registro de Observaciones</legend></td>
 		</tr>

 		<tr>
 			<td><label>Nombre del Encargado: </label></td>
 			<td><p id="usuario"> <?php echo $this->session->userdata('nombrerol');?></p></td>
 		</tr>

 		<tr>
 			<td><label>Fecha Actual: </label></td>
 			<td><p id="fechaactual"><?php echo date("Y-d-m");?></p></td>
 		</tr>

 		<tr>
 			<td><label>Seleccione el nombre del Pasante:</label></td>
 			<td><select class="form-control" style='width:300px'>
				  		<option></option>
				  		<option>Alejandra Maritza Larrea Rodriguez</option>
				  		<option>Luis Daniel Martinez Vasquez</option>
				  		<option>Juanito Perez</option>
				  		<option>Ivan Laruta</option>
						
					</select></td>
 		</tr>

 		<tr>
 			<td><label>Ingrese Observacio::</label></td>
 			<td><textarea name="solicitud" placeholder="Ingresa la descripcion de tu solicitud" style="height: 200px;width: 700px"></textarea></td>
 		</tr>

 		<tr>
 			<td><input type="hidden" name="estado" value="Pendiente"></td>
 		</tr>

 		<tr>
 			<td><input type="hidden" name="fechaactual" value="<?php echo date("Y-m-d");?>"></td>
 			<td><input type="hidden" name="usuario" value="<?php echo $this->session->userdata('idusuario');?>"></td>
 		</tr>

 		<tr>
 			<td colspan="2"><center><input type="submit" class="btn btn-success" value="Enviar Solicitud" align="center"></center></td>
 			
 		</tr>
 	</table>
 	</form>
 	</div>