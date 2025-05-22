<?php

// Calculo do salario anual
function calcularSalarioAnual($salario_mensal) {
     $valor = $salario_mensal * 12;
    return formatarMoeda($valor);
     // Formata o valor para moeda
}


/** 
 * Calcula quantidade de dias entre duas datas
 * 
 * @param int Idade atual da pessoa
 * @param string $sexo "Masculino" ou "Feminino"
 * @return int|string Anos restantes ou mensagem de erro
 */
function calcularAnosParaAposentadoria(int $idade, string $sexo) {
    $aposentadoria_homens = 65;
    $aposentadoria_mulheres = 60;

    if ($idade <= 0) {
        return "Idade inválida.";
    }

    if (!in_array($sexo, ['Masculino', 'Feminino'])) {
        return "Sexo inválido.";
    }

    // Calcula os anos restantes para aposentadoria
    $idade_aposentadoria = ($sexo === "masculino") ? $aposentadoria_homens : $aposentadoria_mulheres;   
    $anos_restantes = $idade_aposentadoria - $idade;

    echo $anos_restantes;

}


// Transformar um numero em valor monetario
function formatarMoeda($salario_mensal) {
    return $formatado =  "R$ ".number_format($salario_mensal, 2, ',', '.');
    echo $formatado;
}


?>