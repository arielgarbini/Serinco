<?php
session_start();
include("globales.php");
if(isset($_SESSION['login']) && $_SESSION['login']=='ok'){
	?>
	<!DOCTYPE html>
	<html lang="es">
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		
		<title>Noticias</title>

	</head>

	<body>
		<?php
		include("db_connect.php");
		?>
		<div class="container">
			<?php include("menu.php"); ?>
			</nav> 
			<?php if(isset($_GET['operacion']) && $_GET['operacion']=='ok') { ?>
			<div class="alert alert-success">Operación realizada con EXITO!</div>
			<?php } ?>
			<center>  <a href="nuevo-noticia.php"><button class="btn btn-success">Nueva Noticia</button></a> </center> 
			<?php 
			$sql = "SELECT COUNT(*) FROM noticias"; 
			$rs_result = mysqli_query($conn,$sql); 
			$row = mysqli_fetch_row($rs_result); 
			$total_records = $row[0]; 
			$total_pages = ceil($total_records / 10); 
			?> 
			<div class="pagination pagination-right">
				<ul>
					<?php              
					for ($i=1; $i<=$total_pages; $i++) { 
						?>    

						<li><a href="noticias.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

						<?php  } ?> 
					</div>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Título</th>
								<th>Descripción Corta</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
							$start_from = ($page-1) * 10; 
							$sql = "SELECT * FROM noticias WHERE 1=1 ORDER BY created_at DESC LIMIT $start_from, 10";
							$resultado = mysqli_query($conn,$sql);
							while($option=mysqli_fetch_array($resultado)) { 
								?>
								<tr>
									<td><?php echo $option['id']; ?></td>
									<td><?php echo $option['titulo']; ?></td>
									<td><?php echo $option['descripcionCorta']; ?></td>
									<td><center><a href="ver-noticia.php?id=<?php echo $option['id']; ?>" class="btn btn-primary">Ver</a> &nbsp&nbsp&nbsp <a href="edit-noticia.php?id=<?php echo $option['id']; ?>" class="btn btn-primary">Editar</a> &nbsp&nbsp&nbsp <a class="btn btn-danger" onclick="return confirm('Se eliminara el registro. Seguro?')" href="del-noticia.php?id=<?php echo $option['id']; ?>" >Eliminar</a></center></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</body>
					
					</html>
					<?php } ?>
					<?php mysqli_close($conn); ?>