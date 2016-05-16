
<?php

	$nombre=$_POST["nom"];
	$cedula=$_POST["ced"];
	$edad=$_POST["eda"];
	$correo=$_POST["cor"];
	$celular=$_POST["cel"];
	$telefono=$_POST["tel"];
	$db = mysql_connect("localhost","root","");
	mysql_select_db("cepemacre",$db);
	$sql ="insert into cliente values('$nombre','$cedula','$edad','$correo','$celular','$telefono',)";
	$result = mysql_query($sql);

	
	?>


	<h1> Registro exitoso</h1>

<button type="button" class="btn btn-default"> <a href="index.html">Inicio  </a> </button>
