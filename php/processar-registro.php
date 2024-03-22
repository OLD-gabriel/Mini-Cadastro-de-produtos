<?php

include 'database.php';

$email = mysqli_real_escape_string($conn,$_POST["email"]);
$senha = md5(mysqli_real_escape_string($conn,$_POST["senha"]));
$nome  = mysqli_real_escape_string($conn,$_POST["nome"]);

if($conn){
    $sql = query("CREATE TABLE IF NOT EXISTS Usuarios(
        ID int not null auto_increment,
        nome varchar(255),
        email varchar(255),
        senha varchar(255),
        primary key(ID)
        )default charset utf8;
    ");

    if($sql){
        $buscar_email = query("SELECT * FROM usuarios WHERE email = '$email'");
        
        if($buscar_email->num_rows == 0){

            $sql_inserir = query("INSERT INTO Usuarios (nome,email,senha) VALUES('$nome','$email','$senha');");
            if($sql_inserir){
                header("location: ../Html/create-account.html?sucess=true");
            }
         }
         else{
            header("location: ../Html/create-account.html?sucess=false");
         }


    }

   
}

