<?php
include_once './include/conexao.php';
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
         <a href="listasucos.php">Sucos</a>
         <a href="listasabores.php">Sabores</a>
         <a href="listacategorias.php">Categorias</a> 
      </nav>

   </div>
</header>
<main>
  <div class="container">
    <h1>Lista de Categorias</h1>
    <table>
      <?php
          $sql = "SELECT CategoriaID, Nome FROM categorias;";
         $result = mysqli_query($conexao, $sql);
           ?>
        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
         <th></th>
      </tr>

         <?php
      while ($row = mysqli_fetch_assoc ($result) ) {
        echo '<tr>
        <td>'.$row["CategoriaID"].'</td>
        <td>'.$row["Nome"].'</td>
        <td>
          <a href="#" class="btn editar">Editar</a>
          <a href="#" class="btn excluir">Excluir</a>
        </td>
        </tr>';
      }
     ?>
</table>
  
 


  </div>
</div>
</div>

</main>
</body>
</html>