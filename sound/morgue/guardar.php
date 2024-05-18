<?php 
include("bd.php");
$descripcion = $_POST['descripcion'];
$sql = "INSERT INTO tb_administracion ( departamento, estado_adm) 
VALUES('$departamento', '$estado_adm')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="home.php";';
	echo '</script>';	
}
?>