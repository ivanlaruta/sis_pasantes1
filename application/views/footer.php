

<hr width="100%" size="3px">
<div align="right">
	
<font size="2">© 1998-2016 Universidad Católica Boliviana
<br>
Centro de Sistemas
<br>
email: csinf@ucb.edu.bo
</font>
</div>

</td>
</tr>

</table>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

        <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
			<script type="text/javascript">

			$(document).on('ready', function() {
				cargarHoras();

				$('#sDias').change(cargarHoras);

			});

			function cargarHoras (){

				var coddia = $('#sDias').val();

				$.getJSON('c_horario/ini', {id: coddia}, function(resp){

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
</html>