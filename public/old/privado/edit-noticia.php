<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login']=='ok'){
	include("db_connect.php");
	include("globales.php");
	if(isset($_GET['id'])){
		$id= $_GET['id'];

		if(isset($_GET['delete_grande'])){
			$foto = $_GET['delete_grande'];
			$fotos =  "UPDATE noticias SET foto_grande='' WHERE id='$id' AND foto_grande='$foto'";
			if(mysqli_query($conn,$fotos)){
				unlink('../img/noticias/'.$foto);
				header("Location: ".base_url."/privado/edit-noticia.php?id=$id&operacion=ok");
			}else{
				header("Location: ".base_url."/privado/edit-noticia.php?id=$id&operacion=not");
			}
		}

		if(isset($_GET['delete_chica'])){
			$foto = $_GET['delete_chica'];
			$fotos =  "UPDATE noticias SET foto_chica='' WHERE id='$id' AND foto_chica='$foto'";
			if(mysqli_query($conn,$fotos)){
				unlink('../img/noticias/'.$foto);
				header("Location: ".base_url."/privado/edit-noticia.php?id=$id&operacion=ok");
			}else{
				header("Location: ".base_url."/privado/edit-noticia.php?id=$id&operacion=not");
			}
		}

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
		<title>Editar Noticia</title>
		<script type="text/javascript">
	tinymce.init({
    selector: "textarea#larga",
    width: 800,
    height: 300,
 });
</script>

		</head>

		<body>
			<div class="container">

				<?php include("menu.php"); ?>
				<?php if(isset($_GET['operacion']) && $_GET['operacion']=='ok') { ?>
				<div class="alert alert-success">Operación realizada con EXITO!</div>
				<?php } 

				$producto= "SELECT * FROM noticias WHERE id='$id'";
				$resul = mysqli_query($conn,$producto);
				$producto = mysqli_fetch_array($resul);
				?>
				<form action="procesar-noticia.php" method="POST" enctype="multipart/form-data" >
					<fieldset>
						<legend>Editar Noticia</legend>
						
	<label>Título</label></br>
	<input type="text" placeholder="Título" name="titulo" value="<?php echo $producto['titulo']; ?>" required> <br/>
	<label>Copete</label></br>
	<textarea rows="3" style="width: 456px; height: 50px;" name="descripcion_corta" required><?php echo $producto['descripcionCorta']; ?></textarea></br>
<label>Fuente</label></br>
	<input type="text" placeholder="http://www.fuente.com.ar" name="fuente" value="<?php echo $producto['fuente']; ?>" required> <br/>
	<label>Cuerpo</label></br>
	<textarea rows="3" style="width: 456px; height: 50px;" name="cuerpo" id="larga"><?php echo $producto['cuerpo']; ?></textarea></br>
	<label>Foto Grande</label></br>
						<?php if(isset($producto['foto_grande']) && $producto['foto_grande']!=''){
							$foto_grande = $producto['foto_grande'];
							echo "<img src='../img/noticias/".$foto_grande."' alt=''/><a href='edit-noticia.php?id=$id&delete_grande=$foto_grande'>Eliminar</a></br>";
						}else{ ?>
						<input type="file" name="fotoGrande"/></br>
						<?php } ?>
						<label>Foto Banner Chico</label></br>
						<?php if(isset($producto['foto_chica']) && $producto['foto_chica']!=''){
							$foto_chica = $producto['foto_chica'];
							echo "<img src='../img/noticias/".$foto_chica."' alt=''/><a href='edit-noticia.php?id=$id&delete_chica=$foto_chica'>Eliminar</a></br>";
						}else{ ?>
						<input type="file" name="fotoChica"/></br>
						<?php } ?>
						<input type="hidden" name="id" value="<?php echo $id; ?>"/>
						<input type="hidden" name="accion" value="edit"/>
					<button type="submit" class="btn">Editar</button>
				</fieldset>
			</form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



</body>
</html>
<?php }
} ?>
<?php mysqli_close($conn); ?>