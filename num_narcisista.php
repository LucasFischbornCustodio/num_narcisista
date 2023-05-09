<?
$retalho = str_split($inteiro = (int)readline('Digite um número: '));
$separado = count($retalho);

$soma = 0;
foreach ($retalho as $digito) {
    $soma += pow($digito, $separado);
}

if ($soma == $inteiro) {
    echo "O número $inteiro é narcisista. O cálculo é: ";
    foreach ($retalho as $digito) {
        echo "$digito^$separado + ";
    }
    echo "= $soma";
    return true;
} else {
    echo "O número $inteiro não é narcisista.";
    return false;
}
?>
