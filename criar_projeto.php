<?php

require_once 'medoo.php';


$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'viniciuszorzanelli_com',
    'server' => 'viniciuszorzanelli.com.mysql',
    'username' => 'viniciuszorzanelli_com',
    'password' => 'v8QcqyNx',
    'charset' => 'utf8'
]);

$database->insert('PROJETO', [
    'NOME' => $_POST['nome'],
    'DESCRICAO' => $_POST['descricao']
]);

 ?>