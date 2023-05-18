<?php
    $produtos[0] = 'feijão';
    $produtos[1] = 'arroz';
    $produtos[2] = 'frango';

    for ($indice=0; $indice < 3; $indice++) { 
        echo "Produto índice $indice: $produtos[$indice].\n";
    }

    $a = 1;

    while ($a <= 10) {
        echo "#$a" . PHP_EOL;
        $a += 1;
    }

?>  