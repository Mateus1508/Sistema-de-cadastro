<?php

if(!empty($_GET['IDPROD'])){

    include_once('Config.php');
        
        $id = $_GET['IDPROD'];
        
        $result = $connection->query($sqlSelect);
      
        $sqlSelect = "SELECT * FROM produtos,preco WHERE IDPROD = '$id'";
    
        $resultSelect = $connection->query($sqlSelect);
    
    if($resp->num_rows > 0) {
    
        $sqlDelete = "DELETE FROM produtos WHERE IDPROD = '$id'";
        $resultDelete = $connection->query($sqlDelete);
        
    }
    else {
    header("Location: lista.php");
    }
    }