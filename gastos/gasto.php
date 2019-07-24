<!doctype html>

<?php

//-------------------------------------------------
 if($_GET[page])
    {        $page = $_GET[page];     }
else{        $page = 1;     }

$max = 15; 
$cur = (($page * $max) - $max); 
//---------------------------------------------------

$fecha_dia=date('Ymd');
$mes=date('M');
$ano=date('Y');
$num_mes=date('m');
$busqueda="$num_mes-$ano";

//Conexion con la base
//mysql_connect("localhost","admin","warrior"); 
$conn = new mysqli("us-cdbr-gcp-east-01.cleardb.net", "bd89beb4bf87fb", "811f1a57", "gcp_ab76fd0b00d641a5d283");

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("gastosdb"); 

//realizamos consulta a la BD.
//$result=mysql_query("select * from gasto Order By fecha DESC LIMIT $cur, $max") or die(mysql_error());
$sSQL="select * from gasto Order By fecha DESC LIMIT $cur, $max";
$result=$conn->query($sSQL) or ("Connection failed: " . $conn->connect_error); 

//=================calcular total del mes===========================================================

$total_mes=mysql_query(" select monto from gasto where fecha LIKE '%" .$busqueda. "%' ") or die(mysql_error());

$i=0;
$total=0;

while ($row1=mysql_fetch_array($total_mes))

{

$total=$total + $row1[monto];

$i++;

}

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
      <form method="post" action="gasto1.php" name="ingresar" >
        <div style="text-align: center; background-color: #2471a3; font-family: Arial Narrow; color: #ffffff"><span style="font-weight: bold;"><big><big>GASTOS</big></big>
        </span> </div>
<p>
        <span>Ingresar datos:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <br>

<!-- fecha  -->   
  
        <span>&nbspFecha:&nbsp;</span>
	
        <select name="dia" required>
        <option>dia</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
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
	<option <?php if ($mes=="2019") {echo "selected";} ?> >2019</option>
        </select><br>
<!-- fin fecha -->

<! -- detalle del gasto -->

        <span >&nbspDetalle:</span>&nbsp;&nbsp;</span><input type="text" name="detalle" required><br>
        
<!-- tipo de gasto -->
	<span>&nbspTipo:&nbsp;</span>

	<select name="tipo" required>
	<option>selec...</option>
        <option value="Gi" >Giro (Gi)</option>
	<option value="Re" >Redcompra (Re)</option>
	<option value="Tr" >Tranferencia (Tr)</option>
	<option value="Ef" >Efectivo (Ef)</option>
        </select> <br>

<!-- responsable del gasto -->
	<span >&nbspResponsable:&nbsp;</span>

	<select name="responsable" required>
	<option>selec...</option>
        <option>Alberto</option>
	<option>Amey</option>
        </select><br>

<!-- monto del gasto -->
	<span>&nbspMonto:&nbsp;&nbsp;</span><input type="number" name="monto" maxlength="6" size="6" required><br>
        
<!-- ingresar -->
        
        <div style="text-align: left;">&nbsp;&nbsp;&nbsp; <input name="Ingresar" value="Ingresar" type="submit"></div>

&nbsp;&nbsp;&nbsp;&nbsp;</form>

</p>
<!--------------------gasto total ---------------------------------------->

<hr>

<h3>Total Gastos del mes : $ <?php echo"<font style='font-size: 11pt; font-family: Arial,Helvetica,sans-serif; color: #FF5733;'> $total </font>=> $i oper."; ?> </h3> 

<hr>

<!------------------------ listado de Gastos ----------------------------->

Pag:

<table width="100%" border="0" cellspacing="1" cellpadding="1"  bgcolor="#FFFFFF" bordercolor="#FFFFFF">

<tr>
<th>Fecha</th>
<th>Detalle</th>
<th>Tipo</th>
<th>Resp</th>
<th>Monto</th>
<th><img src='skin/delete.png'></th>
</tr>

<?php
//---------------------------------------------------------------------------------------------------------------

$counttotal = mysql_query("select * from gasto limit 90") or die(mysql_error()); 
$counttotal = mysql_num_rows($counttotal); 
$total_pages = ceil($counttotal / $max); 
//$total_pages = "6";

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

//-------------------------------------------------------------------------------------------------------------------


while ($row=mysql_fetch_array($result))

{

	echo "<tr><td><font size=1>$row[fecha]</font></td>";

	echo "<td><font size=1>$row[detalle]</td>";

	echo "<td><font size=1>$row[tipo]</td>";

	//resumen responsable

	$re_resp=substr($row[responsable],0,2);

	echo "<td><font size=1>$re_resp</td>";

	echo "<td><font size=1>$row[monto]</td>";

	echo "<td><center><a href=borrar.php?id=$row[id]><img src='skin/delete.png' title='Borrar el registro'></center></a></td>";

}

mysql_free_result($result)

?>
</td>
</tr>
</tbody>
</table>
</body></html>