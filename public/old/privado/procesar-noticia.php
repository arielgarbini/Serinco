<?php
session_start();
include("db_connect.php");
include("globales.php");

if(isset($_POST['titulo'])){
	$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
}
if(isset($_POST['cuerpo'])){
	$cuerpo = mysqli_real_escape_string($conn, $_POST['cuerpo']);
}
if(isset($_POST['descripcion_corta'])){
	$descripcionCorta = mysqli_real_escape_string($conn, $_POST['descripcion_corta']);
}

if(isset($_POST['fuente'])){
	$fuente= mysqli_real_escape_string($conn, $_POST['fuente']);
}

if(isset($_POST['accion']) && $_POST['accion']=="edit"){
	
	$id = $_POST['id'];

	$sql = "UPDATE noticias SET titulo='$titulo', fuente='$fuente', cuerpo='$cuerpo', descripcionCorta='$descripcionCorta' WHERE id = '$id'";	

	if (mysqli_query($conn, $sql)) {
		if($_FILES['fotoGrande']['size']!=0){
	$filename = $_FILES['fotoGrande']['name'];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $newfilename = $id . '-' . md5($file_basename) . $file_ext;
    move_uploaded_file($_FILES["fotoGrande"]["tmp_name"], "../img/noticias/" . $newfilename);
    $sql = "UPDATE noticias SET foto_grande='$newfilename' WHERE id = '$id'";
    mysqli_query($conn, $sql);
}
if($_FILES['fotoChica']['size']!=0){
	$filename = $_FILES['fotoChica']['name'];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $newfilename = $id . '-' . md5($file_basename) . $file_ext;
    move_uploaded_file($_FILES["fotoChica"]["tmp_name"], "../img/noticias/" . $newfilename);
    $sql = "UPDATE noticias SET foto_chica='$newfilename' WHERE id = '$id'";
    mysqli_query($conn, $sql);
}
		header("Location: ".base_url."privado/edit-noticia.php?id=$id&operacion=ok"); 
	}
	else {

		header("Location: ".base_url."privado/edit-noticia.php?id=$id&operacion=not");

	}

}else{
	$created_at = date('Y-m-d');
        $user = $_SESSION['id'];
	$sql = "INSERT INTO noticias (titulo, fuente, cuerpo, descripcionCorta, created_at, created_by) VALUES ('$titulo', '$fuente', '$cuerpo','$descripcionCorta','$created_at', '$user');";

	if (mysqli_query($conn, $sql)) {

$id = mysqli_insert_id($conn);

if($_FILES['fotoGrande']['size']!=0){
	$filename = $_FILES['fotoGrande']['name'];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $newfilename = $id . '-' . md5($file_basename) . $file_ext;
    move_uploaded_file($_FILES["fotoGrande"]["tmp_name"], "../img/noticias/" . $newfilename);
    $sql = "UPDATE noticias SET foto_grande='$newfilename' WHERE id = '$id'";
    mysqli_query($conn, $sql);
}
if($_FILES['fotoChica']['size']!=0){
	$filename = $_FILES['fotoChica']['name'];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $newfilename = $id . '-' . md5($file_basename) . $file_ext;
    move_uploaded_file($_FILES["fotoChica"]["tmp_name"], "../img/noticias/" . $newfilename);
    $sql = "UPDATE noticias SET foto_chica='$newfilename' WHERE id = '$id'";
    mysqli_query($conn, $sql);
}

		header("Location: ".base_url."privado/nuevo-noticia.php?operacion=ok"); 
	}
	else {

		header("Location: ".base_url."privado/nuevo-noticia.php?operacion=not");

	}
}


?>
<?php mysqli_close($conn); ?>