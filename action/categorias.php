<?php
include_once '../include/conexao.php';

// captura a acao e id VIA URL - Query String
$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : '';
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

switch ($acao) {

    case 'excluir':
        $sql = "DELETE FROM categorias WHERE CategoriaID = $id";
        mysqli_query($conexao, $sql);
        header('Location: ../listacategorias.php');
        break;

    case 'salvar':
        $nome = $_POST['nome'];         

        if (empty($id)) {
            // INSERT
            $sql = "INSERT INTO categorias
                    (Nome, CategoriaID) 
                    VALUES 
                    ('$nome')";
        } else {
            // UPDATE
            $sql = "UPDATE sucos SET
                        Nome = '$nome',
                        CategoriaID = $categoria,
                    WHERE CategoriaID = $id";
        }

        mysqli_query($conexao, $sql);
        header('Location: ../listacategorias.php');
        break;
}
?>