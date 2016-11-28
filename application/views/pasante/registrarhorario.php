<body>

<h1>Holllllaaa</h1>

<div class="row-fluid">
<?= form_open(base_url().'index.php/controllerComboBoxes/hacerAlgo'); ?>
            <select class="form-control" id="dia" name="dia">
                <option value="0">Dias</option>
                <?php 
                    foreach ($dias as $i) {
                        echo '<option value="'. $i->Dia .'">'. $i->dia .'</option>';
                    }
                ?>
            </select>
            <br/>
            <br/>

            </from>
            <select class="form-control" id="hora" name="hora">
                <option value="0">Horas</option>
            </select>
            <br/>
            <br/>
            <button class="btn btn-primary">Aceptar</button>
        </form>
      </div>
    





<?php echo form_label('Dias: '),form_dropdown('selDias', $arrDias); ?>

Profesión: <select name="selDias">
<?php
foreach ($arrDias as $i => $dia)
   echo '<option values="',$i,'">',$dia,'</option>';
?>
</select>

</body>