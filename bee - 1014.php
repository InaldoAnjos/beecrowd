<?php

  $X = fgets(STDIN);
  $Y = fgets(STDIN);

  $media = $X / $Y;

  printf(number_format($media, 3, '.', '') . " km/l\n");  

?>