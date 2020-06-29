
<?php

mysql_connect("localhost", "root", "") or die("no se ha podido connectar...");
mysql_select_db("nueva");


$resultado = mysql_query("SELECT * FROM usuários WHERE id='".$_REQUEST['id']."'");

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
	
echo "<tr><td align=center>$id</td>
<td>$nombre</td><td>$email</td><td>$password</td></tr>";


}	echo "</table>";

mysql_close();

include('links.php');

?>

<form method="post" action="delete2.php">
<p>Estas seguro que quieres apagar este usuário?</p>
<input type="submit" name="submit" value="SÍ">&nbsp <a href="delete.php">NO</a>
<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
</form>

<?php include('links.php'); ?>



