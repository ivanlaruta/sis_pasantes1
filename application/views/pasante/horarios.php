      
<body background="<?php echo base_url(); ?>images/fondo2.jpg" style='background-attachment: fixed;'>	
	 	
	<form action="<?php echo base_url();?>index.php/controlHorarioPasante" method="POST">
		<div class="container">
<table class="table table-bordered table-striped table-hover">
  <tr>
      <th>HORA</th>
      <th>LUNES</th>
      <th>MARTES</th>
      <th>MIERCOLES</th>
      <th>JUEVES</th>
       <th>VIERNES</th>
  </tr>
  <tr>
      <td>07:30- 08:15</td>
 
      <td><div class="Cell" id="00"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 1){echo @$cell[$i];}  } ?></p></div></td>
      <td><div class="Cell" id="01"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 2){echo @$cell[$i];}  } ?></p></div></td>
      <td><div class="Cell" id="02"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 3){echo @$cell[$i];}  } ?></p></div></td>
      <td><div class="Cell" id="03"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 4){echo @$cell[$i];}  } ?></p></div></td>
      <td><div class="Cell" id="04"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 5){echo @$cell[$i];}  } ?></p></div></td>
  </tr>
  <tr>
      <td>08:15- 09:00</td>
      <td><div class="Cell" id="10"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 6){echo @$cell[$i];}  } ?></p></div></td>
      <td><div class="Cell" id="12"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 7){echo @$cell[$i];}  } ?></p></div></td>
      <td><div class="Cell" id="13"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 8){echo @$cell[$i];}  } ?></p></div></td>
      <td><div class="Cell" id="14"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 9){echo @$cell[$i];}  } ?></p></div></td>
      <td><div class="Cell" id="15"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 10){echo @$cell[$i];}  } ?></p></div></td>
  <tr>
  <tr>
      <td>09:15- 10:00</td>
    <td><div class="Cell" id="20"> <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 11){echo @$cell[$i];} } ?></p></div></td>
     <td><div class="Cell" id="21"> <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 12){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="22"> <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 13){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="23"> <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 14){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="24"> <p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 15){echo @$cell[$i];} } ?></p></div></td>
  <tr>
  <tr>
      <td>10:00- 10:45</td>
      <td><div class="Cell" id="30"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 16){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="31"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 17){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="32"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 18){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="33"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 20){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="34"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 21){echo @$cell[$i];} } ?></p></div></td>
  <tr>
  <tr>
      <td>11:00- 11:45</td>
      <td><div class="Cell" id="40"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 22){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="41"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 23){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="42"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 24){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="43"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 25){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="44"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 26){echo @$cell[$i];} } ?></p></div></td>
  <tr>
      <td>11:45- 12:30</td>
    <td> <div class="Cell" id="50"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 27){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="51"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 28){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="52"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 29){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="53"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 30){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="54"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 31){echo @$cell[$i];} } ?></p></div></td>
  </tr>  
  <tr>
      <td>12:45- 13:30</td>
      <td><div class="Cell" id="60"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 32){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="61"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 33){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="62"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 34){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="63"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 35){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="64"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 36){echo @$cell[$i];} } ?></p></div></td>
  </tr> 
  <tr>
      <td>13:30- 14:15</td>
     <td><div class="Cell" id="70"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 37){echo @$cell[$i];} } ?></p></div></td>
     <td><div class="Cell" id="71"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 38){echo @$cell[$i];} } ?></p></div></td>
     <td><div class="Cell" id="72"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 39){echo @$cell[$i];} } ?></p></div></td>
     <td><div class="Cell" id="73"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 40){echo @$cell[$i];} } ?></p></div></td>
     <td><div class="Cell" id="74"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 41){echo @$cell[$i];} } ?></p></div></td>
  </tr> 
  <tr>
      <td>14:30- 15:15</td>
      <td><div class="Cell" id="80"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 42){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="81"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 43){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="82"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 44){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="83"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 45){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="84"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 46){echo @$cell[$i];} } ?></p></div></td>
  </tr>
  <tr>
      <td>15:15- 16:00</td>
      <td><div class="Cell" id="90"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 47){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="91"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 48){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="92"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 49){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="93"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 50){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="94"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 51){echo @$cell[$i];} } ?></p></div></td>
  </tr>
  <tr>
      <td>16:15- 17:00</td>
     <td><div class="Cell" id="100"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 52){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="101"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] ==53){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="102"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] ==54){echo @$cell[$i];} } ?></p></div></td>
     <td><div class="Cell" id="103"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 55){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="104"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 56){echo @$cell[$i];} } ?></p></div></td>
  </tr>
  <tr>
      <td>17:00- 17:45</td>
     <td><div class="Cell" id="110"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 57){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="112"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 58){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="113"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 59){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="114"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 60){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="115"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 61){echo @$cell[$i];} } ?></p></div></td>
  </tr>
  <tr>
      <td>18:00- 18:45</td>
     <td><div class="Cell" id="120"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 62){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="121"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 63){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="122"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 64){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="123"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 65){echo @$cell[$i];} } ?></p></div></td>
      <td><div class="Cell" id="124"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 66){echo @$cell[$i];} } ?></p></div></td>
  </tr>
  <tr>
      <td>18:45- 19:30</td>
     <td><div class="Cell" id="130"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 68){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="131"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 69){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="132"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 70){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="133"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 71){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="134"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 72){echo @$cell[$i];} } ?></p></div></td>
  </tr>
  <tr>
      <td>19:45- 20:30</td>
     <td><div class="Cell" id="140"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 73){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="141"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 74){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="142"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 75){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="143"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 76){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="144"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 77){echo @$cell[$i];} } ?></p></div></td>
  </tr>
  <tr>
      <td>20:30- 21:15</td>
     <td><div class="Cell" id="150"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 78){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="151"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 79){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="152"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 80){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="153"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 81){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="154"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 82){echo @$cell[$i];} } ?></p></div></td>
  </tr>
  <tr>
      <td>21:15- 22:00</td>
     <td><div class="Cell" id="160"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 83){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="161"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 84){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="162"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 85){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="163"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 86){echo @$cell[$i];} } ?></p></div></td>
    <td><div class="Cell" id="164"><p><?php for($i=0; $i<=47; $i++){if(@$cellid[$i] == 87){echo @$cell[$i];} } ?></p></div></td>
  </tr>
</table>
</div><br /><br />


</body>