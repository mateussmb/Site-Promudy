<?php

    include_once("conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into usuarios (email,senha) values('$email','$senha')";

    $salvar = mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    print "Cadastro feito com sucesso."
?>