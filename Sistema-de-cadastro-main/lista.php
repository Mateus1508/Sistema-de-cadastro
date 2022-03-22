<?php
include_once('Config.php');

$sql = "SELECT * FROM produtos,preco";
$resultado = $connection->query($sql) or die($connection->error);
$tabela = $resultado->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Produtos</h1>

        <h2>Lista com os produtos</h2>

            <table cellspacing="10">

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
                    <td><a href="atualizar.php">Editar</a> | <a href="deletar.php">Excluir</a></td>

                </tr>
                
                <?php 

                    } while($tabela = $resultado->fetch_assoc());

                ?>

            </table>
   
</body>
</html>