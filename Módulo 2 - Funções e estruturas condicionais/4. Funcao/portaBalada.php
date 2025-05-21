<?php 
function verificarIdade($idade, $acompanhanteMaior) {
    if ($idade >= 18) {
        return "Entrada permitida";
    } elseif ($idade >= 16 && $acompanhanteMaior >= 18) {
        return "Entrada permitida com acompanhante maior de idade";
    } elseif ($idade < 16) {
        return "Entrada não permitida";
    } else {
        return "Entrada não permitida";
    }
}

echo "Verificação de entrada na balada: <br>";
echo "01 " . verificarIdade(17, 18);
echo "<br>";
echo "02 " . verificarIdade(20, 16);
echo "<br>";    
echo "03 " . verificarIdade(15, 18);
echo "<br>";
echo "04 " . verificarIdade(16, 17);
echo "<br>";
echo "05 " .  verificarIdade(18, 16);
?>