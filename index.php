

<?php

if(isset($_COOKIE['nueva'])){

	header("Location: user.php");

}else{

echo '

<html>

<head>
<title>Bienvenidos al Portal Nueva</title>
</head>

<body>

<center><h2>Bienvenidos al Portal Nueva</h2>

Por favor haz login...<p>

<form method="post" action="login.php">
<table border="1">
<tr><td>Nombre:</td><td><input type="text" name="name" maxlength="20" /></td></tr>
<tr><td>Password:</td><td> <input type="password" name="password" maxlength="20" /></td></tr>
</table>
<p>
Mantener Sesión iniciada?<input type="checkbox" name="recuerda" />
<p>
<input type="submit" name="submit" value="login" />

</form>
<a href="form.php">Registro?</a>


</center>

</body>


</html>';
}
?>