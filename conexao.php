<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "site_";

$con = mysqli_connect($host, $user, $senha, $banco);
if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>