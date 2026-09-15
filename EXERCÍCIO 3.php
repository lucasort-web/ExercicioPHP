EXERCÍCIO 3-
<?php

$dia_semana = 3;

switch ($dia_semana) {
    case 1:
        echo "Domingo - Fim de semana!";
        break;

    case 2:
        echo "Segunda - Dia útil.";
        break;

    case 3:
        echo "Terça - Dia útil.";
        break;

    case 4:
        echo "Quarta - Dia útil.";
        break;

    case 5:
        echo "Quinta - Dia útil.";
        break;

    case 6:
        echo "Sexta - Dia útil.";
        break;

    case 7:
        echo "Sábado - Fim de semana!";
        break;

    default:
        echo "Número inválido.";
}

?>