<?php
    session_start();
    include 'database.php';

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $Get_dados = query("SELECT * FROM usuarios WHERE email = '$email'");

    if ($Get_dados->num_rows > 0) {
        $dados = mysqli_fetch_assoc($Get_dados);
        
        if($dados["senha"] == md5($senha)){
            $_SESSION["nome"] = $dados["nome"];
            $_SESSION["senha"] = $senha;
            $_SESSION["email"] = $email;

            header("location: ../Html/pag-principal.html?name=". $dados["nome"]);
        }else{
            header("location: ../index.html?status=NotSenha");
        }

    } 
    else {
        header("location: ../index.html?status=NotEmail");
    }
