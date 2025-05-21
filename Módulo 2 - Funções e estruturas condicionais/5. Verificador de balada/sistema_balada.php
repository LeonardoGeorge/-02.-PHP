<?php
/**
 * Sistema de Verificação de Entrada para Balada
 */

// Função para verificar a entrada de uma única pessoa
function verificarEntrada($nome, $idade, $acompanhanteMaior)
{
    // Validações de entrada
    if ($idade < 0) {
        return "Erro: Idade inválida para $nome.";
    }

    // Regras de entrada
    if ($idade >= 18) {
        return "Entrada permitida para $nome. Bem-vindo à balada!";
    } elseif ($idade <= 16 && $acompanhanteMaior) {
        return "Entrada permitida para $nome com acompanhante maior de idade.";
    } else {
        return "Entrada negada para $nome.";
    }
}

// Função principal que simula o fluxo do sistema
function sistemaDeVerificacao()
{
    echo "Bem-vindo ao sistema de verificação da balada!\n\n";

    $continuar = true;
    $resultados = [];

    while ($continuar) {
        // Entrada de dados
        echo "Digite o nome da pessoa: ";
        $nome = trim(fgets(STDIN));

        echo "Digite a idade de $nome: ";
        $idade = intval(trim(fgets(STDIN)));

        echo "Acompanhante maior de idade? (sim/não): ";
        $temAcompanhante = strtolower(trim(fgets(STDIN)));
        $acompanhanteMaior = $temAcompanhante === "sim";

        // Verificação de entrada
        $resultado = verificarEntrada($nome, $idade, $acompanhanteMaior);
        $resultados[] = $resultado;
        echo $resultado . "\n";

        // Pergunta se o sistema deve continuar
        echo "Deseja verificar outra pessoa? (sim/não): ";
        $resposta = strtolower(trim(fgets(STDIN)));
        $continuar = $resposta === "sim";
    }

    // Relatório final
    echo "\nRelatório de verificações:\n";
    foreach ($resultados as $resultado) {
        echo "- $resultado\n";
    }
    echo "Obrigado por usar o sistema de verificação da balada!\n";
}

// Inicia o sistema
sistemaDeVerificacao();
?>
