<?php

//Iniciar sessão

session_start();

//Ação do botão de atualizar

if(!empty($_GET['IDPROD'])){

include_once('Config.php');
    
    $id = $_GET['IDPROD'];
    
    $result = $connection->query($sqlSelect);
  
    $sqlSelect = "SELECT * FROM produtos,preco WHERE IDPROD = '$id'";

    $resp = $connection->query($sqlSelect);

if($resp->num_rows > 0) {

    while ($data = mysqli_fetch_assoc($resp)) {
    $nome = $data['NOME'];
    $preco = $data['PRECO'];
    $cor = $data['COR'];
    }
    
}
else {
header("Location: lista.php");
}
}

if(isset($_POST['atualizar'])) {
    
    $nome = $_POST['NOME'];
    $preco = $_POST['PRECO'];
    $cor = $_POST['COR'];
    
    $sqlUpdate = mysqli_query($connection, "UPDATE produtos SET NOME = '$nome',COR = '$cor' WHERE IDPROD = '$idprod')")
    && mysqli_query($connection, "UPDATE produtos SET PRECO = '$preco' WHERE IDPRECO = '$idpreco')");
    }

    $result = $connection->query($sqlUpdate);
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
            
            <label for="idprod">Id produto</label>
            <input type="text" placeholder="Id do produto" name="idprod" id="idprod" value="<?php echo $_SESSION[IDPROD]; ?>" disabled="">
            
            <label for="idpreco">Id preço</label>
            <input type="text" placeholder="Id do preço" name="idpreco" id="idpreco" value="<?php echo $_SESSION[IDPRECO]; ?>" disabled="">
            
            <label for="nome">Nome do produto</label>
            <input type="text" placeholder="Nome do produto" name="nome" id="nome" value="<?php echo $_SESSION[NOME]; ?>">

            <label for="preco">R$</label>
            <input type="number" placeholder="Preço" name="preco" id="preco" min="0.00" value="<?php echo $_SESSION[PRECO]; ?>" >

            <select name="cor" id="cor" value="<?php echo $_SESSION[COR]; ?>" disabled="" >
                <option value="Vermelho">Vermelho</option>
                <option value="Azul">Azul</option>
                <option value="Amarelo">Amarelo</option>
            </select>

            <button name="atualizar" id="atualizar">Atualizar</button>
            <button name="cancelar" id="cancelar"><a href="lista.php">Cancelar</a></button>

            
        </form>

</body>
</html>