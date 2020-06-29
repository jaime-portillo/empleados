
<html>

<head>
</head>


<body>
<form method="post" action="">
<table border="1" width="25%">
	<tr>
	<td width="10">Para:</td><td><input type="text" name="para" size="20" value="<?php echo $_REQUEST['email'];?>"></td></tr>            
	<td width="10">Asunto:</td><td><input type="text" name="asunto" size="20"></td></tr>  
    <tr>
	<td width="10">Mensaje:</td><td><textarea name="mensaje" cols="30" rows="5"></textarea></td></tr>
	
</table>

<p><input type="submit" name="submit" value="enviar email"><p>

</form>

<?php

	if(isset($_REQUEST['submit'])){
	
		$para = $_REQUEST['para']; 
		$asunto = $_REQUEST['asunto'];
		$mensaje = $_REQUEST['mensaje'];
		$de = "victorcruzbastos@onclickacademy.com";
		$headers = "From: $de";
		
		
		if($para && $asunto && $mensaje){
		
			mail($para,$asunto,$mensaje,$headers);
			echo "Tu email ha sido enviado!";
			header("Refresh:4; url=usuarios.php");
		
		
		}else{
		
			echo "Por favor rellena todos los inputs!";
		
		}
		
		
	
	}

?>



</body>



</html>