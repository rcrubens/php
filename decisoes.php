<?php

$idade = 20;
$senha = 'Rubens';

echo 'Você só pode entrar se for maior de idade e conhecer a senha.' . PHP_EOL;

if ($idade >= 18 && $senha == 'Rubens') {
    echo "Você tem $idade anos e acertou a senha" . PHP_EOL; // end of line
    echo 'Pode entrar';
}
elseif ($idade < 18) {
    echo "Você é menor de idade, vá pra casa!";
}
else {
    echo 'Caramba, você não sabe a senha';
}

// opção de código com operador ternário:
echo PHP_EOL;
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;