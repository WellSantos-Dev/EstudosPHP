<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    

    <?php
        // String
        $nome = 'Wellington Santos';

        // Number
        $idade = 19;

        // Float
        $peso = 65.5;

        // Boolean
        $fumante = false; // (true = 1) ou (false = vazio)
    
    ?>


<h1>Ficha de Cadastro</h1>
<p>Nome: <?= $nome ?></p>
<p>Idade: <?= $idade ?></p>
<p>Peso: <?= $peso ?></p>
<p>Fumante: <?= $fumante ?></p>
</body>
</html>