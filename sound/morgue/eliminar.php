<?php 
include("bd.php");
$id = $_GET['id'];
$sql ="UPDATE tb_administracion SET estado = 0
WHERE id = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="home.php";';
	echo '</script>';	
}
?>