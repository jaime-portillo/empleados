
<?php
session_start();

if(isset($_POST['submit'])){

$mypic = $_FILES['nuevafoto']['name'];
$temp = $_FILES['nuevafoto']['tmp_name'];
$type = $_FILES['nuevafoto']['type'];

$id = $_REQUEST['id'];
$name = $_REQUEST['nuevonombre'];
$email = $_REQUEST['nuevoemail'];
$password = $_REQUEST['nuevapassword'];

if($name && $email && $password){

if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)){
		
		if(strlen($password)>4){
		
			mysql_connect("localhost", "root", "") or die("no se ha podido connectar...");
				mysql_select_db("nueva");

				mysql_query("UPDATE usuários SET nombre='$name', email='$email' WHERE id='$id'");
				$md5 = md5($password);
				mysql_query("UPDATE usuários SET password='$md5' WHERE id='$id'");
			
			if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){
			
				$dir = "fotos/".$_SESSION['name'];
				$files = 0;
				$handle = opendir($dir);
				
					while(($file = readdir($handle)) != FALSE){
					
						if($file!="."&&$file!=".."&&$file!="Thumbs.db"){
							unlink($dir."/".$file);
							$files++;
						}
					
					}
					
					closedir($handle);
					sleep(1);
					rename("fotos/".$_SESSION['name']."", "fotos/$name");
					move_uploaded_file($temp, "fotos/$name/$mypic");
					
					echo "Los datos han sido actualizados con exito!";
					header("Refresh:2; url=logout.php");
			
			}else{
			
				echo "La foto tiene que ser de tipo jpeg, jpg o bmp y tener menos de 10kb!";
			
			}

}else{

	echo "El password tiene que tener mas de 4 caracteres!";
}

}else{

echo "Escribe un email válido!";

}

}else{

echo "Por favor completa el formulário!";

}

}else{

	echo "Acceso no permitido!";
	
}

?>