<?php

    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $db_name = 'banco_tcc';

    $connx = mysqli_connect($host, $user, $passwd, $db_name);

    if($connx){
        echo 'conectou';
    }
    else{
        echo 'erro';
    }
?>