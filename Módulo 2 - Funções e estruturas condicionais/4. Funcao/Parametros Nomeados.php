<?php 
function parametrosNomeados(string $nome, string $sobrenome, int $notificacoes): string 
{
    return "Bem-vindo, $nome $sobrenome! Você tem $notificacoes notificações.";
}

echo parametrosNomeados(nome: "Leonardo", sobrenome: "George", notificacoes: 5);

?>