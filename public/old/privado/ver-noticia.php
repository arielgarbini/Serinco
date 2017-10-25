<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login']=='ok'){
	include("db_connect.php");
	include("globales.php");
	if(isset($_GET['id'])){
		$id= $_GET['id'];
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

			<title>Ver Noticia</title>

		</head>

		<body>
			<div class="container">

				<?php include("menu.php"); ?>
				<?php 
			    $producto = "SELECT * FROM noticias WHERE noticias.id='$id'";
				$resul = mysqli_query($conn,$producto);
				$producto = mysqli_fetch_array($resul);
				?>
					<fieldset>
						<legend>Ver Noticia</legend>
						<label><b>Título</b></label><br/>
						<?php echo $producto['titulo']."<br/>"; ?>
						<label><b>Descripción Corta</b></label><br/>
						<?php echo $producto['descripcionCorta']."<br/>"; ?>
						<label><b>Fecha de Creación</b></label><br/>
						<?php echo date("d-m-Y", strtotime($producto['created_at']))."<br/>"; ?>
						<label><b>Cuerpo</b></label><br/>
						<?php print $producto['cuerpo']."<br/>"; ?>
						<label><b>Foto Grande</b></label><br/>
						<?php if(isset($producto['foto_grande'])){
							$foto_grande = $producto['foto_grande'];
							echo "<img src='../img/noticias/".$foto_grande."' alt=''/></br>";
						}?>
						<label><b>Foto Chica</b></label><br/>
						<?php if(isset($producto['foto_chica'])){
							$foto_chica = $producto['foto_chica'];
							echo "<img src='../img/noticias/".$foto_chica."' alt=''/></br>";
						}?>
				</fieldset>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



</body>
</html>
<?php }
} ?>
<?php mysqli_close($conn); ?>