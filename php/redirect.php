<?php 

session_start();

$pag = $_GET["pag"];

echo base64_encode($_SESSION["nome"]) . "<br>" ;
echo base64_encode($_SESSION["email"]) . "<br>" ;
echo base64_encode($_SESSION["senha"]) . "<br>" ;

if($pag == "perfil"){
    header("location: ../Html/perfil.html?n=" . $_SESSION["nome"] . "&e=".base64_encode($_SESSION["email"]). "&s=". base64_encode($_SESSION["senha"]));
}