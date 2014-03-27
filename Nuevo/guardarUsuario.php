<?php
	include("conexion.php");

	$queEmp = "select * from usua";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
	$totEmp = mysql_num_rows($resEmp);

	$_POST["nombre"];
	$_POST["nickname"];
	$_POST["cargo"];
	$_POST["direccion"];
	$_POST["telefono"];
	$_POST["email"];
	$_POST["celular"];
	$_POST["webpage"];
	$_POST["facebook"];
	$_POST["twitter"];
	$_POST["linkedin"];
	
	if ($totEmp> 0) {
	   while ($rowEmp = mysql_fetch_assoc($resEmp)) {
	      echo "<strong>".$rowEmp['usua_usua']."</strong><br>";
	      echo "Nombre: ".$rowEmp['usua_nomb']."<br>";
	      echo "Apellido: ".$rowEmp['usua_pass']."<br>############################<br>";
	   }
	}
?>