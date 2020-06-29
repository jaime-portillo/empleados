
<?php

mysql_connect("localhost", "root", "") or die("no se ha podido connectar...");
mysql_select_db("nueva");

$resultado = mysql_query("DELETE FROM usuários WHERE id='".$_REQUEST['id']."'");

echo "El usuário ha sido apagado!";

mysql_close();

include('links.php');

?>