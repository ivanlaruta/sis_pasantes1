
<?php
if (isset($_POST['enviar'])) {
    if (is_array($_POST['ids'])) {
        $selected = '';
        $num = count($_POST['ids']);
        $current = 0;
        foreach ($_POST['ids'] as $key => $value) {
            if ($current != $num-1)
                $selected .= $value.', ';
            else
                $selected .= $value.'.';
            $current++;
        }
    }
    else {
        $selected = 'Debes seleccionar un pasante';
    }

    echo '<div>Has seleccionado: '.$selected.'</div>';
}    
?>