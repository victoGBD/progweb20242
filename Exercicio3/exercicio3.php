<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Relatório de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado Relatório de Clientes:</h1>
    <?php
        $clientes = [
            1 => "Alberto Silva",
            2 => "Bianca Duarte",
            3 => "João Almeida",
            4 => "Valéria Souza",
            5 => "Augusto Silva"
        ];
        echo "<pre>";
        var_dump($clientes);
        echo "</pre>";
    ?>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>
        <?php
            foreach ($clientes as $codigo => $nome) {   //loop repeticao
                echo "<tr>";
                echo "<td>{$codigo}</td>";
                echo "<td>{$nome}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
