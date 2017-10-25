<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login']=='ok'){
	include("db_connect.php");
	include("globales.php");
	?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>	
		<script src="https://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
		<title>Nuevo Usuario</title>
	</head>

	<body>

		<div class="container">

			<?php include("menu.php"); ?>
			<?php if(isset($_GET['operacion']) && $_GET['operacion']=='ok') { ?>
			<div class="alert alert-success">Operación realizada con EXITO!</div>
			<?php } ?>
			<form action="procesar-usuario.php" method="POST" enctype="multipart/form-data">
				<fieldset>
					<legend>Nuevo Usuario</legend>
					
	<label>Email</label><br/>
	<input type="text" placeholder="Email" name="email" required> <br/>
	<label>Password</label><br/>
	<input type="password"  name="password" required> <br/>
	<label>Nombre</label><br/>
	<input type="text" placeholder="Nombre" name="nombre" required> <br/>
	<label>Apellido</label><br/>
	<input type="text" placeholder="Apellido" name="apellido" required> <br/>
	<label>Rol</label><br/>
	<select name="rol" required>
        <option value="">Seleccione Rol</option>
        <option value="1">Admin</option>
        <option value="2">Usuario</option>
        </select> <br/> <br/>
					<button type="submit" class="btn">Crear!</button><br/>
				</fieldset>
			</form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



</body>
</html>
<?php mysqli_close($conn); } ?>