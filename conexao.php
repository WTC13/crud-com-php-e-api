<?php

//configuração do banco de dados
$host = 'localhost';
$user = 'root';
$password = '';
$bd_name = 'banco_cliente';

// conexão com o banco de dados
$conx = mysqli_connect($host, $user, $password, $bd_name);

// teste de conexão
if($conx){
    echo 'conected';
}
else{
    echo 'error';
}

?>