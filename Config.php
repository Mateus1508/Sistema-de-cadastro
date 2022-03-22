<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'testephp-mysql';

$connection = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

/*Testar conexão 

if($connection->connect_errno){
    echo "Error";
}
else{
    echo "Success";
}

*/
