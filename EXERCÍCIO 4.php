EXERCÍCIO 4-
<?php

$valor_compra = 200;
$possui_cupom = true;

if ($valor_compra > 150 || $possui_cupom == true) {
    $desconto = 10;
} else {
    $desconto = 0;
}

$valor_desconto = $valor_compra * ($desconto / 100);
$valor_final = $valor_compra - $valor_desconto;

echo "Valor original: R$ " . number_format($valor_compra, 2, ',', '.') . "<br>";
echo "Desconto: " . $desconto . "%<br>";
echo "Valor final: R$ " . number_format($valor_final, 2, ',', '.') . "<br>";

?>