<?php

$peso = 87;
$altura = 1.85;
$imc = $peso / $altura ** 2;

if ($imc >= 30) {
    echo "IMC = $imc que significa obesidade";
}
elseif ($imc >= 25) {
    echo "IMC = $imc que significa sobrepeso";
}
elseif ($imc >= 18.5) {
    echo "IMC = $imc que significa normal";
}
else {
    echo "IMC = $imc que significa magreza";
}