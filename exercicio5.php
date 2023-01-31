<?
echo "\nNo Brasil, o voto e o alistamento eleitoral são obrigatórios para maiores de 18 anos e são facultativos para analfabetos, maiores de 70 anos e pessoas com idade entre 16 e 18 anos. Essas regras estão previstas no artigo 14, §1º e incisos, da Constituição Federal. (Lembre-se, menores de 16 anos não podem votar)

a) Faça um sistema que solicite a idade da pessoa e se ela é analfabeta ou não. Digitando A para Analfabeto e B para Alfabetizado.

Faça a verificação usando operador ternário (será necessário mais de um teste, para isso basta add em outras condições falsas ou verdadeiras) e operadores lógicos - Com condicionais, nota será de 50%.

b) Informe se o voto é obrigatório ou não.

Para um sistema mais completo, para idades abaixo de 16 anos, informe que não pode votar.\n\n";

//echo "Digite sua idade\n\n";
//$idade = fgets(STDIN);
$idade = (int) readline("Informe sua idade: ");
//echo "\nDigite B se for alfabetizado ou A se for analfabeto\n\n";
//$letra = fgets(STDIN);
$alfabetizado = readline("\n\nInforme se é alfabetizado (B) ou analfabeto (A): ");

$idade_minima = 16;

$menor = $idade < $idade_minima  ? "\nVocê Não pode votar" : (
$idade >= $idade_minima && $idade < 18 || $alfabetizado == "A" || $idade > 70 ? "\nseu voto é facultativo" : "\nSeu voto é obrigatorio");
echo $menor;

?>