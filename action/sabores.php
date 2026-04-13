<?php
// include dos arquivos
include_once   '../include/conexao.php';

// captura a acao e id VIA URL - Query String
$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : '';
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';


// validacao
switch ($acao) {
    case 'excluir':
        //montar o sql que exclui o registro PEGAR O ID
        $sql = "DELETE FROM sabores WHERE SaborID = .$id";
        //executar o SQL
        mysqli_query($conexao,$sql);
        //redirecionar a pagina
        header('Location: ../lista-cargos.php');
        break;

    case 'salvar':
         $nome = $_POST['nome'];
        $preco = $_POST['cor'];
             //INSERT

            $sql = "INSERT INTO sabores
             (Nome, Cor,) 
                  VALUES 
                  ('$nome', '$cor')";
            }else{
                //UPDATE
                $sql = "UPDATE sabores  SET
                        Nome = '$nome', 
                        Cor = '$cor'
                        WHERE SaborID = $id";

            }

            mysqli_query($conexao,$sql);
            //redirecionar a pagina
            header('Location: ../lista-cargos.php');
        break;
 }
 ?>