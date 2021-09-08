<?php

$diaDaSemana = 8;//date("w");

switch ($diaDaSemana) {
    case 0:
        echo "Hoje é Domingo";
        break;

    case 1:
        echo "Hoje é Segunda";
        break;

    case 2:
        echo "Hoje é Terça";
        break;
    
    case 4:
        echo "Hoje é Quarta";
        break;

    case 5:
        echo "Hoje é Quinta";
        break;

    case 6:
        echo "Hoje é Sexta";
        break;

    case 7:
        echo "Hoje é Sabado";
    default:
        echo "Em que país você vive?";
}

?>
