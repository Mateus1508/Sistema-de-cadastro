<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'testephp-mysql';

 

$connection = new mysqli($host, $user, $password, $database);

/*Caso queira testar conexão use o código abaixo 

if($connection->connect_errno){
    echo "Error";
}
else{
    echo "Success";
}
*/
?>