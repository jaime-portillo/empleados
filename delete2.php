
<?php

mysql_connect("localhost", "root", "") or die("no se ha podido connectar...");
mysql_select_db("nueva");

$resultado = mysql_query("DELETE FROM usu�rios WHERE id='".$_REQUEST['id']."'");

echo "El usu�rio ha sido apagado!";

mysql_close();

include('links.php');

?>