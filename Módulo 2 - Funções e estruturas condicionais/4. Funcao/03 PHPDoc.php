<?php
// função - Cadastrar novo cliente
function cadastrarCliente($dadosCliente, $conexao) {
    /** 
    *$dadosCliente: Array associativo com os dados do cliente
        - nome (string): Nome completo do cliente
        - email (string): E-mail do cliente
        - telefone  (string): Telefone do cliente  
        - CPF   (string): CPF do cliente
        - endereco  (string): Endereço do cliente
    *$conexao: Objeto de conexão com o banco de dados(Mysqli)
    *
    * Retorna: Array com 'sucesso' (bool) e 'mensagem' (string)
    */

    // Dados de entrada
    if (!isset($dadosCliente['nome']) || empty($dadosCliente['nome']) || strlen($dadosCliente['nome']) < 3) {
        return ['sucesso' => false, 'mensagem' => 'Nome inválido. Deve ter pelo menos 3 caracteres.'];
    }
    if (!isset())
}

?>