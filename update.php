
<?php
session_start();

if(!isset($_SESSION['name'])){

echo "Acceso no permitido!";


}else{
include('user.php');
echo "<h3>Escoge una ID para editar...</h3>";

mysql_connect("localhost", "root", "") or die("no se ha podido connectar...");
mysql_select_db("nueva");

$por_pagina = 6;

$pagina_query = mysql_query("SELECT COUNT('id') FROM usuários");
$paginas = ceil(mysql_result($pagina_query, 0) / $por_pagina);

$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$start = ($pagina - 1) * $por_pagina;

$query = mysql_query("SELECT * FROM usuários LIMIT $start, $por_pagina");



echo "<table width='90%' align='center' border=2>";

echo "<tr><td width='40%' align='center' bgcolor='FFFF00'>ID</td>    
<td width='40%' align='center' bgcolor='FFFF00'>NOMBRE</td> 
<td width='40%' align='center' bgcolor='FFFF00'>EMAIL</td> 
<td width='40%' align='center' bgcolor='FFFF00'>PASSWORD</td></tr>";


while($row = mysql_fetch_assoc($query)){

	$id = $row['id'];
	$nombre = $row['nombre'];
	$email = $row['email'];
	$password = $row['password'];
	
	$first = base64_encode($id);
	$second = base64_encode($nombre);
	$third = base64_encode($email);
	$fourth = base64_encode($password);
	
	
	
echo "<tr><td align=center>
<a href='edit.php?id=$first&nombre=$second&email=$third&password=$fourth'>$id</a>
<td>$nombre</td><td><a href='email.php?email=$email'>$email</td><td>$password</td></tr>";


}	echo "</table>";


$anterior = $pagina - 1;
$siguiente = $pagina + 1;

echo "<center><p>";

if(!($pagina<=1)){

echo "<a href='update.php?pagina=$anterior'>Anterior</a> ";

}



if($paginas >= 1){


	for($x=1;$x<=$paginas;$x++){

		echo ($x == $pagina) ? '<b><a href="?pagina='.$x.'">'." ".$x.'</a></b> ' : '<a href="?pagina='.$x.'">'." ".$x.'</a> ';                  
		
	}	

}
if(!($pagina>=$paginas)){

echo "<a href='update.php?pagina=$siguiente'> Siguiente</a>";

}

echo "</center>";

mysql_close();


}
?>