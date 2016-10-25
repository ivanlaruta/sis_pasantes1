<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


	<title></title>

	 <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">

	
<br>
<div align="center">
<table border="1">
<tr>
<td width="800" bgcolor="white">

<div align="center">	
<table border="0">
<tr>
<td>
<img src="<?php echo base_url(); ?>images/escudo.jpg" width="100" height="120">
</td>
<td>
<h2><b>Universidad Católica Boliviana "San Pablo"</b></h2>

<h3><b>Sistema de Control de Pasantes</b></h3>
</td>
</tr>
</table>
</div>
<br>
<div class="row-fluid">
 <div class="span1" align="center">

	<a href="" class="btn btn-default" style='width:160px'>UCB</a>
	<a href="" class="btn btn-default" style='width:160px'>La Paz</a>
	<a href="" class="btn btn-default" style='width:160px'>Sistema Académico</a>
	<a href="" class="btn btn-default" style='width:160px'>UCB Mail</a>
	<a href="<?=site_url('Principal/logout')?>" class="btn btn-default" style='width:160px'>Cerrar Sesion</a> 	

 </div>
 </div>

<div align="center">
 	<h2>Bienvenido: <?php echo $this->session->userdata('nombrerol');?></h2>
</div>

</head>