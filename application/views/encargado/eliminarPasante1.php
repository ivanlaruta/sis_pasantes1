<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>   
    <div align="center">
        <table border="0">
            <tr>
                <td colspan="2">
                    <center><h3>Actualizar datos del pasante</h3></center>
                </td>
            </tr>
        </table>

<!--        <div class="row">
	    	<br>
	    	<div class="col-lg-7"></div>
	    	<div class="col-lg-3">
	    		<input type="text" class="form-control" id="buscar" placeholder="Buscar">
	    	</div>
	    	<div class="col-lg-2">
	    		<input type="button" class="btn btn-primary btn-block" id="btnbuscar" value="Mostrar Todo" data-toggle='modal' data-target='#basicModal'>
	    	</div>
	    </div> 	
-->
	    <div class="row">
	    <div id="listaPasantes" class="col-lg-8">
			            		
		</div>

		<div class="col-lg-4">
			<div class="panel panel-default">
					<div class="panel-heading">Editar Pasante</div>
			  	<div class="panel-body">
			  		<form id="form-actualizar" class="form-horizontal" action="<?php echo base_url();?>empleados/actualizar" method="post" role="form" style="padding:0 10px;">
			  			<div class="form-group">
			  				<label>Id:</label>
			  				<input type="hidden" id="id" name="id" value="">
			  				<input type="text" name="id" id="id" class="form-control">
			  			</div>
			  			<div class="form-group">
			  				<label>Carnet de Identidad:</label>
			  				<input type="hidden" id="carnet" name="carnet" value="">
			  				<input type="text" name="carnet" id="carnet" class="form-control">
			  			</div>
			  			<div class="form-group">
			  				<label>Nombres:</label>
			  				<input type="text" name="nombres" id="nombres" class="form-control">
			  			</div>
			  			<div class="form-group">
			  				<label>Apellidos:</label>
			  				<input type="text" name="apellidos" id="apellidos" class="form-control">
			  			</div>
			  			<div class="form-group">
			  				<label>Dirección:</label>
			  				<input type="text" name="direccion" id="direccion" class="form-control">
			  			</div>
			  			<div class="form-group">
			  				<label>Telefono:</label>
			  				<input type="text" name="telefono" id="telefono" class="form-control">
			  			</div>
			  			<div class="form-group">
			  				<label>Email:</label>
			  				<input type="email" name="email" id="email" class="form-control">
			  			</div>
			  			<div class="form-group">
			  				<label>Usario:</label>
			  				<input type="email" name="usuario" id="usuario" class="form-control">
			  			</div>
			  			<div class="form-group">
			  				<label>Password:</label>
			  				<input type="email" name="password" id="password" class="form-control">
			  			</div>
			  			<div class="form-group">
			  				<button type="button" id="btnactualizar" class="btn btn-success btn-block">Guardar</button>
			  			</div>
			  		</form>								    
			  	</div>
			</div>			            		
		</div>
		</div>
	</div>
	<script src="<?php echo base_url();?>assets/js/persona.js"></script>
</body>