<?php

    $employee = fgets(STDIN);
    $workedHours = fgets(STDIN);
    $hourlyWage = fgets(STDIN);

    printf("NUMBER = $employee");
    printf("SALARY = U$ " . number_format($workedHours * $hourlyWage, 2, '.', '') . "\n");

?>