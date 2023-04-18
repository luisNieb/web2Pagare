<?php
require ("Conexion/classConnectionMySQL.php");
$No = $_POST['No'];
$buenoX= $_POST['buenoX'];
$lugar = $_POST['lugar'];
$dia = $_POST['dia'];
$Mes = $_POST['Mes'];
$anio = '20'.$_POST['anio'];
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
// Creamos una nueva instancia
$NewConn = new ConnectionMySQL();
// Creamos una nueva conexion
$NewConn->CreateConnection();
///Realiza la insecion de datos a la base de datos
echo $query="UPDATE datosPagare SET bueno_Por  = '$buenoX',lugar_del_pago = '$lugar' 
,dia ='$dia', mes='$Mes' , anio='$anio' ,  persona_paga='$personaPaga' , lugar_pago = '$lugarPago',
fecha_pago = '$fechaPago' , cantidad_de_pago = '$cantidadDe' ,serie = '$serie', interes= '$interes', nombre= '$nombre',
direccion ='$Direccion' ,poblacion = '$Poblacion' , tel= '$tel' , firma='$firma' WHERE Numero = $No";
$result=$NewConn->ExecuteQuery($query);
    if($result){
        $RowCount =  $NewConn->GetCountAffectedRows();
        if($RowCount > 0){
            echo "Query ejecutado exitosamente<br/>";
			header("Location: mostrar.php");
			header('Location: mostrar.php');
        }
    }else{
        echo "<h3>Error al ejecutar la consulta</h3>";
    }
?>