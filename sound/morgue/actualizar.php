<?php

include ("bd.php");
$id = $_POST['id'];
$departamento = $_POST['departamento'];
$estado_adm = $_POST['estado_adm'];
$sql = "UPDATE tb_administracion SET estado = '$estado_adm'
WHERE id = $id";
if (mysqli_query($mysqli, $mysql)){
    echo '<script languaje="javascript">';
    echo 'window.location="home.php"';
    echo '</script>';
}
?>