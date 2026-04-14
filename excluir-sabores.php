<?php
include_once './include/conexao.php'; 
$sql = "DELETE FROM sabores WHERE SaborID=".$_GET['id'];
 
mysqli_query($conexao, $sql);
header('Location: ./listasabores.php');
?>
 