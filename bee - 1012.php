<?php

    $areas  = explode(" ", fgets(STDIN));

    $triang = ($areas[0] * $areas[2]) / 2;               //b*h/2
    $circle = 3.14159 * pow($areas[2], 2);               //Pi*r²
    $trap   = (($areas[0] + $areas[1]) * $areas[2]) / 2; //((B + b)*h)/2 
    $quadr  = pow($areas[1], 2);                         //B²
    $retang = $areas[0] * $areas[1];                     //A*B

    printf('TRIANGULO: ' . number_format($triang, 3, '.', '')  . "\n");
    printf('CIRCULO: '   . number_format($circle, 3, '.', '') . "\n");
    printf('TRAPEZIO: '  . number_format($trap, 3, '.', '')    . "\n");
    printf('QUADRADO: '  . number_format($quadr, 3, '.', '')   . "\n");
    printf('RETANGULO: ' . number_format($retang, 3, '.', '')  . "\n");

?>