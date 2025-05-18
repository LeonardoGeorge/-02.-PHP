<?php 
function somar($num1, $num2, $num3 = null){
    if ($num3 == null) {
        return "Número 1: $num1, Número 2: $num2";
    } else {
        return "Número 1: $num1 /  Número2: $num2 /  Número 3: $num3";
    };
}
$verNumero = somar(10, 20, 30);
var_dump($verNumero);
?>