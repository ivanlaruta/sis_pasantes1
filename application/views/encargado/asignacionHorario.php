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
     <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
function searchName(){
    xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET", "controlAsignacionHorario/search_name?name="+document.form1.fname.value,false);
    xmlhttp.send(null);
    document.getElementById("search_table").innerHTML=xmlhttp.responseText;
}
$(document).ready(function(e) {
            $.ajaxSetup({cache:false});
            $('#search_table').load('controlAsignacionHorario/display_info');
        });
</script>
   
</head>
<body>


    
    <div class="container">
        
        <section class="contenido">
            <div class="row">

              <div id="container">
        <div class="form-group">
            <?php
                $name = array('id' => 'my_form', 'name' => 'form1');
                echo form_open('controlAsignacionHorario/search_name', $name);
            ?>
            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <?php
                echo "Buscar por pasante: </br> </br>";

                echo form_input('fname', set_value('fname'),'onkeyup="searchName();"');
            ?>
                    <tr>
                        <th width="175">Pasante</th>
                        <th width="175">Dia</th>
                        <th width="226">Hora Inicio</th>
                         <th width="226">Hora Fin</th>
                    </tr>

            </table>
           <?php echo form_close(); ?>
            <div id="search_table"></div>
        </div>
    </div> 
                        
         
      <div class="row" style="text-align:center" ><?php echo $this->pagination->create_links(); ?></div> 
    

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