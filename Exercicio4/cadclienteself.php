<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Cliente</h1>
        <?php
        if (isset($_POST['nome']) && isset($_POST['cpf'])) {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];

            // Validações
            if (empty($nome) || empty($cpf)) {
                echo "Os dados não podem estar em branco!";
                exit;
            }
            if (strlen($cpf) != 11) {
                echo "O CPF deve conter 11 caracteres!";
                exit;
            }
            
            // Data atual do servidor
            $dataCadastro = date('d/m/Y H:i:s');

            echo "<h2>Dados do Cliente</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>CPF:</strong> $cpf</p>";
            echo "<p><strong>E-mail:</strong> $email</p>";
            echo "<p><strong>Data de Cadastro:</strong> $dataCadastro</p>";
        } else {
        ?>
        <form action="cadclienteself.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <?php } ?>
    </div>
</body>
</html>
