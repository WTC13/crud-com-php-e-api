<?php

    include 'conexao.php';

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];

    $recebendo_cadastros = "INSERT INTO alunos
    VALUES ('','$nome','$usuario','$email')";
    $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

    header('location: listagem.php');
?>