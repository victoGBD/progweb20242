<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    echo "<h1>Dados do Cliente</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>CPF:</strong> $cpf</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Data de Cadastro:</strong> $dataCadastro</p>";
}
?>
