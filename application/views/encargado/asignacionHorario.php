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
                   <th colspan="2">OPCION</th>
                    
                </tr>
            </thead>
            <tbody>
         
            </tbody>

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