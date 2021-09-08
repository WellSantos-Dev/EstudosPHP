<?php

$qualASuaIdade = 19;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "É criança.";
} else if ($qualASuaIdade < $idadeMaior) {
    echo "É adolescente";
} else if ($qualASuaIdade < $idadeMelhor) {
    echo "É Adulto";
} else if ($qualASuaIdade > 100) {
    echo "É imortal kkkk";
} else {
    echo "É idoso";
}

?>


<!-- <?php

$nome = "Marcos";

if ($nome === "Wellington") {
    echo "Bem vindo ADM";
} else {
    echo "Bem vindo usuário comum!";
}

?> -->



<!-- <?php 

$user = 'root';
$pass = 'toor';

if($user === 'root' && $pass === 'toor') {
    echo "Bem vindo ao sistema";
} else {
    echo "Senha ou usúario errado, tente novamente.";
}

?> -->




<!-- Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". -->
<!-- <?php

$numeroDigitado = 0;
$zero = 0;

if($numeroDigitado < $zero) {
    echo "$numeroDigitado é um numero negativo";
} else if ($numeroDigitado > $zero) {
    echo "$numeroDigitado é um numero positivo";
} else {
    echo "$numeroDigitado é igual a zero";
}

?> -->