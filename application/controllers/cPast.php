
<?php
if (isset($_POST['enviar'])) {
    if (is_array($_POST['ids'])) {
       
       
        foreach ($_POST['ids'] as $key => $value) {
            
            $campos = array(
            'id_pasante' =>$value ,
            'id_actividad' =>1,
           // 'fecha' => ,
            //'cat_estado_act' =>$param['cat_estado_act'] ,
            //'id_encargado' =>$param['id_encargado'] ,
           // 'descripcion' =>$param['descripcion'] 
            );

            $this ->db->insert('actividad_pasante',$campos);
            
        }
    }
    
    echo '<div>Has seleccionado: </div>';
}    
?>