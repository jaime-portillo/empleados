
<?php
session_start();


if(!isset($_SESSION['name'])){

echo "Acceso no permitido!";

}else{
include('user.php');
echo "<h3>Escoge una ID para apagar...</h3>";

mysql_connect("localhost", "root", "") or die("no se ha podido connectar...");
mysql_select_db("nueva");


$resultado = mysql_query("SELECT * FROM usuários");

echo "<table width='90%' align='center' border=2>";

echo "<tr><td width='40%' align='center' bgcolor='FFFF00'>ID</td>    
<td width='40%' align='center' bgcolor='FFFF00'>NOMBRE</td> 
<td width='40%' align='center' bgcolor='FFFF00'>EMAIL</td> 
<td width='40%' align='center' bgcolor='FFFF00'>PASSWORD</td></tr>";


while($row = mysql_fetch_array($resultado)){

	$id = $row['id'];
	$nombre = $row['nombre'];
	$email = $row['email'];
	$password = $row['password'];
	
echo "<tr><td align=center>
<a href='delete1.php?id=$id&nombre=$nombre&email=$email&password=$password'>$id</a>
<td>$nombre</td><td>$email</td><td>$password</td></tr>";


}	echo "</table>";

mysql_close();

}

?>