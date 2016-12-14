<body>


<div align="center">
<legend><h2>Descripción de Solicitudes</h2></legend>
</div>

<table class="table table-bordered" border="2">
<tr>
<td><b>Nombres del Pasante:</b></td>
<td></td>

</tr>

<tr>

<td><b>Numewro de Solicitud:</b></td>
<?php

foreach ($consulta->result() as $fila) {  ?>
<td><?= $fila->id_permiso;?></td>
</tr>

 <?php

}


?>

<tr>
<td><b>Estado de la Solicitud:</b></td>

<?php

foreach ($consulta->result() as $fila) {  ?>
<td><?= $fila->cat_estado_per;?></td>

</tr>

 <?php

}


?>
<tr>
<td><b>Fecha Solicitada:</b></td>
<?php

foreach ($consulta->result() as $fila) {  ?>
<td><?= $fila->fecha;?></td>
</tr>
<?php

}


?>


<tr>
<td><b>Descripcion de Solicitud:</b></td>
<?php

foreach ($consulta->result() as $fila) {  ?>
<td><?= $fila->descripcion;?></td>
</tr>
<?php

}


?>
<tr>
<td><center><a href="" class="btn btn-success">Aceptar Solicitud</a></center></td>
<td><center><a href="" class="btn btn-danger">Rechazar Solicitud</a></center></td>

</tr>
</table>


</body>