<?php 

    include 'database.php';

    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];

    $create__table = query("CREATE TABLE IF NOT EXISTS Produtos(
        id int not null auto_increment,
        nome varchar(255),
        quantidade int,
        preco decimal(6,2),
        primary key(id)
    )default charset utf8;
    ");

    if($create__table){
        $inserir_dados = query("INSERT INTO Produtos(nome,quantidade,preco) VALUES('$nome','$quantidade','$preco')");
        if($inserir_dados){
            header("location:../Html/add-produto.html?status=true");
        }
    }