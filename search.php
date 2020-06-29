<?php session_start(); include('user.php'); ?>

<html>

<head>
<title></title>
</head>


<body>
<center>
<form method="get" action="">

	<input type="text" name="search">
	<input type="submit" name="submit" value="Buscar en BD">

</form>
</center>
<hr />
<u>Resultados</u>:
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

if(!isset($_SESSION['name'])){

echo "Acceso no permitido";

}else{

	if(isset($_REQUEST['submit'])){
	
		$search = $_GET['search'];
		$terms = explode(" ", $search);
		$query = "SELECT * FROM usuários WHERE ";
	
	$i=0;
		foreach($terms as $each){
		
			$i++;
			if($i==1){
				$query .= "nombre LIKE '%$each%'";
			}else{	
				$query .= "OR nombre LIKE '%$each%'";
			}
		
		}
		
		
		mysql_connect("localhost", "root", "");
		mysql_select_db("nueva");
		
		$queryplus = mysql_query($query);
		$numero = mysql_num_rows($queryplus);
		
		if($numero > 0 && $search!=""){
		
		echo "$numero resultado(s) encontrado(s) para <b>$search</b>!";
		
			while($row = mysql_fetch_assoc($queryplus)){
			
				$id = $row['id'];
				$nombre = $row['nombre'];
				$email = $row['email'];
				$password = $row['password'];
			
			
			
			echo "<br /><h3>nombre: $nombre(id: $id)</h3>$email<br />password: $password";
			
			}
		
		
		
		}else{
		
			echo "No hay resultados con este nombre...";
		
		}
	
		mysql_close();
	
	}else{
	
		echo "Busca algo...";
	
	
	}
}

?>


</body>




</html>