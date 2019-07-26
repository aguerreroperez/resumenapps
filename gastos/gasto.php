<!doctype html>

<?php

$fecha_dia=date('Ymd');
$dia=date('d');
$mes=date('M');
$ano=date('Y');
$num_mes=date('m');
$busqueda="$num-mes-$ano";

//Conexion con la base
$conn = new mysqli("us-cdbr-gcp-east-01.cleardb.net", "bd89beb4bf87fb", "811f1a57", "gcp_ab76fd0b00d641a5d283");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

$sSQL1 = "SELECT saldo,idgastos FROM gastos ORDER By idgastos DESC LIMIT 1";
//$sSQL1 = "SELECT * FROM gastos ORDER By idgastos";
$saldo = $conn->query($sSQL1);
if($sSQL1->errno) die($sSQL1->error);

$fila = $saldo->fetch_assoc();
$saldo=$fila[saldo];
$idgastos1=$fila[idgastos];
//echo "saldo=$saldo";

//=================================================================================================

?>

<html>

<head>
  
  <meta http-equiv="content-type" name="viewport" content="text/html; charset=ISO-8859-1; device-width, initial-scale=1, maximum-scale=1">
  
	<title>GASTOS</title>

<link href="estilo.css" rel="stylesheet" type="text/css" />

</head>

<body>

<center></center>

<table style="width: 325px; height: 350px;" bgcolor="#ffffff" border="5" bordercolor="#23238e" cellpadding="1" cellspacing="10">

  <tbody>
 
      <td valign="top">
      <div style="text-align: center;"> </div>
      <form method="post" action="gasto1.php<?php echo"?saldo=$saldo"; ?>" name="ingresar" >
        <div style="text-align: center; background-color: #2471a3; font-family: Arial Narrow; color: #ffffff"><span style="font-weight: bold;"><big><big>GASTOS</big></big>
        </span> </div>
<p>
        <span>Ingresar datos:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <br>

<!-- fecha  -->   
  
        <span>&nbspFecha:&nbsp;</span>
	
        <select name="dia" required>
		<OPTION value="01" <?php if ($dia=="01") {echo "selected";} ?> > 01 </option>
		<OPTION value="02" <?php if ($dia=="02") {echo "selected";} ?> > 02 </option>
		<OPTION value="03" <?php if ($dia=="03") {echo "selected";} ?> > 03 </option>
		<OPTION value="04" <?php if ($dia=="04") {echo "selected";} ?> > 04 </option>
		<OPTION value="05" <?php if ($dia=="05") {echo "selected";} ?> > 05 </option>
		<OPTION value="06" <?php if ($dia=="06") {echo "selected";} ?> > 06 </option>
		<OPTION value="07" <?php if ($dia=="07") {echo "selected";} ?> > 07 </option>
		<OPTION value="08" <?php if ($dia=="08") {echo "selected";} ?> > 08 </option>
		<OPTION value="09" <?php if ($dia=="09") {echo "selected";} ?> > 09 </option>
		<OPTION value="10" <?php if ($dia=="10") {echo "selected";} ?> > 10 </option>
		<OPTION value="11" <?php if ($dia=="11") {echo "selected";} ?> > 11 </option>
		<OPTION value="12" <?php if ($dia=="12") {echo "selected";} ?> > 12 </option>
        <OPTION value="13" <?php if ($dia=="13") {echo "selected";} ?> > 13 </option>
		<OPTION value="14" <?php if ($dia=="14") {echo "selected";} ?> > 14 </option>
		<OPTION value="15" <?php if ($dia=="15") {echo "selected";} ?> > 15 </option>
		<OPTION value="16" <?php if ($dia=="16") {echo "selected";} ?> > 16 </option>
		<OPTION value="17" <?php if ($dia=="17") {echo "selected";} ?> > 17 </option>
		<OPTION value="18" <?php if ($dia=="18") {echo "selected";} ?> > 18 </option>
		<OPTION value="19" <?php if ($dia=="19") {echo "selected";} ?> > 19 </option>
		<OPTION value="20" <?php if ($dia=="20") {echo "selected";} ?> > 20 </option>
		<OPTION value="21" <?php if ($dia=="21") {echo "selected";} ?> > 21 </option>
		<OPTION value="22" <?php if ($dia=="22") {echo "selected";} ?> > 22 </option>
		<OPTION value="23" <?php if ($dia=="23") {echo "selected";} ?> > 23 </option>
		<OPTION value="24" <?php if ($dia=="24") {echo "selected";} ?> > 24 </option>
		<OPTION value="25" <?php if ($dia=="25") {echo "selected";} ?> > 25 </option>
		<OPTION value="26" <?php if ($dia=="26") {echo "selected";} ?> > 26 </option>
		<OPTION value="27" <?php if ($dia=="27") {echo "selected";} ?> > 27 </option>
		<OPTION value="28" <?php if ($dia=="28") {echo "selected";} ?> > 28 </option>
		<OPTION value="29" <?php if ($dia=="29") {echo "selected";} ?> > 29 </option>
		<OPTION value="30" <?php if ($dia=="30") {echo "selected";} ?> > 30 </option>
		<OPTION value="31" <?php if ($dia=="31") {echo "selected";} ?> > 31 </option>
        </select>

        <select name="mes" required>
        <OPTION value="01" <?php if ($mes=='Jan') {echo 'selected';} ?> > Ene </option>
			<OPTION value="02" <?php if ($mes=="Feb") {echo "selected";} ?> > Feb </option>
			<OPTION value="03" <?php if ($mes=="Mar") {echo "selected";} ?> > Mar </option>
			<OPTION value="04" <?php if ($mes=="Apr") {echo "selected";} ?> > Abr </option>
			<OPTION value="05" <?php if ($mes=="May") {echo "selected";} ?> > May </option>
			<OPTION value="06" <?php if ($mes=="Jun") {echo "selected";} ?> > Jun </option>
			<OPTION value="07" <?php if ($mes=="Jul") {echo "selected";} ?> > Jul </option>
			<OPTION value="08" <?php if ($mes=="Aug") {echo "selected";} ?> > Ago </option>
			<OPTION value="09" <?php if ($mes=="Sep") {echo "selected";} ?> > Sep </option>
			<OPTION value="10" <?php if ($mes=="Oct") {echo "selected";} ?> > Oct </option>
			<OPTION value="11" <?php if ($mes=="Nov") {echo "selected";} ?> > Nov </option>
			<OPTION value="12" <?php if ($mes=="Dec") {echo "selected";} ?> > Dic </option>
			</select>

        <select name="ano" required>
        <option <?php if ($ano=="2018") {echo "selected";} ?> >2018</option>
	<option <?php if ($ano=="2019") {echo "selected";} ?> >2019</option>
        </select><br>
<!-- fin fecha -->

<! -- detalle del gasto -->

        <span >&nbspDetalle:</span>&nbsp;&nbsp;</span><input type="text" name="detalle" required><br>
        
<!-- tipo de gasto -->
	<span>&nbspTipo:&nbsp;</span>

	<select name="tipo" required>
	<option>selec...</option>
    <option>Egreso</option>
	<option>Ingreso</option>
	</select> <br>

<!-- responsable del gasto 
	<span >&nbspResponsable:&nbsp;</span>

	<select name="responsable" required>
	<option>selec...</option>
        <option>Alberto</option>
	<option>Amey</option>
        </select><br> -->

<!-- monto del gasto -->
	<span>&nbspMonto:&nbsp;&nbsp;</span><input type="number" name="monto" maxlength="6" size="6" required><br>
        
<!-- ingresar -->
        
        <div style="text-align: left;">&nbsp;&nbsp;&nbsp; <input name="Ingresar" value="Ingresar" type="submit"></div>

&nbsp;&nbsp;&nbsp;&nbsp;</form>

</p>
<!--------------------gasto total ---------------------------------------->
<hr>
<!------------------------ listado de Gastos ----------------------------->

Pag:

<table width="100%" border="0" cellspacing="1" cellpadding="1"  bgcolor="#FFFFFF" bordercolor="#FFFFFF">

<tr>
<th>Fecha</th>
<th>Detalle</th>
<th>Tipo</th>
<th>Monto</th>
<th>Saldo</th>
<th>Borrar</th>
</tr>

<?php
//---------------------------------------PAGINADOR------------------------------------------------------------------------

if($_GET[page])
    {        $page = $_GET[page];     }
else{        $page = 1;     }

$max = 15; 
$cur = (($page * $max) - $max); 

$sSQL = "select * from gastos Order By idgastos DESC LIMIT $cur, $max";
$resultado = $conn->query($sSQL);
if($consulta->errno) die($consulta->error);

$counttotal = $resultado->num_rows;
$total_pages = ceil($counttotal / $max); 

if($page > 1){ 
                $prev = ($page - 1); 
	            echo "<a href='?page='.$prev.''><font size=1><<&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</font></a>"; 
                }
for($i = 1; $i <= $total_pages; $i++) 
                {
                    if($page == $i) 
                        {
                            echo'<b><font size=2>'.$i.'</font>&nbsp</b>'; //da el numero de paginas
                                } 
			else {
                            echo '<a href="?page='.$i.'"><font size=1>'.$i.'</font>&nbsp</a>';
                        }
                }

if($page < $total_pages){ 
                    $next = ($page + 1); 
               	 echo '<a href="?page='. $next.'"><font size=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp>></font></a>'; // link a la proxima pagina
                    } 

//------------------------------------------------------------------------------------------------------------------------
//---------------------------------------CARTOLA--------------------------------------------------------------------------

while($row = $resultado->fetch_assoc()) 
{

	echo "<tr><td><font size=1>$row[fecha]</font></td>";

	echo "<td><font size=1>$row[detalle]</td>";

	echo "<td><font size=1>$row[tipo]</td>";

	echo "<td><font size=1>$row[monto]</td>";

	echo "<td><font size=1>$row[saldo]</td>";
	
	if ($row[idgastos]==$idgastos1) { echo "<td><center><a href=borrar.php?idgastos=$row[idgastos]&saldo=$saldo><img src='skin/delete.png' title='Borrar el registro'></center></a></td>"; }
	    else {
	echo "<td><center><img src='skin/delete.png' title='Borrar el registro'></center></td>";
		}
}

$resultado->free();
//-------------------------------------------------------------------------------------------------------------------
?>

</td>
</tr>
</tbody>
</table>
</body></html>