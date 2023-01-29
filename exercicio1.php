<?php

echo "\nEscreva um programa para ler um valor (do teclado) e escrever (na tela) o seu sucessor multiplicado por 10.\n \n";

echo "Exercicio 1\n\n";

echo "Digite o valor \n\n";

$valor = fgets(STDIN);

$resultado = ($valor + 1) * 10;
$acrescimo = $valor + 1;
echo "\nVocê Digitou o numero $valor \nO sucessor dele (ou seja o proximo numero) será $acrescimo multiplicado por 10 (ou seja $acrescimo x 10).\n\nO calculo do resultado é $resultado ";
?>