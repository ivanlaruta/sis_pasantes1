<!DOCTYPE html>
 <html>

<head>


<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">
 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
  

</head>

<body>

	<div class="row">
		
		<div class="col-xs-7 col-sm-8">			
			<div align="center">
	          <table class="table table-bordered">
	            <thead>
	              <tr>
	              	<th>Numero</th>
	              	<th>Pasante</th>
	                <th>Tarea</th>        
	                <th>Estado</th>
	              </tr>
	            </thead>

	            <tbody>       
	                <td>1</td>
	                <td>Ivan Laruta</td>
	                <td>Instalar una computadora en el bloque S</td>
	                <td>Pendiente</td>
	            </tbody>

	          </table>
	        </div>
		</div>

		<div class="col-xs-8 col-sm-3">
			<div align="center">
				<h2>Unidad Académica</h2>
				<h2>"La Paz"</h2>
				<br>
				<br>
				<br>
				<form action="" method="POST">
					<legend>Sistema de Control de Pasantes</legend>
					<table border="0">
					<tr>
					<td width="60" height="60">
						<label>Usuario</label>
					</td>
					<td >
						<input id="usuario" name="usuario" type="text" class="form-control" placeholder="Carnet de Identidad">
					</td>
					</tr>
					<tr>
					<td width="120" height="60">
						<label>Contraseña</0label>
					</td>
					<td >
					<input id="password" name="password" type="password" class="form-control" placeholder="Contraseña">
					</td>
					</tr>
					<tr>
					<td colspan="2" align="center" height="60">
					<input type="submit" value="Ingresar" class="btn btn-primary" align="center">
					</td>
					</tr>
					</table>
				</form>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>

				<legend></legend>
				<div align="right">
					© 1998-2016 Universidad Católica Boliviana
						Centro de Sistemas
						email: csinf@ucb.edu.bo
				</div>
			</div>	

		</div>
	


	</div>


</body>

 </html>