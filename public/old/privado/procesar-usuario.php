<?php

include("db_connect.php");
include("globales.php");

if(isset($_POST['nombre'])){
	$nombre= mysqli_real_escape_string($conn, $_POST['nombre']);
}
if(isset($_POST['apellido'])){
	$apellido= mysqli_real_escape_string($conn, $_POST['apellido']);
}
if(isset($_POST['email'])){
	$email= mysqli_real_escape_string($conn, $_POST['email']);
}
if(isset($_POST['password'])){
	$password= mysqli_real_escape_string($conn, $_POST['password']);
}
if(isset($_POST['rol'])){
	$rol= mysqli_real_escape_string($conn, $_POST['rol']);
}

if(isset($_POST['accion']) && $_POST['accion']=="edit"){
	
	$id = $_POST['id'];

	$sql = "UPDATE users SET nombre='$nombre', apellido='$apellido', email='$email', pass='$password', rol='$rol' WHERE id = '$id'";	

	if (mysqli_query($conn, $sql)) {

		header("Location: ".base_url."privado/edit-user.php?id=$id&operacion=ok"); 
	}
	else {

		header("Location: ".base_url."privado/edit-user.php?id=$id&operacion=not");

	}

}else{
	
	$sql = "INSERT INTO users (nombre, apellido, rol, pass, email) VALUES ('$nombre','$apellido','$rol','$password', '$email');";

	if (mysqli_query($conn, $sql)) {

		header("Location: ".base_url."privado/nuevo-user.php?operacion=ok"); 
	}
	else {

		header("Location: ".base_url."privado/nuevo-user.php?operacion=not");

	}
}

?>
<?php mysqli_close($conn); ?>