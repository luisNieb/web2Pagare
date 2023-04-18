<?php

require ("Conexion/classConnectionMySQL.php");

$nombre = $_POST['nombre'];
$ap = $_POST['ap'];
////<<<creamos una instancia
$Newconn = new ConnectionMySQL();

///creamos conexion
$Newconn->CreateConnection();

$query="insert into datos1 values(null,'$nombre','$ap')";
$result = $Newconn->ExecuteQuery($query);
if($result){
		$RowCount = $Newconn->GetCountAffectedRows();
		if ($RowCount > 0){
			echo "Query ejecutado exitosamente";
		}else{
			echo "<h2>Error al ejecutar la consulta</h2>";
		}
	}

echo "El nombre insertado es: ".$nombre."</br>";
echo "El apellido insertado es: ".$ap."</br>";
header("Location: mostrar.php");
header("Location: mostrar.php");	


	
  
?>