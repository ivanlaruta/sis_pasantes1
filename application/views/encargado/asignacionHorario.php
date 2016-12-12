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

               <div class="pull-right" style="padding-top:30px">
            <div class="box-tools" style="display:inline-table">
              <div class="input-group">
                  <input type="text" class="form-control input-sm ng-valid ng-dirty" placeholder="Search" ng-change="searchDB()" ng-model="searchText" name="table_search" title="" tooltip="" data-original-title="Min character length is 3">
                  <span class="input-group-addon">Search</span>
              </div>
            </div>
        
        </div>
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
                  
                    
                </tr>
            </thead>
            <tbody>
            <?php
foreach($results as $data){
?>
    <tr>
        <td>
            <?=$data->pasante;?>
        </td>
        <td>
            <?=$data->dia;?>
        </td>
        <td>
            <?=$data->hora_inicio;?>
        </td>
        <td>
            <?=$data->hora_fin;?>
        </td>
        
    </tr>
    
            </tbody>

         <?php
    
}
?>  
        </table>
        <div style="text-align:center"><?php echo $links; ?></div>
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