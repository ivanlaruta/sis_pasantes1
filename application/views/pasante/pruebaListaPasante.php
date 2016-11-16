<!DOCTYPE html>
 <html>

<head>

<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css"  media="screen" type="text/css" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<style ></style>

<script type="text/javascript">
	function saltar(id){
		$("#editar").load("http://localhost/tallersis/sis_pasantes1/index.php/controlPruebaListaPasante/mostrar_datos");
		$("#editar").fadeIn('2000');
	}
</script>

</head>

<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>

<div align="center">
<br>
 	<h4>lista pasantes:</h4>
 	<br>

</div>


<div align="center">
		<table class="table table-bordered">
				<tr>
					<th>Carnet identidad</th>
					<th>Nombres</th>
					<th>Apelidos</th>
					<th>direccion</th>
					<th>telefono</th>
					<th>email</th>
					<th>fecha</th>
					<th>usuario</th>
					<th>password</th>
					<th>Editar</th>
				</tr>

				<?php
				foreach ($persona as $fila){
					$id = $fila->id;
					$boton = array(
						'name' => 'pasar_edicion',
						'id' => 'pasar_edicion',
						'onclick' => "saltar($id)"
						);			
						?>
						<tr>
							<td><?= $fila->carnet_identidad?></td>
							<td><?= $fila->nombres?></td>
							<td><?= $fila->apellidos?></td>
							<td><?= $fila->direccion?></td>
							<td><?= $fila->telefono?></td>
							<td><?= $fila->email?></td>
							<td><?= $fila->fecha_nacimiento?></td>
							<td><?= $fila->usuario?></td>
							<td><?= $fila->password?></td>
						</tr>
						<?php
						//endforeach
					}
						?>

						<?php
						$actualizar = $this->session->flashdata('actualizado');
						if ($actualizar) {
							?>
							<tr>
								<td colspan="5" id="actualizarCorrectamente"><?= $actualizar?></td>
							</tr>
							<?php				
						}
						?>
				
				
		</table>

</div>
<div id="editar">
	
</div>
<div align="center">
	<a href="<?php echo base_url();?>index.php/Jefe" class="btn btn-primary" style='width:160px'>aceptar</a>
</div>
</body>
</html>
