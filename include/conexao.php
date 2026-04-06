<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conexao = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexao) {
  die("Erro na conexão: " . mysqli_connect_error());
}
?>