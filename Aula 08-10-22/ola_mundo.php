<?php
$meu_Nome = "Ana Caroline";
$lista = ["Ana", 1, 2, 3];
$inteiro = 28;
$float = 1.9;
$booleana = TRUE;
var_dump($lista);
echo gettype ($inteiro) . PHP_EOL; // PHP_EOL end of line - quebra de linha - também poderia usar o "\n"
echo gettype ($float) . "\n"; // Imprime o tipo da variavel
echo gettype($booleana) . "\n";
var_dump($booleana);
echo($booleana) . "\n"; // Imprime o valor da variavel somente, nesse caso de booleno o True ele identifica como 1
var_dump($float); // Imprime o tipo da variavel e o valor dela
var_dump($inteiro);
var_dump($meu_Nome);
echo($meu_Nome[9]) . "\n"; // Fatiamento de string
echo($lista[0]);
