<?php

include_once('Config.php');
include_once('index.php');


if($_POST['cor'] = 'Azul' || 'Vermelho') {
    $preco = $_POST['preco'] - ($_POST['preco'] * 20/100);
};

elseif($_POST['cor'] = 'Amarelo' ) {
    $preco = $_POST['preco'] - ($_POST['preco'] * 10/100);
    
};
elseif($_POST['cor'] = 'Vermelho' && $_POST['preco'] > 50.00) {
    $preco = $_POST['preco'] - ($_POST['preco'] * 5/100);
};