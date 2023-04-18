<?php

require ("Conexion/classConnectionMySQL.php");

$No = $_POST['No'];
$buenoX= $_POST['buenoX'];
$lugar = $_POST['lugar'];
$dia = $_POST['dia'];
$Mes = $_POST['Mes'];
$anio = $_POST['anio'];
$personaPaga = $_POST['personaPaga'];
$lugarPago = $_POST['lugarPago'];
$fechaPago = $_POST['fechaPago'];
$cantidadDe = $_POST['cantidadDe'];
$serie = $_POST['serie'];
$interes = $_POST['interes'];
$nombre = $_POST['nombre'];
$Direccion = $_POST['Direccion'];
$Poblacion = $_POST['Poblacion'];
$tel = $_POST['tel'];
$firma = $_POST['firma'];

////<<<creamos una instancia
$Newconn = new ConnectionMySQL();

///creamos conexion
$Newconn->CreateConnection();

$query="insert into datosPagare values(null,'$buenoX','$lugar','$dia','$mes','$anio','$personaPaga',
'$lugarPago','$fechaPago','$cantidadDe','$serie','$interes','$nombre','$Direccion','$Poblacion','$tel','$firma')";
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
//header("Location: mostrar.php");
//header("Location: mostrar.php");	


	
  
?>