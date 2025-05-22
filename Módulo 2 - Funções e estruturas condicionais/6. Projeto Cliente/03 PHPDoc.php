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

    if (!isset($dadosCliente['email']) || empty($dadosCliente['email']) || !filter_var($dadosCliente['email'], FILTER_VALIDATE_EMAIL)) {
        return ['sucesso' => false, 'mensagem' => 'E-mail inválido.'];
    }

    if(!isset($dadosCliente['telefone']) || empty($dadosCliente['telefone']) || !preg_match('/^\(\d{2}\) \d{4,5}-\d{4}$/', $dadosCliente['telefone'])) {
        return ['sucesso' => false, 'mensagem' => 'Telefone inválido.'];
    }

    if (!isset($dadosCliente['cpf']) || empty($dadosCliente['cpf']) || strlen($dadosCliente['cpf']) != 11 || !is_numeric($dadosCliente['cpf'])) {
         return ['sucesso' => false, 'mensagem' => 'CPF inválido.'];
    }
    if (!isset($dadosCliente['endereco']) || empty($dadosCliente['endereco']) || strlen($dadosCliente['endereco']) < 5) {
        return ['sucesso' => false, 'mensagem' => 'Endereço inválido. Deve ter pelo menos 5 caracteres.'];
    }

    // Adicione este fechamento para encapsular as validações




    // Verifica se o cliente já existe
    $query = "SELECT * FROM clientes WHERE email = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("s", $dadosCliente['email']);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        return ['sucesso' => false, 'mensagem' => 'Cliente já cadastrado.'];
    }

    // Cadastra o novo cliente
    $query = "INSERT INTO clientes (nome, email, telefone, cpf, endereco) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("sssss", $dadosCliente['nome'], $dadosCliente['email'], $dadosCliente['telefone'], $dadosCliente['cpf'], $dadosCliente['endereco']);
    
    if ($stmt->execute()) {
        return ['sucesso' => true, 'mensagem' => 'Cliente cadastrado com sucesso.'];
    } else {
        return ['sucesso' => false, 'mensagem' => 'Erro ao cadastrar cliente.'];
    }
}

?>