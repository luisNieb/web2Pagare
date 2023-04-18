<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/normalize.css">
	<title>Document</title>
</head>
<body>

<?php
require ("Conexion/classConnectionMySQL.php");

////<<<creamos una instancia
$Newconn = new ConnectionMySQL();

///creamos conexion
$Newconn->CreateConnection();
/////tabla que muestra los datos1
echo "<h1 class='registrar__index'>Datos de pagares</h1>
	  <table class='contenedor'>
			
				<th>ID</th>
				<th>Bueno por</th>
				<th>Lugar del Pago</th>
                <th>Dia</th>
                <th>Mes</th>
                <th>Año</th>
                <th>Deudor</th>
                <th>Lugar del pago</th>
                <th>Fecha del Pago</th>
                <th>Cantidad A Pagar</th>
                <th>Serie</th>
                <th>Interes %</th>
                <th>Nombre</th>
                <th>Dieccion</th>
                <th>Poblacion</th>
                <th>Tel</th>
                <th>Firma</th>
				<th>Actualiza</th>
				<th>Elimina</th>
				
	";
	
	///Consulta a la base de datos
	
			$query = "Select * from datosPagare ";
			$result = $Newconn -> ExecuteQuery($query);
			if($result){
	
					while($row=$Newconn -> GetRows($result)){
							
						echo"<tr>
									<td>".$row[0]."</td>
									<td>".$row[1]."</td>
									<td>".$row[2]."</td>
                                    <td>".$row[3]."</td>
                                    <td>".$row[4]."</td>
                                    <td>".$row[5]."</td>
                                    <td>".$row[6]."</td>
                                    <td>".$row[7]."</td>
                                    <td>".$row[8]."</td>
                                    <td>".$row[9]."</td>
                                    <td>".$row[10]."</td>
                                    <td>".$row[11]."</td>
                                    <td>".$row[12]."</td>
                                    <td>".$row[13]."</td>
                                    <td>".$row[14]."</td>
                                    <td>".$row[15]."</td>
                                    <td>".$row[16]."</td>
									<td><a class='actualizar' href = 'actualizar.php?id=$row[0]'>Actualizar</a></td>
									<td><a class='borrar' href = 'eliminar.php?id=$row[0]'>Borrar</a></td>
							</tr>";
					}
					$Newconn -> SetFreeResult($result);
				}else{
					echo "<h1>Error a conectar a la base de datos o el registro no existe</h1>";
				}
		echo "</table>";		
 ?> 
	
</body>
</html>


