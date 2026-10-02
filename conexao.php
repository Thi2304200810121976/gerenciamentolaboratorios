<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servidor = "localhost";
$banco = "gerenciamentolaboratorios";
$usuario = "root";
$senha = "usbw";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
die("Erro na conexão: " . mysqli_connect_error());
}

echo "Conectado com sucesso!";

?>