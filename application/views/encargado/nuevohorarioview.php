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
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body>


    
    <div class="container">
        
        <section class="contenido">
            <div class="row">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Registrar</a></li>
                   
                </ul>
               
                <div class="tab-content">
                    <div class="tab-pane  active" id="tab1">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 text-center">
                            <h2>Registro de Horario Pasantia</h2>
                            <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/nuevohorariocon/add" method="POST">
                                <div class="form-group">
                                <label for="department" class="control-label">Encargado</label>
                                    <input type="text" name="pasante" class="form-control" value="<?php echo $this->session->userdata('nombre');?>"/>
                                </div>
                                <label for="department" class="control-label">Dia</label>
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
                                     <label>Hora Inicio</label>
                                    <input type="time" name="hora_inicio" class="form-control" placeholder="Ingrese hora de inicio"/>
                                </div>
                                <div class="form-group">
                                  <label>Hora Fin</label>
                                    <input type="time" name="hora_fin" class="form-control" />
                                 </div>   
                    <label>Pasante</label>
                    <div class="form-group">
                     <select name="pasante" value="<?php echo set_value('pasante');?>">
                                <?php 
                                    
                                    foreach ($resultado as $row) {
                                        
                                            ?>
                                            <option  value=<?php echo $row->nombres,$row->apellidos;?> >
                                                <?php echo $row->nombres,$row->apellidos;?>
                                            </option>
                                            <?php
                                       
                                    }
                                ?>
                      </select>
                      </div>
                        
            
                                <div class="form-group">
                                   
                                    <input type="int" name="id_pasante" class="form-control" placeholder="Id pasante"/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" value="Registrar">Registrar</button>
                                </div>
                            </form>
                        </div>
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