
<html>

<head>
<title>Registro</title>
</head>

<body>
<h2>Registro</h2>
<form ENCTYPE="multipart/form-data" method="post" action="insert.php">
<table border="0" width="60%">
<tr><td width="10%">Nombre:</td><td><input type="text" name="name" maxlength="20" /></td></tr>
<tr><td width="10%">Email:</td><td> <input type="text" name="email" maxlength="20" /></td></tr>
<tr><td width="10%">Password:</td><td> <input type="password" name="password" maxlength="20" /></td></tr>
<tr><td width="10%">Confirma Password:</td><td> <input type="password" name="cpassword" maxlength="20" /></td></tr>
<input type="hidden" name="MAX_FILE_SIZE" value="10000" />
</table>
<p>

Escoge una foto de tu ordenador:<input type="file" name="upload"><p>
<input type="submit" name="submit" value="enviar" />

</form>




</body>


</html>