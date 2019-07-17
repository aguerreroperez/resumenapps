<!doctype html><html><head>
  
  <meta http-equiv="content-type" name="viewport" content="text/html; charset=ISO-8859-1; device-width, initial-scale=1, maximum-scale=1">
  <title>BITACORA</title>

  
</head><body>
<center></center>

<table>

</table>

<table style="width: 300px; height: 350px;" bgcolor="#ffffff" border="5" bordercolor="#23238e" cellpadding="1" cellspacing="10">

  <tbody>
    <tr>
      <td valign="top">
      <div style="text-align: center;"> </div>
      <form style="background-color: rgb(204, 255, 255);" method="post" action="ingresar.php" name="ingresar">
        <div style="text-align: center; background-color: rgb(51, 102, 255); font-family: Arial Narrow;"><span style="font-weight: bold;"><big><big>BITACORA</big></big><br>
        </span> </div>
        <span style="font-family: Arial Narrow; font-weight: bold;">Respuesta:<br>
        <br>
        <br>
<!-- codigo PHP -->

<?php
//$numero = $_POST[numero];
//$nom_dia = $_POST[nom_dia];
$dia = $_POST[dia];
$mes = $_POST[mes];
$ano = $_POST[ano];
$fecha = "$dia-$mes-$ano";
$detalle = $_POST[detalle];
$tipo = $_POST[tipo];
$responsable = $_POST[responsable];
$monto = $_POST[monto];

echo "datos:$dia-$mes-$ano-$fecha-$detalle-$responsable-$monto <br>";

//Conexion con la base
$conexion = mysql_connect("localhost","admin","warrior"); 

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("gastosdb",$conexion);

if ($dia=='dia' or $mes=='mes' or $detalle=='' or $monto=='' or $tipo=='selec...' or $responsable=='selec...') 

		{ echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=gasto.php"><center>Informacion incompleta!!</center>'; }
	
		else { 

			$sSQL="insert into gasto (fecha,detalle,tipo,responsable,monto) values ('$fecha','$detalle','$tipo','$responsable','$monto')";
     
			mysql_query($sSQL) or die(mysql_error());
	
			echo "<h1><div align='center'><font size=3>Registro Ingresado</font></div></h1>";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="4;URL=gasto.php">';
	}

?>

<!-- fin codigo PHP --> <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        </span> </form>
      <br>
      </td>
    </tr>
  </tbody>
</table>

</body></html>