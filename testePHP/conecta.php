<?php
//Dados para a conexao local (SEU COMPUTADOR)
/*$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "simplicity";*/

//Dados para conexao remota (HOSTINGER)
$servidor = "mysql.hostinger.com.br";
$usuario = "u900154040_simpl";
$senha = "luamar1987";
$banco = "u900154040_simpl";

//Conectando ao banco
$conexao = new mysqli( $servidor, $usuario, $senha, $banco);

//Definir padrao de caracteres
mysqli_set_charset($conexao, "UTF8");

//Definicao Fuso horario
date_default_timezone_set("America/Sao_Paulo");

//Verificando o erro na conexao
if( mysqli_connect_errno() ){
    die( "Erro ao conectar! " . mysqli_connect_error() );
}

?>