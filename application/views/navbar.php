<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	      	</button>
	      	<a class="navbar-brand" href="#"><b>Universidad Catolica Boliviana "San Pablo"</b></a>
		</div>  
  		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">		  		
	  		<ul class="nav navbar-nav">
		        <li class="active"><a href="<?php echo site_url('principal') ?>">Principal</a></li>
				<li><a href="<?php echo site_url("jefe") ?>">Jefe de Pasantes</a></li>              
				<li><a href="<?php echo site_url("encargado") ?>">Encargado</a></li> 
				<li><a href="<?php echo site_url("pasante") ?>">Pasantes</a></li> 
		    </ul>
		    <ul class="nav navbar-nav navbar-right">		        
				<li><a href="<?php echo site_url("con_login/logout") ?>">Cerrar Session</a></li> 
		    </ul>
	    </div>
	</div>
</nav>