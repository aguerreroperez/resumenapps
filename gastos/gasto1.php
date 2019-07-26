<!doctype html>

<html>

<head>
  
  <meta http-equiv="content-type" name="viewport" content="text/html; charset=ISO-8859-1; device-width, initial-scale=1, maximum-scale=1">
  <title>GASTOS</title>

<link href="estilo.css" rel="stylesheet" type="text/css" />

  
</head>

<body>

<center></center>

<table style="width: 300px; height: 350px;" bgcolor="#ffffff" border="5" bordercolor="#23238e" cellpadding="1" cellspacing="10">

  <tbody>
 
      <td valign="top">
      <div style="text-align: center;"> </div>
      <form method="post" action="gasto1.php" name="ingresar" >
        <div style="text-align: center; background-color: #2471a3; font-family: Arial Narrow; color: #ffffff"><span style="font-weight: bold;"><big><big>GASTOS</big></big>
        </span> </div>


<!-- codigo PHP -->
<br><br><br><br><br><br><br>


<?php
//$numero = $_POST[numero];
//$nom_dia = $_POST[nom_dia];
$saldo= $_GET[saldo];
$dia = $_POST[dia];
$mes = $_POST[mes];
$ano = $_POST[ano];
$fecha = "$dia-$mes-$ano";
$detalle = $_POST[detalle];
$tipo = $_POST[tipo];
//$saldo = $_POST[saldo];
$monto = $_POST[monto];

//echo "datos:$dia-$mes-$ano-$fecha-$detalle-$responsable-$monto <br>";

//Conexion con la base
$conn = new mysqli("us-cdbr-gcp-east-01.cleardb.net", "bd89beb4bf87fb", "811f1a57", "gcp_ab76fd0b00d641a5d283");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }

//selección de la base de datos con la que vamos a trabajar 

if ($dia=='dia' or $mes=='mes' or $detalle=='' or $monto=='' or $tipo=='selec...' ) 

		{ echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=gasto.php"><h1><center>Informacion incompleta!! <br> Retornando...</center></h1>'; }
	
			else { 

					if ($tipo=="Egreso"){  $saldo_nuevo = $saldo - $monto; 					
											$sSQL="insert into gastos (fecha,detalle,tipo,monto,saldo) values ('$fecha','$detalle','$tipo','$monto','$saldo_nuevo')";
													//echo "tipo=$tipo";
												if ($conn->query($sSQL) === TRUE) {    echo "<h1><div align='center'><font size=3>Egreso realizado!!</font></div></h1>";
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=gasto.php">';}
												
													else { echo "Error: " . $sSQL . "<br>" . $conn->error;}
											}
							
							else {
									$saldo_nuevo= $saldo + $monto;
					
										$sSQL="insert into gastos (fecha,detalle,tipo,monto,saldo) values ('$fecha','$detalle','$tipo','$monto','$saldo_nuevo')";
													//echo "tipo=$tipo";
										if ($conn->query($sSQL) === TRUE) {    echo "<h1><div align='center'><font size=3>Ingreso realizado!!</font></div></h1>";
												echo '<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=gasto.php">';}
												
											else { echo "Error: " . $sSQL . "<br>" . $conn->error;}
									}
				}

?>

<!-- fin codigo PHP -->
<br><br><br><br><br><br><br><br><br><br><br><br>

<hr>


</td>
</tr>
</tbody>
</table>
</body></html>