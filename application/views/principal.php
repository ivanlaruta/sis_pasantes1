<!DOCTYPE html>
 <html>

<head>

<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css"  media="screen" type="text/css" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<style ></style>

</head>

<body>

	<div class="row">
		<div class="col-xs-7 col-sm-8">
			<div id="myslide" class="carousel slide">

					<ol class="carousel-indicators">
						<li data-target="myslide" data-slide-to="1" class="active"></li>
						<li data-target="myslide" data-slide-to="2"></li>
						<li data-target="myslide" data-slide-to="3"></li>
						<li data-target="myslide" data-slide-to="4"></li>
					</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="<?php echo base_url(); ?>images/ucb.jpg" width="1000" height="1000">
					</div>

					<div class="item">
						<img src="<?php echo base_url(); ?>images/1.jpg" width="1000" height="1000">
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
				<table border="0" width="350">
				<tr>
				<td>
				<img src="<?php echo base_url(); ?>images/escudo.jpg" width="100" height="120">
				
				</td>
				<td align="center">
				<h3><b><font face="Verdana">Universidad Católica Boliviana "San Pablo"</font></b></h3>
				</td>
				</tr>
				</table>
				
				<br>
				<br>
				<br>
				<div align="center">
				<form class ="login-card" action="" method="POST">
					<legend><center>Sistema de Control de Pasantes</center></legend>
					<table border="0">
					<tr>
					
					<td >
						<div class="input-group">
  							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input id="usuario" name="usuario" type="text" class="form-control" placeholder="Usuario">
							
						</div>
						
					</td>
					</tr>
					<br>

					<tr>
					
					<td>
					<br>

						<div class="input-group">
  							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input id="password" name="password" type="password" class="form-control" placeholder="Contraseña">
						</div>
					</td>
					</tr>
					<tr>
					<td colspan="2" align="center" height="60">
					<input type="submit" value="Ingresar" class="btn btn-primary" align="center">
					</td>
					</tr>
					</table>
				</form>
				</div>
					<br>
					<br>

				<legend></legend>
				<div align="right">
					© 1998-2016 Universidad Católica Boliviana <span class="glyphicon glyphicon-pencil"></span>
						Centro de Sistemas
						email: csinf@ucb.edu.bo
				</div>
			</div>	

		</div>
	


	</div>


</body>

 </html>