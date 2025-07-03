<?php
include "conexao.php";
$resultado = mysqli_query($con, "SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script>
        function verUsuarios() {
            const lista = document.getElementById("listaUsuarios");
            lista.style.display = (lista.style.display === "none") ? "block" : "none";
        }
    </script>
</head>
<body class="container mt-5">
    <h2>Usuários Cadastrados</h2>
    <button class="btn btn-warning mb-3" onclick="verUsuarios()">Mostrar/Ocultar Lista</button>
    <ul id="listaUsuarios" class="list-group">
        <?php while($row = mysqli_fetch_assoc($resultado)) {
            echo "<li class='list-group-item'>" . $row['nome'] . " - " . $row['email'] . $row['senha'] . "</li>";
        } ?>
    </ul>
    <br>
    <a href="index.php" class="btnbtn-secondary">Voltar</a>
</body>

</html>