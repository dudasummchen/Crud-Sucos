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
    <h1>Lista de Sabores</h1>
    <table>
      <?php
      $sql = "SELECT SaborID, Nome, Cor FROM sabores;";
      $result = mysqli_query($conexao, $sql);
      ?>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cor</th>
        <th>Ações</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>

      <?php
       $sql = "SELECT 
                        s.SaborID,
                        s.Nome,
                        s.Cor,
                        sa.Nome AS Sabor,
                        c.Nome AS Categoria
                    FROM sucos AS s
                    INNER JOIN sabores AS sa
                        ON s.SaborID = sa.SaborID
                    INNER JOIN categorias AS c
                        ON s.CategoriaID = c.CategoriaID";

            $result = mysqli_query($conexao, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['SaborID']}</td>
                        <td>{$row['Nome']}</td>
                        <td>{$row['Cor']}</td>
                        <td>
                            <a href='salvar-sabores.php?id={$row['SaborID']}' class='btn editar'>Editar</a>
                            <a href='excluir-sabores.php?id={$row['SaborID']}' class='btn excluir'>Excluir</a>
                        </td>
                      </tr>";
            }
            ?>

        </table>
    </div>
</main>

</body>
</html>