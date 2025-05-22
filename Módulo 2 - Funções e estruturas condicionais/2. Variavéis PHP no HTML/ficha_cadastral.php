<?php
$nome = "Leonardo George";
$idade = 28;
$sexo = "Masculino";
$salario_mensal = 2210.30;
$status_emprego = true;
$habilidades = array("PHP", "JavaScript", "HTML", "CSS");

$situacao_emprego = $status_emprego === true ? "Empregado" : "Desempregado";

require 'Resolvendo_problemas.php';
?>

<!-- Exibição de informações em HTML. -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Cadastral</title>
    <style>
        /* Estilos Base Modernos */
        body {
            font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            color: #2d3748;
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 480px;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        h1 {
            color: #4a5568;
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #4299e1;
            border-radius: 3px;
        }

        p {
            color: #4a5568;
            font-size: 1em;
            margin: 12px 0;
            padding: 10px 15px;
            background: rgba(237, 242, 247, 0.5);
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
        }

        strong {
            color: #2d3748;
            font-weight: 600;
        }

        /* Efeito de Destaque para Habilidades */
        p:last-of-type strong {
            display: inline-block;
            background: #4299e1;
            color: white;
            padding: 4px 10px;
            border-radius: 16px;
            font-size: 0.9em;
            margin: 2px;
        }

        /* Responsividade */
        @media (max-width: 480px) {
            .card {
                padding: 20px;
            }

            p {
                flex-direction: column;
                gap: 5px;
                padding: 8px 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $nome ?></strong></p>
            <p>Idade: <strong><?= $idade ?></strong></p>
            <p>Sexo: <strong><?= $sexo ?></strong></p>
            <p>Salário Mensal: <strong><?= formatarMoeda($salario_mensal) ?></strong></p>
            <p>Salário Anual: <strong><?= calcularSalarioAnual($salario_mensal) ?></strong></p>
            <p>Status de Emprego: <strong><?= $situacao_emprego ?></strong></p>
            <p>Anos para Aposentadoria: <strong><?= calcularAnosParaAposentadoria($idade, $sexo) ?></strong></p>
            <p>Habilidades: <strong><?= implode("</strong><strong>", explode(",  ", implode(",  ", $habilidades))) ?></strong></p>
        </div>
    </div>
</body>

</html>