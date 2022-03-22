<?php

//Ação do botão de atualizar

if(!empty($_GET['IDPROD'])){
include_once('Config.php');
    
/*    
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $cor = $_POST['cor'];
    
    $result = mysqli_query($connection, "UPDATE produtos SET NOME = '$nome',COR = '$cor' WHERE IDPROD = '$idprod')")
    && mysqli_query($connection, "UPDATE produtos SET PRECO = '$preco' WHERE IDPRECO = '$idpreco')");
    }

*/
$id = $_GET['IDPROD'];

$sqlSelect = "SELECT * FROM produtos WHERE IDPROD = '$id'";

$resp = $connection->query($sqlSelect);

if($resp->num_rows > 0) {

    while ($data = mysqli_fetch_assoc($resp)) {
    $nome = $data['nome'];
    $preco = $data['preco'];
    $cor = $data['cor'];
    }
    
}
else {
header("Location: lista.php");
}
}

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
<h1>Produtos</h1>
        <form action="index.php" method="POST">
            <h2>atualize um produto</h2>

            <input type="text" placeholder="Id do produto" name="id" id="id" value="<?php echo $id; ?>">

            <input type="text" placeholder="Nome do produto" name="nome" id="nome" value="<?php echo $nome; ?>">

            <label for="preco">R$</label>
            <input type="number" placeholder="Preço" name="preco" id="preco" min="0.00" <?php echo $preco; ?> >

            <select name="cor" id="cor" <?php echo $cor; ?> >
                <option value="Vermelho">Vermelho</option>
                <option value="Azul">Azul</option>
                <option value="Amarelo">Amarelo</option>
            </select>

            <button name="atualizar" id="atualizar">Atualizar</button>
            <button name="cancelar" id="cancelar"><a href="lista.php">Cancelar</a></button>

            
        </form>

</body>
</html>