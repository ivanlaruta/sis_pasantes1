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
						<img src="<?php echo base_url(); ?>img/ucb.jpg" width="1000" height="1000">
					</div>

					<div class="item">
						<img src="<?php echo base_url(); ?>img/1.jpg" width="1000" height="1000">
					</div>

					<div class="item">
						<img src="<?php echo base_url(); ?>img/3.jpg" width="1000" height="1000">
					</div>

					<div class="item">
						<img src="<?php echo base_url(); ?>img/4.jpg" width="1000" height="1000">
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
				

			<div class="container-fluid">
  				<div class="row login-wrapper">
  				
  				<div class="panel panel-default">
  					<div class="panel-heading">
  						<strong>Control de Pasantes</strong>
  					</div>
  					<div class="panel-body">  
              <?php $error = $this->session->flashdata("error"); ?>
  						<div class="alert alert-<?php echo $error ? 'warning' : 'info' ?> alert-dismissible" role="alert">
  						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						  <?php echo $error ? $error : 'Ingrese su Usuario y Contraseña' ?>
  						</div>

  						<?php echo form_open(); ?>  
                <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>              
  							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
  								<label for="username">Usuario</label>
  								<div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-user"></i>
  									</span>
  									<input type="text" name="usuario" value="<?php echo set_value("usuario") ?>" id="usuario" class="form-control">
  								</div>  
                  <?php echo $error; ?>
  							</div>
                <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
  							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
  								<label for="password">Contraseña</label>
  								<div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-lock"></i>
  									</span>
  									<input type="password" name="password" id="password" class="form-control">
  								</div> 
                  <?php echo $error; ?>
  							</div>
  							<input type="submit" value="Ingresar" class="btn btn-primary">
  						<?php echo form_close(); ?>
  					</div>
  				</div>
  			</div>
  		
  	</div>
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