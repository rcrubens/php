<?php

$num = 5;

echo "Tabuada do número \"$num\":" . PHP_EOL;

for ($i=0; $i <= 10; $i++) { 
    $produto = $i * $num; // poderia tbm concatenar a operação na impressão abaixo
    echo "$i X $num = $produto" . PHP_EOL;
}
