<?
echo "\nEscreva um programa para ler as dimensões de um terreno (frente e fundo), calcular e escrever a área do mesmo. Sabe-se que o cálculo da área é largura * profundidade.\n\n";

echo "Exercicio 2\n\n";

echo "\nDigite a metragem do fundo \n\n";

$largura = fgets(STDIN);

echo "\nDigite a metragem do frente \n\n";

$frente = fgets(STDIN);

$resultado = ($largura * $frente);
echo "\nO terreno é de $resultado m2";
?>