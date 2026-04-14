<?php
include_once './include/conexao.php'; 
$sql = "DELETE FROM categorias WHERE CategoriaID=".$_GET['id'];
 
mysqli_query($conexao, $sql);
header('Location: ./listacategorias.php');
?>
 