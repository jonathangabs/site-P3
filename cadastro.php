<!DOCTYPE html>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script>
        function validarFormulario() {
            let nome = document.forms["formCadastro"]["nome"].value;
            let email = document.forms["formCadastro"]["email"].value;
            let senha = document.forms["formCadastro"]["senha"].value;
            if (nome === "" || email === "") || senha === "" {
                alert("Preencha todos os campos!");
                return false;   
            }
            if (!email.includes("@")) {
                alert("Digite um e-mail válido!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body class="container mt-5">
    <h3>Cadastro de Usuário</h3>
    <form name="formCadastro" action="funcoesDB.php" method="POST" onsubmit="return validarFormulario()">
        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">E-mail:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <button type="Enviar" class="btn btn-primary">Enviar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</body>
</html>