<?php

    $name = fgets(STDIN);
    $salary = fgets(STDIN);
    $salesAmount = fgets(STDIN);

    printf("TOTAL = R$ " . number_format($salary + $salesAmount * 0.15, 2, '.', '') . "\n");

?>