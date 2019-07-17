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
$id = $_GET[id];

//echo "datos:$dia-$mes-$ano-$fecha-$detalle-$responsable-$monto <br>";

//Conexion con la base
$conexion = mysql_connect("localhost","admin","warrior"); 

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("gastosdb",$conexion);

 $sSQL="Delete From gasto where id='$id'";
 mysql_query($sSQL) or die(mysql_error());
	
			echo "<h1><div align='center'><font size=3>Registro Borrado</font></div></h1>";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='4;URL=gasto.php'>";

?>

<!-- fin codigo PHP -->
<br><br><br><br><br><br><br><br><br><br><br><br>

<hr>


</td>
</tr>
</tbody>
</table>
</body></html>