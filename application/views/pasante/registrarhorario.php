

<head>
    <title>hla</title>

    <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
            <script type="text/javascript">

            $(document).on('ready', function() {
                cargarHoras();

                $('#sDias').change(cargarHoras);

            });

            function cargarHoras (){

                var id_dia = $('#sDias').val();

                $.getJSON('c_horario/ini', {id: id_dia}, function(resp){

                    $('#sFin').empty();

                    $.each(resp, function(indice, valor){

                        option = $('<option></option>', {
                            value: indice,
                            text: valor,
                            class: 'clase'
                    });

                $('#sFin').append(option);  
            });

            });

        }
  
            </script>

</head>


<body>



<div class="container">

<div class="row">
    <div class="offset1 span 10 well">
    <h1>Horarios</h1>
    </div>
</div>

<div class="row">
    <div class="offset1 span5 well">
    <?php echo form_label('Dias', 'dias') ?>
        <?php echo form_dropdown('sDias', $dias, 4, "id='sDias'"); ?>

    <?php echo form_label('Inicios', 'ini') ?>
        <?php echo form_dropdown('sDias', array(), 1, "id='sIni'"); ?>
    <?php echo form_label('Finales', 'fin') ?>
        <?php echo form_dropdown('sDias', array(), null, "id='sFin' class='span4'"); ?>
    </div>
    <div class="span5 well">
        <?php echo form_label('Dia', 'dias') ?>
                <span id="dias"></span>
                
               
        <?php echo form_label('Inicio', 'ini') ?>
                <span id="ini"></span>
        <?php echo form_label('Final', 'fin') ?>

                <span id="fin"></span>

    </div>
</div>
    
    


</div>


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