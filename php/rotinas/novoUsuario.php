<?php

//faz conexao com banco de dados e usuarios.php
require_once("../includes/banco.php");
require_once("../includes/usuarios.php");

//atributos
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confsenha = $_POST['confsenha'];

//checa se a senha é diferente
if ($senha != $confsenha) {
	die("senha diferente");
}

$usuario = banco_insert_usuario($nome, $cpf, $email, $senha);

?>
