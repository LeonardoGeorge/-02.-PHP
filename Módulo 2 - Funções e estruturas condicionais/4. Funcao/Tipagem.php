<?php 
function calcularIMC(float $peso, float $altura): string {
    // Calculo do IMC
        return $imc = $peso / ($altura * $altura);
}

function classificarIMC(float $imc): string {
    if ($imc < 19) {
        return "Abaixo do peso";
    } elseif ($imc >= 19 && $imc < 25) {
        return "Peso normal";
    }elseif ($imc >= 25 && $imc < 30) {
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 35) {
        return "Obesidade grau 1";
    } elseif ($imc >= 35 && $imc < 40) {
        return "Obesidade grau 2";
    } else {
        return "Obesidade grau 3";
    }
}

$resultado = calcularIMC(70, 1.75);
$imcClassificacao = classificarIMC($resultado);
echo "O IMC é: " . number_format($resultado, 2, ',', ',');
echo "<br>";
echo "Classificação: " . $imcClassificacao;


?>