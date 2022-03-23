<?php

include_once('Config.php');

if(isset($_POST['atualizar'])) {
    
    $id = $_GET['IDPROD'];
    $idp = $_GET['IDPRECO'];
    $nome = $_POST['NOME'];
    $preco = $_POST['PRECO'];
    $cor = $_POST['COR'];
    
    $sqlUpdate = mysqli_query($connection, "UPDATE produtos SET NOME = '$nome',COR = '$cor' WHERE IDPROD = '$id')")
    && mysqli_query($connection, "UPDATE produtos SET PRECO = '$preco' WHERE IDPRECO = '$idp')");
    
    $resultUpdate = $connection->query($sqlUpdate);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar tabela</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Produtos</h1>
        <form action="index.php" method="POST">
            <h2>Atualizar produto</h2>
            
            <label for="nome">Nome do produto</label>
            <input type="text" placeholder="Nome do produto" name="nome" id="nome" value="<?php echo $nome ?>">

            <label for="preco">R$</label>
            <input type="number" placeholder="Preço" name="preco" id="preco" min="0.00" value="<?php echo $preco ?>" >

            <select name="cor" id="cor" value="<?php echo $_SESSION['COR']; ?>" disabled="" >
                <option value="Vermelho">Vermelho</option>
                <option value="Azul">Azul</option>
                <option value="Amarelo">Amarelo</option>
            </select>

            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="idp" value="<?php echo $idp ?>">

            <button name="atualizar" id="atualizar">Atualizar</button>
            <button name="cancelar" id="cancelar"><a href="lista.php">Cancelar</a></button>

            
        </form>

</body>
</html>