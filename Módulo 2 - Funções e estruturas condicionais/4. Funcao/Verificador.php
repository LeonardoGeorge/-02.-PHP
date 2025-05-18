<?php
function verificarIdade($anoDeNascimento) {
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoDeNascimento;
    if ($idade < 17) {
        return "Menor de idade";
    } else {
        return "Maior de idade";
    }
}
function portaDaBalada($anoDeNascimento, $acompanhado = false) {
    $idade = verificarIdade($anoDeNascimento);
    if ($idade == "Menor de idade") {
        return "Você não pode entrar na balada.";
    } elseif ($idade == "Maior de idade" && $acompanhado) {
        return "Você pode entrar na balada acompanhado.";
    } else {
        return "Você pode entrar na balada sozinho.";
    }
}

$anoDeNascimento = 2005;
$acompanhado = true;    
$verificacao = portaDaBalada($anoDeNascimento, $acompanhado);
echo $verificacao;


?>