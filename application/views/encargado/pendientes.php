<body>

<div align="center" class="container">

<table border="2">
    
    <tr>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Carrera</th>
        <th>Nombres</th>
        <th>Apellidos</th>
    </tr>

<?php

foreach ($consulta->result() as $fila) {  ?>
    

 <tr>
    <td><?= $fila->fecha;?></td>
    <td><?= $fila->cat_estado_per;?></td>
    <td><?= $fila->cat_carrera;?></td>
    <td><?= $fila->nombres;?></td>
    <td><?= $fila->apellidos;?></td>
    <td><a href="" type="btn btn-primary">Ver Solicitud</td>

 </tr>

 <?php

}


?>

</table>



</div>
</body>