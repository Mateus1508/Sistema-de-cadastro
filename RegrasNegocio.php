<?php

include_once('Config.php');
include_once('index.php');

switch (isset($_POST['inserir'])) {

    case 0: ($_POST['cor'] = 'Azul' || 'Vermelho');
        $preco = $_POST['preco'] - ($_POST['preco'] * 20/100);
        break;

    case 1: ($_POST['cor'] = 'Amarelo' );
        $preco = $_POST['preco'] - ($_POST['preco'] * 10/100);
        break;

    case 2: ($_POST['cor'] = 'Vermelho' && $_POST['preco'] > 50.00);
        $preco = $_POST['preco'] - ($_POST['preco'] * 5/100);
        break;
    }

    ?>