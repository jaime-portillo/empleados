
<?php

$mypic = $_FILES['upload']['name'];
$temp = $_FILES['upload']['tmp_name'];
$type = $_FILES['upload']['type'];


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


if($name && $email && $password && $cpassword){

if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)){


	if(strlen($password)>4){

		if($password==$cpassword){
	
	

	mysql_connect("localhost", "root", "") or die("no se ha podido connectar...");
	mysql_select_db("nueva");
	
	$usuario = mysql_query("SELECT nombre FROM usuários WHERE nombre='$name'");
	$contar = mysql_num_rows($usuario);
	
	$remail = mysql_query("SELECT email FROM usuários WHERE email='$email'");
	$checkemail = mysql_num_rows($remail);
	
		if($checkemail!=0){
			
				echo "<p>Este email ya existe! Por favor escoge otro email...";
					
			}else{
	
	
	if($contar!=0){
	
		echo "<p>Nombre ya existente, por favor escoge otro nombre!";	


	}else{
		
		if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){
		
		
		
		$directory = "./fotos/$name/";
		mkdir($directory, 0777, true);
		move_uploaded_file($temp, "fotos/$name/$mypic");
		echo "Esta será tu foto de perfil...<p><img boder='1' width='50' height='50' src='fotos/$name/$mypic'><p>";
		$passwordmd5 = md5($password);
		mysql_query("INSERT INTO usuários(nombre,email,password) VALUES('$name','$email','$passwordmd5')");

		$registro = mysql_affected_rows();
	
		echo "Te has registrado con suceso! "."<a href='index.php'>Haz Login</a>";
	
	
	}else{
	
		echo "El archivo tiene que ser jpeg, jpg o bmp y tener menos de 10Kb!";
	
	}
	
	}
	}
	
	}else{
	
		echo "No te has registrado pq la password no es igual a la confirmada!";
	
	}
	
	}else{
	
		echo "Tu password es demasiado pequeña!";
	
	}
	
	}else{
	
		echo "Por favor escribe un email válido!";
	
	}
	
	
}else{


		echo "por favor completa el formulario";


}



?>