<?php

    $raio = fgets(STDIN);
    $pi = 3.14159;

    $volume = (4/3) * $pi * pow($raio, 3);
    
    printf("VOLUME = " . number_format($volume, 3, '.', '') . "\n");

?>