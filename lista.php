<?php
include_once('Config.php');

//Ação do botão de excluir
/*
if(isset($_POST['excluir'])){

    
    
    $nome = $_POST['nome'];
    $preco = (float) $_POST['preco'];
    $cor = $_POST['cor'];
    
    $result = mysqli_query($connection, "INSERT INTO produtos(NOME,COR) VALUES ('$nome','$cor')")
    && mysqli_query($connection, "INSERT INTO preco(PRECO) VALUES ('$preco')");
    }
*/
$sql = "SELECT * FROM produtos,preco";
$resultado = $connection->query($sql) or die($connection->error);
$tabela = $resultado->fetch_assoc();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de produtos</h1>
    <table border="1" cellspacing="10">
        <tr class="titulo">
            <td>Nome do produto</td>
            <td>Cor</td>
            <td>Preço</td>
            <td>ID do produto</td>
            <td>ID do preço</td>
            <td>Opções</td>
        </tr>
        <?php 
        // o (do while) vai Fazer com que todas as colunas das tabelas sejam preenchidas
        do{
        ?>
        <tr>
            <td><?php echo $tabela['NOME'];?></td>
            <td><?php echo $tabela['COR'];?></td>
            <td><?php echo $tabela['PRECO'];?></td>
            <td><?php echo $tabela['IDPROD'];?></td>
            <td><?php echo $tabela['IDPRECO'];?></td>
            <td><a href="atualizar.php">Editar</a> | <a href="">Excluir</a></td>
        </tr>
        <?php 
        } while($tabela = $resultado->fetch_assoc());
        ?>
    </table>
   
</body>
</html>