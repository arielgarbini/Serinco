<?php
session_start();
include("globales.php");
if(isset($_SESSION['login'])){
	header('Location: '.base_url.'privado/panel.php');
}

include("db_connect.php");

if(isset($_POST['user']) && isset($_POST['pass'])){

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM users WHERE email='$user'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {

		$row = mysqli_fetch_assoc($result);
		
		if($row['pass'] == $pass){
			$_SESSION['login'] = "ok";
                        $_SESSION['rol'] = $row['rol'];
                        $_SESSION['id'] = $row['id'];
			header('Location: '.base_url.'privado/panel.php');
		}else{
			echo "Error en nombre / password";
		}
	}else{
		echo "Error en nombre / password";
	}

} 



?>
<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<title>Administración del Sitio </title>


</head>

<body>

	<div class="container">
		<?php if(!isset($_SESSION['login'])){ ?>
		<form class="form-signin" role="form" method="POST">
			<h2 class="form-signin-heading">Por favor, ingrese al sistema.</h2>
			<label for="inputEmail" class="sr-only">Usuario</label>
			<input type="text" id="inputEmail" name="user" class="form-control" placeholder="Usuario" required="" autofocus="">
			<label for="inputPassword" class="sr-only">Contraseña</label>
			<input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Contraseña" required="">
			
			<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
		</form>
		<?php }  ?>
	</div> 
	

</body>
</html>

<?php mysqli_close($conn); ?>
