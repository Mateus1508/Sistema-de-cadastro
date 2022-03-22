<?php

//colocar valores no banco de dados

//Ação do botão de inserir
if(isset($_POST['inserir'])){

include_once('Config.php');

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$cor = $_POST['cor'];

//Regras de negócio
if($cor = 'Azul' || 'Vermelho') {
    $preco = $preco - ($preco * 20/100);
    };

$result = mysqli_query($connection, "INSERT INTO produtos(NOME,COR) VALUES ('$nome','$cor')")
&& mysqli_query($connection, "INSERT INTO preco(PRECO) VALUES ('$preco')");
}

if(!isset($_SESSION)) session_start();




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>

    <h1>Produtos</h1>
        <form action="index.php" method="POST">
            <h2>Adicione um produto</h2>
            
            <input type="text" placeholder="Nome do produto" name="nome" id="nome">

            <label for="preco">R$</label>
            <input type="number" placeholder="Preço" name="preco" id="preco" step="0.01" >

            <select name="cor" id="cor">
                <option value="Vermelho">Vermelho</option>
                <option value="Azul">Azul</option>
                <option value="Amarelo">Amarelo</option>
            </select>

            <button name="inserir" id="inserir">Inserir</button>
            <button name="listarr" id="listar"><a href="lista.php">Listar produtos</a></button>
            
            
        </form>

</body>
</html>
