<?php include_once './include/conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
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
        <h1>Lista de Sucos</h1>

        <table border="1">
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

            <?php
            $sql = "SELECT 
                        s.SucoID,
                        s.Nome,
                        s.Marca,
                        s.Preco,
                        s.Validade,
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
                        <td>{$row['SucoID']}</td>
                        <td>{$row['Nome']}</td>
                        <td>{$row['Preco']}</td>
                        <td>{$row['Marca']}</td>
                        <td>{$row['Validade']}</td>
                        <td>{$row['Categoria']}</td>
                        <td>{$row['Sabor']}</td>
                        <td>
                            <a href='salvar-sucos.php?id={$row['SucoID']}' class='btn editar'>Editar</a>
                            <a href='excluir-sucos.php?id={$row['SucoID']}' class='btn excluir'>Excluir</a>
                        </td>
                      </tr>";
            }
            ?>

        </table>
    </div>
</main>

</body>
</html>