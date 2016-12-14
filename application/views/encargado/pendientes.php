<body>

<div align="center" class="container">

<table border="2" class="table table-bordered">
    <legend>Solicitudes Pendientes</legend>
    <tr>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Carrera</th>
        <th>Nombres</th>
        <th>Apellidos</th>
    </tr>

<?php

foreach ($resultado as $row) {  ?>
    

 <tr>
    <td><?php echo $row->fecha;?></td>
    <td><?php echo $row->cat_estado_per;?></td>
    <td><?php echo $row->cat_carrera;?></td>
    <td><?php echo $row->nombres;?></td>
    <td><?php echo $row->apellidos;?></td>
    <td><a href="<?php echo base_url(); ?>index.php/versolicitud2" class="btn btn-primary" >Ver Solicitud</td>

 </tr>

 <?php

}


?>




</table>



</div>
</body>