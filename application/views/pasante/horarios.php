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
<script>
function searchName(){
    xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET", "Horarios/search_name?name="+document.form1.fname.value,false);
    xmlhttp.send(null);
    document.getElementById("search_table").innerHTML=xmlhttp.responseText;
}
$(document).ready(function(e) {
            $.ajaxSetup({cache:false});
            $('#search_table').load('Horarios/display_info');
        });
</script>
   <script type="text/javascript">
function confirma(){
    if (confirm("¿Realmente desea eliminarlo?")){ 
        alert("El registro ha sido eliminado.") }
        else { 
        return false
    }
}
</script>
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
                                   
                                    <input type="time" name="hora_inicio" class="form-control" placeholder="Ingrese hora de inicio"/>
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
        <div class="form-group">
        
            <?php
                $name = array('id' => 'my_form', 'name' => 'form1');
                echo form_open('Horario/search_name', $name);
            ?>
            
            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <strong>
            <?php
                echo "Buscar por dia: </br> </br>";

                echo form_input('fname', set_value('fname'),'onkeyup="searchName();"');
            ?></strong>
            <br />
        <br />
           

            </table>
           <?php echo form_close(); ?>
            <div id="search_table"></div>
        </div>
    </div> 
       

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