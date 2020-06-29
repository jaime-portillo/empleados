
<?php
session_start();

$_SESSION['name']= $_POST['name'];
$_SESSION['password'] = md5($_POST['password']);


if($_POST){

if($_SESSION['name'] && $_SESSION['password']){

	mysql_connect("localhost", "root", "") or die("no se ha podido connectar...");
	mysql_select_db("nueva");
	
	$query = mysql_query("SELECT * FROM usuários WHERE nombre='".$_SESSION['name']."'");
	$numrows = mysql_num_rows($query);
	
		if($numrows != 0){
		
			while($row = mysql_fetch_assoc($query)){
			
				$bdnombre = $row['nombre'];
				$bdpassword = $row['password'];
						
			}
			
			if($_SESSION['name']==$bdnombre){
				if($_SESSION['password']==$bdpassword){
					if(($_POST['recuerda'] == "on")){
					
						$expira = time()+86400;
						setcookie('nueva', $_SESSION['name'], $expira);
					
					}
					
					header('location: user.php');
					
				}else{
					echo "esta password esta incorrecta!";
				}
			
			}else{
				echo "Este nombre está incorrecto!";
			}
		
		
		}else{
		
		echo "Este nombre no está registrado!";
		
		}


}else{

echo "Completa el login con nombre y password!";

}
}else{

	echo "Acceso no permitido!";
exit;
}

?>