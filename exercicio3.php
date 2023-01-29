<?
echo "\nEscreva um programa para ler uma temperatura em graus Fahrenheit, calcular e escrever o valor correspondente em graus Celsius baseado na fórmula C = (F - 32) / 1.8

Observação: Para testar se a sua resposta está correta saiba que 100ºC = 212F\n\n";

echo "Exercicio 3\n\n";
echo "Digite a temperatura em Fahrenheit\n\n";
$fahrenheit = fgets(STDIN);
$resultado = ($fahrenheit - 32) / 1.8;
echo "\nO resultado em Celsius é $resultado ";
?>