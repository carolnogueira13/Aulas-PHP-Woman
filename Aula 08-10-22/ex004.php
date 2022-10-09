<?php
$a = 4 ** 2;
$b = $a / 8;
$c = $a / $b;
$d = "16";

$condicao1 = $a > $c;
$condicao2 = $b < $c;
$condicao3 = $a == $c;
$condicao4 = $a == $d;
$condicao5 = $a === $d; // Verifica se são iguais e do mesmo tipo 

echo("Condição 1: $a é maior que $c? ");
var_dump($condicao1);

echo("Condição 2: $b é menor que $c? ");
var_dump($condicao2);

echo("Condição 3: $a é igual a $c? ");
var_dump($condicao3);

echo("Condição 4: $a é igual a $d? ");
var_dump($condicao4);


echo("Condição 5: $a é idêntico a $d? ");
var_dump($condicao5);


echo("A condição 1 e a condição 2 são verdadeiras? ");
var_dump($condicao1 and $condicao2 == TRUE); 
