<?php
include "conexao.php";

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($con, $sql)) {
        echo "<div style='padding: 20px; font-family: sans-serif;'>Usuário cadastrado com sucesso!<br>";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($con);
    }
} else {
    echo "Erro: Dados não enviados corretamente!";
}
?>
<a href="usuarios.php">Ver Usuários</a> | <a href="index.php">Início</a>