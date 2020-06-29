<?php
session_start();
$expire = time()-86400;

setcookie('nueva', $_SESSION['name'], $expire);
session_destroy();

echo "Sesión acabada!";
header("Refresh:4; url=index.php");

?>