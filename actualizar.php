<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylePagare.css">
    <title>Pagare</title>
</head>

<body>
    <form class="pagare__contenedor" method="POST" action="update.php">

        <?php
        require("Conexion/classConnectionMySQL.php");

        // Creamos una nueva instancia
        $NewConn = new ConnectionMySQL();

        // Creamos una nueva conexion
        $NewConn->CreateConnection();
        /////////
        $id = $_GET['id'];

        ///Consulta a la base de datos
       echo $query = "Select * from datosPagare WHERE Numero = '$id'";
         $result = $NewConn->ExecuteQuery($query);
        if ($result) {

            while ($row = $NewConn->GetRows($result)) {
                //echo "El usuario es:".$row[1]." y su edad es:".$row[2]."<br/>";
                echo "
                                <div class='pagare__contenedor--color'>
                            <div class='pagare__inicio'>
                                <div class='inicio__grid'>
                                <div class=''>
                                    <input type='submit' class='pagare__titulo' value='Pagare' onclick='' id='boton' ></input>
                                </div>
                                    <div class='pagare__numeroGrid'>
                                    <div>
                                        <label class='pagare__label' for='No'>No.</label>
                                        <input class='input__sombreaado' type='number' name='No' id='No' value=".$row[0]." min='1' max='100000'>
                                        <label class='pagare__labelCantidad'  for='buenoX'>BUENO POR $</label>
                                        <input class='input__sombreaado' type='number' name='buenoX' id='buenoX' value=".$row[1]." min='100' max='2000000'>
                                    </div>
                                    <div class='pagare__fechaGrid' >
                                        <div>
                                            <label class='pagare__labelFecha' for='lugar'>En</label>
                                            <input class='input__linea'type='text' name='lugar' id='lugar' value=".$row[2].">
                                        </div>
                                        <div>
                                            <label class='pagare__label'  for='dia'>a</label>
                                            <input class='input__lineaCorta' type='number' name='dia' id='dia' min='1' max='31' value=".$row[3].">
                                        </div>
                                        <div>
                                            <label class='pagare__label'for='Mes'>de</label>
                                            <select class='input__linea' type='text' name='Mes' id='Mes' value=".$row[4].">
                                                
                                                <option value='Febrero'>Febrero</option>
                                                <option value='Marzo'>Marzo</option>
                                                <option value='Abril'>Abril</option>
                                                <option value='Mayo'>mayo</option>
                                                <option value='Junio'>Junio</option>
                                                <option value='Julio'>Julio</option>
                                                <option value='Agosto'>Agosto</option>
                                                <option value='Septiembre'>Septiembre</option>
                                                <option value='Octubre'>Octubre</option>
                                                <option value='Noviembre'>Noviembre</option>
                                                <option value='Diciembre'>Diciembre</option>
                                                <option value='Enero'>Enero</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label class='pagare__label' for='anio'>de 20</label>
                                            <input class='input__lineaCorta' type='number' name='anio' id='anio' min='23' max='30' value=".$row[5].">
                                        </div>
                                        
                                    </div><!--grid separando la fecha-->
                                    
                                </div><!--numero bueno por y fecho-->
                            </div>
                        
                        </div><!--PRIMER SEGMENTO DEL PAGARE-->
                        <div class='pagare__seccionDosGrid'>
                            <div>
                            </div>
                            <div>
                                <p class='pagare__lugarFechaNacimiento'>Lugar y fecha de nacimiento</p>
                            </div>
                        </div><!--letras pequnias -->
                        <section >
                            <div class='pagare__seccionTresGrid'>
                                <div>
                                <p class='pagare__paga'>Debe(mos) pagare(mos) incondicinalmente por este Pagare a la orden de</p>
                                </div>
                                <div>
                                    <input class='input__linea--larga'type='text' name='personaPaga' id='personaPaga' value=".$row[6]." required>
                                </div>

                            </div><!--seccion de la persona que paga-->

                        <section class='pagare__seccionDosGrid' >
                            <div>
                            </div>
                            <div>
                                <p class='pagare__nombrePersonaPagarse'>Nombre de la persona ha quien a de pagarse</p>
                            </div>
                        </section><!--nombre de la persona a quien ha de pagarse-->

                        </section>
                        <section>
                            <div class='pagare__seccionCuatroGrid'>
                            <div>
                                    <label class='pagare__label' for='lugarPago'>en</label>
                                    <input class='input__linea--xxlarga' type='text' name='lugarPago' id='lugarPago' value=".$row[7]." required>
                            </div>
                            <div>
                                    <label for='elPago'>el</label>
                                    <!--<input class='input__lineaCorta' type='text' name='elPago' id='elPago'  required>-->
                            </div>
                            <div>
                                    <input class='input__linea--xxlarga' type='date' name='fechaPago' id='fechaPago' value=".$row[8]."  required>
                            </div>
                            </div>
                        </section><!--en__________ el__ _____________-->

                        <section class='pagare__seccionDosGrid'>
                            <div>
                                <p class='pagare__lugarFecha'>Lugar  de pago</p>
                            </div>
                            <div>
                                <p class='pagare__lugarFecha'>fecha de pago</p>
                            </div>
                        </section><!--letras pequnias lugar de pago fecha de pago -->
                        <section class=''>
                            <div>
                                <p class=''>La cantidad de:</p>
                            </div>
                            <div>
                                <input class='input__sombreaado--100' type='text' name='cantidadDe' id='CantidadD' value=".$row[9]." required>
                            </div>
                        </section><!--la Cantidad de-->
                        <section class=''> 
                            <div>
                                <p class='pagare__parrafo'>valor recibido a mi (nuestra) entera satisfaccion.Este pagare froma
                                parte de una serie numerada de 1 al<input class='input__lineaCorta' name='serie' id='serie' type='number' value=".$row[10]." min='1' max='100' required>
                                y todos estan sujetos a la condicion de que ,al no pagarse cualquiera de ellos a su vencimiento
                                ,seran exigibles  todos los que sigan en numero ,ademas de los ya vencidos,desde la fecha de vencimiento
                                de este documento hasta el dia de su liquidacion, causara intereses moratorios al tipo de
                            <input class='input__lineaCorta' id='interes' name='interes' type='number' min='1' max='100' value=".$row[11]." required> % mensusal ,pagadero en esta ciudad.</p>
                            </div>
                
                        </section><!--parrafo-->
                        <footer>
                            <div class='footer__grid'>
                                <div class='footer__izq'>
                                    <p>Nombre y datos del deudor</p>
                                    <div>
                                        <label class='pagare__label--nombre' for='nombre'>Nombre</label>
                                        <input class='input__linea--larga--footer' type='text' name='nombre'  id='nombre' value=".$row[12]." required>
                                    </div>
                                    <div>
                                        <label class='pagare__label' for='Direccion'>Direccion</label>
                                        <input class='input__linea--larga--footer' type='text' name='Direccion' id='Direccion' value=".$row[13]." required>
                                    </div>
                                    <div>
                                        <label class='pagare__label' for='Poblacion'>Poblacion</label>
                                        <input class='input__linea--mediana--footer' type='text' name='Poblacion' id='Poblacion' value=".$row[14]." required>
                                        <label class='pagare__label' for='tel'>tel.</label>
                                        <input class='input__linea--footer' type='number' name='tel' id='tel' min='1000000000' max='9999999999' value=".$row[15]." required>
                                    </div>
                                    <div>
                                    
                                    </div>
                                
                                </div><!--nombre y datos del deudor-->
                                <div class='footer__der'>
                                <div>
                                    <p class='footer__der--acepto'>Acepto(amos) y paga(remos) a su vencimineto</p>
                                </div>
                                <div>
                                    <input class='input__linea--xxlarga--footer' type='text' name='firma' id='firma' value=".$row[16].">
                                </div>
                                <div>
                                    <p class='pagare__firma'>Firma(s)</p>
                                </div>
                                </div>
                            </div>
                        </footer>

                        </div><!--contorno del pagare-->
                                
							
			    ";
            }
            $NewConn->SetFreeResult($result);
        } else {
            echo "<h1>Error a cnectar a la base de datos o el registro no existe</h1>";
        }

        ?>





    </form>


</body>
<script src="js/app.js"></script>

</html>