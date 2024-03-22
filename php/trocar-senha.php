<?php 

    session_start();

    include 'database.php';

    $senha_antiga = $_POST["senha-antiga"];
    $senha_nova = $_POST["senha-nova"];
    $senha_nova_rep = $_POST["senha-novaR"];

    $email = $_SESSION["email"];

    $Get_dados = query("SELECT * FROM Usuarios WHERE email = '$email'");

    $Get_senha = mysqli_fetch_assoc($Get_dados);



    if($Get_senha["senha"] == md5($senha_antiga)){
        if($senha_nova == $senha_nova_rep){
            $senha_nova_crip = md5($senha_nova);
            $trocar_senha = query("UPDATE Usuarios SET senha = '$senha_nova_crip' WHERE email = '$email'");
            if($trocar_senha){
                header("location:../Html/Trocar-senha.html?status=true");
            }
        }else{
            header("location:../Html/trocar-senha.html?status=Sri");         
        }


    }else{
        header("location:../Html/trocar-senha.html?status=IncS");
    }