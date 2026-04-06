<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
   <div class="cabecalho">
      <h1 class="titulo">Sistema da Loja de Sucos</h1>

      <nav class="navbar">
         <a href="inicio.php">Início</a>
         <a href="listasucos.php">Sucos</a>
         <a href="listasabores.php">Sabores</a>
         <a href="listacategorias.php">Categorias</a>
      </nav>

   </div>
</header>
<main> 
  <div class="container">
    <h1>Lista de Sucos</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Marca</th>
        <th>Validade</th>
        <th>Categoria</th>
        <th>Sabor</th>
        <th>Ações</th>
      </tr>

      <tr>
      <td>1</td>
      <td>Suco de Uva</td>
      <td>10.99</td>
      <td>Del Valle</td>
      <td>2026-09-12</td>
      <td>Integral</td>
      <td>Uva</td>
      <td>
      <a href="#" class="btn editar">Editar</a>
      <a href="#" class="btn excluir">Excluir</a>
</td>
</tr>
</table>
    



  </div>
</div>
</div>

</main>
</body>
</html>