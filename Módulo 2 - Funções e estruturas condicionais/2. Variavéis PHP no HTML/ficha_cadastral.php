<?php
    $idade_aposentadoria_homem = 65;
    $idade_aposentadoria_mulher = 62;
    
    define('IDADE_APOSENTADORIA_HOMEM', 65);
    define('IDADE_APOSENTADORIA_MULHER', 62);
 
    $nome = "Leonardo George";  
    $idade = 28;
    $sexo = "M";
    $salario_mensal = 2210.30;
    $salario_anual = $salario_mensal * 12;  
    $status_emprego = false;
    $habilidades = array("PHP", "JavaScript", "HTML", "CSS");
    
    $situacao_emprego = $status_emprego === true ? "Empregado" : "Desempregado";
  
    // Verificando se o usuário é masculino ou feminino... 
    // Calculando os anos restantes para aposentadoria...
    // Definindo a variável $anos_necessarios_para_aposentadoria.    
    $anos_necessarios_para_aposentadoria = 0;
    if ($sexo == "M") {
        $anos_necessarios_para_aposentadoria = IDADE_APOSENTADORIA_HOMEM - $idade;
    } else if ($sexo == "F") {
        $anos_necessarios_para_aposentadoria = IDADE_APOSENTADORIA_MULHER - $idade;
    } else {
        echo "Sexo inválido";
    }
     
  

?>

<!-- Exibição de informações em HTML. -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?=  $nome ?></strong></p>
            <p>Idade: <strong><?= $idade ?></strong></p>
            <p>Sexo: <strong><?= $sexo ?></strong></p>
            <p>Salário Mensal: <strong><?= $salario_mensal ?></strong></p>
            <p>Salário Anual: <strong><?= $salario_anual ?></strong></p>
            <p>Status de Emprego: <strong><?= $situacao_emprego ?></strong></p>
            <p>Anos para Aposentadoria: <strong><?= $anos_necessarios_para_aposentadoria ?></strong></p>
            <p>Habilidades: <strong><?= implode(",  ", $habilidades) ?></strong></p>
        </div>
    </div>
</body>

</html>