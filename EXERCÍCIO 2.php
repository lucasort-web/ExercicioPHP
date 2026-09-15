EXERCÍCIO 2-
<?php

$peso = 75;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

echo "IMC: " . round($imc, 2) . "<br>";

if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Classificação: Peso normal";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}

?>
