<?php
include_once '../include/conexao.php';

// captura a acao e id VIA URL - Query String
$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : '';
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';

switch ($acao) {

    case 'excluir':
        $sql = "DELETE FROM sucos WHERE SucoID = $id";
        mysqli_query($conexao, $sql);
        header('Location: ../listasucos.php');
        break;

    case 'salvar':
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $marca = $_POST['marca'];
        $validade = $_POST['validade'];
        $categoria = $_POST['categoria']; 
        $sabor = $_POST['sabor'];         

        if (empty($id)) {
            // INSERT
            $sql = "INSERT INTO sucos 
                    (Nome, Preco, Marca, Validade, CategoriaID, SaborID) 
                    VALUES 
                    ('$nome', '$preco', '$marca', '$validade', '$categoria', '$sabor')";
        } else {
            // UPDATE
            $sql = "UPDATE sucos SET
                        Nome = '$nome',
                        Preco = '$preco',
                        Marca = '$marca',
                        Validade = '$validade',
                        CategoriaID = $categoria,
                        SaborID = $sabor
                    WHERE SucoID = $id";
        }

        mysqli_query($conexao, $sql);
        header('Location: ../listasucos.php');
        break;
}
?>