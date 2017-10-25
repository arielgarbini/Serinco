<?php
include("db_connect.php");
include("globales.php");
if(isset($_GET['id'])){
	$id = $_GET['id'];
}


$sql = "DELETE FROM noticias WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {

	header("Location: ".base_url."privado/noticias.php?operacion=ok");
} else {

	header("Location: ".base_url."privado/noticias.php?operacion=not");
}

?>
<?php mysqli_close($conn); ?>