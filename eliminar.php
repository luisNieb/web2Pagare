<?php
require ("Conexion/classConnectionMySQL.php");
//////////
echo $id= $_GET['id'];
// Creamos una nueva instancia
$NewConn = new ConnectionMySQL();
// Creamos una nueva conexion
$NewConn->CreateConnection();
///Consulta a la base de datos
$query = "DELETE FROM datosPagare WHERE Numero = $id";
$result = $NewConn -> ExecuteQuery($query);
if ($result){
	$RowCount = $NewConn -> GetCountAffectedRows();
	if($RowCount > 0){
		echo "Registro eliminado correctamente";
		header("Location: mostrar.php");
		header('Location: mostrar.php');		
	}
}
else {
	echo "<h1>No se pudo eliminar el registro</h1>";
}
?>