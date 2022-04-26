<?php

//conecta o banco e usuarios.php
require_once("../includes/banco.php");
require_once("../includes/usuarios.php");

//variaveis
$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = banco_select_email_senha($email, $senha);

//arquivo que fala se usuario existe (leva pra home page) ou nao (aviso)
if(is_null($usuario)){
    echo "<script>alert('Usuario Inexistente!');</script>";
} else {
    header("location: ../../home.html");
    echo "<script>alert('Bem-Vindo(a)!);</script>";
}

?>