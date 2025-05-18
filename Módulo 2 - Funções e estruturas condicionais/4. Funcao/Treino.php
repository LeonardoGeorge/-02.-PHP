<?php 
function calcularMedia(float $nota1, float $nota2, int $casasDecimais = 2): string {
    
    // Calculo da media
    $media = ($nota1 + $nota2) / 2;

    // Formata o número com as casas decimais 
    $mediaFormatada = number_format($media, $casasDecimais, ',', '.');

    // Retorna uma string com o resultado
    return "A média entre $nota1 e $nota2 é: $mediaFormatada";
}

// Exemplo de uso da função
$resultado = calcularMedia(7.5, 8.0);
echo $resultado;






?>