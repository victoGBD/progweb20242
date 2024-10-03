<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .image-container {
            text-align: center;
            margin: 20px; 
        }

        img {
            margin: 20px; 
            border: 2px solid black; 
        }

        figcaption {
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="image-container">
        <figure>
            <?php
                echo '<img src="https://picsum.photos/500/600" alt="Exemplo de imagem">';
            ?>
            <figcaption> Imagem exercicio 1</figcaption>
        </figure>
    </div>

</body>
</html>
