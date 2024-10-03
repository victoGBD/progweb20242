<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        
        $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
        $hora = $datetime->format('H'); 

        if ($hora >= 0 && $hora <= 12) {
            $mensagem = "Bom dia!";
            $imagem = "img/bomdia.jpeg"; 
        } elseif ($hora > 12 && $hora < 18) {
            $mensagem = "Boa tarde!";
            $imagem = "img/boatarde.jpeg"; 
        } else {
            $mensagem = "Boa noite!";
            $imagem = "img/boanoite.jpeg";
        }
        ?>

        <h1><?php echo $mensagem; ?></h1>
        <img src="<?php echo $imagem; ?>" alt="Imagem">
    </div>
</body>
</html>
