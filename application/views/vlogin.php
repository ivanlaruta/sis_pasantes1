<html>

<head>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="row">
		<div class="col-xs-8 col-sm-9">
			<div id="myslide" class="carousel slide">

					<ol class="carousel-indicators">
						<li data-target="myslide" data-slide-to="1" class="active"></li>
						<li data-target="myslide" data-slide-to="2"></li>
						<li data-target="myslide" data-slide-to="3"></li>
						<li data-target="myslide" data-slide-to="4"></li>
					</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="ucb.jpg" width="1000" height="1000">
					</div>

					<div class="item">
						<img src="1.jpg" width="1000" height="1000">
					</div>

					<div class="item">
						<img src="<?php echo base_url(); ?>images/3.jpg" width="1000" height="1000">
					</div>

					<div class="item">
						<img src="<?php echo base_url(); ?>images/4.jpg" width="1000" height="1000">
					</div>
				</div>
				<a href="#myslide" data-slide="prev" class="carousel-control left">&lsaquo;</a>
				<a href="#myslide" data-slide="next" class="carousel-control right">&rsaquo;</a>
			</div>
		</div>

		<div class="col-xs-8 col-sm-3">
			<div align="center">
				<h2>Unidad Académica</h2>
				<h2>"La Paz"</h2>
				<br>
				<br>
				<br>
	<form action="<?php echo base_url(); ?>index.php/clogin/ingresar" method="POST">
	<table>
		<tr>
			<td><label>Usuario</label></td>
			<td><input type="text" name="txtUsuario" class="form-control" placeholder="Carnet de Identidad"></input></td>
		</tr>
		<tr>
			<td><label>Contraseña</label></td>
			<td><input type="password" name="txtClave" class="form-control" placeholder="Contraseña"></input></td>
		</tr>
		<tr>
			<td colspan="2" align="center" height="60"><input type="submit" value="Ingresar"></input></td>
	</table>
	</form>

	<?php echo $mensaje; ?>
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

