
<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>  
    
  <form >
    
    <div align="center">
      <table border="0">
      <tr>
          <td colspan="2">
            <center><h4>Lista de tareas</h4></center>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <center><h5></h5></center>
          </td>
        </tr>

      </table>
      </div>
    
        <div class="container">
          <table class="table table-bordered">
         <thead>
        <tr>
          <td>PASANTE</td>
          <td>TAREA:</td>
          <td>FECHA</td>
          <td>ESTADO</td>
          <td>ENCARGADO:</td>
         
          
          <td>OPCION</td>
        </tr>
        </thead>
        <tbody>
        
        <?php  foreach ($resultado as $row) { ?>
                                            <tr> 
                                              
                                                <td>
                                                <?php echo $row->nombres;?>
                                                <?php echo $row->apellidos;?>
                                 
                                                </td>
                                                <td>
                                              <?php echo $row->actividad;?>
                                              </td>
                                              <td>
                                              <?php echo $row->fecha;?>
                                              </td>
                                              <td>
                                              <?php echo $row->cat_estado_act;?>
                                              </td>
                                             
                                             
                                                <td>
                                                  <!--<input type="checkbox" name="id" value=<?php echo $row->id_persona;?> <br>-->
                                                  <a href="" class="btn btn-primary"  style='width:120px'>ver detalles</a>
                                                    <a href="" class="btn btn-primary"  style='width:120px'>Eliminar</a>
                                                </td>
                                            <tr>
                                            <?php
                                       
                                    }
                                ?> 
                </tbody>
                </table>

    </div>

    <div align="center">
         
    </div>              
    
    
  </form>
</body>
