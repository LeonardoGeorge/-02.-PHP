<?php
    $senha_correta = "senha123";
    $senha_digitada = $_POST['senha'];
    
    function verificar_senha($senha_correta, $senha_digitada) {
        if ($senha_correta == $senha_digitada){
            return "Acesso permitido!";
        } else {
            return "Acesso negado!";
        }
    }

    $resultado = verificar_senha($senha_correta, $senha_digitada);
    echo $resultado;
?>