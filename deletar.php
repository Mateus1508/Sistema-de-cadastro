<?php

if(!empty($_GET['IDPROD'])){

    include_once('Config.php');
        
        $id = $_GET['IDPROD'];
        
        $result = $connection->query($sqlSelect);
      
        $sqlSelect = "SELECT * FROM `produtos`
        INNER JOIN `preco` ON `produtos`.`IDPROD` = `preco`.`IDPRECO`
        WHERE `IDPROD` = `$id`";
    
        $resultSelect = $connection->query($sqlSelect);
    
    if($resp->num_rows > 0) {
    
        $sqlDelete = "DELETE FROM `produtos`
        INNER JOIN `preco` ON `produtos`.`IDPROD` = `preco`.`IDPRECO` WHERE IDPROD = `$id`";
        $resultDelete = $connection->query($sqlDelete);
        
    }
    else {
    header("Location: lista.php");
    }
    }