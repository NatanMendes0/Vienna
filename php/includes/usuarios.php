<?php

//funcoes para cada acao da tabela usuario

//seleciona campo email e senha dentro do banco de dados
function banco_select_email_senha ($email, $senha){
    
    $hash_senha = hash("sha256", $senha, false);
    
    //$sql pesquisa no banco de dados os campos nome e email
    global $mysqli; //var que está armazenando valor do banco de dados
    $sql="SELECT ID, EMAIL, SENHA FROM usuarios WHERE EMAIL = '$email' AND SENHA = '$hash_senha'";
    $obj = null;

    //checar se select retorna valor
    if($result = $mysqli -> query($sql)) {
        $obj = $result -> fetch_object(); //fetch_object: retorna valores como um objeto
    }
    $result -> close();
    unset($sql);

    header("location: ../html/home.html");
    return $obj;
}

//insere um usuario dentro do banco de dados
function banco_insert_usuario($nome, $cpf, $email, $senha){
    global $mysqli;

    //codificada a senha
	$hash_senha = hash("sha256", $senha, false);

    //validação que verifica se email digitado ja existe
	try {
		$sql = "INSERT INTO `usuarios` (`NOME`, `CPF`, `EMAIL`, `SENHA`) VALUES ('$nome','$cpf','$email','$hash_senha')"; //insere a senha ja codificada no campo senha
        $result = $mysqli->query($sql);
	} catch(mysqli_sql_exception $e) {
		//mostra mensagem de erro
        //die( 'ERROR: ' . $e->getMessage());        
        die("Ocorreu um erro na inclusão do usuário. ({$e->getMessage()})");
	}
    
    header("location: ../../html/home.html");
    return $result;
}

?>
