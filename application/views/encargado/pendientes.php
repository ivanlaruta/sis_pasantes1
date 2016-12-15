<body>

<div align="center" class="container">

<table border="2" class="table table-bordered">
    <legend>Solicitudes Pendientes</legend>
    <tr>
        <th>Numero</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Carrera</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Ver Solicitud</th>
    </tr>

<?php

foreach ($resultado as $row) {  ?>
    

 <tr>
    <td><?php echo $row->id_permiso;?></td>
    <td><?php echo $row->fecha;?></td>
    <td><?php echo $row->cat_estado_per;?></td>
    <td><?php echo $row->cat_carrera;?></td>
    <td><?php echo $row->nombres;?></td>
    <td><?php echo $row->apellidos;?></td>
    <td><a href="<?php echo base_url('index.php/versolicitud/editar').'?id_permiso='.$row->id_permiso;?>" class="btn btn-primary" >Ver Solicitud</td>

 </tr>

 <?php

}


?>




</table>



</div>
</body>