<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'testephp-mysql';

$connection = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

/*Caso queira testar conexão use o código abaixo 

if($connection->connect_errno){
    echo "Error";
}
else{
    echo "Success";
}

*/
