<?php
$nome = "Leonardo George";  
$idade = 25;
$sexo = "M";
$salario_mensal = 2210.30;
$salario_anual = $salario_mensal * 12;  
$status_emprego = true; // true para empregado, false para desempregado 
$anos_aposentadoria = 40; // anos restantes para aposentadoria
$habilidades = array("PHP", "JavaScript", "HTML", "CSS"); // habilidades do usuário
?>


<!-- HTML para exibir as informações -->
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
            <p>Nome: <?php echo $nome; ?></p>
            <p>Idade: <strong>25</strong></p>
            <p>Sexo: <strong><?php echo $sexo ?></strong></p>
            <p>Salário Mensal: <strong>2.210,30</strong></p>
            <p>Salário Anual: <?php echo $salario_anual ?> </p>
            <p>Status de Emprego: <strong> <?php echo $status_emprego ?></strong></p>
            <p>Anos para Aposentadoria: <strong><?php echo $anos_aposentadoria ?> </strong></p>
            <p>Habilidades: <strong><?php echo $habilidades ?></strong></p>
        </div>
    </div>
</body>

</html>