<?php
include("conexion.php"); //incluimos el archivo logotipo.php


?>


<?php
	$ubicacion = "localhost";
	$usuario = "root";
	$pass = "theblackeyes";
	$db = "bdf";

	$conexion = mysql_connect($ubicacion, $usuario, $pass);
	mysql_select_db($db, $conexion);

	function getUsuario(){
		$queEmp = "select * from usua";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);

		if ($totEmp> 0) {
		   while ($rowEmp = mysql_fetch_assoc($resEmp)) {
		      echo "<strong>".$rowEmp['usua_usua']."</strong><br>";
		      echo "Nombre: ".$rowEmp['usua_nomb']."<br>";
		      echo "Apellido: ".$rowEmp['usua_pass']."<br>############################<br>";
		   }
		}
	}
	getUsuario();
?>
