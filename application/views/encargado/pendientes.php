<body>

<div align="center" class="container">

<table border="1" class="table table-bordered">
<thead>
<tr>
<td colspan="4">
<center><legend>Solicitudes Pendientes</legend></center>
</td>

</tr>
</thead>
<tbody>
<tr>
<td>Pasante</td>
<td>Fecha de Envio de Solicitud</td>
<td>Estado</td>
<td>Acciones</td>


</tr>

<?php  foreach ($resultado as $row) { ?>
                                            <tr> 
                                            	<td>
                                            	<?php echo $row->cat_tipo_permiso;?>
                                            	</td>
                                               
                                                <td>
                                            	<?php echo $row->cat_estado_per;?>
                                            	</td>
                                            	<td>
                                            	<?php echo $row->fecha;?>
                                            	</td>
                                            	<td>
                                            	<?php echo $row->descripcion;?>
                                            	</td>
                                            	</tr>
                                            <?php
                                       
                                    }
                                ?> 

</tbody>
</table>

</div>
</body>