<?php 
function verificarIdade($idade, $acompanhanteMaior) {
    if ($idade >= 18) {
        return "Entrada permitida. Seja bem-vindo!";
    }  elseif ($idade >= 16 && $acompanhanteMaior >= 18) {
        return "Entrada permitida com acompanhante maior de idade. Seja bem-vindo!";
    } elseif ($idade >=15) {
        return "Entrada não permitida, você é menor de 15 anos.";
    } else {
        return "Entrada não permitida.";
    }
    
}

$idade = 17;
$acompanhanteMaior = 22;
$resultado = verificarIdade(16, 22);
echo "Verificação de entrada na balada: ". $resultado . "<br>";  
echo "Idade: $idade anos<br>";
echo "Acompanhante maior de idade: $acompanhanteMaior anos<br>";

?>