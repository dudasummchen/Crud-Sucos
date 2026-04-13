<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="salvar.css">
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
    <div class="container">
        <h2 class="titulo2">Cadastro de Sucos</h2>  
        <form action="./action/sucos.php" method="post">
        <input type="hidden" name="acao" value="salvar">
        <input type="hidden" name="id" value="">
        <input class="input1" type="text" name="nome" placeholder="Digite o Nome">
        <input class="input2" type="text" name="preco" placeholder="Digite o Preço">
        <input class="input3" type="text" name="marca" placeholder="Digite a Marca">
        <input class="input4" type="date" name="validade" placeholder="Digite a Validade">
        <label for="categoria">Digite a Categoria</label>
        <select id="categoria" name="categoria">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
         </select>
      
         <input class="input6" type="text" name="sabor" placeholder="Digite o Sabor">
        <button class="botao">Salvar</button>
        </form>
    </div>
   </div>
</header>
<main>