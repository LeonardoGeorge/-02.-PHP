<?php
// Estrutura switch
function diaDasemana($dia) {
    switch ($dia) {
        case 1:
            return "Domingo";
            break;
        case 2:
            return "Segunda-feira";
            break;
        case 3:
            return "Terça-feira";
            break;
        case 4:
            return "Quarta-feira";
            break;
        case 5:
            return "Quinta-feira";
            break;
        case 6:
            return "Sexta-feira";
            break;
        case 7:
            return "Sábado";
            break;
        default:
            return "Dia inválido!";
    }
}


?>