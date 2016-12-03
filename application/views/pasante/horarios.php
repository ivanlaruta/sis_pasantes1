<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Horario Pasante</title>
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
    
</head>
<body>


    
    <div class="container">
        
        <section class="contenido">
            <div class="row">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Registrar</a></li>
                    <li><a id="tab-consultar" href="#tab2" data-toggle="tab">Consultar</a></li>
                </ul>
               
                <div class="tab-content">
                    <div class="tab-pane  active" id="tab1">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 text-center">
                            <h2>Registro de Horario</h2>
                            <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/Horarios/add" method="POST">
                                <div class="form-group">
                                    <input type="text" name="pasante" class="form-control" value="<?php echo $this->session->userdata('nombre');?>"/>
                                </div>
                                <div class="form-group">
                                <select name="dia" class="form-control" >
<option value="Lunes">Lunes</option>
<option value="Martes">Martes</option>
<option value="Miercoles">Miercoles</option>
<option value="Jueves">Jueves</option>
<option value="Viernes">Viernes</option>
</select>
                                  
                                </div>
                                <div class="form-group">
                                    <input type="text" name="hora_inicio" class="form-control" placeholder="Ingrese hora de inicio"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="hora_fin" class="form-control" placeholder="Ingrese hora fin"/>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" value="Registrar">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab2">

                        <div class="row">
                            <br>
                            <div class="col-lg-7"></div>
                            <div class="container">
        <h1 style="font-size:20pt">HORARIO PASANTE</h1>

        <br />
        <br />
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>PASANTE</th>
                   
                    <th>DIA</th>
                    <th> HORA INICIO</th>
                    <th>HORA FIN</th>
                    <th colspan="2">OPCION</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
foreach($ver as $fila){
?>
    <tr>
        <td>
            <?=$fila->pasante;?>
        </td>
        <td>
            <?=$fila->dia;?>
        </td>
        <td>
            <?=$fila->hora_inicio;?>
        </td>
        <td>
            <?=$fila->hora_fin;?>
        </td>
        <td>
           
            <a href="<?php echo base_url();?>index.php/Horarios/delete">Eliminar</a></td>
            
        </td>
       <td>
            
           
            <a href="<?php echo base_url();?>index.php/Horarios/update">Actualizar</a></td>
        </td>
    </tr>
            </tbody>

         <?php
    
}
?>  
        </table>
    </div>

                        </div>
                        <hr>
                    

                    </div>

                </div>
                

            </div>

        </section>


    </div>

 
<script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/empleado.js"></script>
</body>
</html>
</body>
</html>