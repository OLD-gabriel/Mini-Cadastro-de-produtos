<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "mercado";

$msg = "DEU CERTO";

$conn_banco = mysqli_connect($host, $user, $password);

if ($conn_banco) {
    $criar_banco = mysqli_query($conn_banco, "create database if not exists mercado
    default charset utf8
    default collate utf8_general_ci;
    ");
}
mysqli_close($conn_banco);

$conn = mysqli_connect($host, $user, $password, $db);

function query($str){
    global $conn;
    return mysqli_query($conn, $str);
}
