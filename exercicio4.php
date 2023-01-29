<?
echo "\nUm colaborador, recebe $35,00 por hora de trabalho até o limite de 40 horas semanais. Ao final do mês, ele recebe mais 15,00 por hora como hora extra. (considere que o mês possua 4 semanas exatas). Faça um sistema que calcule o valor normal recebido por este colaborador no mês, o valor de suas horas extras e o valor bruto a receber. Como teste, um funcionário com 15 horas extras, receberia 6350,00\n\n";

echo "Exercicio 4\n\n";
echo "Digite quantidade de horas extras\n\n";
$horas_extras = fgets(STDIN) * 50;
$valor_normal = (40 * 4) * 35;

$valor_bruto = ($valor_normal + $horas_extras);
  
echo "\nO valor do salario é $valor_normal,00";
echo "\nO valor da hora extra é $horas_extras,00 ";
echo "\nO valor do salario bruto é $$valor_bruto,00 ";
?>